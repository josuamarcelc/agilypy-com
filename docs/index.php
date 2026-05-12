<?php
$page_title       = 'Documentation — AgilePy';
$page_description = 'Documentation for AgilePy: installation, routing, templates, modules, deployment, and reference.';
$page_url         = 'https://agilepy.com/docs/';
$page_keywords    = 'AgilePy docs, AgilePy documentation, Python framework, Flask micro framework';
$current_page     = 'docs';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<script type="application/ld+json">
{
  "@context":"https://schema.org","@type":"TechArticle","name":"AgilePy Documentation",
  "url":"https://agilepy.com/docs/",
  "description":"Official documentation for the AgilePy Python micro-framework."
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<section class="hero-page">
  <div class="container">
    <span class="eyebrow">Documentation</span>
    <h1>Build with AgilePy</h1>
    <p class="lead">Installation, routing, templates, and deployment — everything you need to ship a Python frontend.</p>
  </div>
</section>

<div class="container">
  <div class="docs-layout">
    <aside class="docs-sidebar">
      <h5>Getting Started</h5>
      <a href="#introduction" class="active">Introduction</a>
      <a href="#installation">Installation</a>
      <a href="#hello-world">Hello, World</a>

      <h5>Core Concepts</h5>
      <a href="#routing">Routing</a>
      <a href="#templates">Templates</a>
      <a href="#modules">Modules</a>
      <a href="#static-files">Static files</a>

      <h5>Deployment</h5>
      <a href="#gunicorn">Gunicorn</a>
      <a href="#nginx">Nginx</a>
      <a href="#systemd">Systemd service</a>

      <h5>Reference</h5>
      <a href="#cli">CLI commands</a>
      <a href="#faq">FAQ</a>
    </aside>

    <article class="docs-content">
      <h2 id="introduction">Introduction</h2>
      <p>AgilePy is a Python micro-framework focused on server-rendered frontend views. It is built on top of <a href="https://flask.palletsprojects.com/" target="_blank" rel="noopener">Flask</a> and uses <a href="https://jinja.palletsprojects.com/" target="_blank" rel="noopener">Jinja2</a> for templating. The goal is to give you Flask's flexibility with a tighter, more opinionated project layout.</p>
      <div class="callout">
        <strong>Looking for a live demo?</strong> Visit <a href="/dev/">agilepy.com/dev</a> to see AgilePy running in production.
      </div>

      <h2 id="installation">Installation</h2>
      <p>AgilePy requires Python 3.10 or newer. Install via <code>pip</code>:</p>
      <pre><code>pip install agilepy</code></pre>
      <p>Or clone the reference project from GitHub:</p>
      <pre><code>git clone https://github.com/josuamarcelc/AgilePy
cd AgilePy
python -m venv venv
source venv/bin/activate
pip install -r requirements.txt</code></pre>

      <h3 id="hello-world">Hello, World</h3>
      <p>Create <code>app.py</code>:</p>
      <pre><code>from agilepy import AgilePy

app = AgilePy(__name__)

@app.route("/")
def home():
    return app.render("home.html", title="AgilePy")

if __name__ == "__main__":
    app.run(debug=True)</code></pre>
      <p>Run it:</p>
      <pre><code>python app.py</code></pre>
      <p>Open <code>http://localhost:5000</code> and you should see your first AgilePy page.</p>

      <h2 id="routing">Routing</h2>
      <p>Routes are registered with the <code>@app.route()</code> decorator, identical to Flask. Support for path parameters and HTTP methods is included out of the box:</p>
      <pre><code>@app.route("/user/&lt;int:user_id&gt;")
def show_user(user_id):
    return app.render("user.html", user_id=user_id)

@app.route("/submit", methods=["POST"])
def submit():
    return {"ok": True}</code></pre>

      <h2 id="templates">Templates</h2>
      <p>Place templates in the <code>templates/</code> directory. Render with <code>app.render()</code>:</p>
      <pre><code>@app.route("/about")
def about():
    return app.render("about.html", year=2026)</code></pre>
      <p>Inside <code>templates/about.html</code> you have full Jinja2 syntax: inheritance, macros, filters, and includes.</p>

      <h2 id="modules">Modules</h2>
      <p>AgilePy encourages organising routes into <strong>modules</strong> instead of class-based controllers. A module is just a Python file exposing functions registered through a tiny <code>register_routes</code> helper:</p>
      <pre><code># views/home.py
def index():
    return app.render("home.html")

# routes.py
from views import home

def register_routes(app):
    app.add_url_rule("/", "home", home.index)</code></pre>

      <h2 id="static-files">Static files</h2>
      <p>Drop your CSS, JS and images into the <code>static/</code> directory. They are served from <code>/static/&lt;file&gt;</code> automatically.</p>

      <h2 id="gunicorn">Deploy with Gunicorn</h2>
      <p>For production, run AgilePy under Gunicorn:</p>
      <pre><code>gunicorn --workers 2 --threads 4 --bind 127.0.0.1:5000 app:application</code></pre>

      <h3 id="nginx">Nginx reverse proxy</h3>
      <p>A minimal Nginx block proxying to the Gunicorn upstream:</p>
      <pre><code>location / {
    proxy_pass http://127.0.0.1:5000;
    proxy_set_header Host              $host;
    proxy_set_header X-Real-IP         $remote_addr;
    proxy_set_header X-Forwarded-For   $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
}</code></pre>

      <h3 id="systemd">Systemd service</h3>
      <p>Keep AgilePy running across reboots with a systemd unit:</p>
      <pre><code>[Unit]
Description=AgilePy
After=network.target

[Service]
User=www-data
WorkingDirectory=/var/www/myapp
ExecStart=/var/www/myapp/venv/bin/gunicorn \
  --workers 2 --threads 4 --bind 127.0.0.1:5000 app:application
Restart=always
RestartSec=2

[Install]
WantedBy=multi-user.target</code></pre>
      <p>Enable and start:</p>
      <pre><code>sudo systemctl daemon-reload
sudo systemctl enable --now agilepy</code></pre>

      <h2 id="cli">CLI commands</h2>
      <p>Common scripts you'll run during development:</p>
      <ul>
        <li><code>python app.py</code> — start the dev server with autoreload</li>
        <li><code>gunicorn app:application</code> — start a production server</li>
        <li><code>pip install -r requirements.txt</code> — install dependencies</li>
        <li><code>python -m pytest</code> — run the test suite</li>
      </ul>

      <h2 id="faq">FAQ</h2>
      <h3>Is AgilePy a replacement for Flask?</h3>
      <p>No. AgilePy is a thin layer over Flask that adds opinionated layout and conventions for frontend-rendered apps.</p>
      <h3>Can I use it for APIs?</h3>
      <p>Yes, but FastAPI is a better fit if your project is API-only. AgilePy shines for server-rendered HTML.</p>
      <h3>How do I report a bug?</h3>
      <p>Open an issue on <a href="https://github.com/josuamarcelc/AgilePy/issues" target="_blank" rel="noopener">GitHub</a> with steps to reproduce.</p>

      <div class="callout" style="margin-top:32px">
        <strong>Need more?</strong> The docs are a living project. <a href="/contribute/">Contribute a page</a> or open an issue with a question and we'll add it.
      </div>
    </article>
  </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script>
(function () {
  const links = document.querySelectorAll('.docs-sidebar a');
  const sections = Array.from(links).map(a => document.querySelector(a.getAttribute('href'))).filter(Boolean);
  function onScroll() {
    const y = window.scrollY + 120;
    let activeIdx = 0;
    sections.forEach((s, i) => { if (s.offsetTop <= y) activeIdx = i; });
    links.forEach((a, i) => a.classList.toggle('active', i === activeIdx));
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
</script>
