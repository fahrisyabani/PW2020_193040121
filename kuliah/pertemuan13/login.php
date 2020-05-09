<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika login di tekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Form Login</h3>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style: italic;">
      <?= $login['pesan']; ?>
    </p>
  <?php endif; ?>
  <form action="" method="POST">
    <table>
      <tr>
        <td><label for="username">Username</label>
        <td>
        <td>:</td>
        <td><input type="username" name="username" autocomplete="off" autofocus required></td>
      </tr>
      <tr>
        <td><label for="password">Password</label>
        <td>
        <td>:</td>
        <td><input type="password" name="password" required></td>
      </tr>
    </table>

    <button type="submit" name="login">Login</button>
    <div class="registrasi">
      <p>Tambah akun baru <a href="registrasi.php">Disini</a></p>
    </div>
  </form>
</body>

</html>