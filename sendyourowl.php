<!DOCTYPE html>
<html lang="en">
<head>
	<title>#sendyourowl</title>
	<link rel="stylesheet" href="styles/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
		body {
			width: 100%;
			height:100%;

		}
	</style>
</head>
<body>

	<div class="container-fluid bg-3 text-center">
		<h3><b>Học Viện Ma Thuật và Pháp Thuật Hogwarts Việt Nam</b></h3>
		<img src="logo.png" class="img-circle" width="30%" height="30%" alt="Bird">
		<h3>#sendyourowl</h3>
	</div>

	<form action="image.php" method="post" role="form">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Enter your owl:</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="yourowl" rows="5" placeholder="Your letter should be in 200 words"></textarea><br />
			</div>
		</div>

		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Choose your owl:</label>
			<div class="col-sm-10">
				<label>
					<input type="radio" name="optionsOwls" id="optionsRadios1" value="option1" checked>
					Hedwig
				</label><br>
				<label>
					<input type="radio" name="optionsOwls" id="optionsRadios2" value="option2">
					Pigwidgeon
				</label><br>
				<label>
					<input type="radio" name="optionsOwls" id="optionsRadios2" value="option3">
					Hermes
				</label><br>
				<label>
					<input type="radio" name="optionsOwls" id="optionsRadios2" value="option4">
					Errol
				</label><br><br>
			</div>
		</div>

		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Choose your background:</label>
			<div class="col-sm-10">
				<label>
					<input type="radio" name="optionsBackgrounds" id="optionsRadios1" value="option1" checked>
					Background 1
				</label><br>
				<label>
					<input type="radio" name="optionsBackgrounds" id="optionsRadios2" value="option2">
					Background 2
				</label><br>
				<label>
					<input type="radio" name="optionsBackgrounds" id="optionsRadios2" value="option3">
					Background 3
				</label><br>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Create letter" class="btn btn-default">
			</div>
		</div>

	</form>
</body>
</html>