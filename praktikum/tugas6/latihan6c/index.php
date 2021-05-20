<?php
require 'php/functions.php';
$Skincare = query("SELECT * FROM skincare");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lattihan 6a</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/login.php">
            <button type="">Masuk Ke Halaman Admin</button>
        </a>
    </div>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kegunaan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Skincare as $skin) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img width="220px" src="assets/<?= $skin['Gambar']; ?>" alt=""></td>
                    <td>
                        <a href="php/detail.php?id=<?= $skin['id']; ?>">
                            <?= $skin["nama_produk"]; ?>
                        </a>
                    </td>
                    <td><?= $skin['Kegunaan']; ?></td>
                    <td><?= $skin['Harga']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>