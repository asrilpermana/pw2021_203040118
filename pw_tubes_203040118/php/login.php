<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Asrillper Watch</title>
	<style type="text/css">
		body {
			background-image: url(../assets/img/bg2.jpg);
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body id="bg-login">
	<div class="box-login">
		<h2>Login</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">
			<br><br>
			<div class="registrasi">
    			<p>Belum punya akun ? Registrasi <a href="registrasi.php"><strong>Disini!</strong></a></p>
			</div>
			<br>
		</form>

	<?php
		if (isset($_POST['submit'])) {
			session_start();
			include 'database.php';

			$username = $_POST['user'];
			$password = $_POST['pass'];

			$cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
			if(mysqli_num_rows($cek) > 0){
				$d = mysqli_fetch_object($cek);
				$_SESSION['status_login'] = true;
				$_SESSION['a_global'] = $d;
				$_SESSION['id'] = $d->admin_id;
				echo '<script>window.location="dashboard.php"</script>';
			} else {
				echo '<script>alert("Username atau Password salah!")</script>';
			}

		}
	?>

	</div>
</body>
</html>