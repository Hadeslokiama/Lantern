<?= view('layout/header', ['title' => 'User Accounts']) ?>
<section class="page-intro compact container">
    <div class="eyebrow">Workspace directory</div>
    <h1>User accounts</h1>
    <p>Manage the people who bring your workspace to life.</p>
</section>
<section class="table-section container">
    <div class="table-heading"><h2>All users</h2><span class="count-badge"><?= count($users) ?> users</span></div>
    <div class="table-wrap"><table><thead><tr><th>User</th><th>Role</th><th>Status</th></tr></thead><tbody>
    <?php foreach ($users as $user): ?>
        <tr><td><strong><?= esc($user['name']) ?></strong><small><?= esc($user['email']) ?></small></td><td><?= esc($user['role']) ?></td><td><span class="pill pill-<?= strtolower($user['status']) ?>"><?= esc($user['status']) ?></span></td></tr>
    <?php endforeach; ?>
    </tbody></table></div>
</section>
<?= view('layout/footer') ?>
