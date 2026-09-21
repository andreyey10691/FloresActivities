<?= view('layout/header', ['title' => 'Home', 'page' => 'home']) ?>

<section class="hero">
    <div class="hero-image">
        <img src="<?= base_url('images/feu-building.jpg') ?>" alt="FEU Institute of Technology">
    </div>

    <div class="hero-content">
        <span class="eyebrow">FEU INSTITUTE OF TECHNOLOGY</span>
        <h1>Technology, Innovation, and Excellence.</h1>
        <p>
            Welcome to the FEU Tech student information website.
            Explore enrollment information, student records, users, and
            other academic resources in one place.
        </p>

        <div class="hero-buttons">
            <a href="<?= base_url('enrollment') ?>" class="btn-primary">View Enrollment</a>
            <a href="<?= base_url('about') ?>" class="btn-secondary">Learn More</a>
        </div>
    </div>
</section>

<section class="home-section">
    <div class="section-heading">
        <span class="eyebrow">STUDENT PORTAL</span>
        <h2>Everything in one place.</h2>
        <p>
            Access important student information through a clean and organized interface.
        </p>
    </div>

    <div class="feature-grid">
        <div class="feature-card">
            <div class="feature-icon">01</div>
            <h3>Enrollment</h3>
            <p>View available courses and enrollment information.</p>
            <a href="<?= base_url('enrollment') ?>">View Enrollment →</a>
        </div>

        <div class="feature-card">
            <div class="feature-icon">02</div>
            <h3>Customers</h3>
            <p>View organized customer information through the system.</p>
            <a href="<?= base_url('customers') ?>">View Customers →</a>
        </div>

        <div class="feature-card">
            <div class="feature-icon">03</div>
            <h3>Users</h3>
            <p>Explore the registered users available in the system.</p>
            <a href="<?= base_url('users') ?>">View Users →</a>
        </div>
    </div>
</section>

<section class="image-section">
    <div class="image-section-content">
        <span class="eyebrow">FEU TECH</span>
        <h2>Learning beyond the classroom.</h2>
        <p>
            A technology-focused learning environment designed to prepare
            students for the future of the digital world.
        </p>
    </div>

    <div class="image-section-photo">
        <img src="<?= base_url('images/classroom.jpg') ?>" alt="FEU Tech Classroom">
    </div>
</section>

<?= view('layout/footer') ?>