<?php 
/*
Asril Dwi Cahya Permana
203040118
https://github.com/asrilpermana/pw2021_203040118
Pertemuan 3 - 19 Februari 2021
Mempelajari mengenai struktur kendali pada PHP
*/

// kondisikan / percabangan
// if else
// if else if else
// ternary
// switch
	
$x = 10;
	if ($x < 20) {
	 						//apakah $x lebih kecil dari 20? maka hasilnya true atau benar
	  echo "benar <br>";	//10 lebih kecil dari 20 hasilnya true
	} else {

		echo "salah bro";
	}

//contoh ke 2 
	$x = 200;
		if($x > 100) {
			echo "benar bro <br>";
		} else {
			echo "salah bro";
		}

//contoh ke 3 + if else {
		$x = 100;
		if($x > 100) {
			echo "benar bro <br>";
		}else if($x == 100) {
			echo "bingo!";
		}else {
			echo "salah bro";
		}
	
?>