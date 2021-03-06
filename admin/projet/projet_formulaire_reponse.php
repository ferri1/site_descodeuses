<?php
include "../../config.php";
include "../include/entete.php";

proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.


if(!empty($_POST)) {

  if($_POST["id_projet"] == 0) {

    $query = $bdd -> prepare ("INSERT INTO projet (nom_projet, description, url_image, annee, client, lien, ordre) VALUES (:nom_projet, :description, :url_image, :annee, :client, :lien, :ordre)");
    $query -> execute([
        ":nom_projet" => $_POST["nom_projet"],
        ":description" =>  $_POST["description"],
        ":url_image" =>  $_POST["url_image"],
        ":annee" => $_POST["annee"],
        ":client" =>  $_POST["client"],
        ":lien" =>  $_POST["lien"],
        ":ordre" =>  $_POST["ordre"],
        ]);


        $projetID = $bdd -> lastInsertId(); // Dans PHP, retourne l'identifiant de la dernière ligne insérée en base.
        ajouterSuccess("Vous avez ajouté un nouveau projet $projetID");


    } else {// un id est envoyé alors je modifie un enregistrement.
        $query = $bdd -> prepare ("UPDATE projet SET
                                  nom_projet = :nom_projet,
                                  description = :description,
                                  url_image = :url_image,
                                  annee = :annee,
                                  client = :client,
                                  lien = :lien,
                                  ordre = :ordre,
                                  WHERE id_projet = :idProjet");

        $query -> execute(
            [ ":nom_projet" => $_POST["nom_projet"],
              ":description" =>  $_POST["description"],
              ":url_image" =>  $_POST["url_image"],
              ":annee" => $_POST["annee"],
              ":client" =>  $_POST["client"],
              ":lien" =>  $_POST["lien"],
              ":ordre" =>  $_POST["ordre"],
              ":idProjet" => $_POST["id_projet"],
            ]
        );
var_dump($bdd->errorinfo());
        $projetID = $_POST["id_projet"];

        ajouterSuccess("Vous avez modifié le projet");
    }
}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageProjet"], "templates/images/$projetID.jpg"); // ici on change le chemin d'enregistrement des photos et le nom des dossiers
}

var_dump($_POST);
// changeDePage(URL_SITE . "admin/admin_projets/projets_liste_admin.php");
