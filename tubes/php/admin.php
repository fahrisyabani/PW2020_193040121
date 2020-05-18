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
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">


  <!-- My CSS -->
  <link rel="stylesheet" href="../css/admin.css">

  <link rel="icon" href="img/Sample-Icon.png">

  <title>Admin</title>

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">


    <img src="../assets/img/brand-img.jpg" width="30" height="30" alt="" style="border-radius: 50px; margin-right: 10px;">
    <a class="navbar-brand" href="#">Tokoku</a>
    <a class="nav-item btn kategori" style="color: #9e9e9e">kategori</a>
    <div class="btn-group">
      <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Elektronik</a>
        <a class="dropdown-item" href="#">Dapur</a>
        <a class="dropdown-item" href="#">Kesehatan</a>
        <a class="dropdown-item" href="#">Fashion</a>
        <a class="dropdown-item" href="#">Kecantikan</a>
        <a class="dropdown-item" href="#">Aksesoris</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"></a>
      </div>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <form class="form-inline" action="" method="POST">
          <input class="form-control mr-sm-2 keyword" size="110" type="search" name="keyword" style="font-weight: 200; font-size: 14px;" placeholder="masukan keyword pencarian" aria-label="Search" autocomplete="off" autofocus>
          <button class="btn btn-outline-primary my-2	my-sm-0 mr-2 tombol-cari" type="submit" name="cari">Cari</button>
        </form>
        <button class="btn btn-outline-dark my-2 my-sm-0 mr-2" type="submit" name="#">
          <svg class="bi bi-bag-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z" />
          </svg>
        </button>
        <a class="nav-item btn btn-primary tombol ml-2" href="tambah.php">Tambah Data</a> <a class="nav-item btn btn-primary tombol ml-1" href="logout.php">Logout</a>
      </div>
    </div>

  </nav>

  <!-- akhir Navbar -->

  <div class="container">
    <!-- section -->
    <section id="deskripsi" class="deskripsi">

      <table border="1" cellspacing="0" cellpadding="22">
        <tr bgcolor="#ACACAC">
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
            <td><a href="ubah.php?id=<?= $etk['id']; ?>"><button class="nav-item btn btn-outline-dark btn-sm tombol mb-4" style="width: 77px;" href="php/login.php"><svg class="bi bi-gear-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 01-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 01.872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 012.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 012.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 01.872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 01-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 01-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 100-5.86 2.929 2.929 0 000 5.858z" clip-rule="evenodd" />
                  </svg>Ubah</button></a>

              <a href="hapus.php?id=<?= $etk['id']; ?>" onclick="return confirm('Apakah anda yakin?') "><button class="nav-item btn btn-outline-dark btn-sm tombol" style="width: 78px"> <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd" />
                  </svg>Hapus</button></a>
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

    </section>
    <!-- akhir section -->
  </div>

















  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="../js/script.js"></script>

</body>

</html>