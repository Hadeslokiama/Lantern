<?= view('layout/header', ['title' => 'Customer Accounts']) ?>
<section class="page-intro compact container">
    <div class="eyebrow">Workspace directory</div>
    <h1>Customer accounts</h1>
    <p>A quick view of the teams building with Lantern.</p>
</section>
<section class="table-section container">
    <div class="table-heading"><h2>All customers</h2><span class="count-badge"><?= count($customers) ?> accounts</span></div>
    <div class="table-wrap"><table><thead><tr><th>Customer</th><th>Plan</th><th>Status</th></tr></thead><tbody>
    <?php foreach ($customers as $customer): ?>
        <tr><td><strong><?= esc($customer['name']) ?></strong><small><?= esc($customer['email']) ?></small></td><td><?= esc($customer['plan']) ?></td><td><span class="pill pill-<?= strtolower($customer['status']) ?>"><?= esc($customer['status']) ?></span></td></tr>
    <?php endforeach; ?>
    </tbody></table></div>
</section>
<?= view('layout/footer') ?>
