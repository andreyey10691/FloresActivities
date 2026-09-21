<?= view('layout/header', ['title' => 'Users', 'page' => 'users']) ?>

<style>
.user-page {
    background: #f7f4eb;
    min-height: 100vh;
}

.user-hero {
    position: relative;
    min-height: 430px;
    padding: 80px 8vw;
    display: flex;
    align-items: center;
    overflow: hidden;
    color: white;
    background:
        linear-gradient(110deg, rgba(3,35,24,0.98), rgba(6,88,56,0.86)),
        url("../images/classroom.jpg") center/cover;
}

.user-hero::before {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    border: 1px solid rgba(214,165,43,0.24);
    border-radius: 50%;
    right: -150px;
    top: -190px;
}

.user-hero-content {
    position: relative;
    z-index: 2;
}

.user-label {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #f0ca62;
    font-size: 11px;
    font-weight: 900;
    letter-spacing: 2px;
}

.user-label span {
    width: 8px;
    height: 8px;
    background: #d6a52b;
    border-radius: 50%;
}

.user-hero h1 {
    font-size: clamp(50px, 6vw, 82px);
    line-height: 0.95;
    letter-spacing: -4px;
    margin: 18px 0;
}

.user-hero h1 strong {
    color: #f0ca62;
}

.user-hero p {
    max-width: 600px;
    color: rgba(255,255,255,0.7);
    font-size: 16px;
}

.user-content {
    padding: 85px 7vw;
    background:
        radial-gradient(circle at 90% 10%, rgba(214,165,43,0.09), transparent 20%),
        #f7f4eb;
}

.user-heading {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 30px;
    margin-bottom: 35px;
}

.user-heading span {
    color: #d6a52b;
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 2px;
}

.user-heading h2 {
    color: #062d1f;
    font-size: clamp(35px, 4vw, 52px);
    line-height: 1;
    margin: 10px 0;
}

.user-heading p {
    color: #68736e;
}

.user-total {
    min-width: 125px;
    padding: 20px;
    text-align: center;
    background: #062d1f;
    border-radius: 18px;
    color: white;
}

.user-total strong {
    display: block;
    color: #f0ca62;
    font-size: 35px;
    line-height: 1;
}

.user-total small {
    color: rgba(255,255,255,0.55);
    font-size: 8px;
    letter-spacing: 1px;
}

.user-list {
    display: grid;
    gap: 15px;
}

.user-card {
    position: relative;
    display: grid;
    grid-template-columns: 70px 1.7fr 1fr 1fr;
    align-items: center;
    gap: 25px;
    padding: 23px 28px;
    background: white;
    border: 1px solid #e4e8e2;
    border-radius: 21px;
    box-shadow: 0 10px 30px rgba(4,39,26,0.05);
    overflow: hidden;
    transition: 0.3s ease;
}

.user-card::after {
    content: "";
    position: absolute;
    width: 110px;
    height: 110px;
    background: rgba(214,165,43,0.07);
    border-radius: 50%;
    right: -50px;
    top: -50px;
}

.user-card:hover {
    transform: translateX(7px);
    box-shadow: 0 22px 50px rgba(4,39,26,0.12);
    border-color: rgba(214,165,43,0.4);
}

.user-card-number {
    color: #d7e0da;
    font-size: 24px;
    font-weight: 900;
}

.user-person {
    display: flex;
    align-items: center;
    gap: 15px;
    position: relative;
    z-index: 2;
}

.user-avatar-new {
    width: 58px;
    height: 58px;
    flex-shrink: 0;
    border-radius: 17px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #062d1f, #118050);
    color: #f0ca62;
    font-size: 14px;
    font-weight: 900;
    box-shadow: 0 10px 20px rgba(6,45,31,0.16);
}

.user-person small {
    display: block;
    color: #8a948f;
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1.2px;
}

.user-person strong {
    display: block;
    color: #062d1f;
    font-size: 14px;
    margin-top: 3px;
}

.user-person p {
    color: #68736e;
    font-size: 10px;
    margin-top: 2px;
}

.user-column {
    position: relative;
    z-index: 2;
}

.user-column label {
    display: block;
    color: #919a95;
    font-size: 8px;
    letter-spacing: 1.2px;
    font-weight: 900;
    margin-bottom: 5px;
}

.user-column strong {
    color: #3f4d46;
    font-size: 11px;
}

.user-role-pill {
    display: inline-flex;
    padding: 7px 11px;
    border-radius: 30px;
    background: #edf5f0;
    color: #087443;
    font-size: 9px;
    font-weight: 900;
}

.user-active-pill {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: #177044;
    font-size: 10px;
    font-weight: 900;
}

.user-active-pill span {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #35b86d;
    box-shadow: 0 0 0 4px rgba(53,184,109,0.12);
}

.user-security-new {
    margin-top: 28px;
    padding: 23px 27px;
    display: flex;
    align-items: center;
    gap: 15px;
    border-radius: 19px;
    background: #edf8f1;
    border: 1px solid #d9eddf;
}

.user-security-icon {
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #c9efd6;
    color: #15804b;
    font-weight: 900;
}

.user-security-new strong {
    display: block;
    color: #062d1f;
    font-size: 13px;
}

.user-security-new p {
    color: #68736e;
    font-size: 11px;
    margin-top: 2px;
}

.user-bottom {
    margin-top: 35px;
    padding: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
    border-radius: 27px;
    background:
        radial-gradient(circle at 85% 20%, rgba(214,165,43,0.2), transparent 25%),
        #062d1f;
    color: white;
}

.user-bottom h2 {
    font-size: clamp(34px, 4vw, 52px);
    line-height: 1;
    margin-top: 12px;
}

.user-bottom h2 strong {
    color: #f0ca62;
}

.user-bottom p {
    max-width: 420px;
    color: rgba(255,255,255,0.62);
    font-size: 13px;
}

@media (max-width: 900px) {
    .user-card {
        grid-template-columns: 45px 1fr 1fr;
    }

    .user-card > .user-column:last-child {
        grid-column: 2 / 4;
    }

    .user-heading,
    .user-bottom {
        flex-direction: column;
        align-items: flex-start;
    }
}

@media (max-width: 600px) {
    .user-hero {
        padding: 65px 7vw;
    }

    .user-hero h1 {
        letter-spacing: -2px;
    }

    .user-content {
        padding: 65px 5vw;
    }

    .user-card {
        grid-template-columns: 40px 1fr;
        padding: 22px;
    }

    .user-card > .user-column {
        grid-column: 2;
    }

    .user-card > .user-column:last-child {
        grid-column: 2;
    }

    .user-bottom {
        padding: 35px 25px;
    }
}
</style>

<div class="user-page">

    <section class="user-hero">
        <div class="user-hero-content">

            <div class="user-label">
                <span></span>
                SYSTEM MANAGEMENT
            </div>

            <h1>System<br><strong>Users.</strong></h1>

            <p>
                Manage and view the registered users represented
                within the student information system.
            </p>

        </div>
    </section>

    <section class="user-content">

        <div class="user-heading">
            <div>
                <span>USER MANAGEMENT</span>
                <h2>Registered Users</h2>
                <p>Accounts currently represented in the system directory.</p>
            </div>

            <div class="user-total">
                <strong>04</strong>
                <small>REGISTERED USERS</small>
            </div>
        </div>

        <div class="user-list">

            <div class="user-card">

                <div class="user-card-number">01</div>

                <div class="user-person">
                    <div class="user-avatar-new">KJ</div>

                    <div>
                        <small>USER ACCOUNT</small>
                        <strong>Kendall Jenner</strong>
                        <p>kendall.jenner@example.com</p>
                    </div>
                </div>

                <div class="user-column">
                    <label>ROLE</label>
                    <span class="user-role-pill">Student</span>
                </div>

                <div class="user-column">
                    <label>ACCOUNT STATUS</label>
                    <span class="user-active-pill">
                        <span></span>
                        Active
                    </span>
                </div>

            </div>

            <div class="user-card">

                <div class="user-card-number">02</div>

                <div class="user-person">
                    <div class="user-avatar-new">CD</div>

                    <div>
                        <small>USER ACCOUNT</small>
                        <strong>Cameron Diaz</strong>
                        <p>cameron.diaz@example.com</p>
                    </div>
                </div>

                <div class="user-column">
                    <label>ROLE</label>
                    <span class="user-role-pill">Student</span>
                </div>

                <div class="user-column">
                    <label>ACCOUNT STATUS</label>
                    <span class="user-active-pill">
                        <span></span>
                        Active
                    </span>
                </div>

            </div>

            <div class="user-card">

                <div class="user-card-number">03</div>

                <div class="user-person">
                    <div class="user-avatar-new">AH</div>

                    <div>
                        <small>USER ACCOUNT</small>
                        <strong>Anne Hathaway</strong>
                        <p>anne.hathaway@example.com</p>
                    </div>
                </div>

                <div class="user-column">
                    <label>ROLE</label>
                    <span class="user-role-pill">Student</span>
                </div>

                <div class="user-column">
                    <label>ACCOUNT STATUS</label>
                    <span class="user-active-pill">
                        <span></span>
                        Active
                    </span>
                </div>

            </div>

            <div class="user-card">

                <div class="user-card-number">04</div>

                <div class="user-person">
                    <div class="user-avatar-new">TF</div>

                    <div>
                        <small>USER ACCOUNT</small>
                        <strong>Tiffany Fermin</strong>
                        <p>tiffany.fermin@example.com</p>
                    </div>
                </div>

                <div class="user-column">
                    <label>ROLE</label>
                    <span class="user-role-pill">Student</span>
                </div>

                <div class="user-column">
                    <label>ACCOUNT STATUS</label>
                    <span class="user-active-pill">
                        <span></span>
                        Active
                    </span>
                </div>

            </div>

        </div>

        <div class="user-security-new">
            <div class="user-security-icon">✓</div>

            <div>
                <strong>System Access Overview</strong>
                <p>
                    User records are displayed for demonstration purposes.
                    Passwords and sensitive authentication details are not
                    publicly displayed.
                </p>
            </div>
        </div>

        <div class="user-bottom">
            <div>
                <span class="section-label light-label">FEU TECH SYSTEM</span>
                <h2>Connected through<br><strong>technology.</strong></h2>
            </div>

            <p>
                A centralized interface for organizing student and
                system information in a clean and accessible way.
            </p>
        </div>

    </section>

</div>

<?= view('layout/footer') ?>