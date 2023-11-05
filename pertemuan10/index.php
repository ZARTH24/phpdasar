<?php 

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$i = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>
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

	<?php foreach ($mahasiswa as $mhs) :?>
		<tr>
			<td><?= $i;?></td>
			<td>
				<a href="ubah.php?=<?= $mhs["id"]; ?>">ubah</a> |
				<a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="
				return confirm('Anda yakin?')">hapus</a>
			</td>
			<td><img src="assets\<?= $mhs["gambar"]; ?>" width="100"></td>
			<td><?= $mhs["nim"];?></td>
			<td><?= $mhs["nama"];?></td>
			<td><?= $mhs["email"];?></td>
			<td><?= $mhs["jurusan"]; ?></td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	</table>

</body>
</html>