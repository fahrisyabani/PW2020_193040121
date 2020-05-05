<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

//menghubungkan dengan file php lainnya
require 'functions.php';

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
  <title>Cari Data</title>
  <link rel="stylesheet" type="text/css" href="../css/latihan7c.css">
</head>

<body>
  <div class="container">
    <h1>Daftar Barang <span>Elektronik</span></h1>
    <div class="add">
      <a href="tambah.php">Tambah Data</a>
    </div>
    <br>
    <div class="cari">
      <form action="" method="POST">
        <input type="text" name="keyword" size="56" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari !</button> | <button type="submit"><a href="logout.php" style="text-decoration: none; color: black;">Logout !</a></button>
      </form>
    </div>

    <br>
    <table border="1" cellspacing="0" cellpadding="20">
      <tr bgcolor="orange">
        <td>
          <h3>NO</h3>
        </td>
        <td>
          <h3>Opsi</h3>
        </td>
        <td>
          <h3>Foto</h3>
        </td>
        <td>
          <h3>Nama Barang</h3>
        </td>
        <td>
          <h3>Brand</h3>
        </td>
        <td>
          <h3>Spesifikasi</h3>
        </td>
        <td>
          <h3>Keunggulan</h3>
        </td>
        <td>
          <h3>Tanggal Rilis</h3>
        </td>
        <td>
          <h3>Harga</h3>
        </td>
      </tr><?php if (empty($elektronik)) : ?>
        <tr>
          <td colspan="9">
            <p style="color: red; font-style: italic; text-align: center;">Data elektronik tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>
      <?php $i = 1 ?>
      <?php foreach ($elektronik as $etk) : ?>
        <tr>
          <td><?= $i ?></td>
          <td>
            <a href="ubah.php?id=<?= $etk['id']; ?>"><button class="tombol-ubah">Ubah</button></a>
            <a href="hapus.php?id=<?= $etk['id']; ?>" onclick="return confirm('Apakah anda yakin?') "><button class="tombol-hapus">Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $etk["foto"]; ?>" width="200"></td>
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