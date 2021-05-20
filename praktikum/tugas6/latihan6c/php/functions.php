<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040002");

    return $conn;
}
function query($sql)
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
    $gambar = htmlspecialchars($data['Gambar']);
    $name = htmlspecialchars($data['Nama Produk']);
    $Kegunaan = htmlspecialchars($data['Kegunaan']);
    $harga_produk = htmlspecialchars($data['Harga']);
    $query = "INSERT INTO skincare
                VALUES
                ('', '$gambar', '$name', '$Kegunaan', '$harga_produk')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM skincare WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['Gambar']);
    $name = htmlspecialchars($data['nama_produk']);
    $Kegunaan = htmlspecialchars($data['Kegunaan']);
    $harga_produk = htmlspecialchars($data['Harga']);
    $query = "UPDATE `skincare` SET `Gambar`='$gambar',`nama_produk`='$name',`Kegunaan`='$Kegunaan', `harga`='$harga_produk' WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}
