
<?= $this->include('layouts/header', ['title' => 'Profile']) ?>

<section class="page-heading">
    <h1>Profile</h1>
    <p>My profile information.</p>
</section>

<?php if ($user): ?>
    <section class="profile-card">
        <h2><?= esc($user['full_name']) ?></h2>
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
        <p><strong>Created At:</strong> <?= esc($user['created_at']) ?></p>
    </section>
<?php else: ?>
    <p>No user record found.</p>
<?php endif; ?>

<?= $this->include('layouts/footer') ?>