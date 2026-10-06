<?= view('layout/header', ['title' => 'User Accounts']) ?>
<section class="page-intro compact container">
    <div class="eyebrow">Workspace directory</div>
    <h1>User accounts</h1>
    <p>Manage the people who bring your workspace to life.</p>
</section>
<section class="table-section container">
    <div class="table-heading"><h2>All users</h2><span class="count-badge"><?= count($users) ?> users</span></div>
    <div class="table-wrap"><table><thead><tr><th>User</th><th>Username</th><th>Created</th></tr></thead><tbody>
    <?php foreach ($users as $user): ?>
        <tr><td><strong><?= esc($user['full_name']) ?></strong></td><td><?= esc($user['username']) ?></td><td><?= esc($user['created_at']) ?></td></tr>
    <?php endforeach; ?>
    </tbody></table></div>
</section>
<?= view('layout/footer') ?>
