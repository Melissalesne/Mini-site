<?php

function article_index()
{
    // 1. Recupération des "Models" / Données
    include_once "../src/models/article.php";

    // 2. Traitement des données
    $articles = getArticles();

    // 3. Integration de la vue
    include_once "../src/views/article/index.php";

}

function article_create()
{
    // 1. Recupération des "Models" / Données
    include_once "../src/models/article.php";

    // 2. Traitement des données

    // Simule la recup des données $_POST
    $article = [
        'title' => "Mon super article",
        'content' => "Lorem Blabla bla ipsum Blabla bla ipsum Blabla bla ipsum Blabla bla ipsum Blabla bla ipsum Blabla bla ipsum Blabla bla ipsum",

        'createdBy' => 1,
        'createdAt' => date("Y-m-d H:i:s")
    ];

    addArticle($article);

    include_once "../src/views/article/create.php";
}

function article_read()
{
    include_once "../src/views/article/read.php";
    
}

function article_update()
{
    
    include_once "../src/views/article/update.php";
}

function article_delete()
{
    include_once "../src/views/article/delete.php";
}