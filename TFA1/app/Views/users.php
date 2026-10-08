<?= view('layout/header', ['title' => 'User Accounts', 'page' => 'users']) ?>

<section class="page-header">

    <span class="eyebrow">SYSTEM USERS</span>

    <h1>User Accounts</h1>

    <p>
        View the users registered in the system.
        This section provides an organized overview of the accounts that interact with the system.
    </p>

</section>


<section class="account-intro">

    <div class="account-intro-text">

        <p>
            User accounts represent the different people assigned to work with
            the system. Each account includes a username and full name
            to clearly identify the user.
        </p>

    </div>

</section>


<section class="account-summary">

    <div class="summary-card">

        <span class="summary-label">Total Users</span>

        <div class="summary-number">
            <?= count($users) ?>
        </div>

        <p class="summary-description">
            Registered system accounts.
        </p>

    </div>


    <div class="summary-card">

        <span class="summary-label">Information</span>

        <div class="summary-number">
            02
        </div>

        <p class="summary-description">
            Basic details stored for every user.
        </p>

    </div>


    <div class="summary-card">

        <span class="summary-label">Record Type</span>

        <div class="summary-number">
            MySQL
        </div>

        <p class="summary-description">
            Records retrieved from the database.
        </p>

    </div>

</section>


<section class="table-card">

    <div class="table-wrapper">

        <table class="data-table">

            <thead>

                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                </tr>

            </thead>


            <tbody>

                <?php foreach ($users as $user): ?>

                    <?php
                        $name = $user['full_name'];

                        $nameParts = explode(' ', trim($name));

                        $initials = '';

                        foreach ($nameParts as $part) {
                            if ($part !== '') {
                                $initials .= strtoupper(substr($part, 0, 1));
                            }
                        }

                        $initials = substr($initials, 0, 2);
                    ?>

                    <tr>

                        <td>

                            <div class="user-cell">

                                <div class="user-avatar">
                                    <?= esc($initials) ?>
                                </div>

                                <div class="user-details">

                                    <strong class="username-cell">
                                        <?= esc($user['username']) ?>
                                    </strong>

                                    <span>
                                        System Account
                                    </span>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="user-details">

                                <strong>
                                    <?= esc($user['full_name']) ?>
                                </strong>

                                <span>
                                    Registered User
                                </span>

                            </div>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>


    <p class="table-note">
        User account information shown on this page is retrieved from the MySQL database.
    </p>

</section>


<?= view('layout/footer') ?>