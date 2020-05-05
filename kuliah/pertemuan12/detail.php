<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari url 
$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <div class="container">
    <div class="gambar">
      <p><img src="img/<?= $m['gambar']; ?>" width="60"></p>
    </div>
    <div class="keterangan">
      <p>NRP : <?= $m['nrp']; ?></p>
      <p>Nama : <?= $m['nama']; ?></p>
      <p>Email : <?= $m['email']; ?></p>
      <p>Jurusan : <?= $m['jurusan']; ?></p>
      <p><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></p>
      <p><a href="index.php">Kembali ke daftar mahasiswa</p>
    </div>
  </div>
</body>

</html>