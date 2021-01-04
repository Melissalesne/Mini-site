<?php
/**
 * Fichier de configuration general de l'application
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environnement d'exécution
 * 3. Définition des variables de base de données
 * 4. Définition des variables de routage
 * 5. Definition des exepressions régulières
 */


/**
 * 1. Définition des constantes
 */

// Definition du titre du site
const WEBSITE_TITLE = "Mini-site";

// Definir le chemin du répertoire "utils"
const UTILS_PATH = "../utils/";


/**
 * 2. Définition des variables d'environnement d'exécution
 */

// Environnement de développement ou production ?
// les valeur peuvent être : "prod" ou "dev"
// Par défaut, on considère que l'application s'exécute en environnement de PROD
$env = "prod";

// Liste des domaines que l'on considères comme étant des environnements de développement
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "Mini-site.local"
];


/**
 * 3. Définition des variables de base de données
 */

 //$db_type = "msql"; 
 //$db_host = null; 
 //$db_port = 3306; 
 //$db_user = null;
 //$db_pass = null; 
 //$db_schema = null;
 //$db_charset = "utf8";

 // Connection a la base de donnees 
 $db = null; 

 // Test de l'existence du fichier "database.php" 
 // Si "database.php" n'existe pas on arrete l'application
 if(!file_exists("../config/database.php"))
 {
    die("Vous devez créer le fichier \"database.php\" dans l'espace de configuration");
 }

// Inclure la config de connexion à la BDD
 require_once "../config/database.php";


/**
 * 4. Définition des variables de routage
 */

/**
 * 5. Definition des exepressions régulières
 */