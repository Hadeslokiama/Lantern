<?= view('layout/header', ['title' => 'About Lantern']) ?>
<section class="page-intro container">
    <div class="eyebrow">About Lantern</div>
    <h1>Tools should make<br><span>space for good work.</span></h1>
    <p>Lantern is a focused workspace for teams that want clarity without the clutter. We believe the best software helps people see what matters, decide faster, and work well together.</p>
</section>
<section class="content-section container two-column">
    <div><div class="eyebrow">Our approach</div><h2>Simple by design.<br>Thoughtful by default.</h2></div>
    <div><p>From customer accounts to the people behind them, Lantern puts the right context in one place. Every part of the workspace is designed to feel clear, useful, and easy to make your own.</p><a class="text-link" href="<?= site_url('customers') ?>">See the customer accounts <span aria-hidden="true">→</span></a></div>
</section>
<section class="quote-section"><div class="container"><p>“Clarity is a competitive advantage.”</p><span>— The Lantern team</span></div></section>
<?= view('layout/footer') ?>
