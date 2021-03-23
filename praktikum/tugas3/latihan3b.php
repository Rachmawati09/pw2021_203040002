<?php
    $pemainBola = [
        "Mohammad Salah", 
        "Cristiano Ronaldo", 
        "Lionel Messi", 
        "Zlatan Ibrahimovic", 
        "Neymar Jr"
    ];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan3b</title>
    </head>
    <body>
        <h3>Daftar Pemain Bola terkenal</h3>
        <ol>
            <?php foreach($pemainBola as $pemain) : ?>
            <li><?= $pemain ?></li>
            <?php endforeach; ?>
        </ol>



        <?php
        array_push($pemainBola,"Luca Modric", "Sadio Mane");
        sort($pemainBola);
        ?>

        <h3>Daftar Pemain Bola Terkenal Baru</h3>
        <ol>
        <?php foreach($pemainBola as $pemainBaru) :?>
        <li><?= $pemainBaru ?></li>
        <?php endforeach; ?>
        </ol>

    </body>
    </html>

