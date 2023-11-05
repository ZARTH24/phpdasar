<?php 
	if (!isset($_GET["gambar"]) ||
		!isset($_GET["title"]) ||
		!isset($_GET["alias"]) ||
		!isset($_GET["studios"]) ||
		!isset($_GET["episodes"])) {
		header("Location: latihan1.php");
		exit;
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Anime</title>
</head>
<body>
	<h1>Detail Anime</h1>
	<ul>
		<li><img src="<?= $_GET["gambar"] ?>"  alt=""></li>
		<li>Title: <?= $_GET["title"]; ?></li>
		<li>Alias: <?= $_GET["alias"]; ?></li>
		<li>Studios: <?= $_GET["studios"]; ?> </li>
		<li>Total Episodes: <?= $_GET["episodes"] ?></li>
	</ul>

	<a href="latihan1.php">Kembali Ke daftar anime</a>

</body>
</html>