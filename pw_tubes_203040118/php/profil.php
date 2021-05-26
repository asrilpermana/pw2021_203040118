<?php
session_start();
include 'database.php';
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

	<!-- Content -->
	<div class="section">
		<div class="container">
			<h3>Profil Admin</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="Asril Dwi Cahya Permana">
					<input type="text" name="user" placeholder="Username" class="input-control" value="Asrillper">
					<input type="text" name="hp" placeholder="No Handphone" class="input-control" value="0812345678910">
					<input type="text" name="email" placeholder="Email" class="input-control" value="asrillper@gmail.com">
					<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="Jalan. Setiabudhi No. 163, Kota Bandung.">
				</form>

				<?php
					if (isset($_POST['submit'])) {

						$nama 	= $_POST['nama'];
						$user 	= $_POST['user'];
						$hp 	= $_POST['hp'];
						$email 	= $_POST['email'];
						$alamat = $_POST['alamat'];

						$update = mysqli_query($conn, "UPDATE tb_admin SET
							admin_name = '".$nama."',
							username = '".$user."',
							admin_telp = '".$hp."',
							admin_email = '".$email."',
							admin_address = '".$alamat."', 
							WHERE admin_id = '".$d->admin_id."'");

						if($update){
							echo "berhasil";
						}else{
							echo "gagal".mysqli_error($conn);
						}
					}
				?>

			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Asrillper Watch.</small>
		</div>
	</footer>

</body>
</html>