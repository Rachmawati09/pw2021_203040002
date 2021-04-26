<?php
// menghubungkan dengan file php lainnya
require 'function.php';

// melakukan query
$Skincare = query("SELECT * FROM skincare");

?>

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
            <a href=""><button>Ubah</button></a>
            <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../latihan5a/assets/img/<?= $skin['Gambar']; ?>" alt=""></td>
        <td><?= $skin['Nama Produk']; ?></td>
        <td><?= $skin['Kegunaan']; ?></td>
        <td><?= $skin['Harga']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>