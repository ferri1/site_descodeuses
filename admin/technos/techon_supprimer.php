<?php
// Quand on a cliqué sur le lien "supprimer" dans la liste des menus.

include "../../config.php";



if(!isset($_GET["technosupp"])) { // on verifie que nous avons bien l'identifiant de notre menu à supprimer.
    header ("location:techno_lister.php?technosupp=vide");
} else {
    $laTechno = laTechno($_GET["technosupp"]);
    // on a l'identifiant embarqué dans $_GET, nous supprimons la techno
    $bdd -> query("DELETE FROM techno WHERE id_techno = " . $_GET["technosupp"]);
    header ("location:techno_lister.php?technosupp=$laTechno[nomtechno]");
};
