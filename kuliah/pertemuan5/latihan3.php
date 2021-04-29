<?php
$mahasiswa = [
    ["Chyntia Citra", "203040002", "Teknik informatika", "chyntiacitra04@mail.unpas.ac.id"],
    ["Ferdiansyah", "203030022", "Teknik Mesin", "ferdi84@gmail.com"],
    ["Depi", "203040039", "Teknik Informatika", "Depi98@gmail.com "]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ):?>
    <ul>
        <li>Nama : <?= $mhs [0];?></li>
        <li>Nrp : <?= $mhs [1];?></li>
        <li>Jurusan : <?= $mhs [2];?></li>
        <li>Email : <?= $mhs  [3];?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>