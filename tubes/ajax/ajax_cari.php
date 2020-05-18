<?php
require '../php/functions.php';
$elektronik = cari($_GET['keyword']);
?> <div class="container">
  <!-- section -->
  <section id="deskripsi" class="deskripsi">

    <table border="1" cellspacing="0" cellpadding="24">
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