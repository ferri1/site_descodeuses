<?php

include "fonctions_utiles.php";
$nom_du_site = "Kaouane Lynda";
session_start();

$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = '';
$nomBaseDeDonnees = "descodeuse_lynda";


//On établit la connexion
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

define("descodeuses_URL_SITE", "http://localhost/site_descodeuses/");
define("descodeuses_PATH_SITE", __DIR__ . "/");



 define("URL_TEMPLATE", descodeuses_URL_SITE . "templates/");
 define("PATH_TEMPLATE", descodeuses_PATH_SITE . "templates/");

 define("NOM_DU_Site", "Mon Portfolio");
