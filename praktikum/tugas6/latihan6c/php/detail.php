<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->


<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['id'];
    $barang = query("SELECT * FROM barang WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asrillper Watch</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body bgcolor="lavender">
    <div class="container">
        <div class="images">
            <img width="200px" src="../assets/img/<?= $barang["foto"]; ?>" ; alt="">
        </div>

    <div class="keterangan">
        <p><?= $barang["merek"]; ?></p>
        <p><?= $barang["nama"]; ?></p>
        <p><?= $barang["deskripsi"]; ?></p>
        <p><?= $barang["harga"]; ?></p>
        <p><?= $barang["stok"]; ?></p>
    </div>

        <button class="tombol btn btn-primary"><a href="../index.php">Kembali</a></button>

    </div>
    
</body>
</html>