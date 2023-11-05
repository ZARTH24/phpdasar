<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari table mahasiswa / query mahasiswa, lalu ditampung ke dalam variable 
$result = mysqli_query($conn, "SELECT * FROM Mahasiswa");

//Cek error
// if (!$result) {
// 	echo mysqli_error($conn);
// }

// Ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_assoc() mengembalikan array associative
// mysqli_fetch_array() mengembalikan keduanya
// mysqli_fetch_objects() mengembalikan object

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["nama"]);

// while ( $mhs = mysqli_fetch_assoc($result) ) {
//    	var_dump($mhs);
// }
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

	<?php while ( $mhs = mysqli_fetch_assoc($result) ) :?>
		<tr>
			<td><?= $i;?></td>
			<td>
				<a href="">ubah</a> |
				<a href="">hapus</a>
			</td>
			<td><img src="assets\<?= $mhs["gambar"]; ?>" width="100"></td>
			<td><?= $mhs["nim"];?></td>
			<td><?= $mhs["nama"];?></td>
			<td><?= $mhs["email"];?></td>
			<td><?= $mhs["jurusan"]; ?></td>
		</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
	</table>

</body>
</html>