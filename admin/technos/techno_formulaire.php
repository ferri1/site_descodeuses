<?php
include "../../config.php";
include "../include/entete.php";

if(!empty($_GET["technologies"])) {
  // si j'ai un paramètre d'URL, c'est que je peux éditer la techno
  // un enregistrement déjà existant.
  $technologies = $bdd -> query("SELECT * from techno where id_techno = " . $_GET["technologies"]) -> fetch();
} else {
  $technologies = [];
   $technologies["nom_techno"] = "";
   $technologies["id_techno"] = "";
}



?>

<h1>Editer la liste des technologies</h1>
<form enctype="multipart/form-data" action="techno_formulaire_reponse.php" method="post" class="form">
<ul>
    <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

        <!-- Modifie le nom de la techno -->
    <h2>Nom de la technologie</h2>
            <!-- Récupère le texte qui est affiché actuellement s'il existe -->
    <input type="text" name="nom_techno" value="<?php echo "$technologies[nom_techno]" ?>">
    <input type="hidden" name="id_techno" value="<?php echo "$technologies[id_techno]" ?>">
    </li>
</ul>

<div class="flex" style="padding-top: 2rem">
<input type="submit" value="Envoyer" />
<button type="button"><a href="<?php echo descodeuses_URL_SITE?>admin/accueil.php">Annuler</a></button>
</div>
</form>

<?php
include "../include/footer.php" ?>
