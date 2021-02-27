<?php 
/*
Asril Dwi Cahya Permana
203040118
https://github.com/asrilpermana/pw2021_203040118
Pertemuan 7 - 19 Maret 2021
Mempelajari mengenai Get & Post pada PHP
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
	<h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
	Masukkan nama :
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
</form>

</body>
</html>