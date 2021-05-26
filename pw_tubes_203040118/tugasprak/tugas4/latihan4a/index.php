<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->

<?php
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
    mysqli_select_db($conn,"pw_tubes_203040118") or die ("Database salah!");
    $result = mysqli_query($conn, "SELECT * FROM barang");
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
    <div class="container mt-5 mb-5">
    <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
        <tr>
            <th>No</th>
            <th>Merek Produk</th>
            <th>Nama Produk</th>
            <th>Deskripsi Produk</th>
            <th>Harga</th>
            <th>Stok Barang</th>
            <th>Foto</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
         <tr>
             <td><?=$i; ?></td>
                <td><?= $row["merek"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td><?= $row["stok"]; ?></td>
                <td>
                    <figure class="image is-128x128">
                    <img src="assets/img/<?=$row["foto"]; ?>" class="images">
                    </figure>
                </td>
         </tr>
         <?php $i++;?>
        <?php endwhile; ?>
    </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>

</body>
</html>