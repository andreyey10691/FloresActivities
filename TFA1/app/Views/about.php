<?= view('layout/header', ['title' => 'About', 'page' => 'about']) ?>

<section class="page-hero">
    <div>
        <span class="eyebrow">ABOUT THE SYSTEM</span>
        <h1>Built for a simple and organized Point-of-Sale experience.</h1>
        <p>
            This website provides a simple and organized way to manage
            customer and user information for a Point-of-Sale system.
        </p>
    </div>
</section>

<section class="about-section">
    <div class="about-image">
        <img src="<?= base_url('images/classroom.jpg') ?>" alt="Point-of-Sale System">
    </div>

    <div class="about-content">
        <span class="eyebrow">POINT-OF-SALE SYSTEM</span>
        <h2>Technology meets business.</h2>

        <p>
            This Point-of-Sale system provides an organized interface
            for managing customer accounts and user accounts.
        </p>

        <p>
            This website was created as a simple information system
            interface that demonstrates routing, controllers, views,
            and organized static data using CodeIgniter.
        </p>

        <a href="<?= base_url('customers') ?>" class="btn-primary">
            View Customers
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
        <p>Customer and user information are separated into dedicated pages.</p>
    </div>

    <div class="info-card">
        <span>03</span>
        <h3>Responsive</h3>
        <p>The interface is designed to work across laptops, tablets, and mobile devices.</p>
    </div>
</section>

<?= view('layout/footer') ?>