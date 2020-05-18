<?php
// Mengecek apakah ada id yang dikimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$elektronik = query("SELECT * FROM elektronik WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Istok+Web&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">


	<!-- My CSS -->
	<link rel="stylesheet" href="../css/detail.css">

	<link rel="icon" href="img/Sample-Icon.png">

	<title>Detail</title>

</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">

		<div class="container">

			<img src="../assets/img/brand-img.jpg" width="30" height="30" alt="" style="border-radius: 50px; margin-right: 10px;">
			<a class="navbar-brand mr-5" href="#">Tokoku
				<svg class="bi bi-award" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z" clip-rule="evenodd" />
					<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
				</svg>
				<svg class="bi bi-award" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z" clip-rule="evenodd" />
					<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
				</svg>
				<svg class="bi bi-award" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z" clip-rule="evenodd" />
					<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
				</svg>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<button class="btn btn-outline-dark my-2	my-sm-0 mr-1" type="submit" name="cari" class="tombol-cari">
						<svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" clip-rule="evenodd" />
						</svg>
					</button>
					<button type="button" class="btn btn-outline-warning mr-2 pr-5 pl-5" style="font-weight: 200;">Beli</button>
					<button type="button" class="btn btn-warning" style="font-weight: 200;">
						<svg class="bi bi-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd" />
							<path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd" />
						</svg>
						Keranjang
					</button>
				</div>
			</div>
		</div>
	</nav>
	<!-- akhir Navbar -->




	<!-- info -->
	<div class="row workingspace">
		<div class="col-lg-6">
			<img src="../assets/img/<?= $elektronik["foto"]; ?>" alt="Workingspace" class="img-fluid">

		</div>
		<div class="col-lg-5">
			<h3 class="display-4">All <span>Needs</span> can be <br> all be <span>here.</span></h3>
			<p><?= $elektronik["nama_barang"]; ?></p>
			<a type="button" class="btn btn-primary tombol" href="admin.php">View all</a>
		</div>

	</div>

	<!-- info Panel -->
	<div class="row justify-content-center">
		<div class="col-6 info-panel">
			<div class="row">


				<div class="col-lg text-center">

					<h2>
						<svg class="bi bi-bag mb-2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M14 5H2v9a1 1 0 001 1h10a1 1 0 001-1V5zM1 4v10a2 2 0 002 2h10a2 2 0 002-2V4H1z" clip-rule="evenodd" />
							<path d="M8 1.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z" />
						</svg>
						Deskripsi
					</h2>
				</div>


			</div>
		</div>
	</div>
	<!-- akhir info Panel -->
	<section id="deskripsi" class="deskripsi bg-light pr-5 pl-5">

		<!-- container -->
		<div class="container">

			<div class="row text-center pt-5 pb-4 ">
				<div class="col">

				</div>
			</div>

			<!-- brand -->
			<div class="row mb-5 pt-5">
				<div class="col-md">
					<div class="card">
						<svg class="bi bi-house-fill mt-3 ml-3" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd" />
							<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd" />
						</svg>
						<div class="card-body mt-3">
							<h5 class="card-title">Brand</h5>
							<p class="card-text">
								<p><?= $elektronik["brand"]; ?></p>
							</p>
						</div>
					</div>
				</div>

				<!-- spesifikasi -->
				<div class="col-md">
					<div class="card">
						<svg class="bi bi-check-box mt-3 ml-3" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd" />
							<path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 003 14.5h10a1.5 1.5 0 001.5-1.5V8a.5.5 0 00-1 0v5a.5.5 0 01-.5.5H3a.5.5 0 01-.5-.5V3a.5.5 0 01.5-.5h8a.5.5 0 000-1H3A1.5 1.5 0 001.5 3v10z" clip-rule="evenodd" />
						</svg>
						<div class="card-body mt-3">
							<h5 class="card-title">Spesifikasi</h5>
							<p class="card-text">
								<p><?= $elektronik["spesifikasi"]; ?></p>
							</p>
						</div>
					</div>
				</div>

				<!-- keunggulan -->
				<div class="col-md">
					<div class="card">
						<svg class="bi bi-clipboard-data mt-3 ml-3" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M4 1.5H3a2 2 0 00-2 2V14a2 2 0 002 2h10a2 2 0 002-2V3.5a2 2 0 00-2-2h-1v1h1a1 1 0 011 1V14a1 1 0 01-1 1H3a1 1 0 01-1-1V3.5a1 1 0 011-1h1v-1z" clip-rule="evenodd" />
							<path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5zm-3-1A1.5 1.5 0 005 1.5v1A1.5 1.5 0 006.5 4h3A1.5 1.5 0 0011 2.5v-1A1.5 1.5 0 009.5 0h-3z" clip-rule="evenodd" />
							<path d="M4 11a1 1 0 112 0v1a1 1 0 11-2 0v-1zm6-4a1 1 0 112 0v5a1 1 0 11-2 0V7zM7 9a1 1 0 012 0v3a1 1 0 11-2 0V9z" />
						</svg>
						<div class="card-body mt-3">
							<h5 class="card-title">Keunggulan</h5>
							<p class="card-text">
								<p><?= $elektronik["keunggulan"]; ?></p>
							</p>
						</div>
					</div>
				</div>
			</div>

			<!-- tanggal rilis -->
			<div class="row mb-5">
				<div class="col-md">
					<div class="card">
						<svg class="bi bi-calendar-fill mt-3 ml-3" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 2a2 2 0 012-2h12a2 2 0 012 2H0z" />
							<path fill-rule="evenodd" d="M0 3h16v11a2 2 0 01-2 2H2a2 2 0 01-2-2V3zm6.5 4a1 1 0 100-2 1 1 0 000 2zm4-1a1 1 0 11-2 0 1 1 0 012 0zm2 1a1 1 0 100-2 1 1 0 000 2zm-8 2a1 1 0 11-2 0 1 1 0 012 0zm2 1a1 1 0 100-2 1 1 0 000 2zm4-1a1 1 0 11-2 0 1 1 0 012 0zm2 1a1 1 0 100-2 1 1 0 000 2zm-8 2a1 1 0 11-2 0 1 1 0 012 0zm2 1a1 1 0 100-2 1 1 0 000 2zm4-1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd" />
						</svg>
						<div class="card-body mt-3">
							<h5 class="card-title">Tanggal Rilis</h5>
							<p class="card-text">
								<p><?= $elektronik["tanggal_rilis"]; ?></p>
							</p>
						</div>
					</div>
				</div>

				<!-- harga -->
				<div class="col-md mb-5">
					<div class="card">
						<svg class="bi bi-plus-square-fill mt-3 ml-3" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2zm6.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd" />
						</svg>
						<div class="card-body mt-3">
							<h5 class="card-title">Harga</h5>
							<p class="card-text">
								<p><?= $elektronik["harga"]; ?></p>
							</p>
						</div>
					</div>
				</div>
			</div>




		</div>
		<!-- akhir container -->

	</section>










	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>