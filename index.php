<?php 

require __DIR__ . '/models/Genre.php';
require __DIR__ . '/models/Movie.php';

$scifi = new Genre("sci-fi");
$action = new Genre("action");

$matrix = new Movie(
	[ $scifi, $action ],
	"Matrix",
	120,
	"https://image.tmdb.org/t/p/original/77hqn5PpfaBBHexQioP8Iz6wEPC.jpg"
);

$starwars = new Movie(
	[ $scifi ],
	"Star Wars: A new hope",
	120,
	"https://m.media-amazon.com/images/I/81aA7hEEykL._AC_UF1000,1000_QL80_.jpg"
);

$movies = [ $matrix, $starwars ];

var_dump( $movies );

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movies</title>
	<style>
		.poster { width: 5rem; }
		.movie-card { margin: 1rem; padding: 1rem; background: #666; border: solid 1px #999; border-radius: 5px; }
	</style>
</head>
<body>

	<?php foreach($movies as $movie){ ?>

		<div class="movie-card">
			<h2><?= $movie->title ?></h2>
			<h3>Durata: <?= $movie->duration ?> minutes</h3>
			<h4>Generi: <?= $movie->getGenresAsString() ?></h4>
			<h4>Generi:</h4>
			<ul>
				<?php foreach($movie->genres as $genre) { ?>
					<li><?= $genre->name ?></li>
				<?php } ?>
			</ul>
			<img class="poster" src="<?= $movie->poster ?>" alt="<?= $movie->title ?>" >
		</div>

	<?php } ?>
	
</body>
</html>