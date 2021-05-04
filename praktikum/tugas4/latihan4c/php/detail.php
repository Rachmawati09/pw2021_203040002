<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}
require('functions.php');
$id = $_GET["id"];
$Skincare = query("SELECT * FROM skincare WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Skincare</title>
  <link rel="stylesheet" type="text/css" href="assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
  <script type="text/javascript" src="semantic.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />



</head>

<body>
  <h2 class="ui segment">Skincare <?= $Skincare["nama_produk"] ?></h2>
  <div class="ui container">
    <div class="ui card">
      <div class="content">
        <div class="content">
          <a class="header"><?= $Skincare["Kegunaan"] ?></a>
          <div class="meta">
            <span class="date"><?= $Skincare["Harga"] ?></span>
          </div>
          <div class="image">
            <img src="../assets/img/<?= $Skincare["Gambar"] ?>">
          </div>
        </div>
      </div>
      <a href="../index.php"><button class="ui inverted olive button">Back Again</button></a>
    </div>
</body>

</html>