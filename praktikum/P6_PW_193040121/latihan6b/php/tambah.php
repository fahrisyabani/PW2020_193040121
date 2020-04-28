<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Foto : <br>
          <input type="text" name="foto" autofocus required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Nama Barang : <br>
          <input type="text" name="nama_barang" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Brand : <br>
          <input type="text" name="brand" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Spesifikasi : <br>
          <input type="text" name="spesifikasi" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Keunggulan : <br>
          <input type="text" name="keunggulan" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Tanggal Rilis : <br>
          <input type="text" name="tanggal_rilis" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Harga : <br>
          <input type="text" name="harga" required>
        </label>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>