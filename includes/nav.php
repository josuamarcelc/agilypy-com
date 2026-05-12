<?php $current_page = $current_page ?? ''; ?>
<nav class="navbar" role="navigation" aria-label="Main">
  <div class="nav-inner">
    <a class="brand" href="/" aria-label="AgilePy home">
      <img src="/assets/images/agilepy-logo.webp" alt="AgilePy" width="140" height="44" />
    </a>
    <button id="open-toggle" class="hamburger" aria-label="Open menu" aria-controls="mobile-drawer" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <div class="nav-links">
      <a href="/docs/"       class="<?= $current_page === 'docs' ? 'active' : '' ?>">Docs</a>
      <a href="/contribute/" class="<?= $current_page === 'contribute' ? 'active' : '' ?>">Contribute</a>
      <a href="/donate/"     class="<?= $current_page === 'donate' ? 'active' : '' ?>">Donate</a>
      <a href="/dev/"        class="<?= $current_page === 'dev' ? 'active' : '' ?>">Demo</a>
    </div>
    <div class="nav-cta">
      <a href="https://github.com/josuamarcelc/AgilePy" class="btn btn-ghost btn-sm" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56v-2c-3.2.7-3.87-1.36-3.87-1.36-.52-1.32-1.27-1.67-1.27-1.67-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.19 1.76 1.19 1.02 1.76 2.69 1.25 3.35.96.1-.75.4-1.25.73-1.54-2.55-.29-5.24-1.28-5.24-5.69 0-1.26.45-2.28 1.19-3.08-.12-.29-.51-1.47.11-3.06 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 5.8 0c2.21-1.49 3.18-1.18 3.18-1.18.62 1.59.23 2.77.11 3.06.74.8 1.18 1.82 1.18 3.08 0 4.42-2.69 5.39-5.26 5.68.41.36.78 1.06.78 2.15v3.19c0 .31.21.68.8.56C20.21 21.39 23.5 17.07 23.5 12 23.5 5.65 18.35.5 12 .5z"/></svg>
        GitHub
      </a>
      <a href="/dev/" class="btn btn-primary btn-sm">Try Demo</a>
    </div>
  </div>
</nav>

<div class="backdrop" id="backdrop"></div>
<aside class="drawer" id="mobile-drawer" aria-hidden="true">
  <div class="drawer-header">
    <strong>Menu</strong>
    <button id="close-toggle" class="hamburger" aria-label="Close menu" aria-expanded="true">
      <span></span><span></span><span></span>
    </button>
  </div>
  <div class="drawer-items">
    <a href="/docs/">Docs</a>
    <a href="/contribute/">Contribute</a>
    <a href="/donate/">Donate</a>
    <a href="/dev/">Demo</a>
  </div>
  <div class="drawer-cta">
    <a href="https://github.com/josuamarcelc/AgilePy" class="btn btn-ghost" target="_blank" rel="noopener">View on GitHub</a>
    <a href="/dev/" class="btn btn-primary">Try Demo</a>
  </div>
</aside>
