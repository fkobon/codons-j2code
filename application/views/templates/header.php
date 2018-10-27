<!DOCTYPE html>
<html>
	<head>
		<title>Codons Maintenant !</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="<?= base_url('public/bootstrap.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/style.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/fa/css/font-awesome.min.css') ?>">
	</head>
	<body>
		<div class="navcontainer">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light" style="padding: 30px 0;">
				  	<a class="navbar-brand" href="#">
				    	<h2 id="logotext">Codons <span>Maintenant !</span></h2>
				  	</a>
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
				  	</button>

				  	<div class="collapse navbar-collapse float-right" id="navbarNavAltMarkup">
					    <div class="navbar-nav ml-auto" id="menuitems">
					      	<a class="nav-item nav-link active" href="<?= site_url() ?>">Accueil<span class="sr-only">(current)</span></a>
					      	<a class="nav-item nav-link" href="<?= site_url('a-propos') ?>">A propos</a>
					      	<a class="nav-item nav-link" href="<?= site_url('contact') ?>">Contact</a>
					      	<!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
					    </div>
				  	</div>
				</nav>
			</div>
		</div>