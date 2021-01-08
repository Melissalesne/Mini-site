<?php include_once "../src/views/layout/header.php"; ?>


Category - Index

<hr>

<?php foreach ($categories as $category): ?>

<div>
    <?= $category->id ?> : 
    <?= $category->name ?>

    <a href="<?= url("category_read") ?>?id=<?= $category->id ?>">plus d'info</a>
</div>

<?php endforeach ?>


<?php include_once "../src/views/layout/footer.php"; ?>