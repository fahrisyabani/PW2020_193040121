<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Istok+Web&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/tambahData.css">

  <link rel="icon" href="img/Sample-Icon.png">

  <title>Ubah Data</title>
</head>

<body>
  <!-- info Panel -->
  <div class="row justify-content-center login-form-container ">
    <div class="col-4 pl-5 pr-5 info-panel">
      <div class="row-2">

        <h4>Ubah Data</h4>
        <div class="col-lg">
          <img src="../assets/img/employe.png" />
        </div>
        <form action="" method="POST" class="login-form" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $etk['id']; ?>">

          <!-- foto -->
          <div class="input-container"> <input type="hidden" name="foto_lama" value="<?= $etk['foto']; ?>">
            <svg class="bi bi-image-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M.002 3a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2h-12a2 2 0 01-2-2V3zm1 9l2.646-2.354a.5.5 0 01.63-.062l2.66 1.773 3.71-3.71a.5.5 0 01.577-.094L15.002 9.5V13a1 1 0 01-1 1h-12a1 1 0 01-1-1v-1zm5-6.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" clip-rule="evenodd" />
            </svg>
            <input type="file" name="foto" class="gambar" onchange="previewImage()" placeholder="Foto" autofocus style="font-weight: 100; font-size: 14px;">
            <img src="../assets/img/<?= $etk['foto']; ?>" width="120" style="display: block;" class="img-preview">
          </div>
          <!-- nama barang -->
          <div class="input-container">
            <svg class="bi bi-layers-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.765 1.559a.5.5 0 01.47 0l7.5 4a.5.5 0 010 .882l-7.5 4a.5.5 0 01-.47 0l-7.5-4a.5.5 0 010-.882l7.5-4z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M2.125 8.567l-1.86.992a.5.5 0 000 .882l7.5 4a.5.5 0 00.47 0l7.5-4a.5.5 0 000-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 01-1.41 0l.418-.785-.419.785-5.169-2.756z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="nama_barang" class="input" placeholder="Nama Barang" required value="<?= $etk['nama_barang']; ?>" style="font-weight: 100; font-size: 14px;" />
          </div>

          <!-- brand -->
          <div class="input-container">
            <svg class="bi bi-house-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="brand" class="input" placeholder="Brand" required value="<?= $etk['brand']; ?>" style="font-weight: 100; font-size: 14px;" />
          </div>

          <!-- spesifikasi -->
          <div class="input-container">
            <svg class="bi bi-check-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 003 14.5h10a1.5 1.5 0 001.5-1.5V8a.5.5 0 00-1 0v5a.5.5 0 01-.5.5H3a.5.5 0 01-.5-.5V3a.5.5 0 01.5-.5h8a.5.5 0 000-1H3A1.5 1.5 0 001.5 3v10z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="spesifikasi" class="input" placeholder="Spesifikasi" required value="<?= $etk['spesifikasi']; ?>" style="font-weight: 100; font-size: 14px;" />
          </div>

          <!-- keunggulan -->
          <div class="input-container">
            <svg class="bi bi-clipboard-data" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 00-2 2V14a2 2 0 002 2h10a2 2 0 002-2V3.5a2 2 0 00-2-2h-1v1h1a1 1 0 011 1V14a1 1 0 01-1 1H3a1 1 0 01-1-1V3.5a1 1 0 011-1h1v-1z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5zm-3-1A1.5 1.5 0 005 1.5v1A1.5 1.5 0 006.5 4h3A1.5 1.5 0 0011 2.5v-1A1.5 1.5 0 009.5 0h-3z" clip-rule="evenodd" />
              <path d="M4 11a1 1 0 112 0v1a1 1 0 11-2 0v-1zm6-4a1 1 0 112 0v5a1 1 0 11-2 0V7zM7 9a1 1 0 012 0v3a1 1 0 11-2 0V9z" />
            </svg>
            <input type="text" name="keunggulan" class="input" placeholder="Keunggulan" required value="<?= $etk['keunggulan']; ?>" style="font-weight: 100; font-size: 14px;" />
          </div>

          <!-- tanggal rilis -->
          <div class="input-container">
            <svg class="bi bi-calendar-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 2a2 2 0 012-2h12a2 2 0 012 2H0z" />
              <path fill-rule="evenodd" d="M0 3h16v11a2 2 0 01-2 2H2a2 2 0 01-2-2V3zm6.5 4a1 1 0 100-2 1 1 0 000 2zm4-1a1 1 0 11-2 0 1 1 0 012 0zm2 1a1 1 0 100-2 1 1 0 000 2zm-8 2a1 1 0 11-2 0 1 1 0 012 0zm2 1a1 1 0 100-2 1 1 0 000 2zm4-1a1 1 0 11-2 0 1 1 0 012 0zm2 1a1 1 0 100-2 1 1 0 000 2zm-8 2a1 1 0 11-2 0 1 1 0 012 0zm2 1a1 1 0 100-2 1 1 0 000 2zm4-1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="tanggal_rilis" class="input" placeholder="Tanggal Rilis" required value="<?= $etk['tanggal_rilis']; ?>" style="font-weight: 100; font-size: 14px;" />
          </div>

          <!-- harga -->
          <div class="input-container">
            <svg class="bi bi-plus-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2zm6.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="harga" class="input" placeholder="Harga" required value="<?= $etk['harga']; ?>" style="font-weight: 100; font-size: 14px;" />
          </div>


          <!-- confirmasi -->
          <input type="submit" name="ubah" class="btn btn-block btn-primary mt-4" value="Ubah Data" style="font-weight: 100;">
          <br>
          <div class="registrasi">
            <p>Back to<a href="admin.php"><svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd" />
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd" />
                  <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd" />
                </svg>Admin</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- akhir info Panel -->








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js"></script>

  <script src="../js/script.js"></script>
</body>

</html>