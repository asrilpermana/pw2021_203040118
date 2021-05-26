<?php 
/*
Asril Dwi Cahya Permana
203040118
https://github.com/asrilpermana/pw2021_203040118
Pertemuan 7 - 19 Maret 2021
Mempelajari mengenai Get & Post pada PHP
*/
 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040118",
		"nama" => "Asril Permana",
		"email" => "asrillper@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "asril.jpg"
	],
	[
		"nama" => "Yoga Bagja", 
		"nrp" => "203020112",
		"email" => "yogabrgmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "agoy.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>