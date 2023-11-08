<?php
try {
	require_once __DIR__ . '/Traits/YearPublished.php';
	require_once __DIR__ . '/Model/Production.php';
	require_once __DIR__ . '/Model/Movie.php';
	require_once __DIR__ . '/Model/TvSerie.php';
	require_once __DIR__ . '/Model/Media.php';
	require_once __DIR__ . '/db/db.php';
} catch (Exception $e) {
	$error = $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">

	<title>Document</title>
</head>
<body>
	<main>
		<div class="container-custom">
			<h1>PHP OOP 01</h1>
			<?php if(isset($error)): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $error ?>
				</div>
			
			<?php else: ?>
			<div class="card-wrapper">


				<?php foreach($productions as $production): ?>
					<!-- Card -->
					<div  class="card">
						<div class="card-image">
							
							<img 
								src="img/<?php  echo $production->image?->filename ?? 'No-Image-Placeholder.svg.png'  ?>" 
								class="card-img-top" 
								alt="<?php echo $production->title ?? '' ?>"
							>

							<div class="overlay">
								<h2><?php echo $production->title ?></h2>
								<p><?php echo get_class($production) ?></p>
								<p><?php echo implode(", ",$production->genre) ?></p>
								<!-- polimorfismo -->
								<p><?php echo $production->getProductionInfo() ?></p>
								<p><?php echo $production->getPublishedYear() ?></p>
								<p>Voto: <?php echo $production->rating ?></p>
								<p>Trama:</p>
								<p><?php echo $production->desc ?></p>
							</div>
						</div>
					</div>
					<!-- /Card -->
				<?php endforeach; ?>
				
			</div>
			<?php endif; ?>
		</div>
	</main>
</body>
</html>