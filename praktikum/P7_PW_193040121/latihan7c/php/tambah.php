<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan');
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

  <title>Tambah Data</title>
</head>

<body>
  <!-- info Panel -->
  <div class="row justify-content-center login-form-container ">
    <div class="col-4 pl-5 pr-5 info-panel">
      <div class="row-2">

        <h4>Tambah Data</h4>
        <div class="col-lg">
          <img src="../assets/img/employe.png" />
        </div>
        <form action="" method="POST" class="login-form">
          <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; text-align: center;">Username dan Password salah!</p>
          <?php endif; ?>
          <!-- foto -->
          <div class="input-container">
            <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="foto" class="input" placeholder="Foto" autofocus required style="font-weight: 100; font-size: 14px;">
          </div>

          <!-- nama barang -->
          <div class="input-container">
            <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="nama_barang" class="input" placeholder="Nama Barang" required style="font-weight: 100; font-size: 14px;" />
          </div>
          <!-- brand -->
          <div class="input-container">
            <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="brand" class="input" placeholder="Brand" required style="font-weight: 100; font-size: 14px;" />
          </div>
          <!-- spesifikasi -->
          <div class="input-container">
            <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="spesifikasi" class="input" placeholder="Spesifikasi" required style="font-weight: 100; font-size: 14px;" />
          </div>
          <!-- keunggulan -->
          <div class="input-container">
            <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="keunggulan" class="input" placeholder="Keunggulan" required style="font-weight: 100; font-size: 14px;" />
          </div>
          <!-- tanggal rilis -->
          <div class="input-container">
            <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="tanggal_rilis" class="input" placeholder="Tanggal Rilis" required style="font-weight: 100; font-size: 14px;" />
          </div>
          <!-- harga -->
          <div class="input-container">
            <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
            </svg>
            <input type="text" name="harga" class="input" placeholder="Harga" required style="font-weight: 100; font-size: 14px;" />
          </div>


          <!-- confirmasi -->
          <input type="submit" name="tambah" class="btn btn-block btn-primary mt-4" value="Tambah Data" style="font-weight: 100;">
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


</body>

</html>