<?php require __DIR__ . '/partials/header.view.php'; ?>

<h1><?= $title; ?></h1>

<ul>
    <?php foreach ($pokemon as $monster) : ?>
        <li>
            <a href="/pokemon?id=<?= $monster->id; ?>">
                <?= $monster->name; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php require __DIR__ . '/partials/footer.view.php'; ?>