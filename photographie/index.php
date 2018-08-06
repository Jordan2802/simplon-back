<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Photographie Website</title>
	<meta name="description" content="A photography-inspired website layout with an expanding stack slider and a background image tilt effect" />
	<meta name="keywords" content="photography, template, layout, effect, expand, image stack, animation, flickity, tilt" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/flickity.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>

	<div class="container">
		<div class="hero">
			<div class="hero__back hero__back--static"></div>
			<div class="hero__back hero__back--mover"></div>
			<div class="hero__front"></div>
		</div>
		<header class="codrops-header">
			<h1 class="codrops-title"><img src="img/logo.png" alt="img01" width="250px"/> <span>Charleville</span></h1>
		</header>

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
		          <h2 class="stack-title"><a href="#" data-text="<?php echo $genre ?>"><span><?php echo $genre ?></span></a></h2>

		<!-- Création d'un Article -->
		<?php while ($donnees = $requeteAll->fetch())
		{
			$IDPhoto =  $donnees['ID_photo'];
			$titlePhoto =  $donnees['title_photo'];
			$portrait = $donnees['portrait_photo'];
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
		<div class="item">
		  <div class="item__content">
				<?php
				while ($donnees = $requeteGenrephoto->fetch())
				{
					$genre =  $donnees["genre"];
					$IDGenre = $donnees["ID_genre"];
					$portrait = $donnees['portrait_photo'];
				 ?>
		    <img src="img/<?php echo $portrait ?>" alt="<?php echo $portrait ?>" />
			<?php }
				 $requeteGenrephoto->closeCursor(); // Termine le traitement de la requête
			?>
		    <h3 class="item__title"><?php echo $titlePhoto  ?> <span class="item__date"><?php echo $date ?></span></h3>
		    <div class="item__details">
		      <ul>
		        <li><i class="icon icon-camera"></i><span><?php echo $camera ?></span></li>
		        <li><i class="icon icon-focal_length"></i><span><?php echo $focal ?>mm</span></li>
		        <li><i class="icon icon-aperture"></i><span>&fnof;/<?php echo $aperture ?></span></li>
		        <li><i class="icon icon-exposure_time"></i><span><?php echo $exposure ?></span></li>
		        <li><i class="icon icon-iso"></i><span><?php echo $iso ?></span></li>
		      </ul>
		    </div>
		  </div>
		</div>
	<?php }
		 $requeteAll->closeCursor(); // Termine le traitement de la requête
	?>
		<!-- Fin d'un Article -->
		</div>
		<?php
		}
		$requeteGenre->closeCursor(); // Termine le traitement de la requête
		 ?>
		<!-- Fin d'une catégorie -->
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
