
<?php include  PATH_TEMPLATE  .   "include/head.php" ?>


  <?php include  PATH_TEMPLATE  ."include/header.php" ?>

  <div class="title">
    <h1>Contactez moi, Je suis disponible</h1>
</div>

  <div class="contact">
      <form id="contact" method="post" action="traitement_formulaire_contact.php">
            <fieldset><legend>Vos coordonnées :</legend><br>
              <label for="nom">Nom :</label><input type="text" id="nom" name="nom" />
              <label for="email">Email :</label><input type="text" id="email" name="email" />
            </fieldset><br>

            <fieldset><legend>Votre message :</legend><br>
              <label for="objet">Objet :</label><input type="text" id="objet" name="objet" /><br>
              <label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8"></textarea>
            </fieldset><br>

            <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
    </form>
</div>
  <div class="grid">
    <div class="bloc-contact phone">
        <img class="contact-moi" src="<?php echo  URL_TEMPLATE ?>images/telephone.png" alt="">
        <div class="figcaption-contact">
            <h3>Appelez-moi</h3>
            <p><a href="tel:07 67 88 83 99">07 67 88 83 99</a></p>
        </div>
    </div>

    <div class="bloc-contact net">
    <img class="contact-moi" src="<?php echo  URL_TEMPLATE ?>images/chat.png" alt="">
        <div class="figcaption-contact">
            <h3>Restons en contact</h3>
            <div>
                <p>Github</p>
                <a href="https://github.com/ferri1" target="_blank"><i class="fab fa-github-square"></i>
                </a>
            </div>
            <div class="linkedin flex">
                <p>LinkedIn</p>
                <a href="https://www.linkedin.com/in/lynda-ferri-a05b5915a/" target="_blank"><i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
  </div>






  <?php include  PATH_TEMPLATE  . "include/footer.php" ?>
