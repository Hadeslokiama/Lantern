<?= view('layout/header', ['title' => 'Lantern — Make work feel lighter']) ?>
<section class="hero container">
    <div class="eyebrow">A clearer way to work together</div>
    <h1>Bring your team’s<br><span>best work into focus.</span></h1>
    <p class="hero-copy">Lantern gives growing teams one calm, connected workspace for customers, people, and progress.</p>
    <div class="hero-actions">
        <a class="button button-primary" href="<?= site_url('customers') ?>">Explore workspace</a>
        <a class="button button-secondary" href="<?= site_url('about') ?>">Learn about Lantern <span aria-hidden="true">→</span></a>
    </div>
    <div class="hero-card" aria-label="Workspace overview">
        <div class="card-topline"><span class="status-dot"></span> Workspace overview <span class="muted">Updated just now</span></div>
        <div class="metric-grid">
            <div><strong>128</strong><span>Active customers</span></div>
            <div><strong>24</strong><span>Team members</span></div>
            <div><strong>98.4%</strong><span>Tasks on track</span></div>
        </div>
    </div>
</section>
<section class="feature-strip">
    <div class="container feature-grid">
        <div><span class="feature-number">01</span><h2>One shared view</h2><p>Keep customer context and team momentum close at hand.</p></div>
        <div><span class="feature-number">02</span><h2>Less busywork</h2><p>Simple tools that help your team spend time on meaningful work.</p></div>
        <div><span class="feature-number">03</span><h2>Room to grow</h2><p>A flexible foundation that stays useful as you scale.</p></div>
    </div>
</section>
<?= view('layout/footer') ?>
