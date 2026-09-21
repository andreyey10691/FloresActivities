<?= view('layout/header', ['title' => 'Enrollment', 'page' => 'enrollment']) ?>

<section class="enrollment-hero">
    <div class="enrollment-hero-overlay"></div>

    <div class="enrollment-hero-content">
        <div class="hero-badge">
            <span></span>
            ACADEMIC SERVICES
        </div>

        <h1>Enrollment<br><strong>Overview.</strong></h1>

        <p>
            Your academic journey, organized in one place.
            View your current registration and enrolled courses.
        </p>

        <div class="hero-meta">
            <div>
                <span>ACADEMIC YEAR</span>
                <strong>2026–2027</strong>
            </div>

            <div>
                <span>SEMESTER</span>
                <strong>First Semester</strong>
            </div>

            <div>
                <span>STATUS</span>
                <strong class="status-active">● Enrolled</strong>
            </div>
        </div>
    </div>

    <div class="hero-decoration">
        <span>FEU</span>
        <small>INSTITUTE OF<br>TECHNOLOGY</small>
    </div>
</section>

<section class="enrollment-wrapper">

    <div class="enrollment-summary">
        <div class="summary-title">
            <span class="section-label">CURRENT REGISTRATION</span>
            <h2>Academic Information</h2>
            <p>Your current enrollment details for the semester.</p>
        </div>

        <div class="summary-grid">
            <div class="summary-card">
                <span class="summary-icon">AY</span>
                <div>
                    <small>ACADEMIC YEAR</small>
                    <strong>2026–2027</strong>
                    <p>First Semester</p>
                </div>
            </div>

            <div class="summary-card">
                <span class="summary-icon">LV</span>
                <div>
                    <small>YEAR LEVEL</small>
                    <strong>3rd Year</strong>
                    <p>Current Year Level</p>
                </div>
            </div>

            <div class="summary-card">
                <span class="summary-icon">BS</span>
                <div>
                    <small>PROGRAM</small>
                    <strong>BSIT-CST</strong>
                    <p>Information Technology</p>
                </div>
            </div>

            <div class="summary-card highlight-card">
                <span class="summary-icon">✓</span>
                <div>
                    <small>REGISTRATION STATUS</small>
                    <strong>Enrolled</strong>
                    <p>Active registration</p>
                </div>
            </div>
        </div>
    </div>

    <div class="course-header">
        <div>
            <span class="section-label">ENROLLED SUBJECTS</span>
            <h2>Registered Courses</h2>
            <p>Courses currently included in your academic registration.</p>
        </div>

        <div class="unit-total">
            <strong>18</strong>
            <span>Total Units</span>
        </div>
    </div>

    <div class="course-list">

        <article class="course-card">
            <div class="course-number">01</div>

            <div class="course-main">
                <div class="course-top">
                    <span class="course-code">CCS101</span>
                    <span class="enrolled-pill">✓ Enrolled</span>
                </div>

                <h3>System Analysis Design</h3>

                <div class="course-details">
                    <div>
                        <span>DAY</span>
                        <strong>Monday</strong>
                    </div>

                    <div>
                        <span>TIME</span>
                        <strong>9:00 AM – 12:00 PM</strong>
                    </div>

                    <div>
                        <span>UNITS</span>
                        <strong>3 Units</strong>
                    </div>
                </div>
            </div>

            <div class="course-arrow">↗</div>
        </article>

        <article class="course-card">
            <div class="course-number">02</div>

            <div class="course-main">
                <div class="course-top">
                    <span class="course-code">CCS103</span>
                    <span class="enrolled-pill">✓ Enrolled</span>
                </div>

                <h3>Networking 2</h3>

                <div class="course-details">
                    <div>
                        <span>DAY</span>
                        <strong>Tuesday</strong>
                    </div>

                    <div>
                        <span>TIME</span>
                        <strong>1:00 PM – 4:00 PM</strong>
                    </div>

                    <div>
                        <span>UNITS</span>
                        <strong>3 Units</strong>
                    </div>
                </div>
            </div>

            <div class="course-arrow">↗</div>
        </article>

        <article class="course-card">
            <div class="course-number">03</div>

            <div class="course-main">
                <div class="course-top">
                    <span class="course-code">RES301</span>
                    <span class="enrolled-pill">✓ Enrolled</span>
                </div>

                <h3>IT Specialization 7</h3>

                <div class="course-details">
                    <div>
                        <span>DAY</span>
                        <strong>Wednesday</strong>
                    </div>

                    <div>
                        <span>TIME</span>
                        <strong>10:00 AM – 1:00 PM</strong>
                    </div>

                    <div>
                        <span>UNITS</span>
                        <strong>3 Units</strong>
                    </div>
                </div>
            </div>

            <div class="course-arrow">↗</div>
        </article>

        <article class="course-card">
            <div class="course-number">04</div>

            <div class="course-main">
                <div class="course-top">
                    <span class="course-code">ITECH302</span>
                    <span class="enrolled-pill">✓ Enrolled</span>
                </div>

                <h3>College Physics 2</h3>

                <div class="course-details">
                    <div>
                        <span>DAY</span>
                        <strong>Thursday</strong>
                    </div>

                    <div>
                        <span>TIME</span>
                        <strong>9:00 AM – 12:00 PM</strong>
                    </div>

                    <div>
                        <span>UNITS</span>
                        <strong>3 Units</strong>
                    </div>
                </div>
            </div>

            <div class="course-arrow">↗</div>
        </article>

        <article class="course-card">
            <div class="course-number">05</div>

            <div class="course-main">
                <div class="course-top">
                    <span class="course-code">CCS304</span>
                    <span class="enrolled-pill">✓ Enrolled</span>
                </div>

                <h3>Applied Operating Sytem</h3>

                <div class="course-details">
                    <div>
                        <span>DAY</span>
                        <strong>Friday</strong>
                    </div>

                    <div>
                        <span>TIME</span>
                        <strong>1:00 PM – 4:00 PM</strong>
                    </div>

                    <div>
                        <span>UNITS</span>
                        <strong>3 Units</strong>
                    </div>
                </div>
            </div>

            <div class="course-arrow">↗</div>
        </article>

        <article class="course-card">
            <div class="course-number">06</div>

            <div class="course-main">
                <div class="course-top">
                    <span class="course-code">IT301</span>
                    <span class="enrolled-pill">✓ Enrolled</span>
                </div>

                <h3>Web System Technologies</h3>

                <div class="course-details">
                    <div>
                        <span>DAY</span>
                        <strong>Saturday</strong>
                    </div>

                    <div>
                        <span>TIME</span>
                        <strong>9:00 AM – 12:00 PM</strong>
                    </div>

                    <div>
                        <span>UNITS</span>
                        <strong>3 Units</strong>
                    </div>
                </div>
            </div>

            <div class="course-arrow">↗</div>
        </article>

    </div>

    <div class="enrollment-bottom">
        <div class="enrollment-note">
            <div class="note-icon">i</div>

            <div>
                <strong>Enrollment Record</strong>
                <p>
                    This page displays a static academic registration
                    record for demonstration purposes.
                </p>
            </div>
        </div>

        <div class="academic-status">
            <span></span>
            <div>
                <small>ACADEMIC STATUS</small>
                <strong>Active Student</strong>
            </div>
        </div>
    </div>

</section>

<section class="enrollment-photo-section">
    <div class="photo-content">
        <span class="section-label light-label">FEU TECH</span>
        <h2>Build your future<br><strong>through technology.</strong></h2>
        <p>
            Learn, create, and grow in an environment built around
            innovation and technology.
        </p>
    </div>

    <div class="photo-image">
        <img src="<?= base_url('images/classroom.jpg') ?>" alt="FEU Tech Classroom">
    </div>
</section>

<?= view('layout/footer') ?>