<?php 
// Perulangan
// for
// for($i = 0; $i < 5; $i++){
// 	echo "Hello World <br>";

// }

// while
// $i = 0;
// while($i < 5){
// 	echo "Hello World <br>";
// 	$i++;
// }

// do while
// $i = 1;
// do {
// 	echo "Do while! $i <br>";
// 	$i++;
// } while ($i <= 5);

// if else
// $x = 10;
// if ($x <= 20) :
// 	echo 'Benar';
// else :
// 	echo "Salah";
// endif;

// ternary
// $x = 20;
// $ternary = $x <= 20 ? "Benar" : "Salah";
// echo $ternary;
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pertemuan 3</title>
	<style>
		.box-warna {
			background-color: silver;
		}
	</style>
</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0">

		<?php for($i = 1; $i <= 4; $i++): ?>
		 <?php if ($i % 2 == 1) : ?>
		 	<tr class="box-warna">
		 <?php else : ?>
		 	<tr>
		 <?php endif; ?>
		 	<?php for ($j = 1; $j <= 5; ++$j) :
		 	 ?>
		 	 <td>
		 	 	<?= "$i.$j"; ?>
		 	 </td>
		 	<?php endfor; ?>
		 </tr>
		<?php endfor; ?>

	</table>
</body>
</html>