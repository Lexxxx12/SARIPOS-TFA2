<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Account directory</p>
        <div class="title-row">
            <div><h1>Customer Accounts</h1><p>Contact details for your store’s registered customers.</p></div>
            <span class="count-badge"><?= count($customers) ?> records</span>
        </div>
    </div>
</section>

<section class="container section table-section">
    <div class="table-card">
        <div class="table-wrap">
            <table>
                <thead><tr><th>Full name</th><th>Email address</th><th>Phone number</th></tr></thead>
                <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><span class="avatar"><?= esc(strtoupper(substr($customer['full_name'], 0, 1))) ?></span><strong><?= esc($customer['full_name']) ?></strong></td>
                        <td><a href="mailto:<?= esc($customer['email'], 'attr') ?>"><?= esc($customer['email']) ?></a></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
