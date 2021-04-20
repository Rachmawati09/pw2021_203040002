<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'function.php';
    $No = $_GET ['id'];
    $Skincare = query("SELECT * FROM skincare WHERE id = $No")[0];
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
            <img src="../assets/img/<?= $Skincare["Gambar"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $Skincare["Nama Produk"]; ?></p>
        <p><?= $skincare["Gambar"]; ?></p>
        <p><?= $Skincare["Kegunaan"]; ?></p>
        <p><?= $Skincare["Harga"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>