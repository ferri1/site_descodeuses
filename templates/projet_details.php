<?php include  PATH_TEMPLATE  .   "include/head.php" ?>


  <?php include  PATH_TEMPLATE  ."include/header.php" ?>
<?php

     function tousLesProjets() {

           global $bdd;
           return $bdd -> query("select id_projet, nom_projet, GROUP_CONCAT(nom_techno SEPARATOR '<br>') as technos, url_image from projet, techno, projet_techno where techno.id_techno = projet_techno.techno_id and projet_techno.projet_id = projet.id_projet group by projet.nom_projet order by ordre") ->
           fetchAll(PDO::FETCH_ASSOC);

       }

       function tousLesTechno() {

           global $bdd;
           return $bdd -> query("select nom_techno from techno order by id_techno") ->
           fetchAll(PDO::FETCH_ASSOC);

       }

?>

    <div class="container-div">
      <h1><?php echo montrerValeur("TITRE_ACCUEIL")?></h1>
      <h1>Je vous presente mes Projets en Ordre</h1>
<!--A FAIRE si id_techno existe dans le post, afficher les projets correspondants à cet id. Sinon, les afficher comme dessous (voir boutons techno en bas et réflechir à une solution)-->
        <?php foreach(tousLesProjets() as $projet) {

          echo "<div class='project'><h2>";
          echo html_a($projet["nom_projet"], descodeuses_URL_SITE . "projet_seul.php?projetAAfficher=$projet[id_projet]");

          echo "</h2><div class='affichage_techno'>$projet[technos]</div>";

          echo  html_image("$projet[url_image]", "image_project");

          echo "</div>";
        }
    ?>


        <form class="" action="index.php" >

</form>
    <div class="liste_techno">
      <h3>Ou selectionnez une technologie pour voir les projets</h3>
      <ul>

        <?php foreach( tousLesTechno() as $techno ) {
            echo "<form action='techno_formulaire_reponse.php' method='post'><input type='hidden' name='id_techno'></form>";
            echo "<li>";
            echo html_a($techno["nom_techno"]);
            echo "</li>";
        }
        ?>
      </ul>
    </div>
  </div>







<?php include  PATH_TEMPLATE  . "include/footer.php" ?>
