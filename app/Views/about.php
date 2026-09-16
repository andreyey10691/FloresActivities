<!DOCTYPE html>
<html>
<head>
    <title>POS System - About</title>
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
            <h1>About the System</h1>

            <p>
                This Point-of-Sale Management System is a simple web-based
                application designed to organize customer and user account
                information.
            </p>

            <p>
                The project uses CodeIgniter 4 and follows the basic
                Model-View-Controller approach. It demonstrates how routes,
                controllers, and views work together to display information
                through different pages.
            </p>

            <p>
                For this version of the system, sample data is stored using
                static PHP arrays. A database can be integrated in future
                development as the system becomes more advanced.
            </p>
        </div>

    </div>

</body>
</html>