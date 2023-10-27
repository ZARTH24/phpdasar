<?php 
// Array
// Variabel yang dapat memiliki banyak nilai
// elemen pada array bisa memiliki elemen atau tipe data yang berbeda
// Pasangan antara key dan value 
// key-nya adalah sebuah indec, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu", "kamis");
// cara baru
$bulan = ["Januari", "februari", "Maret"];

$arr1 = [123, "tulisan", true];

// menampilkan Array
// var_dump() / print_r()
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pada Array
echo $arr1[2];
echo "<br>";
echo $bulan[1];
echo "<br>";

// Menambahkan elemen baru pada Array
var_dump($hari);
echo "<br>";
$hari[] = "jumat";
$hari[] = "sabtu";
var_dump($hari);

 ?>
