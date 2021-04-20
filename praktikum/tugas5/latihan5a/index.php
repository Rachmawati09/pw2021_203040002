<?php
    include 'php/admin.php';
    $Skincare = query("SELECT * FROM skincare")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5A</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php foreach ($Skincare as $skin) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $skin['No'] ?>">
                        <?= $skin["Nama Produk"] ?>
                    </a>
                </p>
        <?php endforeach; ?>
</body>
</html>