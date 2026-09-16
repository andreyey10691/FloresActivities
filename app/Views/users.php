<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
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
            <h1>User Accounts</h1>

            <p>
                This page shows the users who have access to different
                functions of the system.
            </p>

            <table>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>

                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><?= esc($user['role']) ?></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>

    </div>

</body>
</html>