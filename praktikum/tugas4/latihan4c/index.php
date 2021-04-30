<<<<<<< HEAD
<?php
    require 'php/functions.php';
    $skincare = query("SELECT * FROM skincare")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4C</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
		<?php foreach ($skincare as $skin) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $skin['id'] ?>">
                        <?= $skin["Nama Produk"] ?>
                    </a>
                </p>
        <?php endforeach; ?>

    </table>
</body>
=======
<?php
    require 'php/functions.php';
    $skincare = query("SELECT * FROM skincare")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4C</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
		<?php foreach ($skincare as $skin) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $skin['id'] ?>">
                        <?= $skin["Nama Produk"] ?>
                    </a>
                </p>
        <?php endforeach; ?>

    </table>
</body>
>>>>>>> 6f697ebe167ecb9a2486143ce435bf7bb78963fe
</html>