<?php
    require 'php/functions.php';
    $Skincare = query("SELECT * FROM Skincare")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4C</title>
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

    </table>
</body>
</html>