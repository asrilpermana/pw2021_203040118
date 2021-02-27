<?php 
/*
Asril Dwi Cahya Permana
203040118
https://github.com/asrilpermana/pw2021_203040118
Pertemuan 6 - 12 Maret 2021
Mempelajari mengenai Associative Array pada PHP
*/

// $mahasiswa = [
// ["Asril Permana", "203040118", "asrillper@gmail.com", "Teknik Informatika"],
// ["203020112", "Yoga Bagja", "yogabr@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>