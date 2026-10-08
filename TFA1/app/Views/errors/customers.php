<?= view('layout/header', ['title' => $title, 'page' => $page]) ?>

<section class="page-hero compact">
    <div>
        <span class="section-label">ACCOUNT DIRECTORY</span>
        <h1>Customer <em>Accounts.</em></h1>
        <p>View organized customer account information in one place.</p>
    </div>

    <div class="page-hero-number">03</div>
</section>

<section class="dashboard-section">

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <span>TOTAL ACCOUNTS</span>
            <strong><?= count($customers) ?></strong>
            <small>Registered records</small>
        </div>

        <div class="dashboard-card">
            <span>ACCOUNT TYPE</span>
            <strong>Student</strong>
            <small>Primary account type</small>
        </div>

        <div class="dashboard-card">
            <span>ACCESS</span>
            <strong>Standard</strong>
            <small>Regular account access</small>
        </div>

        <div class="dashboard-card gold-card">
            <span>PRIVACY</span>
            <strong>Protected</strong>
            <small>Identifiers masked</small>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div>
                <span class="section-label">ACCOUNT DIRECTORY</span>
                <h2>Customer Records</h2>
            </div>

            <div class="search-box">
                <span>⌕</span>
                <input type="text" id="customerSearch" placeholder="Search records...">
            </div>
        </div>

        <div class="table-wrapper">
            <table id="customerTable">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Account ID</th>
                        <th>Account Type</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td>
                                <div class="person-cell">
                                    <div class="avatar"><?= strtoupper(substr($customer['name'], 0, 1)) ?></div>
                                    <div>
                                        <strong><?= esc($customer['name']) ?></strong>
                                        <span><?= esc($customer['email']) ?></span>
                                    </div>
                                </div>
                            </td>

                            <td><?= esc($customer['id']) ?></td>
                            <td><?= esc($customer['type']) ?></td>

                            <td>
                                <span class="table-status <?= strtolower($customer['status']) ?>">
                                    ● <?= esc($customer['status']) ?>
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

</section>

<script>
document.getElementById('customerSearch').addEventListener('keyup', function () {
    const search = this.value.toLowerCase();
    const rows = document.querySelectorAll('#customerTable tbody tr');

    rows.forEach(function (row) {
        row.style.display = row.textContent.toLowerCase().includes(search) ? '' : 'none';
    });
});
</script>

<?= view('layout/footer') ?>