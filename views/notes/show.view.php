<?php require(__DIR__ . '/../partials/head.php') ?>
<?php require(__DIR__ . '/../partials/nav.php') ?>
<?php require(__DIR__ . '/../partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
        <a href="/php-server/notes" class="text-blue-500 underline">Go back...</a>
    </p>
    <p><?= htmlspecialchars($note['body']) ?></p>
  </div>
</main>

<?php require(__DIR__ . '/../partials/footer.php') ?>