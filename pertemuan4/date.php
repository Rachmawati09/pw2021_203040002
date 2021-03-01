<?php
/*
    Chyntia Citra Rachmawati
    203040002
    github.com/Rachmawati09/pw2021_203040002
    Pertemuan 4 (01 maret 2021)
    Materi minggu ini mempelajari mengenai function
*/
?>

<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-m-y");

// Time 
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()-60*60*24*100));

// mktime
// membuat sendiri detik yang sudah berlalu
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun 
// echo date("l", mktime(0,0,0,8,25,1985));

// stortotime
echo date("l", strtotime("25 aug 1985"));
?>
