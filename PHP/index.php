<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="dist/app.css">
		<title></title>
	</head>
	<body>
		<header>
			<div class="header-container wrap">
				<div class="logo-container">
					<img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="Logo">
				</div>
			</div>
		</header>
		<main>
			<div class="card-container wrap clearfix">
				<?php
					include 'data.php';
				 ?>

				 <?php foreach ($playlists as $key => $playlist) { ?>
					 <div class="card">
						 <div class="card-top">
							 <img src="<?php echo $playlist['Poster'] ?>" alt="poster">
						 </div>
						 <div class="card-bottom">
							 <div class="title"><?php echo $playlist['Album'] ?></div>
							 <div class="artist small"><?php echo $playlist['Artist'] ?></div>
							 <div class="date small"><?php echo $playlist['Year'] ?></div>
						 </div>
					 </div>
				<?php }  ?>
			</div>

		</main>

		<footer>

		</footer>

	</body>

</html>
