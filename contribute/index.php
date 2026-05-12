<?php
$page_title       = 'Contribute — AgilePy';
$page_description = 'Contribute to AgilePy by suggesting features, reporting bugs, improving documentation, or writing tests.';
$page_url         = 'https://agilepy.com/contribute/';
$page_keywords    = 'Contribute AgilePy, AgilePy GitHub, AgilePy features, AgilePy bugs, AgilePy documentation';
$current_page     = 'contribute';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<script type="application/ld+json">
{
  "@context":"https://schema.org","@type":"WebPage","name":"Contribute to AgilePy",
  "url":"https://agilepy.com/contribute/",
  "isPartOf":{"@type":"WebSite","name":"AgilePy","url":"https://agilepy.com/"},
  "description":"Guide for contributing to AgilePy: forking, branching, testing, and submitting pull requests."
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org","@type":"HowTo","name":"Contribute to AgilePy",
  "description":"Step-by-step instructions for contributing code or docs to AgilePy.",
  "totalTime":"PT10M",
  "tool":[{"@type":"HowToTool","name":"Python 3"},{"@type":"HowToTool","name":"Git"}],
  "step":[
    {"@type":"HowToStep","name":"Fork the repository","text":"Open the AgilePy GitHub repository and click Fork."},
    {"@type":"HowToStep","name":"Clone locally","text":"git clone https://github.com/<you>/AgilePy"},
    {"@type":"HowToStep","name":"Create a branch","text":"git checkout -b feature/my-change"},
    {"@type":"HowToStep","name":"Install & test","text":"Install dependencies and run tests locally."},
    {"@type":"HowToStep","name":"Commit & push","text":"Commit with a clear message, then push your branch."},
    {"@type":"HowToStep","name":"Open a Pull Request","text":"Open a PR following the template."}
  ]
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<section class="hero-page">
  <div class="container">
    <span class="eyebrow">Get Involved</span>
    <h1>Help shape AgilePy</h1>
    <p class="lead">Code, docs, ideas, or feedback — every contribution moves the framework forward.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Ways to contribute</h2>
      <p>You don't need to be a Python wizard. Pick something that matches your strengths.</p>
    </div>
    <div class="grid grid-3">
      <div class="card">
        <div class="icon">🛠</div>
        <h3>Write code</h3>
        <p>Ship features, fix bugs, sharpen the core. Open a PR and we'll review quickly.</p>
      </div>
      <div class="card">
        <div class="icon">📚</div>
        <h3>Improve docs</h3>
        <p>Clearer wording, better examples, missing guides — documentation work is highly valued.</p>
      </div>
      <div class="card">
        <div class="icon">🐞</div>
        <h3>Report bugs</h3>
        <p>File a clear, reproducible issue with environment details and we'll act on it.</p>
      </div>
      <div class="card">
        <div class="icon">💡</div>
        <h3>Propose ideas</h3>
        <p>Open a discussion to suggest features, integrations, or API improvements.</p>
      </div>
      <div class="card">
        <div class="icon">🌐</div>
        <h3>Help the community</h3>
        <p>Answer questions in Discussions, review PRs, and welcome new contributors.</p>
      </div>
      <div class="card">
        <div class="icon">❤️</div>
        <h3>Sponsor</h3>
        <p>Back development financially so we can spend more time shipping. <a href="/donate/">See options →</a></p>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Recognition</span>
      <h2>Our top contributors</h2>
      <p>A small group with outsized impact. Thank you.</p>
    </div>
    <div class="contributors">
      <div class="contrib-group">
        <h4>Core Development</h4>
        <div class="avatars">
          <img src="https://avatars.githubusercontent.com/u/2734197?v=4"  alt="Josua M C" />
          <img src="https://www.gravatar.com/avatar/f142f7d825621102706c308e3bac8398?s=256&d=identicon&r=PG" alt="S O" />
          <img src="https://www.gravatar.com/avatar/71b85a1c78f34d6a98f7e3d9d2e19f1c?s=80&d=identicon" alt="S P" />
        </div>
      </div>
      <div class="contrib-group">
        <h4>Community Support</h4>
        <div class="avatars">
          <img src="https://avatars.githubusercontent.com/u/73342988?s=130&v=4"  alt="Kenrick" />
          <img src="https://avatars.githubusercontent.com/u/30457769?s=130&v=4"  alt="Zymon" />
          <img src="https://avatars.githubusercontent.com/u/8966251?s=130&v=4"   alt="Doge" />
          <img src="https://avatars.githubusercontent.com/u/62465430?v=4"        alt="Darius" />
          <img src="https://avatars.githubusercontent.com/u/93059697?s=130&v=4"  alt="Tomas" />
          <img src="https://avatars.githubusercontent.com/u/110272465?s=130&v=4" alt="Nato" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h2>Framework comparison</h2>
      <p>AgilePy borrows Flask's minimalism and Lumen's structure — focused on frontend-rendered apps.</p>
    </div>
    <div class="table-wrap">
      <table class="compare">
        <thead>
          <tr><th></th><th>Django</th><th>Flask</th><th>FastAPI</th></tr>
        </thead>
        <tbody>
          <tr><td>Philosophy</td><td>Full-stack, batteries-included.</td><td>Lightweight micro-framework.</td><td>API-first micro-framework.</td></tr>
          <tr><td>Ease of use</td><td>Comprehensive, steeper learning curve.</td><td>Small surface, flexible extensions.</td><td>Type hints make development fast and safe.</td></tr>
          <tr><td>Extensibility</td><td>Largest ecosystem.</td><td>Extensive add-on library.</td><td>Smaller, growing ecosystem.</td></tr>
          <tr><td>Performance</td><td>Good.</td><td>Faster than Django.</td><td>Fastest of the three.</td></tr>
          <tr><td>Scalability</td><td>Monolithic; async helps.</td><td>Lightweight and modular.</td><td>Lightweight and async-native.</td></tr>
          <tr><td>Security</td><td>Many defenses built-in.</td><td>Cookies secured by default; rest opt-in.</td><td>OAuth 2.0 out of the box.</td></tr>
          <tr><td>Maturity</td><td>Open source since 2005.</td><td>Since 2010.</td><td>Since 2018.</td></tr>
          <tr><td>Community</td><td>Large, active.</td><td>Large, active.</td><td>Growing fast.</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head">
      <h2>Six steps to your first PR</h2>
      <p>Standard GitHub workflow — no surprises.</p>
    </div>
    <div class="grid grid-3">
      <div class="card"><h3>1. Fork</h3><p>Open the repo on GitHub and click <strong>Fork</strong>.</p></div>
      <div class="card"><h3>2. Clone</h3><p><code>git clone https://github.com/&lt;you&gt;/AgilePy</code></p></div>
      <div class="card"><h3>3. Branch</h3><p><code>git checkout -b feature/my-change</code></p></div>
      <div class="card"><h3>4. Install &amp; test</h3><p>Install dependencies and run the test suite locally.</p></div>
      <div class="card"><h3>5. Commit &amp; push</h3><p>Write a clear message and push your branch.</p></div>
      <div class="card"><h3>6. Open a PR</h3><p>Follow the PR template — describe the change and link related issues.</p></div>
    </div>
    <div style="text-align:center;margin-top:36px">
      <a href="https://github.com/josuamarcelc/AgilePy" class="btn btn-primary btn-lg" target="_blank" rel="noopener">Start on GitHub →</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
