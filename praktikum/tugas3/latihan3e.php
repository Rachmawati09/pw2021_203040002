<?php
$Skincare = [
    [
        "Nama Produk" => "COSRX Centella Water 150mL",
        "Kegunaan" => "Untuk membersihkan kotoran makeup",
        "harga" => "Rp.154,600,-",
        "gambar" => "corsx water.jpg" 
    ],
    [
        "Nama Produk" => "COSRX Advance Snail Mucin 96 Power Essence",
        "Kegunaan" => "Membuat complexion wajah jadi lebih bersih sekaligus memberikan hidrasi, merevitalisasi dan meningkatkan elastisitas kulit, serta membuat tampilannya menjadi lebih segar",
        "harga" => "Rp.155,000,-",
        "gambar" => "96 mucin.jpg" 
    ],
    [
        "Nama Produk" => "COSRX AHA/BHA Clarifying Treatment Toner",
        "Kegunaan" => "Membantu Mencegah Timbulnya Komedo. Sumber: Panoxyl. Komedo atau blackheads timbul karena adanya kotoran dan sebum yang terperangkap di dalam pori-pori kulit.",
        "harga" => "Rp.105.999,-",
        "gambar" => "toner.jpg" 
    ],
    [
        "Nama Produk" => "Lip Balm Wardah",
        "Kegunaan" => "Melembabkan, Mengurangi Bibir Kering dan Pecah-PecahMelembabkan, Mengurangi Bibir Kering dan Pecah-Pecah",
        "harga" => "Rp.29.500,-",
        "gambar" => "lipbalm.jpg" 
    ],
    [
        "Nama Produk" => "Maskara Maybelline",
        "Kegunaan" => "Membuat bulu matamu lebih bervolume dan lebih lentik",
        "harga" => "Rp.85.500,-",
        "gambar" => "maskara.jpg" 
    ],
    [
        "Nama Produk" => "aneige Water Sleeping Mask [15 mL]",
        "Kegunaan" => "Membantu kulit mempertahankan kelembaban sepanjang malam, Mengandung komposisi yang menyamankan dan melembutkan kulit saat tidur, Meningkatkan kemampuan kulit untuk beregenerasi",
        "harga" => "Rp.27.500,-",
        "gambar" => "sleepmask.jpg" 
    ],
    [
        "Nama Produk" => "COSRX Facial Wash Good Morning Low Ph",
        "Kegunaan" => "Membantu Meembersihkan Wajah dari sisa sisa makeup",
        "harga" => "Rp.29.900,-",
        "gambar" => "face wash.jpg" 
    ],
    [
        "Nama Produk" => "Masker Organik Greeantea",
        "Kegunaan" => "Membantu mencerahkan mata, melembapkan wajah, menghilangkan bekas jerawat",
        "harga" => "Rp.15.000,-",
        "gambar" => "masker organik.jpg" 
    ],
    [
        "Nama Produk" => "Cosrx Oil-free Ultra-Moisturizing Lotion (with Birch Sap)",
        "Kegunaan" => "Memperbaiki warna, tekstur, dan kulit yang rusak, membuat masalah-masalah kulitmu",
        "harga" => "Rp.239.000,-",
        "gambar" => "mousturaizer.jpeg" 
    ],
    [
        "Nama Produk" => "Parfum Tester C HANEL No 5 WOMEN tester",
        "Kegunaan" => "Menghasilkan aroma yang mirip dengan madu.",
        "harga" => "Rp.395.000,-",
        "gambar" => "parfume.jpg" 
    ],
    
];
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Skincare</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kegunaan</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($Skincare as $skin) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="img/<?= $skin["gambar"]; ?>"></td>
                    <td><b><?= $skin["Nama Produk"]; ?></b></td>
                    <td><b><?= $skin["Kegunaan"]; ?></b></td>
                    <td><b><?= $skin["harga"]; ?></b></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
</body>