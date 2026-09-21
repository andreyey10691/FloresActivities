<?= view('layout/header', ['title' => 'Profile', 'page' => 'profile']) ?>

<section class="profile-hero">
    <div class="profile-hero-bg"></div>

    <div class="profile-hero-content">
        <div class="profile-avatar">KJ</div>

        <div>
            <span class="section-label light-label">STUDENT PROFILE</span>
            <h1>Kendall Jenner</h1>
            <p>BSIT-CST · 3rd Year · TC32</p>

            <div class="profile-status">
                <span></span>
                Active Student
            </div>
        </div>
    </div>

    <div class="profile-hero-mark">
        <strong>FEU</strong>
        <span>TECH</span>
    </div>
</section>

<section class="profile-wrapper">

    <div class="profile-intro">
        <div>
            <span class="section-label">STUDENT INFORMATION</span>
            <h2>Your Academic Profile</h2>
            <p>
                A centralized view of your student information,
                academic details, and account status.
            </p>
        </div>

        <div class="profile-id-card">
            <small>STUDENT ID</small>
            <strong>••••1069</strong>
        </div>
    </div>

    <div class="profile-grid">

        <div class="profile-card personal-card">
            <div class="card-heading">
                <div class="card-icon">01</div>

                <div>
                    <span>PERSONAL INFORMATION</span>
                    <h3>Basic Details</h3>
                </div>
            </div>

            <div class="profile-details">

                <div class="detail-row">
                    <span>FULL NAME</span>
                    <strong>Kendall Jenner</strong>
                </div>

                <div class="detail-row">
                    <span>STUDENT ID</span>
                    <strong>••••1069</strong>
                </div>

                <div class="detail-row">
                    <span>EMAIL ADDRESS</span>
                    <strong>kendalljenner@fit.edu.ph</strong>
                </div>

                <div class="detail-row">
                    <span>CONTACT NUMBER</span>
                    <strong>•••••••12</strong>
                </div>

                <div class="detail-row">
                    <span>DATE OF BIRTH</span>
                    <strong>•• / •• / ••••</strong>
                </div>

                <div class="detail-row">
                    <span>ACCOUNT STATUS</span>
                    <strong class="green-text">Active Student</strong>
                </div>

            </div>
        </div>

        <div class="profile-card security-card">
            <div class="card-heading">
                <div class="card-icon">02</div>

                <div>
                    <span>ACCOUNT</span>
                    <h3>Account Security</h3>
                </div>
            </div>

            <div class="security-box">
                <div class="security-symbol">✓</div>

                <div>
                    <strong>Account Protected</strong>
                    <p>Your account information is secured and partially masked.</p>
                </div>
            </div>

            <div class="profile-details">

                <div class="detail-row">
                    <span>EMAIL</span>
                    <strong>kendalljenner@fit.edu.ph</strong>
                </div>

                <div class="detail-row">
                    <span>PASSWORD</span>
                    <strong>••••••••••••</strong>
                </div>

            </div>

            <a href="#" class="profile-action">
                Manage Account
                <span>→</span>
            </a>
        </div>

    </div>

    <div class="academic-profile-section">

        <div class="academic-heading">
            <div>
                <span class="section-label">ACADEMIC INFORMATION</span>
                <h2>Student Academic Profile</h2>
            </div>

            <div class="academic-badge">
                <span></span>
                Currently Enrolled
            </div>
        </div>

        <div class="academic-grid">

            <div class="academic-item">
                <span>PROGRAM</span>
                <strong>BSIT-CST</strong>
                <p>Bachelor of Science in Information Technology</p>
            </div>

            <div class="academic-item">
                <span>MAJOR / TRACK</span>
                <strong>Cybersecurity</strong>
                <p>Cybersecurity-focused studies</p>
            </div>

            <div class="academic-item">
                <span>YEAR LEVEL</span>
                <strong>3rd Year</strong>
                <p>Current academic level</p>
            </div>

            <div class="academic-item">
                <span>SECTION</span>
                <strong>TC32</strong>
                <p>Current class section</p>
            </div>

        </div>
    </div>

    <div class="profile-bottom">

        <div class="profile-message">
            <div class="message-icon">✓</div>

            <div>
                <strong>Privacy-conscious profile</strong>
                <p>
                    Selected personal identifiers are masked to reduce
                    unnecessary exposure of sensitive information.
                </p>
            </div>
        </div>

        <div class="profile-date">
            <span>RECORD STATUS</span>
            <strong>ACTIVE</strong>
        </div>

    </div>

</section>

<section class="profile-campus">
    <div class="campus-image">
        <img src="<?= base_url('images/feu-building.jpg') ?>" alt="FEU Institute of Technology">
    </div>

    <div class="campus-content">
        <span class="section-label">FEU INSTITUTE OF TECHNOLOGY</span>

        <h2>Where technology<br>meets <strong>possibility.</strong></h2>

        <p>
            A student-centered environment where technology,
            innovation, and education come together.
        </p>

        <a href="<?= base_url('about') ?>" class="gold-button">
            Discover FEU Tech <span>→</span>
        </a>
    </div>
</section>

<?= view('layout/footer') ?>