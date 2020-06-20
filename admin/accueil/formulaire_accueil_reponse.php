<?php
// Cette page reçoit les informations du formulaire qui se trouve sur formulaire_accueil.php

include "../../config.php";

proteger_page(); // on ne peut pas acceder à la page sans être connecté.

if(!empty($_POST)) {
enregistreValeur("TITRE_ACCUEIL", $_POST["titre"]);
enregistreValeur("TEXTE_ACCUEIL", $_POST["texteAccueil"]);


}

if(!empty($_FILES["photo_profil"]) && $_FILES["photo_profil"]["error"] == 0) {
    enregistrerFichier($_FILES["imageAccueil"], "templates/images/accueil.jpg");
}

ajouterSuccess("Nous avons enregistré la page d'accueil");

changeDePage(descodeuses_URL_SITE . "admin/accueil.php");
