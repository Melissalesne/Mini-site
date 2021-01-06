<?php include_once "../src/views/layout/header.php"; ?>

HOMEPAGE DATA
<hr>

<?= url("article_index") ?><br>
<a href="<?= url("article_index") ?>">Lire nos articles</a>
<br>
<?= url("homepage") ?><br>
<?= url("homepage", true) ?><br>

<?php include_once "../src/views/layout/footer.php"; ?>