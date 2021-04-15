<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->

<?php
    require 'functions.php';
    

    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $barang = query ("SELECT * FROM barang WHERE
            merek LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' ");
    } else {
        $barang = query("SELECT * FROM barang");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5e</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="add">
        <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    
    <br>
    <form class="cari" action="" method="GET">
        <input type="text" name="keyword" autofocus placeholder="Cari Jam Tangan.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </form>
    <br>

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

        <?php if (empty($barang)) : ?>
        <tr>
            <td colspan="7">
                <h1>Data tidak ditemukan!</h1>
            </td>
        </tr>
        <?php else : ?>

        <?php $i = 1;?>
        <?php foreach ($barang as $brg) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?=$brg['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?=$brg['id'] ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
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
        <?php endif; ?>
    </table>

</body>
</html>