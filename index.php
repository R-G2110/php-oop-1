<?php 

require_once __DIR__ . '/Model/Movie.php';
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

	<title>PHP OOP 1</title>
</head>
<body>
	<div class="container d-flex my-5 ">

		<?php foreach($movies as $movie): ?>
			<div class="card mx-4 " style="width: 18rem;">
				<img src="..." class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php  echo $movie->title  ?></h5>
					<p class="card-text"><?php  echo $movie->desc  ?></p>
					<p class="card-text"><?php  echo $movie->genre  ?></p>
					<p class="card-text"><?php  echo $movie->rating  ?></p>
					
				</div>
			</div>
		<?php endforeach; ?>

	</div>
</body>
</html>