<?php

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellspacing="0" cellpadding="20">
    <tr bgcolor="orange">
      <td>
        <h3>NO</h3>
      </td>
      <td>
        <h3>Foto</h3>
      </td>
      <td>
        <h3>Nrp</h3>
      </td>
      <td>
        <h3>Nama</h3>
      </td>
      <td>
        <h3>Email</h3>
      </td>
      <td>
        <h3>Jurusan</h3>
      </td>
      <td>
        <h3>Aksi</h3>
      </td>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) :
    ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m["gambar"]; ?>" width="60"></td>
        <td><?= $m["nrp"] ?></td>
        <td><?= $m["nama"] ?></td>
        <td><?= $m["email"] ?></td>
        <td><?= $m["jurusan"] ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>