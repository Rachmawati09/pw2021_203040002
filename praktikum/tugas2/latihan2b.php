<?php

    $jawabanIsset = "Isset adalah = untuk memeriksa apakah suatu variabel sudah diatur atau belum <br><br>";
    $jawabanEmpty = "Empty adalah = Untuk memeriksa apakah sebuah objek form telah diisi atau tidak";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>