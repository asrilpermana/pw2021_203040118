<?php

/*
Asril Dwi Cahya Permana
203040118
https://github.com/asrilpermana/pw2021_203040118
Pertemuan 4 - 26 Februari 2021
Mempelajari mengenai function pada PHP
*/

function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Asril"); ?></h1>
</body>
</html>