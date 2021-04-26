<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['id'];
    $skincare = query("SELECT * FROM skincare WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="grey">
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $skincare["Gambar"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $skincare["Nama Produk"]; ?></p>
        <p><?= $skincare["Gambar"]; ?></p>
        <p><?= $skincare["Kegunaan"]; ?></p>
        <p><?= $skincare["Harga"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>