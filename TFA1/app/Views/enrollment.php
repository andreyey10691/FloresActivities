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

        <span class="section-label">ENROLLMENT</span>

        <h1>Prepare your subjects.</h1>

        <p>
            Review the subjects available for your current semester
            before completing your enrollment.
        </p>

    </section>


    <section class="enrollment-summary">

        <div>

            <small>STUDENT</small>

            <strong>Lee Andrei A. Flores</strong>

        </div>


        <div>

            <small>PROGRAM</small>

            <strong>BSIT-CST</strong>

        </div>


        <div>

            <small>SEMESTER</small>

            <strong>1st Semester</strong>

        </div>


        <div>

            <small>STATUS</small>

            <span class="status">IRREGULAR</span>

        </div>

    </section>


    <section class="content-section">

        <div class="section-heading">

            <div>

                <span class="section-label">AVAILABLE SUBJECTS</span>

                <h2>Recommended subjects</h2>

            </div>

            <p>
                6 subjects available
            </p>

        </div>


        <div class="subject-table">

            <div class="table-header">

                <span>CODE</span>

                <span>SUBJECT</span>

                <span>UNITS</span>

                <span>SCHEDULE</span>

                <span>STATUS</span>

            </div>


            <div class="subject-row">

                <strong>IT0035</strong>

                <span>
                    <b>Applied Operating System</b>
                    <small>Major Subject</small>
                </span>

                <span>3</span>

                <span>Mon / Wed<br>10:00 AM – 11:30 AM</span>

                <span class="available">Available</span>

            </div>


            <div class="subject-row">

                <strong>IT0037</strong>

                <span>
                    <b>Sytem Analysis Design</b>
                    <small>Major Subject</small>
                </span>

                <span>3</span>

                <span>Tue / Thu<br>1:00 PM – 2:30 PM</span>

                <span class="available">Available</span>

            </div>


            <div class="subject-row">

                <strong>IT0015</strong>

                <span>
                    <b>Networking 2</b>
                    <small>Major Subject</small>
                </span>

                <span>3</span>

                <span>Mon / Thu<br>3:00 PM – 4:30 PM</span>

                <span class="available">Available</span>

            </div>


            <div class="subject-row">

                <strong>GED0083</strong>

                <span>
                    <b>College Physics 2</b>
                    <small>Major Subject</small>
                </span>

                <span>3</span>

                <span>Tue / Fri<br>9:00 AM – 10:30 AM</span>

                <span class="available">Available</span>

            </div>


            <div class="subject-row">

                <strong>IT0019</strong>

                <span>
                    <b>Quantitative Methods</b>
                    <small>Major Subject</small>
                </span>

                <span>3</span>

                <span>Wed / Fri<br>11:30 AM – 1:00 PM</span>

                <span class="available">Available</span>

            </div>


            <div class="subject-row">

                <strong>IT0204</strong>

                <span>
                    <b>It Specialization 7</b>
                    <small>Major Subject</small>
                </span>

                <span>2</span>

                <span>Saturday<br>8:00 AM – 10:00 AM</span>

                <span class="available">Available</span>

            </div>

        </div>


        <div class="enrollment-total">

            <div>

                <small>TOTAL UNITS</small>

                <strong>17 Units</strong>

            </div>

            <button class="btn-primary" onclick="alert('Enrollment review completed successfully!')">
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

    <p>© 2026 Student Portal. For academic demonstration purposes.</p>

</footer>

</body>
</html>