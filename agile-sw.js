// sw.js — daily HTML cache with safe navigation preload handling
const CACHE_PREFIX = 'agile-py-';
const DAY = new Date().toISOString().slice(0,10).replace(/-/g,''); // YYYYMMDD
const CACHE_NAME = CACHE_PREFIX + DAY;

self.addEventListener('install', e => self.skipWaiting());

self.addEventListener('activate', e => {
  e.waitUntil((async () => {
    if ('navigationPreload' in self.registration) {
      try { await self.registration.navigationPreload.enable(); } catch {}
    }
    const keys = await caches.keys();
    await Promise.all(keys
      .filter(k => k.startsWith(CACHE_PREFIX) && k !== CACHE_NAME)
      .map(k => caches.delete(k)));
    await self.clients.claim();
  })());
});

const okToCache = (resp) => !!resp && resp.ok && !resp.redirected &&
  (resp.type === 'basic' || resp.type === 'cors');

const safeClone = (resp) => {
  try { return (!resp || resp.bodyUsed) ? null : resp.clone(); }
  catch { return null; }
};

const keyFor = (req) => new Request(req.url, { mode: 'same-origin', credentials: 'same-origin' });

self.addEventListener('fetch', (event) => {
  const req = event.request;
  if (req.method !== 'GET') return;

  const wantsHTML = req.mode === 'navigate' ||
                    (req.headers.get('accept') || '').includes('text/html');
  if (!wantsHTML) return;

  const preloadPromise = event.preloadResponse?.then(r => r).catch(() => null);

  event.respondWith((async () => {
    const cache = await caches.open(CACHE_NAME);
    const key = keyFor(req);

    // 1) Serve from cache if present (and let preload settle in background)
    const cached = await cache.match(key);
    if (cached) {
      if (preloadPromise) {
        // Ensure the preload promise settles to avoid warnings
        event.waitUntil(preloadPromise.then(() => {}).catch(() => {}));
      }
      return cached;
    }

    // 2) Use navigation preload if available
    const pre = preloadPromise ? await preloadPromise : null;
    if (pre) {
      const clone = safeClone(pre);
      if (clone && okToCache(clone)) await cache.put(key, clone);
      return pre;
    }

    // 3) Network fallback
    try {
      const netRes = await fetch(req, { cache: 'no-store' });
      const clone = safeClone(netRes);
      if (clone && okToCache(clone)) await cache.put(key, clone);
      return netRes;
    } catch {
      // Offline fallback (uncached)
      return new Response(
        '<!doctype html><meta charset="utf-8"><title>Offline</title><h1>Offline</h1><p>This page is not cached yet.</p>',
        { status: 503, headers: { 'Content-Type': 'text/html; charset=UTF-8' } }
      );
    }
  })());
});
