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
    <title>Data Produk</title>
    <link rel="stylesheet" href="../css/style.css">
    <style type="text/css">

        table {
            border: 3px solid black;
        }

        td, h2 {
            text-align: center;
            padding: 10px;
        }

        h1 {
            text-align: justify;
        }

        img {
            height: 100px;
            border-radius: 10px;
        }

        .slider h3,
        .slider h5,
        .clients h3 {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .clients img {
            max-width: 150px;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.8));
        }

        .clients img.kata {
             margin-top: 50px;
        }

        .parallax-container {
            height: 20%;
        }

        .parallax img {
            filter: grayscale(1);
            opacity: 0.5 !important;
        }

        section, footer {
            padding: 2px 0;
        }

        input, label {
            padding: 5px;
            margin: 5px;
        }

        .atas {
            padding: 10px;
        }

        .btn2 {
            padding: 8px 15px;
            background-color: #005b8f;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-left: 5px;
            border-radius: 5px;
        }

        .btn {
            padding: 8px 15px;
            background-color: #005b8f;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="container">
        <h1><a href="dashboard.php">Asrillper Watch</a></h1>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="produk.php">Data Produk</a></li>
            <li><a href="../index.php">Toko</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
        </div>
    </header>

    
    <div class="atas">
    <form class="cari" action="" method="GET">
        <input type="text" name="keyword" autofocus placeholder="Cari Jam Tangan.." autocomplete="off">
        <button type="submit" name="cari" class="btn">Cari!</button>
        <button type="submit" class="btn">
            <a href="produk.php">Kembali</a>
        </button>
    </form>
    <a href="tambah.php"><button class="btn2">Tambah Data</button></a>
    </div>
   

    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Merek Produk</th>
            <th>Nama Produk</th>
            <th>Deskripsi Produk</th>
            <th>Harga</th>
            <th>Stok</th>
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
                    <a href="ubah.php?id=<?=$brg['id'] ?>"><button class="btn">Ubah</button></a>
                    <br><br>
                    <a href="hapus.php?id=<?=$brg['id'] ?>" onclick="return confirm('Hapus Data?')"><button class="btn">Hapus</button></a>
                </td>
                <td><?= $brg["merek"]; ?></td>
                <td><?= $brg["nama"]; ?></td>
                <td><?= $brg["deskripsi"]; ?></td>
                <td>Rp. <?= number_format($brg["harga"]) ?></td>
                <td><?= $brg["stok"]; ?></td>
                <td><img src="../assets/img/<?= $brg['foto']; ?>" alt=""></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <!-- Footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - Asrillper Watch.</small>
        </div>
    </footer>

</body>
</html>