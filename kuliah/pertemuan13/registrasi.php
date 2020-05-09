 <?php

  require 'functions.php';

  if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
      echo "<script>
            alert('User baru berhasil ditambahkan. silakan login!');
            document.location.href = 'login.php';
          </script>";
    } else {
      echo 'User gagal Ditambah!!';
    }
  }
  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrasi</title>
 </head>

 <body>
   <h3>Form Registrasi</h3>
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
         <td><input type="password" name="password1" required></td>
       </tr>
       <tr>
         <td><label for="password">Konfirmasi Password</label>
         <td>
         <td>:</td>
         <td><input type="password" name="password2" required></td>
       </tr>
     </table>

     <button type="submit" name="registrasi">REGISTER</button>

   </form>
 </body>

 </html>