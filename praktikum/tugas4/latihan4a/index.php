<?php
// Melakukan koneksis ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih database
mysqli_select_db($conn, "pw_tubes_203040002");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM Skincare");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan 4a</title>
</head>
<body>
    <div class="container">
        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kegunaan</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="../latihan4a/assets/img/<?= $row["Gambar"]; ?>"></td>
                    <td><?= $row["Nama Produk"] ?></td>
                    <td><?= $row["Kegunaan"] ?></td>
                    <td><?= $row["Harga"] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </div>
    
</body>
</html>