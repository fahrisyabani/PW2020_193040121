<?php

require 'functions.php';

if (isset($_POST['registrasi'])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil, silakan login!');
            document.location.href = 'login.php';
            </script>";
  } else {
    echo "<script>
            alert('Registrasi Anda Gagal!!');
          </script>";
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
  <link rel="stylesheet" href="../css/registrasi.css">

  <link rel="icon" href="img/Sample-Icon.png">

  <title>Registrasi</title>
</head>

<body>
  <div class="row justify-content-center">
    <div class="col-3">
      <div class="row-2">


        <h3>Registrasi</h3>
        <form action="" method="POST">
          <table>
            <tr>
              <td><label for="username">Name</label>
              <td>
              <td>:</td>
              <td><input type="username" name="username" autocomplete="off" autofocus required></td>
            </tr>
            <tr>
              <td><label for="password">Password</label>
              <td>
              <td>:</td>
              <td><input type="password" name="password1" required></td>
            </tr>
            <tr>
              <td><label for="password">Confirm Password</label>
              <td>
              <td>:</td>
              <td><input type="password" name="password2" required></td>
            </tr>
          </table>









          <!-- registrasi -->
          <input type="submit" name="registrasi" class="btn btn-block btn-primary" value="Register" style="font-weight: 100;">
          <br>
          <div class="registrasi">
            <p>Back to <a href="login.php">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js"></script>


</body>

</html>