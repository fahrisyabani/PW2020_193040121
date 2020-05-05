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
	<meta charset="utf-8">
	<title>Cari data</title>
	<link rel="stylesheet" type="text/css" href="css/latihan7a.css">
</head>

<body>
	<div class="container">
		<h1>Daftar Barang <span>Elektronik</span></h1>
		<div class="cari1">
			<form action="" method="POST">
				<input type="text" name="keyword" size="56" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
				<button type="submit" name="cari">Cari !</button>
			</form>
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
		<button type="submit">
			<a href="php/login.php" style="text-decoration: none; color: black;">Halaman Admin</a>
		</button>
	</div>
</body>

</html>