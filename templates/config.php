<?php
session_start();

$nom_du_musee = "Le petit musée naïf";

$_dossier_template = "templates/";

$_url_base = "http://localhost:8888/naive_museum/";

function verif_connexion() {
  if(empty($_SESSION["droit_connexion"])) {
    header("location:connexion.php");
  }
}
