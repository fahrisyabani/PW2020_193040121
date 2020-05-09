<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
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
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Gambar : <br>
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/default.jpg" width="120" style="display: block;" class="img-preview">
      </li>
      <br>
      <li>
        <label>
          NRP : <br>
          <input type="text" name="nrp" autofocus required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Nama : <br>
          <input type="text" name="nama" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Email : <br>
          <input type="text" name="email" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Jurusan : <br>
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data</button>
    </ul>
  </form>
  <script src="js/script.js"></script>
</body>

</html>