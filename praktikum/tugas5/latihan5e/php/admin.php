<?php
// menghubungkan dengan file php lainnya
require 'function.php';



if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Skincare = query("SELECT * FROM Skincare WHERE
                Nama Produk LIKE '%$keyword%' OR
                Kegunaan LIKE '%$keyword%' OR 
                Harga LIKE '%$keyword%' OR ");
    } else {
  $skin = query("SELECT * FROM Skincare");
}
?>


<div class="add">
    <a href="php/tambah.php">Tambah Data</a>
</div>

<table border="1" cellpadding="13" cellspacing="0">
    <tr>
    <th>No</th>
    <th>Opsi</th>
    <th>Gambar</th>
    <th>Nama Produk</th>
    <th>Kegunaan</th>
    <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
	<?php foreach ($Skincare as $skin) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
        <a href="ubah.php?id=<?= $No['id']; ?>"><button class="ubah">Ubah</button></a>
        <a href="hapus.php?id=<?= $No['id']; ?>" onclick="return confirm('anda yakin mau menghapus data??')"><button class="hapus">Hapus</button></a>
        </td>
        <td><img src="../latihan5a/assets/img/<?= $skin['Gambar']; ?>" alt=""></td>
        <td><?= $skin['Nama Produk']; ?></td>
        <td><?= $skin['Kegunaan']; ?></td>
        <td><?= $skin['Harga']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>