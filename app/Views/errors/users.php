<?= view('layout/header', ['title' => $title, 'page' => $page]) ?>

<section class="page-hero compact">
    <div>
        <span class="section-label">SYSTEM DIRECTORY</span>
        <h1>User <em>Management.</em></h1>
        <p>View system users, account roles, and account status.</p>
    </div>

    <div class="page-hero-number">04</div>
</section>

<section class="dashboard-section">

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <span>TOTAL USERS</span>
            <strong><?= count($users) ?></strong>
            <small>System accounts</small>
        </div>

        <div class="dashboard-card">
            <span>ACTIVE USERS</span>
            <strong>3</strong>
            <small>Currently active</small>
        </div>

        <div class="dashboard-card">
            <span>ROLES</span>
            <strong>4</strong>
            <small>Access categories</small>
        </div>

        <div class="dashboard-card gold-card">
            <span>SECURITY</span>
            <strong>Protected</strong>
            <small>Credentials hidden</small>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div>
                <span class="section-label">USER DIRECTORY</span>
                <h2>System Users</h2>
            </div>

            <div class="search-box">
                <span>⌕</span>
                <input type="text" id="userSearch" placeholder="Search users...">
            </div>
        </div>

        <div class="table-wrapper">
            <table id="userTable">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>User ID</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <div class="person-cell">
                                    <div class="avatar"><?= strtoupper(substr($user['name'], 0, 1)) ?></div>
                                    <div>
                                        <strong><?= esc($user['name']) ?></strong>
                                        <span><?= esc($user['email']) ?></span>
                                    </div>
                                </div>
                            </td>

                            <td><?= esc($user['id']) ?></td>

                            <td>
                                <span class="role-badge"><?= esc($user['role']) ?></span>
                            </td>

                            <td>
                                <span class="table-status <?= strtolower($user['status']) ?>">
                                    ● <?= esc($user['status']) ?>
                                </span>
                            </td>

                            <td>
                                <button class="view-button">View →</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="security-note">
        <span>🔐</span>
        <div>
            <strong>Account privacy</strong>
            <p>Passwords and other sensitive authentication details are not displayed in the user directory.</p>
        </div>
    </div>

</section>

<script>
document.getElementById('userSearch').addEventListener('keyup', function () {
    const search = this.value.toLowerCase();
    const rows = document.querySelectorAll('#userTable tbody tr');

    rows.forEach(function (row) {
        row.style.display = row.textContent.toLowerCase().includes(search) ? '' : 'none';
    });
});
</script>

<?= view('layout/footer') ?>