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

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal ditambahkan!');
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
    <h3>Form Tambah Data Jam Tangan</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="merek">Merek Produk :</label><br>
                <input type="text" name="merek" id="merek" required><br><br>
            </li>

            <li>
                <label for="nama">Nama Produk :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>

            <li>
                <label for="deskripsi">Deskripsi Produk :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required><br><br>
            </li>

            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>

            <li>
                <label for="stok">Stok Barang :</label><br>
                <input type="text" name="stok" id="stok" required><br><br>
            </li>

            <li>
                <label for="foto">Foto Barang :</label><br>
                <input type="text" name="foto" id="foto" required><br><br>
            </li>

            <br>
            <br><br><button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>