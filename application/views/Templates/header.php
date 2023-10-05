<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<title><?= $title; ?></title>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?= base_url(); ?>">
				<img width="50" src="<?= base_url(); ?>/assets/img/logo.PNG"></img>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>C_Ble">Heart Rate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>C_Ble/chart">Chart</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>C_Nama">Nama</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>