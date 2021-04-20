<?php

require 'function.php';
$No = $_GET['id'];

if (hapus($No) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = '../index.php';
            </script>";
} else {
    echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = '../index.php';
            </script>";
}
?>