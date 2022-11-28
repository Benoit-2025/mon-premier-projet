<?php

// d'claration de la session

session_start();

// connexion à la BDD

try{

    $sgbd = "mysql";
    $host = "localhost";
    $dbname = "mon_projet";
    $username = "root";
    $password = "";
    $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $bdd = new PDO("$sgbd:host=$host;dbname=$dbname", $username, $password, $option);


} catch (Exception $e) {
    die("ERREUR CONNECTION BDD : " . $e->getMessage());

}

// Définition des constantes d'URL et de RACINE_SITE
define("RACINE_SITE", str_replace("\\", "/", str_replace("inc", "", __DIR__)));
define("URL", "http://$_SERVER[HTTP_HOST]" . str_replace($_SERVER['DOCUMENT_ROOT'], "", RACINE_SITE ));



//require du fichier function.php
require_once RACINE_SITE . "inc/function.php";



?>