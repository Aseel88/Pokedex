<?php require __DIR__ . '/partials/header.view.php'; ?>

<h1><?= $title; ?></h1>

<img src="<?= $pokemon->getImageUrl(); ?>" alt="<?= $pokemon->name; ?>" />

<?php require __DIR__ . '/partials/footer.view.php'; ?>