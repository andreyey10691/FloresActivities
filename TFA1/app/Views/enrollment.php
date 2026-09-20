<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enrollment | FEU Student Portal</title>

    <link rel="stylesheet" href="<?= base_url('style.css') ?>">

</head>

<body>

<header class="navbar">

    <div class="logo">

        <span class="logo-icon">F</span>

        <div>
            <h2>FEU</h2>
            <small>Student Portal</small>
        </div>

    </div>

    <nav>

        <a href="<?= base_url('/') ?>">Home</a>

        <a href="<?= base_url('about') ?>">About</a>

        <a href="<?= base_url('customers') ?>" class="active">
            Enrollment
        </a>

        <a href="<?= base_url('users') ?>">Profile</a>

    </nav>

</header>


<main>

    <section class="page-header">

        <span class="section-label">
            STUDENT SERVICES
        </span>

        <h1>Enrollment</h1>

        <p>
            Review the available subjects for the current semester.
            This page uses a static PHP array as a temporary data source.
        </p>

    </section>


    <section class="section">

        <div class="profile-summary">

            <div>
                <strong>Program</strong>
                <p>BS Information Technology</p>
            </div>

            <div>
                <strong>Year Level</strong>
                <p>3rd Year</p>
            </div>

            <div>
                <strong>Semester</strong>
                <p>1st Semester</p>
            </div>

        </div>


        <div class="section-heading">

            <div>

                <span class="section-label">
                    AVAILABLE SUBJECTS
                </span>

                <h2>Subject Listing</h2>

            </div>

            <p>
                Select and review the subjects listed below.
            </p>

        </div>


        <div class="table-container">
            <table>

                <thead>

                    <tr>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Units</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($subjects as $subject): ?>

                        <tr>

                            <td>
                                <?= esc($subject['code']) ?>
                            </td>

                            <td>
                                <?= esc($subject['name']) ?>
                            </td>

                            <td>
                                <?= esc($subject['units']) ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

                <tfoot>

                    <tr>

                        <th colspan="2">
                            Total Units
                        </th>

                        <th>
                            <?= esc($totalUnits) ?>
                        </th>

                    </tr>

                </tfoot>

            </table>

        </div>


        <div class="announcement">

            <div>

                <span class="section-label">
                    ENROLLMENT REMINDER
                </span>

                <h2>Review your subjects carefully.</h2>

                <p>
                    Please check the subject codes, names, and units
                    before completing your enrollment.
                </p>

            </div>

            <button
                class="btn-primary"
                onclick="alert('Your subject list has been reviewed.')"
            >
                Review Enrollment
            </button>

        </div>

    </section>

</main>


<footer>

    <div>

        <strong>FEU Student Portal</strong>

        <p>Academic Enrollment System</p>

    </div>

    <p>
        © 2026 Student Portal.
        For academic demonstration purposes.
    </p>

</footer>

</body>
</html>