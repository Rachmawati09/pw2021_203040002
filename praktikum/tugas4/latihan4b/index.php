<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040002");
$result = mysqli_query($conn, "SELECT * FROM skincare");
?>
<!DOCTYPE html>
<html lang>

<head>
  <title>Skincare</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container mb-3 mt-3">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">NO.</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Kegunaan</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <?php $i = 1; ?>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><b><?= $i ?> </b></td>
          <td><img width="220px" src="assets/img/<?= $row["Gambar"]; ?>"></td>
          <td><b><?= $row["nama_produk"]; ?></b></td>
          <td><b><?= $row["Kegunaan"]; ?></b></td>
          <td><b><?= $row["Harga"]; ?></b></td>
        </tr>
        <?php $i++; ?>
      <?php endwhile; ?>
      </tr>
    </table>
  </div>
</body>

</html>