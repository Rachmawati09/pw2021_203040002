<?php
    if (!isset($_GET['No'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['No'];
    $Skincare = query("SELECT * FROM Skincare WHERE  id = $No")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img width="200px" src="../assets/img/<?= $Skincare["Gambar"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $Skincare["Nama Produk"]; ?></p>
        <p><?= $Skincare["Kegunaan"]; ?></p>
        <p><?= $Skincare["Harga"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>