<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About | FEU Student Portal</title>

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
        <a href="<?= base_url('about') ?>" class="active">About</a>
        <a href="<?= base_url('customers') ?>">Enrollment</a>
        <a href="<?= base_url('users') ?>">Profile</a>
    </nav>

</header>


<main>

    <section class="page-header">

        <span class="section-label">ABOUT THE PORTAL</span>

        <h1>Academic services in one place.</h1>

        <p>
            The FEU Student Portal is a simple web-based academic
            interface designed to help students access important
            enrollment and student information.
        </p>

    </section>


    <section class="content-section">

        <div class="info-card large">

            <span class="section-label">PURPOSE</span>

            <h2>Designed around the student experience.</h2>

            <p>
                This portal provides a simple way for students to review
                their academic information, check available subjects,
                and prepare for enrollment.
            </p>

            <p>
                The system demonstrates how a student enrollment interface
                can be organized using a clean and accessible web design.
            </p>

        </div>


        <div class="info-grid">

            <div class="info-card">

                <div class="number">01</div>

                <h3>Simple Navigation</h3>

                <p>
                    Important student services are organized into clear
                    sections for easier access.
                </p>

            </div>


            <div class="info-card">

                <div class="number">02</div>

                <h3>Enrollment Support</h3>

                <p>
                    Students can review subjects and enrollment details
                    before completing their academic preparation.
                </p>

            </div>


            <div class="info-card">

                <div class="number">03</div>

                <h3>Student Information</h3>

                <p>
                    Basic academic and student information can be viewed
                    through the profile section.
                </p>

            </div>

        </div>

    </section>


    <section class="announcement">

        <div>

            <span class="section-label">REMINDER</span>

            <h2>Review before you enroll.</h2>

            <p>
                Check your subjects, schedule, and student information
                before proceeding with your enrollment.
            </p>

        </div>

        <a href="<?= base_url('customers') ?>" class="btn-primary">
            Go to Enrollment
        </a>

    </section>

</main>


<footer>

    <div>
        <strong>FEU Student Portal</strong>
        <p>Academic Enrollment System</p>
    </div>

    <p>© 2026 Student Portal. For academic demonstration purposes.</p>

</footer>

</body>
</html>