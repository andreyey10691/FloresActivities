<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
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
            <h1>Customer Accounts</h1>

            <p>
                This page contains the customer information currently
                available in the system.
            </p>

            <table>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>

                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>

    </div>

</body>
</html>