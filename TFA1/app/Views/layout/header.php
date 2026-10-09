<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'POS System' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<header class="navbar">
    <div class="nav-container">
        <a href="<?= base_url('/') ?>" class="brand">
            <img src="<?= base_url('images/feu-logo.png') ?>" alt="POS System Logo">
            <div class="brand-text">
                <span>POINT-OF-SALE</span>
                <strong>SYSTEM</strong>
            </div>
        </a>

        <nav class="nav-links">
            <a href="<?= base_url('/') ?>" class="<?= ($page ?? '') === 'home' ? 'active' : '' ?>">Home</a>

            <a href="<?= base_url('about') ?>" class="<?= ($page ?? '') === 'about' ? 'active' : '' ?>">About</a>

            <a href="<?= base_url('customers') ?>" class="<?= ($page ?? '') === 'customers' ? 'active' : '' ?>">Customers</a>

            <a href="<?= base_url('users') ?>" class="<?= ($page ?? '') === 'users' ? 'active' : '' ?>">Users</a>
        </nav>
    </div>
</header>

<main>