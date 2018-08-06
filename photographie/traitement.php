<?php
 include('connect.php');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <title></title>
  </head>
  <body>
    <form class="formuTrait" action="../index.php" method="post">
    <label for="titre">titre</label>  <input type="text" name="titre" value=""> <br>
    <label for="portrait">portrait</label>  <input type="text" name="portrait" value=""><br>
    <label for="date">date</label>  <input type="text" name="date" value=""><br>
    <label for="camera">camera</label>  <input type="text" name="camera" value=""><br>
    <label for="focal">focal</label>  <input type="text" name="focal" value=""><br>
    <label for="aperture">aperture</label>  <input type="text" name="aperture" value=""><br>
    <label for="exposure">exposure</label>  <input type="text" name="exposure" value=""><br>
    <label for="iso">iso</label>  <input type="text" name="iso" value=""><br>
      <input type="submit" name="valider" class="button" value="inserer"><a href="../index.php" class="annuler">Annuler</a>
    </form>
  </body>
</html>
<?php
 if (isset ($_POST['valider'])){
$title =  $_POST['titre'];
$portrait = $_POST['portrait'];
$date =  $_POST['date'];
$camera = $_POST['camera'];
$focal = $_POST['focal'];
$aperture = $_POST['aperture'];
$iso = $_POST['iso'];
$exposure = $_POST['exposure'];

$dbh->query( "INSERT INTO `photography`(`ID_photo`, `title_photo`, `portrait_photo`, `date_photo`, `camera_photo`, `focal_photo`, `aperture_photo`, `exposure_photo`, `iso_photo`)
             VALUES ('','$title','$portrait','$date','$camera','$focal','$aperture','$exposure','$iso')");
}
 ?>
