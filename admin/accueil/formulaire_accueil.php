<?php
include "../../config.php";
include "../include/entete.php";
proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.

?>

<h1>Modification de la page d'accueil</h1>

<?php
show_error();
show_success();
?>

<!-- formulaire qui affiche les données de la page accueil et permet d'envoyer des requetes de modification + suppression à la bdd -->

<div class="form">
        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
        <form enctype="multipart/form-data" action="formulaire_accueil_reponse.php" method="post">
            <div class="field">
            <input type="text" name="titre" value="<?php echo montrerValeur("TITRE_ACCUEIL")?>" placeholder="Titre de la page" />
            </div>

        <textarea name="texteAccueil"><?php echo montrerValeur("TEXTE_ACCUEIL")?></textarea>

        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
        <div class="image_admin">
            <?php echo html_image("image/vrac/accueil.jpg", "mini_image");?>
        </div>

        <p>Choisir une autre image pour la page d'accueil :</p>
        <input name="imageAccueil" type="file"  accept="image/jpeg" />

        <input type="submit" value="Envoyer" />

        <a href="<?php echo descodeuses_URL_SITE ?>admin/accueil.php" class="button">Retour à l'accueil de l'admin</a>

    </form>

<?php

include "../include/footer.php";
