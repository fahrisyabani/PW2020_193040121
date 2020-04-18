<?php 

	//menghubungkan dengan file php lainnya
	require 'php/functions.php';

	//melakukan query
	$elektronik = query("SELECT * FROM elektronik")

?>		
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas 2</title>
	<link rel="stylesheet" type="text/css" href="css/latihan5b.css">
</head>
	<body>
		<div class="container">
			<h1>Daftar Barang Elektronik</h1>
			<table border="1" cellspacing="0" cellpadding="20">
				<tr bgcolor="orange">
					<td><h3>NO</h3></td>
					<td><h3>Foto</h3></td>
					<td><h3>Nama Barang</h3></td>
					<td><h3>Brand</h3></td>
					<td><h3>Spesifikasi</h3></td>
					<td><h3>Keunggulan</h3></td>
					<td><h3>Tanggal Rilis</h3></td>
					<td><h3>Harga</h3></td>
				</tr>
				<?php $i = 1 ?>
				<?php foreach ($elektronik as $etk) : ?> 
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $etk["foto"]; ?>"></td>
					<td><?= $etk["nama_barang"] ?></td>
					<td><?= $etk["brand"] ?></td>
					<td><?= $etk["spesifikasi"] ?></td>
					<td><?= $etk["keunggulan"] ?></td>
					<td><?= $etk["tanggal_rilis"] ?></td>
					<td><?= $etk["harga"] ?></td>
				</tr>
				<?php $i++ ?>
				<?php endforeach; ?>
			
			</table>
		</div>
	</body>
</html>