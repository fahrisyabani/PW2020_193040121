<?php

require '../functions.php';

$mahasiswa = cari($_GET['keyword']);
?>

<table border="1" cellspacing="0" cellpadding="20">
  <tr bgcolor="orange">
    <td>
      <h3>NO</h3>
    </td>
    <td>
      <h3>Foto</h3>
    </td>
    <td>
      <h3>Nama</h3>
    <td>
      <h3>Aksi</h3>
    </td>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style: italic; text-align: center;">Data mahasiswa tidak ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>
  <?php $i = 1;
  foreach ($mahasiswa as $m) :
  ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m["gambar"]; ?>" width="60"></td>
      <td><?= $m["nama"] ?></td>
      <td>
        <a href="detail.php?id=<?= $m["id"] ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>