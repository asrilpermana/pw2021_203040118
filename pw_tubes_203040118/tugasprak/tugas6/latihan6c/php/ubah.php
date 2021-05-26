<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->

<?php
session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
 
require 'functions.php';

$id = $_GET['id'];
$brg = query("SELECT * FROM barang WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Latihan 6a</title>
</head>

<body>
    <h3>Form Ubah Data Jam Tangan</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$brg['id']; ?>">

        <ul>
            <li>
                <label for="merek">Merek Produk :</label><br>
                <input type="text" name="merek" id="merek" required value="<?=$brg['merek']; ?>"><br><br>
                </select>
            </li>

            <li>
                <label for="nama">Nama Produk :</label><br>
                <input type="text" name="nama" id="nama" required value="<?=$brg['nama']; ?>"><br><br>
            </li>

            <li>
                <label for="deskripsi">Deskripsi Produk :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required value="<?=$brg['deskripsi']; ?>"><br><br>
            </li>

            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required value="<?=$brg['harga']; ?>"><br><br>
            </li>

            <li>
                <label for="stok">Stok Barang :</label><br>
                <input type="text" name="stok" id="stok" required value="<?=$brg['stok']; ?>"><br><br>
            </li>

            <li>
                <label for="foto">Foto Barang :</label><br>
                <input type="text" name="foto" id="foto" required value="<?=$brg['foto']; ?>"><br><br>
            </li>

            <br>
            <br><br><button type="submit" name="ubah">Ubah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>