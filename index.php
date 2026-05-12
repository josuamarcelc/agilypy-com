<?php
$page_title       = 'AgilePy — Minimalist Frontend Python Micro-Framework';
$page_description = 'AgilePy is a fast, minimal, and modular Python framework for building clean frontend views with Flask and Jinja2.';
$page_url         = 'https://agilepy.com/';
$current_page     = 'home';
include __DIR__ . '/includes/head.php';
?>

<script type="application/ld+json">
{
  "@context":"https://schema.org","@type":"Organization","name":"AgilePy","url":"https://agilepy.com/",
  "logo":"https://agilepy.com/assets/images/agilepy-logo.webp",
  "sameAs":["https://github.com/josuamarcelc/AgilePy"],
  "contactPoint":[{"@type":"ContactPoint","contactType":"support","availableLanguage":["en","id"],"email":"support@agilepy.com"}]
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org","@type":"SoftwareApplication","name":"AgilePy",
  "operatingSystem":"Cross-platform","applicationCategory":"DeveloperApplication","softwareVersion":"1.0",
  "description":"AgilePy is a fast, minimal, and modular Python micro-framework for building clean frontend views using Flask.",
  "programmingLanguage":"Python","license":"https://opensource.org/licenses/MIT",
  "url":"https://agilepy.com/","downloadUrl":"https://github.com/josuamarcelc/AgilePy",
  "offers":{"@type":"Offer","price":"0","priceCurrency":"USD","category":"Open Source"},
  "image":"https://agilepy.com/assets/images/agilepy-preview.jpg",
  "publisher":{"@type":"Organization","name":"AgilePy"}
}
</script>

<?php include __DIR__ . '/includes/nav.php'; ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-inner">
    <span class="eyebrow">v1.0 · Open Source · MIT</span>
    <h1>The Python micro-framework for <span class="accent">clean frontend views</span></h1>
    <p class="lead">AgilePy is a lightweight, modular framework built on Flask and Jinja2. Designed for developers who want simplicity without sacrificing structure.</p>
    <div class="hero-actions">
      <a href="/docs/" class="btn btn-primary btn-lg">Get Started</a>
      <a href="https://github.com/josuamarcelc/AgilePy" class="btn btn-ghost btn-lg" target="_blank" rel="noopener">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56v-2c-3.2.7-3.87-1.36-3.87-1.36-.52-1.32-1.27-1.67-1.27-1.67-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.19 1.76 1.19 1.02 1.76 2.69 1.25 3.35.96.1-.75.4-1.25.73-1.54-2.55-.29-5.24-1.28-5.24-5.69 0-1.26.45-2.28 1.19-3.08-.12-.29-.51-1.47.11-3.06 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 5.8 0c2.21-1.49 3.18-1.18 3.18-1.18.62 1.59.23 2.77.11 3.06.74.8 1.18 1.82 1.18 3.08 0 4.42-2.69 5.39-5.26 5.68.41.36.78 1.06.78 2.15v3.19c0 .31.21.68.8.56C20.21 21.39 23.5 17.07 23.5 12 23.5 5.65 18.35.5 12 .5z"/></svg>
        Star on GitHub
      </a>
    </div>
    <div class="hero-meta">
      <span><strong>1,234</strong> stars</span>
      <span><strong>567</strong> forks</span>
      <span><strong>MIT</strong> licensed</span>
    </div>

    <!-- Code preview -->
    <div class="code-card">
      <div class="code-head">
        <span class="dot r"></span><span class="dot y"></span><span class="dot g"></span>
        <span class="fname">app.py</span>
      </div>
      <pre class="code-body"><span class="k">from</span> agilepy <span class="k">import</span> AgilePy

app = AgilePy(__name__)

<span class="k">@</span><span class="f">app.route</span>(<span class="s">"/"</span>)
<span class="k">def</span> <span class="f">home</span>():
    <span class="k">return</span> app.render(<span class="s">"home.html"</span>, title=<span class="s">"AgilePy"</span>)

<span class="c"># That's it. Run it.</span>
<span class="k">if</span> __name__ == <span class="s">"__main__"</span>:
    app.run(debug=<span class="k">True</span>)</pre>
    </div>
  </div>
</section>

<!-- WHY -->
<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Why AgilePy</span>
      <h2>Designed for clarity, built for speed</h2>
      <p>Everything you need to ship a Python-rendered frontend, nothing you don't.</p>
    </div>
    <div class="grid grid-3">
      <div class="card">
        <div class="icon">⚡</div>
        <h3>Small &amp; Fast</h3>
        <p>Minimal footprint, instant cold starts. Boot the framework in milliseconds, not seconds.</p>
      </div>
      <div class="card">
        <div class="icon">🧩</div>
        <h3>Modular by design</h3>
        <p>Compose features as plain modules. No controllers, no classes — just functions.</p>
      </div>
      <div class="card">
        <div class="icon">🎨</div>
        <h3>Jinja2 templating</h3>
        <p>Full Jinja2 power for templates, inheritance, macros, and partials out of the box.</p>
      </div>
      <div class="card">
        <div class="icon">🔐</div>
        <h3>Production-ready</h3>
        <p>Deploys cleanly behind Nginx and Gunicorn. CSRF helpers, sane defaults, no surprises.</p>
      </div>
      <div class="card">
        <div class="icon">🌍</div>
        <h3>SEO friendly</h3>
        <p>Server-rendered HTML, clean URLs, predictable status codes. Great for search and AI crawlers.</p>
      </div>
      <div class="card">
        <div class="icon">🛠</div>
        <h3>Developer first</h3>
        <p>Tiny API surface, readable source, helpful errors. Be productive in under five minutes.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section section-alt">
  <div class="container">
    <div class="section-head" style="margin-bottom:24px">
      <h2>Ready to build?</h2>
      <p>Read the docs, run the demo, or jump straight to the source.</p>
    </div>
    <div style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap">
      <a href="/docs/" class="btn btn-primary btn-lg">Read the Docs</a>
      <a href="/dev/" class="btn btn-outline btn-lg">Open Live Demo</a>
      <a href="https://github.com/josuamarcelc/AgilePy" class="btn btn-ghost btn-lg" target="_blank" rel="noopener">View on GitHub</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
