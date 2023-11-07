<?php 

require_once __DIR__ . '/Model/Production.php';
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/TvSerie.php';
require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/db/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CDN Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">
	<title>PHP OOP 1</title>
</head>
<body>
	<h1 class="text-center my-4 ">PHP OOP 001</h1>
	<div class="container rg-container my-5 ">
		<div class="row">

			<?php foreach($productions as $production): ?>
				<div class="card rg-card my-3 mx-3" style="width: 370px; ">
					<div class="card-image">
						<img 
							src="img/<?php  echo $production->image?->filename ?? 'No-Image-Placeholder.svg.png'  ?>" 
							class="card-img-top" 
							alt="<?php echo $production->title ?? '' ?>"
						>
					</div>
					<div class="card-body">
						<h5><?php echo $production->title ?></h5>
						<p><?php echo get_class($production) ?></p>
						<p><?php echo isset($production->running_time) ? $production->getRunningTime() : $production->getAiredFromToYear()  ?></p>
						<p><?php echo isset($production->published_year) ? $production->getPublishedYear() : $production->getEpisodesAndSeasons()  ?></p>
						<h6><?php echo implode(", ",$production->genre) ?></h6>
						<h6>Voto: <?php echo $production->rating ?></h6>
						<p class="card-text"><?php echo $production->desc ?></p>
					</div>
				</div>
			<?php endforeach; ?>
			
		</div>
		
	</div>
</body>
</html>
