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
    <title>Detail Produk</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/shop.png" />
    <style type="text/css">
        body {
            font-family: 'Handlee', cursive;
            background-image: url(../assets/img/paralak.jpg);
        }

        .container {
            margin: auto;
            text-align: center;
            background-color: rgb(26, 26, 26);
            border-radius: 5px;
            box-shadow: 0 4px 12px rgb(0, 0, 0);
            width: 420px;
            height: 500px;
            margin-top: 25px;
            padding: 50px;
        }

        .gambar img {
            border: 3px solid white;
        }

        .keterangan {
            color: rgb(235, 235, 235);
            font-size: 15px;
        }

        .keterangan :nth-child(1) {
            font-size: 25px;
            font-weight: 600;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="gambar">
            <img width="220px" src="../assets/img/<?= $Skincare["Gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $Skincare["nama_produk"]; ?></p>
            <p><?= $Skincare["Kegunaan"]; ?></p>
            <p><?= $Skincare["Harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>