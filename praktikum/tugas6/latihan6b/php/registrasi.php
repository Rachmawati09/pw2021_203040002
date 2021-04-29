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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/mantap.css">

<form action="" method="POST" style="margin-left: 25px;">
  <table style="margin-left: 50px;">
    <tr>
      <h2 style="color: turquoise;">Buatlah Username dan Passsword</h2>
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
  </table>
  <button type="submit" name="register" style="margin-top: 15px;margin-left: 55px;" class="btn btn-primary">REGISTER</button>
  <div class="login">
    <p style="font-weight: bold;margin-top:15px;">Sudah punya akun ? Login <a href="login.php">Disini</a></p>
  </div>
</form>