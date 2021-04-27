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
</head>

<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?=$Skincare['id'];?>">
        <ul style="list-style: none;">
            <li>
                <label for="Gambar" style="margin-right: 8px;">Gambar</label>
                : <input type="text" name="Gambar" id="Gambar" require value="<?=$Skincare['Gambar'];?>"><br><br>
            </li>
            <li>
                <label for="nama_produk" style="margin-right: 16px;">Nama Produk</label>
                : <input type="text" name="nama_produk" id="nama_produk" require
                    value="<?=$Skincare['nama_produk'];?>"><br><br>
            </li>
            <li>
                <label for="Kegunaan" style="margin-right: 21px;">Kegunaan</label>
                : <input type="text" name="Kegunaan" id="Kegunaan" require value="<?=$Skincare['Kegunaan'];?>"><br><br>
            </li>
            <li>
                <label for="Harga" style="margin-right: 10px;">Harga</label>
                : <input type="text" name="Harga" id="Harga" require value="<?=$Skincare['Harga'];?>"><br><br>
            </li>
            <button type="submit" name="ubah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Ubah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>