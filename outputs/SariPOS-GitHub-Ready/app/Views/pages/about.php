<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-hero">
    <div class="container narrow">
        <p class="eyebrow">About the project</p>
        <h1>A practical foundation for a better checkout experience.</h1>
        <p>SariPOS is a laboratory project built to demonstrate routing, controllers, views, and dynamic PHP templates in CodeIgniter 4.</p>
    </div>
</section>

<section class="container section narrow">
    <div class="about-grid">
        <article class="content-card">
            <h2>Version one</h2>
            <p>This release focuses on the essentials: a welcoming dashboard and two readable account directories. Customer and staff records currently come from static PHP arrays in their controllers.</p>
            <p>No database is connected yet. That keeps this first iteration easy to understand while establishing a structure that can grow into a complete point-of-sale system.</p>
        </article>
        <aside class="stack-card">
            <p class="eyebrow">Technology</p>
            <ul>
                <li><span>Framework</span><strong>CodeIgniter 4</strong></li>
                <li><span>Language</span><strong>PHP</strong></li>
                <li><span>Data source</span><strong>Static arrays</strong></li>
                <li><span>Pages</span><strong>Four</strong></li>
            </ul>
        </aside>
    </div>
</section>
<?= $this->endSection() ?>
