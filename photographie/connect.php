<?php

###########################################
############ PDO-Extension #############
###########################################


$host_name = 'localhost';
$database = 'photography';
$user_name = 'root';
$password = '';

$dbh = null;
try {
  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
}
    $requeteAll = $dbh->query('SELECT * FROM photography
      INNER JOIN appartenir
      ON appartenir.ID_photo = photography.ID_photo
      INNER JOIN genre
      ON genre.ID_genre = appartenir.ID_genre
      INNER JOIN avoir
      ON avoir.ID_photo = photography.ID_photo
      INNER JOIN redacteur
      ON redacteur.ID_redacteur = avoir.ID_redacteur
      INNER JOIN fournir
      ON fournir.ID_photo = photography.ID_photo
      INNER JOIN auteur
      ON auteur.ID_auteur = fournir.ID_auteur
      ');

      $requeteGenre = $dbh->query('SELECT * FROM genre ORDER BY genre ');

      $requeteGenrePhoto = $dbh->query('SELECT * FROM photography
        INNER JOIN appartenir
        ON appartenir.ID_photo = photography.ID_photo
        WHERE ID_genre = "'.$_POST["genre_id"].'"');

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    while ($donnees = $requeteGenre->fetch())
    {
      $genre =  $donnees["genre"];
      $IDGenre = $donnees["ID_genre"];
     ?>
     <form class="" action="" method="post">
       <label for="<?php echo $IDGenre ?>"> <h2 class="stack-title"><a href="#" data-text="Portraits"><span><?php echo $genre ?></span></a></h2></label>
          <input type="hidden" name="genre_id" value="<?php echo $IDGenre ?>">
     </form>

     <?php
     }

     $requeteGenre->closeCursor(); // Termine le traitement de la requête
      ?>
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
        <img src="img/type1/1.jpg" alt="img01" />
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
while ($donnees = $requeteGenrePhoto->fetch())
    {
      ?>
        <form class="" action="" method="post" >
          <label for="<?php echo $donnees["genre"]; ?>"> <?php echo $donnees["genre"]; ?></label> <br>
        </form>

      <?php
    }
    $requeteGenrePhoto->closeCursor(); // Termine le traitement de la requête
?>

  </body>
</html>
