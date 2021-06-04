<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/shop.png" />
    <style type="text/css">
        body {
            background-image: url(../assets/img/paralak.jpg);
        }

        .container {
            margin: auto;
            text-align: center;
            background-color: rgb(26, 26, 26);
            border-radius: 5px;
            box-shadow: 0 4px 12px rgb(0, 0, 0);
            width: 420px;
            height: 300px;
            margin-top: 150px;
            padding: 40px;
            color: white;
        }
    </style>
</head>

<body style="font-family: 'Handlee', cursive;">
    <div class="container">
        <h3>Form Tambah Data</h3>
        <form action="" method="post">
            <ul style="list-style: none;">
                <li>
                    <label for="Gambar" style="margin-right: 8px;">Gambar</label>
                    : <input type="text" name="Gambar" id="Gambar" require><br><br>
                </li>
                <li>
                    <label for="nama_produk" style="margin-right: 16px;">Nama Produk</label>
                    : <input type="text" name="nama_produk" id="nama_produk" require><br><br>
                </li>
                <li>
                    <label for="Kegunaan" style="margin-right: 21px;">Kegunaan</label>
                    : <input type="text" name="Kegunaan" id="Kegunaan" require><br><br>
                </li>
                <li>
                    <label for="Harga" style="margin-right: 9px;">Harga</label>
                    : <input type="text" name="Harga" id="Harga" require><br><br>
                </li>
                <button type="submit" name="tambah" style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah
                    Data</button>
                <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                    <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
                </button>
            </ul>
    </div>
    </form>
</body>

</html>