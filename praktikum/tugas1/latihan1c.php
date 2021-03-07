<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1c</title>
    <style>
        .bulat {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;

        }

    </style>
</head>
<body>
    
    <?php for( $i = 1; $i <= 3; $i++ ) : ?>
        <?php for( $j = 1; $j <= $i; $j++ ) : ?>
            <div class="bulat"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>


</body>
</html>