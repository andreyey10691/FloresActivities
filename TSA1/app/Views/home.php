
<?= $this->include('layouts/header', ['title' => 'Welcome']) ?>

<section class="page-heading">
    <h1>Welcome</h1>
    <p>Here are your tasks for today.</p>
    <p class="date">Today: <?= date('F j, Y') ?></p>
</section>

<section class="task-list">
    <?php if (!empty($tasks)): ?>
        <?php foreach ($tasks as $task): ?>
            <article class="task-card">
                <div>
                    <h3><?= esc($task['title']) ?></h3>
                    <p>Date: <?= esc($task['task_date']) ?></p>
                </div>
                <span class="status"><?= esc(ucfirst($task['status'])) ?></span>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No tasks scheduled for today.</p>
    <?php endif; ?>
</section>

<?= $this->include('layouts/footer') ?>