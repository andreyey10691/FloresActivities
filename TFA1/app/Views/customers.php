<?= view('layout/header', ['title' => 'Customers', 'page' => 'customers']) ?>

<style>
.customer-page {
    background: #f7f4eb;
    min-height: 100vh;
}

.customer-hero {
    position: relative;
    min-height: 430px;
    padding: 80px 8vw;
    display: flex;
    align-items: center;
    overflow: hidden;
    color: white;
    background:
        linear-gradient(110deg, rgba(3,35,24,0.98), rgba(6,88,56,0.86)),
        url("../images/feu-building.jpg") center/cover;
}

.customer-hero::before {
    content: "";
    position: absolute;
    width: 480px;
    height: 480px;
    border: 1px solid rgba(214,165,43,0.25);
    border-radius: 50%;
    right: -120px;
    top: -180px;
}

.customer-hero::after {
    content: "";
    position: absolute;
    width: 220px;
    height: 220px;
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 50%;
    right: 80px;
    bottom: -120px;
}

.customer-hero-content {
    position: relative;
    z-index: 2;
    max-width: 850px;
}

.customer-label {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #f0ca62;
    font-size: 11px;
    font-weight: 900;
    letter-spacing: 2px;
}

.customer-label span {
    width: 8px;
    height: 8px;
    background: #d6a52b;
    border-radius: 50%;
}

.customer-hero h1 {
    font-size: clamp(50px, 6vw, 82px);
    line-height: 0.95;
    letter-spacing: -4px;
    margin: 18px 0;
}

.customer-hero h1 strong {
    color: #f0ca62;
}

.customer-hero p {
    max-width: 600px;
    color: rgba(255,255,255,0.7);
    font-size: 16px;
}

.customer-stat {
    position: absolute;
    right: 8vw;
    bottom: 55px;
    z-index: 2;
    width: 145px;
    height: 145px;
    border: 1px solid rgba(214,165,43,0.45);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    transform: rotate(-8deg);
}

.customer-stat strong {
    font-size: 45px;
    color: #f0ca62;
    line-height: 1;
}

.customer-stat span {
    font-size: 8px;
    letter-spacing: 1.5px;
    color: rgba(255,255,255,0.6);
    margin-top: 5px;
}

.customer-content {
    padding: 85px 7vw;
    background:
        radial-gradient(circle at 90% 10%, rgba(214,165,43,0.09), transparent 20%),
        #f7f4eb;
}

.customer-section-heading {
    margin-bottom: 35px;
}

.customer-section-heading span {
    color: #d6a52b;
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 2px;
}

.customer-section-heading h2 {
    color: #062d1f;
    font-size: clamp(35px, 4vw, 52px);
    line-height: 1;
    margin: 10px 0;
}

.customer-section-heading p {
    color: #68736e;
}

.customer-cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 22px;
}

.customer-card-new {
    position: relative;
    padding: 32px;
    background: white;
    border: 1px solid #e4e8e2;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(4,39,26,0.07);
    transition: 0.3s ease;
}

.customer-card-new::before {
    content: "";
    position: absolute;
    width: 160px;
    height: 160px;
    border-radius: 50%;
    background: rgba(214,165,43,0.07);
    right: -75px;
    top: -75px;
}

.customer-card-new:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 55px rgba(4,39,26,0.14);
    border-color: rgba(214,165,43,0.45);
}

.customer-card-top {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.customer-number-new {
    color: #dce5df;
    font-size: 13px;
    font-weight: 900;
    letter-spacing: 1px;
}

.customer-active {
    display: flex;
    align-items: center;
    gap: 7px;
    padding: 7px 11px;
    border-radius: 30px;
    background: #eaf7ef;
    color: #177044;
    font-size: 9px;
    font-weight: 900;
}

.customer-active span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #35b86d;
}

.customer-main {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 18px;
    margin-top: 30px;
}

.customer-avatar-new {
    width: 72px;
    height: 72px;
    flex-shrink: 0;
    border-radius: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #062d1f, #118050);
    color: #f0ca62;
    font-size: 20px;
    font-weight: 900;
    box-shadow: 0 12px 25px rgba(6,45,31,0.18);
}

.customer-main small {
    display: block;
    color: #8a948f;
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1.5px;
}

.customer-main h3 {
    color: #062d1f;
    font-size: 21px;
    margin: 5px 0;
}

.customer-main p {
    color: #68736e;
    font-size: 11px;
}

.customer-email {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 9px;
    margin-top: 28px;
    padding-top: 20px;
    border-top: 1px solid #edf0ed;
    color: #68736e;
    font-size: 11px;
}

.customer-email-icon {
    width: 27px;
    height: 27px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf5f0;
    color: #087443;
    font-size: 11px;
    font-weight: 900;
}

.customer-banner {
    margin-top: 35px;
    padding: 55px;
    border-radius: 27px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    color: white;
    background:
        radial-gradient(circle at 85% 20%, rgba(214,165,43,0.2), transparent 25%),
        #062d1f;
    overflow: hidden;
}

.customer-banner h2 {
    font-size: clamp(35px, 4vw, 55px);
    line-height: 0.98;
    margin-top: 12px;
}

.customer-banner h2 strong {
    color: #f0ca62;
}

.customer-banner p {
    max-width: 420px;
    color: rgba(255,255,255,0.62);
    font-size: 13px;
}

@media (max-width: 850px) {
    .customer-cards {
        grid-template-columns: 1fr;
    }

    .customer-stat {
        display: none;
    }

    .customer-banner {
        flex-direction: column;
        align-items: flex-start;
    }
}

@media (max-width: 550px) {
    .customer-hero {
        padding: 65px 7vw;
    }

    .customer-hero h1 {
        letter-spacing: -2px;
    }

    .customer-content {
        padding: 65px 5vw;
    }

    .customer-card-new {
        padding: 25px;
    }

    .customer-banner {
        padding: 35px 25px;
    }
}
</style>

<div class="customer-page">

    <section class="customer-hero">
        <div class="customer-hero-content">

            <div class="customer-label">
                <span></span>
                STUDENT SERVICES
            </div>

            <h1>Customer<br><strong>Directory.</strong></h1>

            <p>
                A clean and organized directory for viewing customer
                information within the student information system.
            </p>

        </div>

        <div class="customer-stat">
            <strong>04</strong>
            <span>RECORDS</span>
        </div>
    </section>

    <section class="customer-content">

        <div class="customer-section-heading">
            <span>CUSTOMER RECORDS</span>
            <h2>Registered Customers</h2>
            <p>Student service records currently represented in the system.</p>
        </div>

        <div class="customer-cards">

            <div class="customer-card-new">
                <div class="customer-card-top">
                    <span class="customer-number-new">01 / 04</span>

                    <div class="customer-active">
                        <span></span>
                        ACTIVE
                    </div>
                </div>

                <div class="customer-main">
                    <div class="customer-avatar-new">KJ</div>

                    <div>
                        <small>CUSTOMER RECORD</small>
                        <h3>Kendall Jenner</h3>
                        <p>Student Services</p>
                    </div>
                </div>

                <div class="customer-email">
                    <div class="customer-email-icon">@</div>
                    kendall.jenner@example.com
                </div>
            </div>

            <div class="customer-card-new">
                <div class="customer-card-top">
                    <span class="customer-number-new">02 / 04</span>

                    <div class="customer-active">
                        <span></span>
                        ACTIVE
                    </div>
                </div>

                <div class="customer-main">
                    <div class="customer-avatar-new">CD</div>

                    <div>
                        <small>CUSTOMER RECORD</small>
                        <h3>Cameron Diaz</h3>
                        <p>Student Services</p>
                    </div>
                </div>

                <div class="customer-email">
                    <div class="customer-email-icon">@</div>
                    cameron.diaz@example.com
                </div>
            </div>

            <div class="customer-card-new">
                <div class="customer-card-top">
                    <span class="customer-number-new">03 / 04</span>

                    <div class="customer-active">
                        <span></span>
                        ACTIVE
                    </div>
                </div>

                <div class="customer-main">
                    <div class="customer-avatar-new">AH</div>

                    <div>
                        <small>CUSTOMER RECORD</small>
                        <h3>Anne Hathaway</h3>
                        <p>Student Services</p>
                    </div>
                </div>

                <div class="customer-email">
                    <div class="customer-email-icon">@</div>
                    anne.hathaway@example.com
                </div>
            </div>

            <div class="customer-card-new">
                <div class="customer-card-top">
                    <span class="customer-number-new">04 / 04</span>

                    <div class="customer-active">
                        <span></span>
                        ACTIVE
                    </div>
                </div>

                <div class="customer-main">
                    <div class="customer-avatar-new">TF</div>

                    <div>
                        <small>CUSTOMER RECORD</small>
                        <h3>Tiffany Fermin</h3>
                        <p>Student Services</p>
                    </div>
                </div>

                <div class="customer-email">
                    <div class="customer-email-icon">@</div>
                    tiffany.fermin@example.com
                </div>
            </div>

        </div>

        <div class="customer-banner">
            <div>
                <span class="section-label light-label">FEU TECH SYSTEM</span>
                <h2>Information that is<br><strong>easy to navigate.</strong></h2>
            </div>

            <p>
                Customer records are presented through a structured
                interface designed for clarity, accessibility, and
                easier information management.
            </p>
        </div>

    </section>

</div>

<?= view('layout/footer') ?>