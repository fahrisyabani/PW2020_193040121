<?php require 'functions.php'; // ambil id dari url 
$id = $_GET['id']; $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id"?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/1.jpg" width="60"></li>
    <li>NRP : 049303748</li>
    <li>Nama : Sandhika Galih</li>
    <li>Email : sandhikagalih@unpas.ac.id</li>
    <li>Jurusan : Teknik Informatika</li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</li>
  </ul>
  <ul>
    <li><img src="img/2.jpg" width="60"></li>
    <li>NRP : 049303748</li>
    <li>Nama : Sandhika Galih</li>
    <li>Email : sandhikagalih@unpas.ac.id</li>
    <li>Jurusan : Teknik Informatika</li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</li>
  </ul>
  <ul>
    <li><img src="img/3.jpg" width="60"></li>
    <li>NRP : 049303748</li>
    <li>Nama : Sandhika Galih</li>
    <li>Email : sandhikagalih@unpas.ac.id</li>
    <li>Jurusan : Teknik Informatika</li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</li>
  </ul>
</body>

</html>