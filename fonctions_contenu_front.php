<?php


function tousLesProjet () {
    // retourne tous les menus
    global $bdd;
    return $bdd -> query("select * from projet order by ordre") -> fetchAll(PDO::FETCH_ASSOC);
}

function unProjet ($idProjet) {
    // retourne toutes les informations du menu qui a comme identifiant $idMenu

    global $bdd;

    $query = $bdd -> prepare("select * from projet where id_projet = :idProjet");
    $query -> execute([":idProjet" => $idProjet]);

    return $query -> fetch(PDO::FETCH_ASSOC); // on utilise fetch et non fetchAll car nous souhaitons retourner un seul résultat.

}
