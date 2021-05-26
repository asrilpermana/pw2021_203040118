<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->

<?php
    require 'php/functions.php';

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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Asrillper Watch</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
</head>

<body>

    <div class="container">
    <form class="cari" action="" method="GET">
        <input type="text" name="keyword" autofocus placeholder="Cari Data.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    </div>

    <div class="container mt-5 mb-5">
    <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
        <?php foreach ($barang as $brg) : ?>
            <p class="nama">
                    <a href="php/detail.php?id=<?= $brg['id'] ?>">
                        <?= $brg["nama"] ?>
                    </a>
            </p>
        <?php endforeach; ?>
    </table>
    </div>

    <div class="container">
    <button class="tombol btn btn-primary"><a href="php/admin.php">Admin</a></button>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>

</body>
</html>