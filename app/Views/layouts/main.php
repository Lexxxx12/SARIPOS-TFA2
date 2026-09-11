<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A basic point-of-sale account management system built with CodeIgniter 4.">
    <title><?= esc($title) ?> | SariPOS</title>
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
</head>
<body>
    <header class="site-header">
        <nav class="nav container" aria-label="Main navigation">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="SariPOS home">
                <span class="brand-mark" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 9h16l-1-5H5L4 9Zm1 0v11h14V9M9 20v-6h6v6"/></svg></span>
                <span>Sari<strong>POS</strong></span>
            </a>
            <div class="nav-links">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Home</a>
                <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= site_url('customers') ?>">Customers</a>
                <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= site_url('users') ?>">Users</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
            </div>
        </nav>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <span>&copy; <?= date('Y') ?> SariPOS</span>
            <span>Built with CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></span>
        </div>
    </footer>
</body>
</html>
