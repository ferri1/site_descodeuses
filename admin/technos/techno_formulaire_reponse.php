<?php
// Cette page reçoit les informations du formulaire qui se trouve sur form_techno.php

include "../../config.php";


if(!empty($_POST)) {
    //
    // si le formulaire de technologie n'est pas vide et s'il n'a pas d'id (id_techno == 0), alors j'ajoute la saisie à ma bdd
    //

    if(empty($_POST["id_techno"]) || $_POST["id_techno"] == 0) {
        // je n'envoie pas d'ID donc je peux ajouter une nouvelle techno

        $query = $bdd -> prepare ("INSERT INTO techno (nom_techno) VALUES (:nom)");

        $query -> execute([
            ":nom" => $_POST["nom_techno"],
        ]);

        $technoID = $bdd -> lastInsertId(); // lastInsertId retourne l'identifiant de la dernière ligne insérée en base de données. Ici, c'est l'ID de la techno que nous venons d'ajouter dans la base. SQL va lui assigner un id puisque l'incrémentation se fait automatique. J'encapsule cette valeur dans une variable $technoID pour pouvoir la traiter plus tard si besoin
            header ("location:techno_lister.php?newtechno=$_POST[nom_techno].$technoID");
            exit;

    } else {
        // un id connu de ma $bdd est envoyé, alors je modifie un enregistrement.
        $query = $bdd -> prepare ("UPDATE techno SET nom_techno = :nom WHERE id_techno = :idtechno");
        $query -> execute(
            [
                ":nom" => $_POST["nom_techno"],
                ":idtechno" => $_POST["id_techno"],
            ]
        );

        $technoID = $_POST["id_techno"]; // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID de la techno à modifier dans la base.

        header ("location:techno_lister.php?technologies=$_POST[nom_techno].$technoID");
    }
}
