<?php 
/*
Asril Dwi Cahya Permana
203040118
https://github.com/asrilpermana/pw2021_203040118
Pertemuan 3 - 19 Februari 2021
Mempelajari mengenai struktur kendali pada PHP
*/

// pengulangan
// while
// do
// for
// do .. while
// foreach : pengulangan khusus array
//for( $i = 0; $i < 5; $i++){ //for variable i = 0 , variable i kurang dari 5, variabli i++ (ditambah 1)
	//echo "Hello World <br>";
//}
//$i = 0;
//while($i < 5) {
	//echo "Hello World <br>";
//$i++;

//$i = 0;
//do {
	//echo "Hello World <br>";
//$i++;
//} while ( $i < 10);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0">

	<?php for( $i = 1; $i <= 5; $i++ ) : ?>

		<?php if( $i % 2 == 0) : ?>
		<tr class="warna-baris">
		<?php else : ?>
			<tr>
		<?php endif; ?>
		
			<?php for( $j = 1; $j <=5; $j++ ) : ?>
				<td><?php echo "$i, $j"; ?></td>
			<?php endfor; ?>
		</tr>

	<?php endfor; ?>	


	</table>
</body>