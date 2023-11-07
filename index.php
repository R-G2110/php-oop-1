<?php 

require_once __DIR__ . '/Model/Production.php';
require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/db/db.php';

die;
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
	<h1 class="text-center my-4 ">PHP OOP Movies</h1>
	<div class="container custom-container d-flex my-5 ">
		<?php foreach($movies as $movie): ?>
			<div class="custom-card card mx-2 " >
				<img 
					src="img/<?php  echo $movie->image?->filename ?? 'No-Image-Placeholder.svg.png' ?>"
					class="card-img-top" 
					alt="<?php echo $movie->image?->name ?? '' ?>"
				>
				
				<div class="card-body">
					<h5 class="card-title"><?php  echo $movie->title  ?></h5>
					<p class="card-text">Genere: <?php  echo implode(", " , $movie->genre)  ?></p>
					<p class="card-text">Voto: <?php  echo $movie->rating  ?></p>
					<div class="desc">
						<p class="card-text"><?php  echo $movie->desc  ?></p>
					</div>
					
				</div>
			</div>
		<?php endforeach; ?>

	</div>
</body>
</html>