<?php include_once "../src/views/layout/header.php"; ?>

<div class="row">
    <div class="col-lg-8 offset-2">

        <h1>Ajouter un article</h1>

        <form action="<?= url("article_create") ?>" method="post">
        
            <!-- Title -->
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?= $title ?>">
            </div>

            <!-- Content -->
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content"><?= $content ?></textarea>
            </div>

            <!-- Illustration -->
            <div class="mb-3">
                <label for="illustration">Illustration</label>
                <input type="file" name="illustration" id="illustration">
            </div>

            <!-- isFeatured -->
            <div class="mb-3">
                <input type="checkbox" name="isFeatured" id="isFeatured">
                <label for="isFeatured">Mettre en avant dans le caroussel ?</label>
            </div>

            <button class="btn btn-info btn-sm">Ajouter</button>

        </form>

    </div>
</div>

<?php include_once "../src/views/layout/footer.php"; ?>