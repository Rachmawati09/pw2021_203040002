<<<<<<< HEAD
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
<h1>Skincare</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Kegunaan</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
		<?php foreach ($Skincare as $skin) : ?>
            <tr>
                <td><?=$i; ?></td>
                <td><img src="assets/img/<?=$skin["Gambar"]; ?>"></td>
                <td><?=$skin["Nama Produk"]; ?></td>
                <td><?=$skin["Kegunaan"]; ?></td>
                <td><?=$skin["Harga"]; ?></td>
            </tr>
        <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>
=======
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
<h1>Skincare</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Kegunaan</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
		<?php foreach ($Skincare as $skin) : ?>
            <tr>
                <td><?=$i; ?></td>
                <td><img src="assets/img/<?=$skin["Gambar"]; ?>"></td>
                <td><?=$skin["Nama Produk"]; ?></td>
                <td><?=$skin["Kegunaan"]; ?></td>
                <td><?=$skin["Harga"]; ?></td>
            </tr>
        <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>
>>>>>>> 6f697ebe167ecb9a2486143ce435bf7bb78963fe
</html>