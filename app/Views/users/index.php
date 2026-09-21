<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Staff directory</p>
        <div class="title-row">
            <div><h1>User Accounts</h1><p>Team members with access to the point-of-sale system.</p></div>
            <span class="count-badge"><?= count($users) ?> records</span>
        </div>
    </div>
</section>

<section class="container section table-section">
    <div class="table-card">
        <div class="table-wrap">
            <table>
                <thead><tr><th>Username</th><th>Full name</th><th>Date created</th></tr></thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><code><?= esc($user['username']) ?></code></td>
                        <td><span class="avatar amber-bg"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></span><strong><?= esc($user['full_name']) ?></strong></td>
                        <td><?= esc(date('M j, Y', strtotime($user['created_at']))) ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
