<?php
$page_title       = 'Donate — AgilePy';
$page_description = 'Support AgilePy through GitHub Sponsors, Open Collective, Ko-fi, PayPal, or crypto. Every contribution keeps the project moving.';
$page_url         = 'https://agilepy.com/donate/';
$page_keywords    = 'Donate AgilePy, GitHub Sponsors, Open Collective, Ko-fi, Buy Me a Coffee, Python microframework donation';
$current_page     = 'donate';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<script type="application/ld+json">
{
  "@context":"https://schema.org","@type":"WebPage","name":"Donate to AgilePy",
  "url":"https://agilepy.com/donate/",
  "isPartOf":{"@type":"WebSite","name":"AgilePy","url":"https://agilepy.com/"},
  "description":"Support AgilePy development through one-time or recurring donations."
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org","@type":"FAQPage",
  "mainEntity":[
    {"@type":"Question","name":"How are donations used?","acceptedAnswer":{"@type":"Answer","text":"Donations fund development time, documentation, and infrastructure costs."}},
    {"@type":"Question","name":"Is my donation tax-deductible?","acceptedAnswer":{"@type":"Answer","text":"Donations are currently not tax-deductible. We will update this page if that changes."}},
    {"@type":"Question","name":"Can I sponsor a feature?","acceptedAnswer":{"@type":"Answer","text":"Yes. Contact us to discuss feature sponsorships or custom development support."}}
  ]
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<section class="hero-page">
  <div class="container">
    <span class="eyebrow">Support the Project</span>
    <h1>Help keep AgilePy moving</h1>
    <p class="lead">Your contribution funds documentation, hosting, and the time it takes to ship reliable releases.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">One-time or Monthly</span>
      <h2>Choose a tier</h2>
      <p>Whatever fits your budget — every amount makes a difference.</p>
    </div>
    <div class="tiers">
      <div class="tier">
        <div class="name">Supporter</div>
        <div class="price">$5<span class="per"> /one-time</span></div>
        <p class="desc">Buy the team a coffee. Small tip, big appreciation.</p>
        <a class="btn btn-outline" href="https://www.paypal.com/paypalme/josuamarcelc/5" target="_blank" rel="noopener">Tip $5</a>
      </div>
      <div class="tier featured">
        <div class="name">Backer</div>
        <div class="price">$10<span class="per"> /one-time</span></div>
        <p class="desc">Covers hosting, CI minutes, and small infrastructure costs.</p>
        <a class="btn btn-primary" href="https://www.paypal.com/paypalme/josuamarcelc/10" target="_blank" rel="noopener">Tip $10</a>
      </div>
      <div class="tier">
        <div class="name">Sponsor</div>
        <div class="price">$25<span class="per"> /month</span></div>
        <p class="desc">Recurring support that keeps the roadmap moving forward.</p>
        <a class="btn btn-outline" href="https://www.paypal.com/paypalme/josuamarcelc/25" target="_blank" rel="noopener">Become a Sponsor</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head">
      <h2>Donate via your preferred platform</h2>
      <p>Pick the route that's easiest for you — all of them help equally.</p>
    </div>
    <div class="grid grid-auto">
      <div class="card">
        <div class="icon">⭐</div>
        <h3>GitHub Sponsors</h3>
        <p>Recurring or one-time, tied to your GitHub account.</p>
        <a class="btn btn-ghost btn-sm" href="https://github.com/sponsors/josuamarcelc" target="_blank" rel="noopener">Open Sponsors →</a>
      </div>
      <div class="card">
        <div class="icon">📊</div>
        <h3>Open Collective</h3>
        <p>Transparent ledger of donations and expenses.</p>
        <a class="btn btn-ghost btn-sm" href="https://opencollective.com/agilepy" target="_blank" rel="noopener">Open Collective →</a>
      </div>
      <div class="card">
        <div class="icon">☕</div>
        <h3>Ko-fi</h3>
        <p>Quick one-time tips, no account required.</p>
        <a class="btn btn-ghost btn-sm" href="https://ko-fi.com/josuamarcelc" target="_blank" rel="noopener">Open Ko-fi →</a>
      </div>
      <div class="card">
        <div class="icon">🏦</div>
        <h3>Bank / Wire</h3>
        <p>Prefer a transfer? Contact us for invoice details.</p>
        <p style="margin-top:8px"><code>team@agilepy.com</code></p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Crypto</span>
      <h2>Donate in crypto</h2>
      <p>On-chain donations welcome. Double-check the network before sending.</p>
    </div>
    <div class="grid grid-3">
      <div class="card">
        <h3>BTC <small style="color:var(--muted);font-weight:500">SegWit</small></h3>
        <div class="copy-row" style="margin-top:14px">
          <input id="btc" value="bc1q6yavmdxspqcv4zksmm4kkyj3j04uyk03k0kuc3" readonly>
          <button data-copy="#btc">Copy</button>
        </div>
      </div>
      <div class="card">
        <h3>ETH <small style="color:var(--muted);font-weight:500">ERC-20</small></h3>
        <div class="copy-row" style="margin-top:14px">
          <input id="eth" value="0x9e2dA3000Caf22d4400f3645E8c31DaD4Dc226Db" readonly>
          <button data-copy="#eth">Copy</button>
        </div>
      </div>
      <div class="card">
        <h3>USDT <small style="color:var(--muted);font-weight:500">TRC-20</small></h3>
        <div class="copy-row" style="margin-top:14px">
          <input id="usdt" value="TUYtDCx2fatXK7sbLBXMmFtFfZyHyLp35m" readonly>
          <button data-copy="#usdt">Copy</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head">
      <h2>Frequently asked</h2>
    </div>
    <div class="grid grid-2">
      <div class="card">
        <h3>How are donations used?</h3>
        <p>Development time, documentation, and infrastructure (hosting, CI, releases).</p>
      </div>
      <div class="card">
        <h3>Are donations tax-deductible?</h3>
        <p>Not currently. We'll update this page if that changes.</p>
      </div>
      <div class="card">
        <h3>Can I sponsor a feature?</h3>
        <p>Yes — reach out to discuss feature sponsorship or custom development support.</p>
      </div>
      <div class="card">
        <h3>Can my company sponsor?</h3>
        <p>Absolutely. Open Collective and GitHub Sponsors both support organisations.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script src='https://storage.ko-fi.com/cdn/scripts/overlay-widget.js'></script>
<script>
kofiWidgetOverlay.draw('josuamarcelc', {
  'type': 'floating-chat',
  'floating-chat.donateButton.text': 'Support me',
  'floating-chat.donateButton.background-color': '#f97316',
  'floating-chat.donateButton.text-color': '#fff'
});
</script>
