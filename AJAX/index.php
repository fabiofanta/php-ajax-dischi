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

			</div>

		</main>
		<footer>

		</footer>

	</body>

	<script id="card-template" type="text/x-handlebars-template">
		<div class="card">
			<div class="card-top">
				<img src="{{poster}}" alt="poster">
			</div>
			<div class="card-bottom">
				<div class="title"> {{album}}</div>
				<div class="artist small">{{artist}}</div>
				<div class="date small">{{year}}</div>
			</div>
		</div>
	</script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
	<script src="dist/js/main.js" charset="utf-8"></script>
</html>
