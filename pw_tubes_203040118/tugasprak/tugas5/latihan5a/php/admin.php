<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->

<?php
    require 'functions.php';
    $barang = query("SELECT * FROM barang")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5a</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Merek Produk</th>
            <th>Nama Produk</th>
            <th>Deskripsi Produk</th>
            <th>Harga</th>
            <th>Stok Barang</th>
            <th>Foto</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($barang as $brg) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><?= $brg["merek"]; ?></td>
                <td><?= $brg["nama"]; ?></td>
                <td><?= $brg["deskripsi"]; ?></td>
                <td><?= $brg["harga"]; ?></td>
                <td><?= $brg["stok"]; ?></td>
                <td><img src="../assets/img/<?= $brg['foto']; ?>" alt=""></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>