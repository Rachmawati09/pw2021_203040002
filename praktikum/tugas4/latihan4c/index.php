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
  <div class="container">
    <div class="grid">
      <div class="row">
        <?php
        foreach ($result as $skin) :
        ?>
          <div class="cell-md-3">
            <div class="card">
              <div class="card-header">
                <td><img width="220px" src="assets/img/<?= $skin['Gambar']; ?>" alt=""></td>
              </div>
              <div class="card-content p-2">
                <a class="text-center" href="php/detail.php?id=<?= $skin["id"] ?>"><?= $skin["nama_produk"] ?> </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</body>

</html>