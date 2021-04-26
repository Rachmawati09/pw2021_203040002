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
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

<?php
require 'function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = '../index.php';
                </script>";
    }
}
?>