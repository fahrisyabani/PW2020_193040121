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
  <div class="row justify-content-center login-form-container">
    <div class="col-3 pl-5 pr-5 info-panel">
      <div class="row-2">


        <h4>Registrasi</h4>

        <div class="col-lg">
          <div class="logo">
            <img src="../assets/img/employe.png" />
          </div>
        </div>
        <form method="post" action="" class="login-form">
          <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username dan Password salah!</p>
          <?php endif; ?>
          <div class="input-container">
            <i class="fa fa-envelope"></i>
            <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
            </svg>
            <input type="username" name="username" class="input" placeholder="Name" autocomplete="off" autofocus required style="font-weight: 100; font-size: 14px;">
          </div>
          <div class="input-container">
            <i class="fa fa-lock"></i>
            <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <rect width="11" height="9" x="2.5" y="7" rx="2" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
            </svg>
            <input type="password" id="login-password" class="input" name="password1" placeholder="Password" required style="font-weight: 100; font-size: 14px;" />
            <i id="show-password" class="fa fa-eye"></i>
          </div>
          <div class="input-container">
            <i class="fa fa-lock"></i>
            <svg class="bi bi-shield-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.187 1.025C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815zm3.328 6.884a1.5 1.5 0 10-1.06-.011.5.5 0 00-.044.136l-.333 2a.5.5 0 00.493.582h.835a.5.5 0 00.493-.585l-.347-2a.5.5 0 00-.037-.122z" clip-rule="evenodd" />
            </svg>
            <input type="password" id="login-password" class="input" name="password2" placeholder="Confirm Password" required style="font-weight: 100; font-size: 14px;" />
            <i id="show-password" class="fa fa-eye"></i>
          </div>






          <!-- registrasi -->
          <input type="submit" name="registrasi" class="btn btn-block btn-primary mt-4" value="Register" style="font-weight: 100;">
          <br>
          <div class="registrasi">
            <p>Back to <a href="login.php"><svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd" />
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd" />
                  <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd" />
                </svg>Login</a></p>
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