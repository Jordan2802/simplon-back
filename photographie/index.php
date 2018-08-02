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
				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Portraits"><span>Portraits</span></a></h2>
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/type1/1.jpg" alt="img01" />
							<h3 class="item__title">Hoodie stumptown kitsch <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/type1/1.jpg" alt="img01" />
							<h3 class="item__title">Hoodie stumptown kitsch <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
				</div>
				<!-- Fin d'une catégorie -->
				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Portraits"><span>Paysages</span></a></h2>
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/type1/1.jpg" alt="img01" />
							<h3 class="item__title">Hoodie stumptown kitsch <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/type1/1.jpg" alt="img01" />
							<h3 class="item__title">Hoodie stumptown kitsch <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
				</div>

				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Portraits"><span>Nature</span></a></h2>
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/type1/1.jpg" alt="img01" />
							<h3 class="item__title">Hoodie stumptown kitsch <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/type1/1.jpg" alt="img01" />
							<h3 class="item__title">Hoodie stumptown kitsch <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
				</div>

				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Portraits"><span>Voyage</span></a></h2>
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/type1/1.jpg" alt="img01" />
							<h3 class="item__title">Hoodie stumptown kitsch <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/type1/1.jpg" alt="img01" />
							<h3 class="item__title">Hoodie stumptown kitsch <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
				</div>

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
