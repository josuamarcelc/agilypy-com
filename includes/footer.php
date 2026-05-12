<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a class="brand" href="/" aria-label="AgilePy home">
          <img src="/assets/images/agilepy-logo.webp" alt="AgilePy" width="160" height="50" />
        </a>
        <p class="tagline">A minimalist Python micro-framework for fast, modular frontend views — built on Flask.</p>
      </div>
      <div>
        <h5>Project</h5>
        <ul>
          <li><a href="/docs/">Documentation</a></li>
          <li><a href="/dev/">Live Demo</a></li>
          <li><a href="https://github.com/josuamarcelc/AgilePy" target="_blank" rel="noopener">GitHub</a></li>
          <li><a href="https://github.com/josuamarcelc/AgilePy/releases" target="_blank" rel="noopener">Releases</a></li>
        </ul>
      </div>
      <div>
        <h5>Community</h5>
        <ul>
          <li><a href="/contribute/">Contribute</a></li>
          <li><a href="/donate/">Donate</a></li>
          <li><a href="https://github.com/josuamarcelc/AgilePy/issues" target="_blank" rel="noopener">Report a bug</a></li>
          <li><a href="https://github.com/josuamarcelc/AgilePy/discussions" target="_blank" rel="noopener">Discussions</a></li>
        </ul>
      </div>
      <div>
        <h5>Resources</h5>
        <ul>
          <li><a href="https://flask.palletsprojects.com/" target="_blank" rel="noopener">Flask</a></li>
          <li><a href="https://jinja.palletsprojects.com/" target="_blank" rel="noopener">Jinja2</a></li>
          <li><a href="https://www.python.org/" target="_blank" rel="noopener">Python</a></li>
          <li><a href="mailto:support@agilepy.com">support@agilepy.com</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2024 – <?= date('Y') ?> AgilePy. Released under the MIT License.</span>
      <span>Made with care by the AgilePy Team.</span>
    </div>
  </div>
</footer>

<script>
(function () {
  const openBtn  = document.getElementById('open-toggle');
  const closeBtn = document.getElementById('close-toggle');
  const drawer   = document.getElementById('mobile-drawer');
  const backdrop = document.getElementById('backdrop');
  if (!openBtn || !drawer || !backdrop) return;

  function open()  { drawer.classList.add('open');    backdrop.classList.add('show');    openBtn.setAttribute('aria-expanded','true');  drawer.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; }
  function close() { drawer.classList.remove('open'); backdrop.classList.remove('show'); openBtn.setAttribute('aria-expanded','false'); drawer.setAttribute('aria-hidden','true');  document.body.style.overflow=''; }
  function toggle(){ drawer.classList.contains('open') ? close() : open(); }

  openBtn.addEventListener('click', toggle);
  if (closeBtn) closeBtn.addEventListener('click', toggle);
  backdrop.addEventListener('click', close);
  window.addEventListener('keyup',  e => { if (e.key === 'Escape') close(); });
  window.addEventListener('resize', () => { if (window.innerWidth > 720) close(); });

  document.querySelectorAll('[data-copy]').forEach(btn => {
    btn.addEventListener('click', () => {
      const target = document.querySelector(btn.getAttribute('data-copy'));
      if (!target) return;
      target.select();
      try { navigator.clipboard.writeText(target.value); } catch (e) { document.execCommand('copy'); }
      const orig = btn.textContent;
      btn.textContent = 'Copied';
      setTimeout(() => btn.textContent = orig, 1200);
    });
  });
})();
</script>
<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => navigator.serviceWorker.register('/agile-sw.js'));
}
</script>
</body>
</html>
