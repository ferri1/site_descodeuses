<?php
include "config.php";

$projetAAfficher = $bdd -> query ("select nom_projet, description FROM projet WHERE id_projet = ($_GET[projetAAfficher])") -> fetch();
var_dump($projetAAfficher);


include descodeuses_PATH_SITE . "details_projet_seul.php";
