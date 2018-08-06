<?php
 include('Photographie/connect.php');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="titre" value="titre"> <br>
      <input type="text" name="portrait" value="portrait"><br>
      <input type="text" name="date" value="date"><br>
      <input type="text" name="camera" value="camera"><br>
      <input type="text" name="focal" value="focal"><br>
      <input type="text" name="aperture" value="aperture"><br>
      <input type="text" name="exposure" value="exposure"><br>
      <input type="text" name="iso" value="iso"><br>
      <input type="submit" name="valider" value="inserer">
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
?>

<?php
}
 ?>
 <?php
 $foo = 'Pierre';              // Assigne la valeur 'Pierre' à $foo
 $bar = &$foo;                 // Référence $foo avec $bar.
 $bar = "Mon nom est $bar";  // Modifie $bar...
 echo $foo;                    // $foo est aussi modifiée
 echo $bar;
 ?>
