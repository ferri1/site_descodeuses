<?php
include "../../config.php";
include "../include/entete.php";

//requête pour la table techno
global $bdd;

    $query = $bdd -> query("SELECT * from techno");
    $val = $query -> fetchAll(PDO::FETCH_ASSOC);
  ?>


<h1>Gestion des technologies</h1>
<ul class="menu-admin">

<?php
//Affichage des technologies depuis la base de donnée

    foreach($val as $technologies => $techno){
?>
    <li>
    <h2><?php echo $techno["nom_techno"] ?><h2>
    <a href="<?php echo  descodeuses_URL_SITE . "admin/technos/techno_formulaire.php?technologies=$techno[id_techno]"?>">Modifier</a>
    <a href="<?php echo  descodeuses_URL_SITE . "admin/technos/techno_supprimer.php?technosupp=$techno[id_techno]"?>">Supprimer</a>
    </li>
<?php }; ?>

    <li>
    <button><a href="<?php echo descodeuses_URL_SITE ?>admin/technos/techno_formulaire.php">Ajouter</a></button>
   </li>
</ul>

<?php
include "../include/footer.php"

?>
