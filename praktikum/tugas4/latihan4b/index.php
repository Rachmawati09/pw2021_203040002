<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$Skincare = query("SELECT * FROM Skincare")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan 4b</title>
</head>
<body>
    <div class="container">
        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kegunaan</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($Skincare as $skin) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="../latihan4b/assets/img/<?= $skin["Gambar"]; ?>"></td>
                    <td><?= $skin["Nama Produk"] ?></td>
                    <td><?= $skin["Kegunaan"]?></td>
                    <td><?= $skin["Harga"]?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
    
</body>
</html>