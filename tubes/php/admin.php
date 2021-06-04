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
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/shop.png" />
</head>

<body>
    <div class="navbar-fixed scrollspy">
        <nav class="black">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo" class="darken brown-text text-darken-3" style="margin-right: 15px;">Skincare Shop</a>
                    <a href="#!" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="tambah.php" style="font-family: Arial, Helvetica, sans-serif;">Tambah Data</a></li>
                        <li><a href="logout.php" style="font-family: Arial, Helvetica, sans-serif;">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="tambah.php">Tambah Data</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>


    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari" style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px;">Cari!</button>
    </form>

    <div class="container">
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
                <?php if (empty($Skincare)) : ?>
                    <tr>
                        <td colspan="8">
                            <h3>Produk Tidak Ditemukan</h3>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php $i = 1; ?>
                    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <?php foreach ($Skincare as $Skin) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td>
                                            <a href="ubah.php?id=<?= $Skin['id'] ?>"><button style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                                            <a href="hapus.php?id=<?= $Skin['id']; ?>" onclick="return confirm('Hapus Data??')"><button style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                                        </td>
                                        <td><img width="220px" src="../assets/img/<?= $Skin['Gambar']; ?>" alt=""></td>
                                        <td><?= $Skin['nama_produk']; ?></td>
                                        <td><?= $Skin['Kegunaan']; ?></td>
                                        <td><?= $Skin['Harga']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
    </div>
<?php endif; ?>
</tbody>
</table>
</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>