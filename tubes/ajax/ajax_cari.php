<?php
require "../php/functions.php";
$Skincare = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Gambar</th>
    <th>Nama Produk</th>
    <th>More</th>

  </tr>

  <?php if (empty($Skincare)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style: italic;">Produk Skincare tidak ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>


  <?php $i = 1;
  foreach ($Skincare as $sk) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="assets/img/<?= $sk['Gambar']; ?>" width="60"></td>
      <td><?= $sk['nama_produk']; ?></td>
      <td>
        <a href="php/detail.php?id=<?= $sk['id']; ?>">More Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>

</table>