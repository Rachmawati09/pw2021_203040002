<?php
/*
    Chyntia Citra Rachmawati
    203040002
    github.com/Rachmawati09/pw2021_203040002
    pertemuan 7 - 18 maret 2021
    Mempelajari mengenai Get & Post
*/
?>

<?php
//  $_GET

$mahasiswa = [
    [
        "Nama" => "Chyntia Citra",
        "Nrp"  => "203040002",
        "Email" => "Chyntiacitra04@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "one.jpg"
        
    ],
    [
        "Nama" => "Ferdiansyah",
        "Nrp"  => "203040022",
        "Email" => "ferdi84@gmail.com",
        "Jurusan" => "Teknik Mesin",
        "gambar" => "two.jpg"
    ]
    ];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
        <a href="latihan2.php?Nama=<?= $mhs["Nama"]; ?>&Nrp=<?= $mhs["Nrp"]; ?>&Email=<?= $mhs["Email"]; ?>&Jurusan=<?= $mhs["Jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["Nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>