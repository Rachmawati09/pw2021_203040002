<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat  $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
<h1><?= salam("Pagi", "Chyntia Citra"); ?></h1>
    
</body>
</html>