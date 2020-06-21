   <?php include  PATH_TEMPLATE  .   "include/head.php" ?>


     <?php include  PATH_TEMPLATE  ."include/header.php" ?>


     <div class="container-div">
      <h1><?php echo montrerValeur("TITRE_ACCUEIL")?></h1>
      <div class="texte">
        <div class="">
            <?php echo montrerValeur("TEXTE_ACCUEIL")?>
        </div>
        <div class="image_admin">
        <?php echo html_image("templates/images/accueil.jpg", "mini_image");?>
        </div>
      </div>
    </div>

        <div class="div-Container">

           <img   src="templates/images/lynda.jpg" alt="" class="picture-left">
             <div class="paragraph-right">
                  <h2>Ferri Lynda</h2>
                  <h2>Développeuse Web Fullstack</h2>

                  <p class="p">Développeuse dans l'âme, je suis toujours passionnée  par l’informatique.
                    Développeuse Full Stack  étant donné les techniques utilisées de nos jours,
                    je pratique  les langages du web (Javascript, HTML, CSS, PHP, Wordpress, frameworks ...).
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

         </div>
         <br>
         <section class="grid">

           <div class="presentation pink">
                <h3>une bonne Présentation :</h3>
                 <p> Le codage, c’est la programmation informatique, ce qui permet l’écriture des programmes pour développer des logiciels, ou une page web, par exemple, mais aussi pour dire à une machine ce qu’elle doit faire, la guider. Pourquoi ? Parce-que l’on aimerait que cette page d’infos s’ouvre lorsqu’on clique là, que le texte apparaisse sur fond rose, que la machine dirige le jet d’eau pression comme il faut pour découper une pièce de métal, etc … Les finalités peuvent être très diverses mais le code est le langage initial nécessaire à ces usages.</p> <!--select quote from accueil*/-->
           </div>
           <div class="bonjour pink">
               <h3>bonjour</h3>
               <p>I show you my projects in detail.<br>
                 just with the pictures you can understand my projects.<br>
                  Is great work!!.</p>
           </div>

              <div class="assets pink">
                  <h3>Mes autres passions :</h3>
                     <ul>
                      <li>Gestion des projets</li>
                      <li>Finace et Controle de Gestion</li>
                      <li>bénévolat aux associations culturel berbères</li>
                      <li>Lecture et spoort (hand-ball)</li>
                      <li>Voyage</li>
                  </ul>
              </div>
              <div class="profil">
                  <img class="profil-tof" src="<?php echo URL_TEMPLATE ?>images/htmlcss.png" alt="">

              </div>




        </section>


      <?php include  PATH_TEMPLATE  .  "include/footer.php" ?>
