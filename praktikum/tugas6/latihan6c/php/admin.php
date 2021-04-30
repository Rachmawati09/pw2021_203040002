<<<<<<< HEAD
<?php
require 'functions.php';
$Skincare = query("SELECT * FROM skincare");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Skincare = query("SELECT * FROM skincare WHERE
            `nama_produk` LIKE '%$keyword%' OR
            `Kegunaan` LIKE '%$keyword%' OR
            `Harga` LIKE '%$keyword%' ");
} else {
    $Skincare = query("SELECT * FROM skincare");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari"
            style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px;">Cari!</button>
    </form>

    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kegunaan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($Skincare)): ?>
            <tr>
                <td colspan="8">
                    <h1>Skincare Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else: ?>
            <?php $i = 1;?>
            <?php foreach ($Skincare as $Skin): ?>
            <tr>
                <td><?=$i;?></td>
                <td>
                    <a href="ubah.php?id=<?=$Skin['id']?>"><button
                            style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                    <a href="hapus.php?id=<?=$Skin['id'];?>" onclick="return confirm('Hapus Data??')"><button
                            style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                </td>
                <td><img width="220px" src="../assets/<?=$Skin['Gambar'];?>" alt=""></td>
                <td><?=$Skin['nama_produk'];?></td>
                <td><?=$Skin['Kegunaan'];?></td>
                <td><?=$Skin['Harga'];?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

=======
<?php
require 'functions.php';
$Skincare = query("SELECT * FROM skincare");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Skincare = query("SELECT * FROM skincare WHERE
            `nama_produk` LIKE '%$keyword%' OR
            `Kegunaan` LIKE '%$keyword%' OR
            `Harga` LIKE '%$keyword%' ");
} else {
    $Skincare = query("SELECT * FROM skincare");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari"
            style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px;">Cari!</button>
    </form>

    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kegunaan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($Skincare)): ?>
            <tr>
                <td colspan="8">
                    <h1>Skincare Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else: ?>
            <?php $i = 1;?>
            <?php foreach ($Skincare as $Skin): ?>
            <tr>
                <td><?=$i;?></td>
                <td>
                    <a href="ubah.php?id=<?=$Skin['id']?>"><button
                            style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                    <a href="hapus.php?id=<?=$Skin['id'];?>" onclick="return confirm('Hapus Data??')"><button
                            style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                </td>
                <td><img width="220px" src="../assets/<?=$Skin['Gambar'];?>" alt=""></td>
                <td><?=$Skin['nama_produk'];?></td>
                <td><?=$Skin['Kegunaan'];?></td>
                <td><?=$Skin['Harga'];?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

>>>>>>> 6f697ebe167ecb9a2486143ce435bf7bb78963fe
</html>