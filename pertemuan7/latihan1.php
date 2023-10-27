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
	"studios" => "Kinema Citrus",
	"source" => "Web Manga",
	"episodes" => "13",
	"gambar" => "made.png"],
	["title" => "Ousama Ranking",
	"alias" => "王様ランキング",
	"studios" => "Wit Studio",
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
	<title>Get</title>
</head>
<body> 
	<?php foreach ($anime as $data) : ?>
		<ul>
			<li><a href="latihan2.php?title=<?= $data["title"] . "&alias=" . $data["alias"]."&gambar=assets/".$data["gambar"]."&studios=".$data["studios"]."&episodes=".$data["episodes"];?>"><?= $data["title"] ?></a></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>