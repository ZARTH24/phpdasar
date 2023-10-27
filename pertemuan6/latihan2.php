<?php 

// $mahasiswa = [
// ["Agussalim Usman", "532423011", "Teknik Inform atika", "Agussalimusman240@gmail.com"],
// ["53242324", "Molly", "Teknik Informatika", "Molly@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key adakah string yang kita buat sendiri

$mahasiswa = [
	
	[
	"nama" => "Agussalim Usman", 
	"nim" => "532423011", 
	"jurusan" => "Teknik Informatika",
	"email" => "agussalim240@gmail.com",
	"gambar" => "on.gif"
	],

	[
	"nim" => "532423024", 
	"nama" => "Molly", 
	"jurusan" => "Teknik Informatika",
	"email" => "agussalim240@gmail.com",
	"gambar" => "off.gif",
	"tugas" => ["90","80","100"] 
	]
];

// echo $mahasiswa[1]["tugas"][1];

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Mahasiswa</title>
 </head>
 <body>
   
   <?php foreach($mahasiswa as $mhs) : ?>
   <ul>
   	 <li>
   	 	<img src="assets/<?= $mhs["gambar"] ?> "> 
   	 </li>
     <li>Nama: <?= $mhs["nama"] ?></li>
     <li>NIM: <?=  $mhs["nim"] ?></li>
     <li>Email: <?= $mhs["email"] ?></li>
     <li>Jurusan: <?= $mhs["jurusan"] ?></li>
   </ul>
<?php endforeach; ?>

<img src="file:///E:/Sublime-Text/cuyuniversity/cuyuniversity_2/assets/off.gif" alt="">

 </body>
 </html>	
