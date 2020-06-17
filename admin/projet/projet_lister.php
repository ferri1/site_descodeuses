<?php
include "../../config.php";

// include "../../fonctions.php";

include "../include/entete.php";

proteger_page();

show_error();
show_success();

?>

<div class="projet">
    <a href="<?php echo descodeuses_URL_SITE ?>admin/accueil.php">Retour à l'accueil</a>
    <a href="<?php echo descodeuses_URL_SITE?>admin/projet/projet_formulaire.php">Ajouter un projet</a>
</div>


<div class="list">
    <?php
        $results = $bdd -> query("SELECT * FROM projet order by ordre") -> fetchAll();

        if(count($results) == 0) {
            echo "Aucun projet ! Vous pouvez en insérer un nouveau.";
        } else {
            echo "<ul>";

            foreach($results as $result) {
                $lienModifier = html_a("Modifier", descodeuses_URL_SITE . "admin/projet/projet_formulaire.php?projetAAfficher=$result[id_projet]");
                $lienSupprimer = html_a("Supprimer", descodeuses_URL_SITE . "admin/projet/projet_supprimer.php?projetASupprimer=$result[id_projet]", "alert", "Êtes-vous sûr de vouloir effacer ce projet ?");

                echo "<li>$result[nom_projet] ( $lienModifier | $lienSupprimer)</li>";

            }

            echo "</ul>";
        }




    ?>

</div>


<?php

include "../include/footer.php";
