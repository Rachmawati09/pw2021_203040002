<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
        </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal');
        </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/mantap.css">
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../assets/img/shop.png" />
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: rgb(37, 48, 48);
      color: azure;
    }

    h3,
    h4 {
      text-align: center;
    }
  </style>
</head>

<body>

  <h3>Sign Up</h3>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <div class="container">
    <form action="" method="POST" style="margin-left: 25px;">
      <div class="card-panel ">
        <table style="margin-right: 50px;">
          <tr>
            <h4 style="color: black;">Create Account</h4>
          </tr>
          <tr>
            <td><label for="username"><span class="badge bg-success">Username</span></label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
          </tr>
          <tr>
            <td><label for="password"><span class="badge bg-success">Password</span></label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td><label for="password"><span class="badge bg-success">Konfirmasi Password</span></label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
          </tr>
        </table>
      </div>
      <button type="submit" name="register" style="margin-top: 15px;margin-right: 40px;" class="waves-effect waves-light btn-small blue darken-2">REGISTER</button>
      <div class="login">
        <p style="font-weight: bold;margin-top:15px;">Sudah punya akun ? Login <a href="login.php">Disini</a></p>
      </div>
    </form>
</body>

</html>