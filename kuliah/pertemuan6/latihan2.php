<?php
// $mahasiswa = [
//     ["Chyntia Citra", "203040002", "chyntiacitra04@mail.unpas.ac.id", "Teknik informatika"],
//     ["Ferdiansyah", "203030022", "ferdi84@gmail.com", "Teknik Mesin" ],
//     ["203040039", "depi", "Depi98@gmail.com ", "Teknik Informatika"]
// ];

// Array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    ],
    [
        "Nrp"  => "203040039",
        "Nama" => "Depi",
        "Email" => "depi98@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "tri.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ):?>
    <ul>
    <li>
    <img src="img/<?= $mhs["gambar"];?>"</li>
        <li>Nama : <?= $mhs ["Nama"];?></li>
        <li>Nrp : <?= $mhs ["Nrp"];?></li>
        <li>Jurusan : <?= $mhs ["Email"];?></li>
        <li>Email : <?= $mhs  ["Jurusan"];?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>