<?php
// $Skincare = query("SELECT * FROM skincare");

$koneksi = mysqli_connect("localhost", "root", "");
mysqli_select_db($koneksi, "pw_tubes_203040002");
$Skincare = mysqli_query($koneksi, "SELECT * FROM skincare");

?>
<!DOCTYPE html>
<html lang>

<head>
  <title>Skincare</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>


<body>
  <div class="ui sigment small stackable menu" id="small-menu" style="padding: 0 !important; margin: 0 !important;">
    <div class="ui container">
      <div class="left menu">
        <div class="item"><i class="microchip icon icon huge"></i>
          <div class="item">
            <div class="ui action input">
              <input type="text" placeholder="Search....">
              <select class="ui compact selection dropdown">
                <option value="article">Gambar</option>
                <option value="Product">Nama Produk</option>
                <option value="all">Kegunaan</option>
                <option value="all">Harga</option>

              </select>
              <button class="ui button olive">Search</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="table">
    <div class="ui container ">
      <table class="ui selectable celled table ui inverted olive table">
        <tr>
          <th>NO.</th>
          <th>Gambar</th>
          <th>Nama Produk</th>
          <th>Kegunaan</th>
          <th>Harga</th>

        </tr>
        </thead>
        </tbody>
        <?php $i = 1;
        while ($row = mysqli_fetch_assoc($Skincare)) :
        ?>
          <tr>
            <td><b><?= $i ?> </b></td>
            <td><img src="assets/img/<?= $row["Gambar"]; ?>"></td>
            <td><b><?= $row["nama_produk"]; ?></b></td>
            <td><b><?= $row["Kegunaan"]; ?></b></td>
            <td><b><?= $row["Harga"]; ?></b></td>
          </tr>
          <?php $i++; ?>
        <?php endwhile; ?>