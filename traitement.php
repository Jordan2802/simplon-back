<?php
 include('connect.php');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <input type="text" name="titre" value="titre">
      <input type="text" name="portrait" value="portrait">
      <input type="text" name="date" value="date">
      <input type="text" name="camera" value="camera">
      <input type="text" name="focal" value="focal">
      <input type="text" name="aperture" value="aperture">
      <input type="text" name="exposure" value="exposure">
      <input type="text" name="iso" value="iso">
      <input type="text" name="genre" value="genre">
      <input type="text" name="auteur" value="auteur">
      <input type="text" name="redacteur" value="redacteur">
      <input type="submit" name="" value="inserer">
    </form>
  </body>
</html>
<?php


$title =  $_POST['titre'];
$portrait = $_POST['portrait'];
$date =  $_POST['date'];
$genre =  $_POST['genre'];
$auteur =  $_POST['auteur '] ;
$redacteur = $_POST['redacteur'];
$camera = $_POST['camera'];
$focal = $_POST['focal'];
$aperture = $_POST['aperture'];
$iso = $_POST['iso'];
$exposure = $_POST['exposure'];

$sql = INSERT INTO photography VALUES($title, $portrait, $date, $camera, $focal, $iso, $exposure, $aperture)
$sql->execute()
 ?>
