<?php
require 'function.php';

$No = $_GET['id'];
$Skincare = query("SELECT * FROM skincare WHERE id = $No")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = '../index.php';
                </script>";
    }
}
?>


<h3>Form Tambah Data Skincare</h3>
<form action="" method="POST">
    <ul>
        <li>
            <label for="Gambar">Gambar :</label><br>
            <input type="file" name="Gambar" id="Gambar" ><br><br>
        </li>
        <li>
            <label for="Nama Produk">Nama Produk:</label><br>
            <input type="text" name="Nama Produk" id="Nama Produk" required><br><br>
        </li>
        <li>
            <label for="Kegunaan">Kegunaan :</label><br>
            <input type="text" name="Kegunaan" id="Kegunaan" required><br><br>
        </li>
        <li>
            <label for="Harga">Harga :</label><br>
            <select name="Harga" id="Harga" required>
                <option value="">--------------- Pilih Harga ---------------</option>
                <option value="Rp.230.000,.">Rp.230.000,.</option>
                <option value="Rp.56.000,.">Rp.56.000,.</option>
                <option value="Rp.150.000,.">Rp.150.000,.</option>
                <option value="rp.90.000,.">Rp.90.000,.</option>
                
            </select>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>
