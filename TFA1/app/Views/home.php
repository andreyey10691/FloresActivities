<?= view('layout/header', ['title' => 'Home', 'page' => 'home']) ?>

<section class="hero">

    <div class="hero-image">
        <img src="<?= base_url('images/feu-building.jpg') ?>" alt="FEU Institute of Technology">
    </div>

    <div class="hero-content">

        <span class="eyebrow">STUDENT INFORMATION SYSTEM</span>

        <h1>
            Simple, Organized, and Efficient.
        </h1>

        <p>
            Welcome to the student information website.
            Manage customer accounts and system users through
            a clean and organized interface.
        </p>

        <div class="hero-buttons">
            <a href="#modules" class="btn-primary">
                Explore Modules
            </a>

            <a href="<?= base_url('about') ?>" class="btn-secondary">
                Learn More
            </a>
        </div>

    </div>

</section>


<section class="home-section" id="modules">

    <div class="section-heading">

        <span class="eyebrow">SYSTEM MODULES</span>

        <h2>
            Everything you need in one place.
        </h2>

        <p>
            Use the available sections below to access different
            parts of the system.
        </p>

    </div>


    <div class="feature-grid">

        <div class="feature-card">

            <div class="feature-icon">
                01
            </div>

            <h3>
                Customer Accounts
            </h3>

            <p>
                View customer names, email addresses, and
                contact information stored in the system.
            </p>

            <a href="<?= base_url('customers') ?>">
                Open Customer Accounts →
            </a>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                02
            </div>

            <h3>
                User Accounts
            </h3>

            <p>
                Review system usernames and the roles assigned
                to each registered user.
            </p>

            <a href="<?= base_url('users') ?>">
                Open User Accounts →
            </a>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                03
            </div>

            <h3>
                About the System
            </h3>

            <p>
                Learn more about the purpose, design, and
                technologies used to create this website.
            </p>

            <a href="<?= base_url('about') ?>">
                View System Information →
            </a>

        </div>

    </div>

</section>


<section class="image-section">

    <div class="image-section-content">

        <span class="eyebrow">
            FEU INSTITUTE OF TECHNOLOGY
        </span>

        <h2>
            Technology meets education.
        </h2>

        <p>
            A clean digital interface designed to organize
            important information while demonstrating the use
            of CodeIgniter routing, controllers, views, and
            static data.
        </p>

    </div>


    <div class="image-section-photo">

        <img
            src="<?= base_url('images/classroom.jpg') ?>"
            alt="FEU Tech Classroom"
        >

    </div>

</section>

<?= view('layout/footer') ?>