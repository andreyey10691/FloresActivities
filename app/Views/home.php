<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FEU Student Portal</title>

    <link rel="stylesheet" href="<?= base_url('style.css') ?>">

</head>

<body>


<!-- NAVIGATION -->

<header class="navbar">

    <div class="logo">

        <span class="logo-icon">F</span>

        <div>
            <h2>FEU</h2>
            <small>Student Portal</small>
        </div>

    </div>


    <nav>

        <a href="<?= base_url('/') ?>" class="active">
            Home
        </a>

        <a href="<?= base_url('about') ?>">
            About
        </a>

        <a href="<?= base_url('customers') ?>">
            Enrollment
        </a>

        <a href="<?= base_url('users') ?>">
            Profile
        </a>

    </nav>

</header>



<!-- MAIN CONTENT -->

<main>


    <!-- HERO SECTION -->

    <section class="hero">

        <div class="hero-content">

            <span class="welcome-label">
                STUDENT ACADEMIC PORTAL
            </span>


            <h1>
                Your academic journey,
                <span>made simpler.</span>
            </h1>


            <p>
                Welcome to the student portal. Access enrollment services,
                review academic information, and stay updated with
                important announcements throughout the semester.
            </p>


            <div class="hero-buttons">

                <a
                    href="<?= base_url('customers') ?>"
                    class="btn-primary"
                >
                    Start Enrollment
                </a>


                <a
                    href="<?= base_url('about') ?>"
                    class="btn-outline"
                >
                    Learn More
                </a>

            </div>

        </div>



        <!-- RIGHT SIDE PORTAL CARD -->

        <div class="hero-card">

            <span class="section-label">
                STUDENT ACADEMIC PORTAL
            </span>


            <h2>
                Stay on track with your academic journey.
            </h2>


            <p>
                Keep up with enrollment schedules, academic requirements,
                and important updates throughout the semester.
            </p>



            <div class="portal-message">

                <strong>
                    Enrollment is now open.
                </strong>

                <p>
                    Review your available subjects and prepare your
                    class schedule before completing your enrollment.
                </p>

            </div>



            <div class="portal-links">

                <a href="<?= base_url('customers') ?>">

                    <span>
                        View Available Subjects
                    </span>

                    <span>→</span>

                </a>


                <a href="<?= base_url('about') ?>">

                    <span>
                        Read Enrollment Guide
                    </span>

                    <span>→</span>

                </a>


                <a href="<?= base_url('users') ?>">

                    <span>
                        Check Student Information
                    </span>

                    <span>→</span>

                </a>

            </div>

        </div>

    </section>



    <!-- SERVICES -->

    <section class="section">


        <div class="section-heading">

            <div>

                <span class="section-label">
                    STUDENT SERVICES
                </span>

                <h2>
                    Everything you need in one place.
                </h2>

            </div>


            <p>
                Access the essential services you need to prepare
                for the upcoming academic semester.
            </p>

        </div>



        <div class="service-grid">


            <!-- ENROLLMENT -->

            <a
                href="<?= base_url('customers') ?>"
                class="service-card"
            >

                <div class="service-icon">
                    01
                </div>


                <h3>
                    Enrollment
                </h3>


                <p>
                    Browse available subjects, review class schedules,
                    and prepare your enrollment for the semester.
                </p>


                <span class="card-link">
                    View Enrollment →
                </span>

            </a>



            <!-- PROFILE -->

            <a
                href="<?= base_url('users') ?>"
                class="service-card"
            >

                <div class="service-icon">
                    02
                </div>


                <h3>
                    Student Profile
                </h3>


                <p>
                    Review your program, year level, section,
                    semester, and other basic academic information.
                </p>


                <span class="card-link">
                    View Profile →
                </span>

            </a>



            <!-- INFORMATION -->

            <a
                href="<?= base_url('about') ?>"
                class="service-card"
            >

                <div class="service-icon">
                    03
                </div>


                <h3>
                    Academic Information
                </h3>


                <p>
                    Find useful information about enrollment procedures,
                    academic reminders, and student services.
                </p>


                <span class="card-link">
                    Learn More →
                </span>

            </a>


        </div>

    </section>



    <!-- ANNOUNCEMENT -->

    <section class="announcement">

        <div>

            <span class="section-label">
                IMPORTANT REMINDER
            </span>


            <h2>
                Prepare before you enroll.
            </h2>


            <p>
                Review your available subjects and make sure you understand
                your class schedule before proceeding with enrollment.
            </p>

        </div>


        <a
            href="<?= base_url('customers') ?>"
            class="btn-primary"
        >
            Review Subjects
        </a>

    </section>


</main>



<!-- FOOTER -->

<footer>

    <div>

        <strong>
            FEU Student Portal
        </strong>

        <p>
            Academic Enrollment System
        </p>

    </div>


    <p>
        © 2026 Student Portal.
        For academic demonstration purposes.
    </p>

</footer>


</body>
</html>