<?= view('layout/header', ['title' => 'Customer Accounts', 'page' => 'customers']) ?>

<section class="page-header">

    <span class="eyebrow">CUSTOMER ACCOUNTS</span>

    <h1>Customer Accounts</h1>

    <p>
        View and organize customer contact information registered in the system.
        Each record contains the basic details needed for identification and communication.
    </p>

</section>


<section class="account-intro">

    <div class="account-intro-text">

        <p>
            The customer section keeps important account information in one organized
            location. It provides a simple reference for names, email addresses, and
            phone numbers retrieved from the MySQL database.
        </p>

    </div>

</section>


<section class="account-summary">

    <div class="summary-card">

        <span class="summary-label">Total Customers</span>

        <div class="summary-number">
            <?= count($customers) ?>
        </div>

        <p class="summary-description">
            Customer records currently available.
        </p>

    </div>


    <div class="summary-card">

        <span class="summary-label">Information</span>

        <div class="summary-number">
            03
        </div>

        <p class="summary-description">
            Basic details stored for every customer.
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
                    <th>Customer</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                </tr>

            </thead>


            <tbody>

                <?php foreach ($customers as $customer): ?>

                    <?php
                        $name = $customer['full_name'];

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

                            <div class="customer-cell">

                                <div class="customer-avatar">
                                    <?= esc($initials) ?>
                                </div>

                                <div class="customer-details">

                                    <strong>
                                        <?= esc($customer['full_name']) ?>
                                    </strong>

                                    <span>
                                        Registered Customer
                                    </span>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="contact-cell">

                                <span>Email</span>

                                <strong>
                                    <?= esc($customer['email']) ?>
                                </strong>

                            </div>

                        </td>


                        <td>

                            <div class="contact-cell">

                                <span>Contact Number</span>

                                <strong>
                                    <?= esc($customer['phone']) ?>
                                </strong>

                            </div>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>


    <p class="table-note">
        Customer information shown on this page is retrieved from the MySQL database.
    </p>

</section>


<?= view('layout/footer') ?>