<?php 

function security_login()
{
    // 1. Recupération des "Models" / Données
    // 2. Traitement des données
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {

    }

    // 3. Integration de la vue
    include_once "../src/views/security/login.php";
}


function security_register()
{
    // Age minimum
    $min_age = 13;

    // Dates pour le champs Birthday year
    $date_start = date("Y") - $min_age;
    $date_end = $date_start - 100 ;


    // Default values
    $firstname   = null;
    $lastname    = null;
    $birth_day   = null;
    $birth_month = null;
    $birth_year  = null;
    $email       = null;

    

    // 1. Recupération des "Models" / Données
    // 2. Traitement des données
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        echo "Traitement du form<br>";
        echo "Enregistrement BDD<br>";
        echo "Redirection vers login<br>";
        exit;

        redirectToRoute('register');
    }


    // 3. Integration de la vue
    include_once "../src/views/security/register.php";
}


function security_forgotten_password()
{
    // 1. Recupération des "Models" / Données

    // 2. Traitement des données

    // 3. Integration de la vue
    include_once "../src/views/security/forgotten_password.php";
}


function security_renew_password()
{
    // 1. Recupération des "Models" / Données

    // 2. Traitement des données

    // 3. Integration de la vue
    include_once "../src/views/security/renew_password.php";
}

function security_logout()
{
    // Traitement des données
    session_destroy();

    redirectToRoute("homepage");
}