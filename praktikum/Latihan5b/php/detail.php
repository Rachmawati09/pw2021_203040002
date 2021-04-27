<?php
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$Skincare = query("SELECT * FROM skincare WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img width="220px" src="../assets/<?=$Skincare["Gambar"];?>" alt="">
        </div>
        <div class="keterangan">
            <p><?=$Skincare["nama_produk"];?></p>
            <p><?=$Skincare["Kegunaan"];?></p>
            <p>Rp .<?=$Skincare["Harga"];?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>