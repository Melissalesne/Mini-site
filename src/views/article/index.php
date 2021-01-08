
<?php include_once "../src/views/layout/header.php"; ?>

<?php foreach ($articles as $article): ?>
<div>
    <?= $article->title ?>
</div>
<?php endforeach ?>

<?php include_once "../src/views/layout/footer.php"; ?>