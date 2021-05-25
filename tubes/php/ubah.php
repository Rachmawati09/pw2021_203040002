<?php
require 'functions.php';
$id = $_GET['id'];
$Skincare = query("SELECT * FROM skincare WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
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
    <title>ubah</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
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
            font-family: 'Handlee', cursive;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Form Ubah Data</h3>
        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $Skincare['id']; ?>">
            <ul style="list-style: none; ">
                <li>
                    <label for="Gambar" style="text-align:center; margin-left: -110px;">Gambar</label>
                    : <input type="text" name="Gambar" id="Gambar" require value="<?= $Skincare['Gambar']; ?>"><br><br>
                </li>
                <li>
                    <label for="nama_produk" style="margin-left: -130px;">Nama Produk</label>
                    : <input type="text" name="nama_produk" id="nama_produk" require value="<?= $Skincare['nama_produk']; ?>"><br><br>
                </li>
                <li>
                    <label for="Kegunaan" style="text-align: center; margin-left: -120px;">Kegunaan</label>
                    : <input type="text" name="Kegunaan" id="Kegunaan" require value="<?= $Skincare['Kegunaan']; ?>"><br><br>
                </li>
                <li>
                    <label for="Harga" style="margin-left: -130px;">Harga</label>
                    : <input type="text" name="Harga" id="Harga" require value="<?= $Skincare['Harga']; ?>"><br><br>
                </li>
                <button type="submit" name="ubah" style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin-left: -115px;">Ubah
                    Data</button>
                <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                    <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>
</body>

</html>