<?php
require 'functions.php';
// $query = mysqli_query($conn, "SELECT * FROM anime");

$data = query("SELECT * FROM anime");

// while($data = mysqli_fetch_assoc($query)){
  // var_dump($data); 
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Halaman Admin</title>
</head>
<body>
  
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Title</th>
      <th>Studios</th>
      <th>Source</th>
      <th>Genre</th>
    </tr>
  <?php $i = 1;?>
  <?php foreach($data as $anime) : ?>
    <tr>  
      <td><?= $i; ?></td>
      <td><a href="ubah.php?id=<?= $anime["id"] ?>">Ubah</a> | <a href="hapus.php?id=<?= $anime["id"] ?>" onclick="return confirm('Anda yakin?')">Hapus</a></td>
      <td><img src="assets\<?= $anime["gambar"]; ?>" alt="" width="100"></td>
      <td><?= $anime["title"];?></td>
      <td><?= $anime["studios"];?></td>
      <td><?= $anime["source"];?></td>
      <td><?= $anime["genre"];?></td>
    </tr>
    <?php $i++; ?>
  <?php endforeach;?>
  </table>
  <p><a href="tambah.php">Tambah data!</a></p>
</body>
</html>
