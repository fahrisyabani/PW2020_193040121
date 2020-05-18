<?php

//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
	$elektronik = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Istok+Web&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&family=Work+Sans:wght@300&display=swap" rel="stylesheet">

	<!-- My CSS -->
	<link rel="stylesheet" href="css/index.css">

	<link rel="icon" href="img/Sample-Icon.png">

	<title>index</title>

</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

		<div class="container">

			<img src="assets/img/brand-img.jpg" width="30" height="30" alt="" style="border-radius: 50px; margin-right: 10px;">
			<a class="navbar-brand" href="#">Tokoku</a>
			<a class="nav-item btn kategori" style="color: #9e9e9e">kategori</a>
			<div class="btn-group">
				<button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Elektronik</a>
					<a class="dropdown-item" href="#">Dapur</a>
					<a class="dropdown-item" href="#">Kesehatan</a>
					<a class="dropdown-item" href="#">Fashion</a>
					<a class="dropdown-item" href="#">Kecantikan</a>
					<a class="dropdown-item" href="#">Aksesoris</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"></a>
				</div>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">

					<form class="form-inline" action="" method="POST">
						<input class="form-control mr-sm-2" size="100" type="search" name="keyword" style="font-weight: 200; font-size: 14px;" placeholder="masukan keyword pencarian" aria-label="Search" autocomplete="off" autofocus>
						<button class="btn btn-outline-primary my-2	my-sm-0 mr-2" type="submit" name="cari">Cari</button>
					</form>

					<button class="btn btn-outline-dark my-2 my-sm-0 mr-2" type="submit" name="#">
						<svg class="bi bi-bag-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z" />
						</svg>
					</button>
					<a class="nav-item btn btn-primary tombol ml-1" href="php/login.php">Login</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- akhir Navbar -->



	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Get items <span>quality</span><br> and <span>higher</span> with us</h1>
			<a class="nav-item btn btn-primary tombol" href="#panel">View all</a>
		</div>
	</div>

	<!-- akhir Jumbotron -->

	<!-- container -->
	<div class="container">

		<!-- info Panel -->
		<div class="row justify-content-center" id="panel">
			<div class="col-6 info-panel">
				<div class="row">
					<div class="col-lg">
						<img src="assets/img/employe.png" alt="Employe" class="float-left">
						<h4>Elektronik</h4>
						<p>Pilihan Barang elektronik <br>kesayangan anda.</p>
					</div>
				</div>
				<?php foreach ($elektronik as $etk) : ?>
					<p class="nama-barang">
						<a href="php/detail.php?id=<?= $etk['id'] ?>"><?= $etk["nama_barang"] ?></a>
					</p>
				<?php endforeach; ?>
				<?php if (empty($elektronik)) : ?>
					<tr>
						<td>
							<p style="margin-bottom: 400px; font-size: 50px; color: red; font-style: italic; text-align: center;">Data elektronik tidak ditemukan!</p>
						</td>
					</tr>
				<?php endif; ?>
			</div>
		</div>
		<!-- akhir info Panel -->

		<!-- Footer -->
		<div class="row footer">
			<div class="col text-center">
				<p>2020 All Rights Reserved by Fahri Syabani.</p>
			</div>
		</div>
		<!-- akhir Footer -->


	</div>
	<!-- akhir container -->






	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/script.js"></script>
</body>

</html>