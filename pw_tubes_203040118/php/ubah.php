<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->

<?php
    
require 'functions.php';

$id = $_GET['id'];
$brg = query("SELECT * FROM barang WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'produk.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'produk.php';
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
    <title>Ubah Data</title>
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
<div class="section">
<div class="container">
    <h3>Form Ubah Data Jam Tangan</h3>
        <input type="hidden" name="id" value="<?=$brg['id']; ?>">
         <div class="box">
                <form action="" method="POST">
                    <input type="text" name="merek" placeholder="Merek Produk" class="input-control" required value="<?=$brg['merek']; ?>">
                    <input type="text" name="nama" placeholder="Nama Produk" class="input-control" required value="<?=$brg['nama']; ?>">
                    <input type="text" name="deskripsi" placeholder="Deskripsi Produk" class="input-control" required value="<?=$brg['deskripsi']; ?>">
                    <input type="text" name="harga" placeholder="Harga Produk" class="input-control" required value="<?=$brg['harga']; ?>">
                    <input type="text" name="stok" placeholder="Stok Produk" class="input-control" required value="<?=$brg['stok']; ?>">
                    <br>
                    <input type="file" name="gambar" class="gambar" onchange="previewImage()" required value="<?=$brg['foto']; ?>">
                    <br><br>
                    <img src="../assets/img/nophoto.jpg" width="90" style="display: block;
                    border: 3px solid black;" class="img-preview">
                    <br>
                    <button type="submit" name="ubah" class="btn">Ubah Data!</button>
                    <button class="btn"><a href="produk.php">Kembali</a></button>
                </form>
        </div>
</div>
</div>
 
<script type="text/javascript">
    function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}
</script>
       
</body>
</html>