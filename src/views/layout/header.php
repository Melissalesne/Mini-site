<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= WEBSITE_TITLE ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <header class="main-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">

                <a class="navbar-brand" href="<?= url("homepage", true) ?>"><?= WEBSITE_TITLE ?></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= url("homepage") ?>">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url("article_index") ?>">Nos Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url("category_index") ?>">Categories</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <!--
                        <li class="nav-item">
                            <a class="nav-link active"  href="#">Article Total : <?= showTotalArticle() ?></a>
                        </li>
                        -->


                        <?php if ( isset($_SESSION['user']) ): ?>

                        <!-- Menu utilisateur si celui-ci est identifié -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url("account") ?>"><?= $_SESSION['user']['fullname'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url("logout") ?>">Logout</a>
                        </li>

                        <?php else: ?>
                        
                        <!-- Menu utilisateur si celui-ci est anonyme -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url("register") ?>">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url("login") ?>">Connexion</a>
                        </li>

                        <?php endif; ?>


                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">