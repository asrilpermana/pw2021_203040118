<?php
    require 'functions.php';
    

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

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$id = $_GET ['id'];
$barang = query("SELECT * FROM barang WHERE id = $id")[0];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asrillper Watch</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
			<li><a href="../index.php">Beranda</a></li>
			<li><a href="login.php">Admin</a></li>
		</ul>
		</div>
	</header>

	<!-- Search -->
	<div class="search">
		<div class="container">
			<form action="../index.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- Detail Produk -->
	<div class="section">
		<div class="container">
			<h2>Detail Produk</h2>
			<div class="box">
				<div class="col-2">
					<img src="../assets/img/<?= $barang['foto']; ?>" width="80%">
				</div>
				<div class="col-2">
					<h3><?= $barang["merek"]; ?></h3>
					<h3><?= $barang["nama"]; ?></h3>
					<h4><?= $barang["deskripsi"]; ?></h4>
					<h3 class="harga">Rp. <?= number_format($barang['harga']) ?></h3>
					<br><br>
					<p><a href="https://api.whatsapp.com/send?phone=+6289667860610&text=Hai, Saya tertarik!" target="_blank" class="btn2">
					Order via Whatsapp</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	

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
		</div>
	</div>

</body>
</html>