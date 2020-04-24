<?php

//melanjutkan koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_193040121");

//query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
//$row = mysqli_fetch_row($result); array numerik
//$row = mysqli_fetch_assoc($result); array assosiative
//$row = mysqli_fetch_array($result); array keduanya
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel
$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style type="text/css">
    .gambar {
      widht: 20px;
    }
  </style>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
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
        <div class="gambar">
          <td><img src="img/<?= $m["gambar"]; ?>" width="60"></td>
        </div>
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