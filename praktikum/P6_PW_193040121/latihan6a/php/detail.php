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
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/latihan6a.css">
</head>

<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?= $elektronik["foto"]; ?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $elektronik["nama_barang"]; ?></p>
			<p><?= $elektronik["brand"]; ?></p>
			<p><?= $elektronik["spesifikasi"]; ?></p>
			<p><?= $elektronik["keunggulan"]; ?></p>
			<p><?= $elektronik["tanggal_rilis"]; ?></p>
			<p><?= $elektronik["harga"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">kembali</a></button>
	</div>
</body>

</html>