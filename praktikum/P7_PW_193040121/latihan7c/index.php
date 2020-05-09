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

	<!-- My CSS -->
	<link rel="stylesheet" href="css/latihan7c.css">

	<link rel="icon" href="img/Sample-Icon.png">

	<title>index</title>

</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg- fixed-top">

		<div class="container">

			<img src="assets/img/brand-img.jpg" width="30" height="30" alt="">
			<a class="navbar-brand" href="#">Fahri Syabani</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<form class="form-inline" action="" method="POST">
						<input class="form-control mr-sm-2" size="40" type="search" name="keyword" placeholder="masukan keyword pencarian" aria-label="Search" autocomplete="off" autofocus>
						<button class="btn btn-outline-primary my-2 my-sm-0 mr-2" type="submit" name="cari">Cari</button>
					</form>
					<a class="nav-item btn btn-primary tombol" href="php/login.php">Login</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- akhir Navbar -->



	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Get items <span>quality</span><br> and <span>higher</span> with us</h1>
			<a class="nav-item btn btn-primary tombol" href="#panel">our work</a>
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
					<p class="nama">
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