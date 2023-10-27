<?php 
// Standar Output
// echo, print mencetak tulisan atau isi variabel dll.
// print_r() mencetak isi array
// var_dump() melihat isi dari variabel dan juga tampil informasi mengenai variabel tersebut
// var_dump("expression");

// Penulisan sintaksis di PHP 
// 1. php didalam html
// 2. html didalam php
// echo "<h1> Halo, Selamat datang $name </h1>";

// Variabel dan tipe data
// variabel 
// tidak boleh diawali dengan angka tapi boleh mengandung angka
// $name = "Agussalim";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x + $y;

// penggabung string / concatenation / concat (.)
// $nama_depan = "Agussalim";
// $nama_belakang = "Usman";

// echo $nama_depan . " " . $nama_belakang;

// assignment
// = += -+ /= *= %= .=
// $angka = 1;
// $angka += 5;
// echo $angka;
// $name = "Agussalim";
// $name .= " ";
// $name .= "Usman";
// echo $name;

// perbandingan
// < > <= >= == !=
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1");

// operator logika
// &&, ||, !
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
echo '<br>';
var_dump($x < 20 || $x % 2 == 0);
// echo '<br>';

 ?>

<!--  <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>

 	<?php 
 	//echo "<h1>Halo, Selamat datang $name</h1>"
 	 ?>

 	<h1>Halo, Selamat datang <?php echo $name; ?></h1>
 
 </body>
 </html> -->