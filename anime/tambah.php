<?php
	
	require 'functions.php';

	if (isset($_POST["submit"])) {

		if (tambah($_POST["submit"]) > 0) {
			echo "
			<script>
			alert('Data berhasil ditambahkan!')
			</script>
			";
		}else {
			echo "
			<script>
			alert('Data berhasil ditambahkan!');
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
	<title>Tambah Data Anime</title>
</head>
<body>

	<h1>Tambahkan data anime</h1>

	<form action="" method="post" onsubmit="return confirm('Anda yakin?')"> 

		<ul>
			<li>
				<label for="nama">Nama:</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="studios">Studios:</label>
				<input type="text" name="studios" id="studios">
			</li>
			<li>
				<label for="source">Source:</label>
				<input type="text" name="source" id="source">
			</li>
			<li>
				<label for="genre">Genre:</label>
				<input type="text" name="genre" id="genre">
			</li>
			<li>
				<label for="gambar">Gambar:</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Kirim!</button>
			</li>
		</ul>
	</form>
	<p><a href="index.php">Balik ke halaman admin</a></p>
</body>
</html>