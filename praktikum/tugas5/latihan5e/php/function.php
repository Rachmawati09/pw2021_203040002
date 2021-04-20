<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040002");

    return $conn;
}

function query ($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $Nama = htmlspecialchars($data['Nama']);
    $Kegunaan = htmlspecialchars($data['Kegunaan']);
    $Harga = htmlspecialchars($data['Harga']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "INSERT INTO skincare
                    VALUES
                    ('', '$Gambar', '$Kegunaan', '$Nama', '$Harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($No)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM skincare WHERE id = $No");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $No = htmlspecialchars($data['No']);
    $Nama = htmlspecialchars($data['Nama Produk']);
    $Kegunaan = htmlspecialchars($data['Kegunaan']);
    $Harga = htmlspecialchars($data['Harga']);
    $Gambar = htmlspecialchars($data['Gambar']);
    $query = "UPDATE `skincare` SET `Nama Produk`='$Nama',`Kegunaan`='$Kegunaan',`Harga`='$Harga',`Gambar`='$Gambar' WHERE id = $No
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>