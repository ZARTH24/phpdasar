<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST</title>
</head>
<body>
	<?php 
	if (isset($_GET['submit'])) : ?>
		<h1>Selamat datang <?= $_GET['username']; ?></h1>
	<?php endif; ?>
	<form action="latihan3.php" method="get">
		<label for="username">Masukkan Nama:</label>
		<input type="text" name="username" id="username">
		<button type="submit" name="submit">Kirim!</button>
	</form>
</body>
</html>