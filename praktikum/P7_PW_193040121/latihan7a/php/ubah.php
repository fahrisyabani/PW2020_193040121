<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$etk = query("SELECT * FROM elektronik WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil diubah');
          document.location.href = 'admin.php';
         </script>";
  } else {
    echo "Data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Elektronik</title>
</head>

<body>
  <h3>Form Ubah Data Elektronik</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $etk['id']; ?>">
    <ul>
      <li>
        <label>
          Foto : <br>
          <input type="text" name="foto" autofocus required value="<?= $etk['foto']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          Nama Barang : <br>
          <input type="text" name="nama_barang" required value="<?= $etk['nama_barang']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          Brand : <br>
          <input type="text" name="brand" required value="<?= $etk['brand']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          Spesifikasi : <br>
          <input type="text" name="spesifikasi" required value="<?= $etk['spesifikasi']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          Keunggulan : <br>
          <input type="text" name="keunggulan" required value="<?= $etk['keunggulan']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          Tanggal Rilis : <br>
          <input type="text" name="tanggal_rilis" required value="<?= $etk['tanggal_rilis']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          Harga : <br>
          <input type="text" name="harga" required value="<?= $etk['harga']; ?>">
        </label>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>