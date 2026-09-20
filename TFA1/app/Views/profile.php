<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile | FEU Student Portal</title>

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

        <a href="<?= base_url('customers') ?>">Enrollment</a>

        <a href="<?= base_url('users') ?>" class="active">
            Profile
        </a>

    </nav>

</header>


<main>

    <section class="page-header">

        <span class="section-label">STUDENT PROFILE</span>

        <h1>Your student information.</h1>

        <p>
            Review the basic information associated with your student
            account.
        </p>

    </section>


    <section class="profile-layout">


        <div class="profile-card">

            <div class="profile-avatar">
                AF
            </div>

            <h2>Lee Andrei A. Flores</h2>

            <p>BS Information Technology</p>

            <span class="status">
                ACTIVE STUDENT
            </span>

            <div class="profile-line"></div>

            <small>STUDENT NUMBER</small>

            <strong>202410691</strong>

        </div>


        <div class="details-card">

            <div class="details-header">

                <div>

                    <span class="section-label">PERSONAL INFORMATION</span>

                    <h2>Student Details</h2>

                </div>

            </div>


            <div class="details-grid">

                <div class="detail">

                    <small>FULL NAME</small>

                    <strong>Lee Andrei A. Flores</strong>

                </div>


                <div class="detail">

                    <small>PROGRAM</small>

                    <strong>BSIT-CST</strong>

                </div>


                <div class="detail">

                    <small>YEAR LEVEL</small>

                    <strong>3rd Year</strong>

                </div>


                <div class="detail">

                    <small>SECTION</small>

                    <strong>TC32

                    </strong>

                </div>


                <div class="detail">

                    <small>SEMESTER</small>

                    <strong>1st Semester</strong>

                </div>


                <div class="detail">

                    <small>ACADEMIC YEAR</small>

                    <strong>2026–2027</strong>

                </div>


                <div class="detail">

                    <small>STUDENT STATUS</small>

                    <strong class="green-text">Active</strong>

                </div>


                <div class="detail">

                    <small>ACCOUNT STATUS</small>

                    <strong class="green-text">Verified</strong>

                </div>

            </div>


            <div class="profile-notice">

                <strong>Account Information</strong>

                <p>
                    Your student account is currently active. Please make
                    sure that your information is correct before proceeding
                    with enrollment.
                </p>

            </div>

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