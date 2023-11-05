<?php
	
	require 'functions.php';

	$id = $_GET["id"];	
	$data = query("SELECT * FROM anime WHERE id = $id")[0];

	if (isset($_POST["submit"])) {



		if (ubah($_POST["submit"]) > 0) {
			echo "
			<script>
			alert('Data berhasil diubah!')
			</script>
			";
		}else {
			echo "
			<script>
			alert('Data berhasil diubah!');
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
	<title>Ubah Data Anime</title>
</head>
<body>

	<h1>Ubah data anime</h1>

	<form action="" method="post" onsubmit="return confirm('Anda yakin?')"> 
			<input type="hidden" name="id" value="<?= $data["id"] ?>"> 
		<ul>
			<li>
				<label for="nama">Nama:</label>
				<input type="text" name="nama" id="nama" value="<?= $data["title"] ?>">
			</li>
			<li>
				<label for="studios">Studios:</label>
				<input type="text" name="studios" id="studios" value="<?= $data["studios"] ?>">
			</li>
			<li>
				<label for="source">Source:</label>
				<input type="text" name="source" id="source" value="<?= $data["source"] ?>">
			</li>
			<li>
				<label for="genre">Genre:</label>
				<input type="text" name="genre" id="genre" value="<?= $data["genre"] ?>">
			</li>
			<li>
				<label for="gambar">Gambar:</label>
				<input type="text" name="gambar" id="gambar" value="<?= $data["gambar"] ?>">
			</li>
			<li>
				<button type="submit" name="submit">Kirim!</button>
			</li>
		</ul>
	</form>
	<p><a href="index.php">Balik ke halaman admin</a></p>
</body>
</html>