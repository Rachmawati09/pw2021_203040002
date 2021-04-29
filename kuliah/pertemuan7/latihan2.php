<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["Nama"]) ||
	!isset($_GET["Nrp"]) || 
	!isset($_GET["Email"]) || 
	!isset($_GET["Jurusan"]) ||
	!isset($_GET["gambar"])) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?>

<!DOCTYPE html>
<html >
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    

<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
	<li><?= $_GET["Nama"]; ?></li>
	<li><?= $_GET["Nrp"]; ?></li>
	<li><?= $_GET["Email"]; ?></li>
	<li><?= $_GET["Jurusan"]; ?></li>
</ul>

<a href="latihan1.php">kembali ke daftar Mahasiswa</a>
</body>
</html>