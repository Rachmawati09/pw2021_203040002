<?php 
$pemainBola = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Saleh" => "Liverpool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan3c</title>
    <style>
        .Persegipanjang {
            font-size: 18px;
            border: 2px solid black;
            padding: 10px;
            width: 45%;
            font-family: arial;
        }
    </style>
</head>
<body>
    <div class="Persegipanjang">
        <h3>Daftar pemain bola terkenal dan clubnya </h3>
        <table>
            <?php foreach($pemainBola as $pemain => $club) : ?>
                <td><b><?= $pemain; ?></b></td>
                <td> :</td>
                <td><?= $club; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    
</body>
</html>
