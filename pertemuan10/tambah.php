<?php
	require 'functions.php';

	if (isset($_POST["submit"])) {
		if (tambah($_POST) > 0) {
			echo "
				<script>
					alert('Data berhasil ditambahkan');
					document.location.href = 'index.php'
				</script>
			";
		}else {
			echo "
				<script>
					alert('Data gagal ditambahkan');
					document.location.href = 'index.php'
				</script>
			";
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah data</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Masukkan Nama:</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="nim">Masukkan NIM:</label>
				<input type="text" name="nim" id="nim" required>
			</li>
			<li>
				<label for="email">Masukkan Email:</label>
				<input type="email" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Masukkan Jurusan:</label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="gambar">Masukkan Gambar:</label>
				<input type="file" id="gambar" name="gambar" accept="image/*">
			</li>
			<li>
				<button type="submit" name="submit">Tambah data!</button>
			</li>
		</ul>
	</form>
</body>
</html>