<?php 

	//melanjutkan koneksi ke database
	$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

	//memilih database 
	mysqli_select_db($conn, "pw_193040121") or die ("Database salah!!");

	//query mengambil objek dari tabel didalam database
	$result = mysqli_query($conn, "SELECT * FROM elektronik");


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas 2</title>
	<link rel="stylesheet" type="text/css" href="css/latihan5a.css">
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
				<?php while($row = mysqli_fetch_assoc($result)) : ?> 
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $row["foto"]; ?>"></td>
					<td><?= $row["nama_barang"] ?></td>
					<td><?= $row["brand"] ?></td>
					<td><?= $row["spesifikasi"] ?></td>
					<td><?= $row["keunggulan"] ?></td>
					<td><?= $row["tanggal_rilis"] ?></td>
					<td><?= $row["harga"] ?></td>
				</tr>
				<?php $i++ ?>
				<?php endwhile; ?>

			</table>
		</div>
	</body>
</html>
