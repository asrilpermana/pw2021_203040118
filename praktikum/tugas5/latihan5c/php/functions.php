<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->

<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040118");

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

    
    $merek = htmlspecialchars($data['Merek Produk']);
    $nama = htmlspecialchars($data['Nama Produk']);
    $deskripsi = htmlspecialchars($data['Deskripsi Produk']);
    $harga = htmlspecialchars($data['Harga']);
    $stok = htmlspecialchars($data['Stok Barang']);
    $foto = htmlspecialchars($data['Foto']);

    $query = "INSERT INTO barang
                    VALUES
                    ('', '$merek', '$nama', '$deskripsi', '$harga', '$stok', '$foto')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

    return mysqli_affected_rows($conn);
}