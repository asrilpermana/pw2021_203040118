<?php
error_reporting(0);
    require 'php/functions.php';
    

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $barang = query ("SELECT * FROM barang WHERE
            merek LIKE '%$search%' OR
            nama LIKE '%$search%' OR
            deskripsi LIKE '%$search%' OR
            stok LIKE '%$search%' OR
            harga LIKE '%$search%' ");
    } else {
        $barang = query("SELECT * FROM barang");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asrillper Watch</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

	<!-- Header -->
	<header>
		<div class="container">
		<h1><a href="index.php">Asrillper Watch</a></h1>
		<ul>
			<li><a href="#katalog">Katalog</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="php/login.php">Admin</a></li>
		</ul>
		</div>
	</header>

	<!-- Search -->
	<div class="search">
		<div class="container">
			<form action="index.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- Jumbotron -->
	<div class="top" style="background-image: url(assets/img/jam3.jpg);
							background-size: cover;
							background-position: center;
							color: white;
							text-align: center;
							padding-top: 250px;
							padding-bottom: 150px;">
		<div class="container">
			<h1 style="font-size: 70px;">Selamat Datang!</h1>
			<br>
			<div class="btn-wrapper"></div>
			<h4>Silahkan Login ke Halaman Admin Untuk Mengakses Data Produk.</h4>
			<h4>atau</h4>
			<h4>Klik Tombol Dashboard Untuk Melihat Tugas Kelas ataupun Praktikum.</h4>
			<br>
			<a href="php/login.php" class="btn">Login</a>
			<a href="php/tugas.php" class="btn">Dashboard</a>
		</div>
	</div>

	<br><br>

	<!-- About -->
	<section id="about" class="about">
    <div class="container">
      <h2>ABOUT US</h2><br>
      <img src="assets/img/jam2.jpg" width="40%" class="pict">
      <br><br>
      <h4>Asrillper Watch is a local brand of mix material watches between stainless steel and leather in Indonesia. Every Precious Watch is inspired by fashion, culture and lifestyle. We want to make you look outstanding without putting too much effort only by using Precious Watch. Asrillper Watch is a suitable watch you can wear in every occasion and will still look smart and chic. Precious Watch Watch always explores in developing each of our designs, features and technology to always produce products that can realize our dream of becoming Indonesia’s proud watch brand.</h4>
    </div>
  </section>

  <br><br>

	<!-- Kategori -->
	<div class="section">
		<div class="container">
			<h2>BRANDS</h2>
			<div class="box">
				<div class="col-5">
					<img src="assets/img/rolex.jpg" width="50px" style="margin-bottom: 5px;">
				</div>

				<div class="col-5">
					<img src="assets/img/hublot.jpg" width="50px" style="margin-bottom: 5px;">
				</div>

				<div class="col-5">
					<img src="assets/img/apple.jpg" width="50px" style="margin-bottom: 5px;">
				</div>

				<div class="col-5">
					<img src="assets/img/seiko.jpg" width="50px" style="margin-bottom: 5px;">
				</div>

				<div class="col-5">
					<img src="assets/img/casio.jpg" width="50px" style="margin-bottom: 5px;">
				</div>
			</div>
		</div>
	</div>

	<!-- New Product -->
	<div class="section" id="katalog">
		<div class="container">
			<h2>PRODUK TERBARU</h2>
			<div class="box">
			<?php 
				if($_GET['search'] != '') {
					$where = "AND barang LIKE '%".$_GET['search']."%' ";
				}
			?>
			<?php $i = 1;
			foreach ($barang as $brg) : ?>
				<div class="col-4">
        		<tr>
          		<td><?= $i++; ?></td>
          		<td><img src="assets/img/<?= $brg['foto']; ?>" width="60"></td>
          		<p class="nama"><?= $brg['merek']; ?></p>
          		<p class="nama"><?= $brg['nama']; ?></p>
          		<br>
          		<p class="harga">Rp. <?= number_format($brg['harga']) ?></p>
          		<br>
           		<a href="php/detail.php?id=<?=$brg['id'] ?>"><button class="btn">Lihat Detail</button></a>
        		</tr>
    			</div>
			<?php endforeach; ?>

			</div>
		</div>
	</div>

<br><br><br><br>

<div class="social-menu">
  <ul>
    <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/asrillper"><i class="fa fa-instagram"></i></a></li>
    <li><a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
  </ul>
</div>

<br><br><br><br><br><br><br>

	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p>Jl. Setiabudhi No.163, Kota Bandung.</p>

			<h4>Email</h4>
			<p>asrillper@gmail.com</p>

			<h4>Contact</h4>
			<p>0812345678910</p>
			<br>
			<small>Copyright &copy; 2021 - Asrillper Watch.</small>
			<br><br>
		</div>
	</div>

</body>
</html>