<!-- Création d'une catégorie -->
<div class="stack-slider">
  <div class="stacks-wrapper">
    <?php
    while ($donnees = $requeteGenre->fetch())
    {
      $genre =  $donnees["genre"];
      $IDGenre = $donnees["ID_genre"];
     ?>
    <!-- Création d'une catégorie -->
    <div class="stack">

          <h2 class="stack-title"><a href="#" data-text=<?php echo $genre ?>><span><?php echo $genre ?></span></a></h2>

    </div>
        <?php while ($donnees = $requeteAll->fetch())
        {
          $IDPhoto =  $donnees['ID_photo'];
          $titlePhoto =  $donnees['title_photo'];
          $portait = $donnees['portrait_photo'];
          $date =  $donnees["date_photo"];
          $genre =  $donnees["genre"];
          $auteur =  $donnees["nom_auteur"] ;
          $redacteur = $donnees["nom_redacteur"];
          $camera = $donnees["camera_photo"];
          $focal = $donnees["focal_photo"];
          $aperture = $donnees["aperture_photo"];
          $iso = $donnees["iso_photo"];
          $exposure = $donnees["exposure_photo"];
           ?>

        <!-- Création d'un Article -->
        <div class="item">
          <div class="item__content">
            <img src="img/image1.jpg" alt="" />
            <h3 class="item__title"><?php echo $titlePhoto ?> <span class="item__date"><?php echo $date ?></span></h3>
            <div class="item__details">
              <ul>
                <li><i class="icon icon-camera"></i><span><?php echo $camera ?></span></li>
                <li><i class="icon icon-focal_length"></i><span><?php echo $focal ?></span></li>
                <li><i class="icon icon-aperture"></i><span>&fnof;<?php echo $aperture ?></span></li>
                <li><i class="icon icon-exposure_time"></i><span><?php echo $exposure ?></span></li>
                <li><i class="icon icon-iso"></i><span><?php echo $iso ?></span></li>
              </ul>
            </div>
          </div>
        </div>
    <?php }

       $requeteAll->closeCursor(); // Termine le traitement de la requête
    ?>

    <?php
    }

    $requeteGenre->closeCursor(); // Termine le traitement de la requête
     ?>
      <!-- Fin d'un Article -->



  </div>
  <!-- /stacks-wrapper -->
</div>
<!-- /stacks -->
<img class="loader" src="img/three-dots.svg" width="60" alt="Loader image" />
</div>
<!-- /container -->
<!-- Flickity v1.0.0 http://flickity.metafizzy.co/ -->
<script src="js/flickity.pkgd.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/main.js"></script>
</body>
</html>
