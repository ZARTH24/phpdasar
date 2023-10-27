<?php 

// Title: Made in Abyss
// Alias: メイドインアビス
// Studios: Kinema Citrus
// Source: Web manga
// Total Episodes: 13

// Title: Ousama Ranking
// Alias: 王様ランキング
// Studios: Wit Studio
// Total Episodes: 23
// Source: Web manga

$anime = [
	["title" => "Made in Abyss",
	"alias" => "メイドインアビス",
	"Studios" => "Kinema Citrus",
	"source" => "Web Manga",
	"episodes" => "13",
	"gambar" => "made.png"],
	 ["title" => "Ousama Ranking",
	 "alias" => "王様ランキング",
	 "Studios" => "Wit Studio",
	 "source" => "Web Manga",
	 "episodes" => "23",
	 "gambar" => "ousama.png"]
];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan PHP</title>
</head>
<body>
	<?php foreach ($anime as $data) : ?>
	<ul>
		<li><img src="assets/<?= $data["gambar"] ?>" alt=""></li>
		<li>Title: <?= $data["title"] ?></li>
		<li>Alias: <?= $data["alias"] ?></li>
		<li>Studios: <?= $data["Studios"] ?></li>
		<li>Total Episodes: <?= $data["episodes"] ?></li>
	</ul>
	<?php endforeach; ?>
</body>
</html>