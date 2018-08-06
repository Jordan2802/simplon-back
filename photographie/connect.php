<?php

###########################################
############ PDO-Extension #############
###########################################


$host_name = 'db745063202.db.1and1.com';
$database = 'db745063202';
$user_name = 'dbo745063202';
$password = '!Jordan018';

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

      $requeteGenrephoto = $dbh->query('SELECT * FROM photography
                                        INNER JOIN appartenir
                                        ON appartenir.ID_photo = photography.ID_photo
                                        INNER JOIN genre
                                        ON genre.ID_genre = appartenir.ID_genre
                                        WHERE genre.genre = "nature"');

?>
