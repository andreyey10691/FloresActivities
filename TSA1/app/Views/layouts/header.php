
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <header class="header">
        <div class="container nav-container">
            <h2>Tasks for Today</h2>
            <nav>
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="<?= site_url('tasks') ?>">Tasks</a>
                <a href="<?= site_url('profile') ?>">Profile</a>
                <a href="<?= site_url('about') ?>">About</a>
            </nav>
        </div>
    </header>
    <main class="container">