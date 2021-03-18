<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
    
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Hallo, Selamat Datang <?= $_POST["Nama"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
    Masukkan nama :
    <input type="text" name="Nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</forom>



</body>
</html>