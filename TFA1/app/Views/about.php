<?= view('layout/header', ['title' => 'About', 'page' => 'about']) ?>

<section class="page-hero">
    <div>
        <span class="eyebrow">ABOUT THE SYSTEM</span>
        <h1>Built for a better student experience.</h1>
        <p>
            This website provides a simple and organized way to present
            student and academic information.
        </p>
    </div>
</section>

<section class="about-section">
    <div class="about-image">
        <img src="<?= base_url('images/classroom.jpg') ?>" alt="FEU Tech Classroom">
    </div>

    <div class="about-content">
        <span class="eyebrow">FEU INSTITUTE OF TECHNOLOGY</span>
        <h2>Technology meets education.</h2>

        <p>
            FEU Institute of Technology provides a learning environment
            focused on technology, innovation, and practical skills.
        </p>

        <p>
            This student website was created as a simple information
            system interface that demonstrates routing, controllers,
            views, and organized static data using CodeIgniter.
        </p>

        <a href="<?= base_url('enrollment') ?>" class="btn-primary">
            Explore Enrollment
        </a>
    </div>
</section>

<section class="info-cards">
    <div class="info-card">
        <span>01</span>
        <h3>Simple</h3>
        <p>Information is presented in a clean and easy-to-understand layout.</p>
    </div>

    <div class="info-card">
        <span>02</span>
        <h3>Organized</h3>
        <p>Different sections are separated into dedicated pages for easier navigation.</p>
    </div>

    <div class="info-card">
        <span>03</span>
        <h3>Responsive</h3>
        <p>The interface is designed to work across laptops, tablets, and mobile devices.</p>
    </div>
</section>

<?= view('layout/footer') ?>