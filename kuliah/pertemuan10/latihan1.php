<?php
// koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040002');

// query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// $row = mysqli_fetch_assoc($result) array numeric
// $row = mysqli_fetch_assoc($result) array associative
// $row = mysqli_fetch_array($result) keduanya

$row = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel mahasiswa
$mahasiswa = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><img src="assets/img/<?= $m['gambar'] ?>" width="80"></td>
        <td><?= $m['nrp'] ?></td>
        <td><?= $m['nama'] ?></td>
        <td><?= $m['email'] ?></td>
        <td><?= $m['jurusan'] ?></td>

        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>