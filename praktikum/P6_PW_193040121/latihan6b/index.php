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
	<link rel="stylesheet" type="text/css" href="css/latihan6b.css">
</head>

<body>
	<div class="container">
		<h1>Daftar Barang <span>Elektronik</span></h1>
		<?php foreach ($elektronik as $etk) : ?>
			<p class="nama">
				<a href="php/detail.php?id=<?= $etk['id'] ?>"><?= $etk["nama_barang"] ?></a>
			</p>
		<?php endforeach; ?>
	</div>
</body>

</html>