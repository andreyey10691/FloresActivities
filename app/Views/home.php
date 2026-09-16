<!DOCTYPE html>
<html>
<head>
    <title>POS System - Home</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

    <div class="container">

        <nav>
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>">Customer Accounts</a>
            <a href="<?= base_url('users') ?>">User Accounts</a>
        </nav>

        <div class="welcome">
            <h1>Point-of-Sale Management System</h1>

            <p>
                Welcome to our Point-of-Sale Management System.
                This website provides a simple way to view customer accounts
                and user account information in one place.
            </p>

            <p>
                The system was developed as a basic web application using
                CodeIgniter 4, focusing on routing, controllers, views,
                and organized data presentation.
            </p>

            <a href="<?= base_url('customers') ?>" class="button">
                View Customer Accounts
            </a>

            <a href="<?= base_url('users') ?>" class="button">
                View User Accounts
            </a>
        </div>

    </div>

</body>
</html>