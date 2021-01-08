<?php 

// Liste des catégories
function category_index()
{
    // 1. Recupération des "Models" / Données
    include_once "../src/models/category.php";

    // 2. Traitement des données
    $categories = getCategories();

    // 3. Integration de la vue
    include_once "../src/views/category/index.php";
}

// Création d'une categorie
function category_create()
{
    // 1. Recupération des "Models" / Données
    include_once "../src/models/category.php";

    // 2. Traitement des données

    // Simule la recup des données $_POST
    $new_category = [
        'name' => "Science",
        'description' => "Blabla bla"
    ];

    addCategory($new_category);

    // 3. Integration de la vue
    include_once "../src/views/category/create.php";
}

// Affiche les données d'une catégorie
function category_read()
{
    // 1. Recupération des "Models" / Données
    include_once "../src/models/category.php";
    
    // 2. Traitement des données

    $id = $_GET['id'] ?? null;

    $category = getCategory($id);

    // 3. Integration de la vue
    include_once "../src/views/category/read.php";
}

// MAJ d'une catégorie
function category_update()
{
    // 1. Recupération des "Models" / Données

    // 2. Traitement des données

    // 3. Integration de la vue
    include_once "../src/views/category/update.php";
}

// Suppression d'une catégorie
function category_delete()
{
    // 1. Recupération des "Models" / Données

    // 2. Traitement des données

    // 3. Integration de la vue
    include_once "../src/views/category/delete.php";
}