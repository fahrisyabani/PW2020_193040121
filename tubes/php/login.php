<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me di centang 
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
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
  <link rel="stylesheet" href="../css/login.css">

  <link rel="icon" href="img/Sample-Icon.png">

  <title>Login</title>

</head>

<body>
  <!-- info Panel -->
  <div class="row justify-content-center login-form-container">
    <div class="col-3 pl-5 pr-5 info-panel">
      <div class="row-2">
        <div class="tombol-kembali">
          <a href="../index.php">
            <svg class="bi bi-chevron-compact-left" width="1em" height="em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 01.223.67L6.56 8l2.888 5.776a.5.5 0 11-.894.448l-3-6a.5.5 0 010-.448l3-6a.5.5 0 01.67-.223z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
        <h4>Login</h4>
        <div class="col-lg">
          <div class="logo">
            <img src="../assets/img/employe.png" />
          </div>
        </div>
        <form method="post" action="" class="login-form">
          <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; text-align: center;">Username dan Password salah!</p>
          <?php endif; ?>
          <div class="input-container">
            <i class="fa fa-envelope"></i>
            <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
            </svg>
            <input type="username" name="username" class="input" placeholder="Username" autocomplete="off" autofocus style="font-weight: 100; font-size: 14px;">
          </div>
          <div class="input-container">
            <i class="fa fa-lock"></i>
            <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
            </svg>
            <input type="password" id="login-password" class="input" name="password" placeholder="Password" autocomplete="off" style="font-weight: 100; font-size: 14px;" />
            <i id="show-password" class="fa fa-eye"></i>
          </div>
          <br>

          <div class="remember">
            <input type="checkbox" name="remember">
            <label for="remember">Remember me</label>
          </div>

          <!-- Login -->
          <input type="submit" name="submit" class="btn btn-block btn-primary" value="Login" style="font-weight: 100;">
          <br>
          <div class="registrasi">
            <p>Belum punya akun ? <a href="registrasi.php">Daftar sekarang</a></p>
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