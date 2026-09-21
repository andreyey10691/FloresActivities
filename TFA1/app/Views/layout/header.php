<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'FEU Tech' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<header class="navbar">
    <div class="nav-container">
        <a href="<?= base_url('/') ?>" class="brand">
            <img src="<?= base_url('images/feu-logo.png') ?>" alt="FEU Tech Logo">
            <div class="brand-text">
                <span>FEU INSTITUTE</span>
                <strong>OF TECHNOLOGY</strong>
            </div>
        </a>

        <nav class="nav-links">
            <a href="<?= base_url('/') ?>" class="<?= ($page ?? '') === 'home' ? 'active' : '' ?>">Home</a>
            <a href="<?= base_url('about') ?>" class="<?= ($page ?? '') === 'about' ? 'active' : '' ?>">About</a>
            <a href="<?= base_url('enrollment') ?>" class="<?= ($page ?? '') === 'enrollment' ? 'active' : '' ?>">Enrollment</a>
            <a href="<?= base_url('customers') ?>" class="<?= ($page ?? '') === 'customers' ? 'active' : '' ?>">Customers</a>
            <a href="<?= base_url('users') ?>" class="<?= ($page ?? '') === 'users' ? 'active' : '' ?>">Users</a>
            <a href="<?= base_url('profile') ?>" class="<?= ($page ?? '') === 'profile' ? 'active' : '' ?>">Profile</a>
        </nav>
    </div>
</header>

<main>