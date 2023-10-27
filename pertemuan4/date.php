<?php 
// built-in function
// Date/time
// Date
// Untuk menampilkan tanggal dengan format tertentu
// date("l") l = hari ("d") = tanggal, ("M") = bulan, ("m") = bulan bentuk angka, ("Y") = tahun
echo date("l, d-M-Y") . "<br>";

// Time
// 60*60*24*100
// 24 = 1 hari, 100 = berapa hari
// UNIX timestamp / EPOCH timestamp (Tahun pembuatan komputer pertama kali)
echo date("l, d-M-Y", time()+60*60*24*4) . "<br>";

// mktime()
// Membuat detik sendiri
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
echo date("l, d-M-Y", mktime(0,0,0,8,24,2004)) . "<br>";

// strtostring
echo date("l, d-M-Y",strtotime("24 aug 2004"));
 
// String
// strlen() Menghitung panjang sebuah string
// strcmp() Membandingkan atau meng compare kedua string
// explode() Memecah sebuah string menjadi Array
// htmlspecialchars() untuk mencegah orang iseng (hacker) untuk masuk website kita

// Utility (fungsi bantuan)
// var_dump() Mencetak isi dari sebuah variabel, array, object dan lain lain
// isset() Mengecek apakag sebuah variabel sudah dibikin atau belum, menghasilkan nilai boolean
// empty() Mengecek apakah variabel yang ada itu isinya kosong atau tidak
// die() Memberhentikan program kita
// sleep() Memberhentikan program secara sementara


 ?>

