<?php 
/*
Asril Dwi Cahya Permana
203040118
https://github.com/asrilpermana/pw2021_203040118
Pertemuan 5 - 5 Maret 2021
Mempelajari mengenai Array pada PHP
*/

$mahasiswa = [
	["Asril Permana", "203040118", "Teknik Informatika", "asrillper@gmail.com"],
	["Yoga Bagja", "203020112", "Teknik Industri", "yogabr@mail.unpas.ac.id"],
	["203050123", "Faris Amrans", "Teknik Lingkungan", "fariz@gmail.com"]
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
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>