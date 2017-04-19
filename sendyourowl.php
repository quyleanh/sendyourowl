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

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<style>
		body {
			width: 100%;
			height:90%;

		}
	</style>
</head>
<body>
	<div style="width: 77%; margin: auto;" class="container-fluid">
		<div class="bg-3 text-center">
			<h3><b>Học Viện Ma Thuật và Pháp Thuật Hogwarts Việt Nam</b></h3>
			<img src="images/logo.png" class="img-circle" width="30%" height="30%" alt="Bird">
			<h3>#sendyourowl</h3>
		</div>

		<form class="ajax-call" action="image.php" method="post" role="form">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Enter your owl:</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="yourowl" rows="5" placeholder="Your letter should be in 200 characters" maxlength="200"></textarea><br />
				</div>
			</div>

			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Choose your owl:</label>
				<div class="col-sm-10">
					<label>
						<input type="radio" name="optionsOwls" id="optionsRadios1" value="option1" checked>
						Hedwig trắng muốt
					</label><br>
					<label>
						<input type="radio" name="optionsOwls" id="optionsRadios2" value="option2">
						Heo nhí loi choi
					</label><br>
					<label>
						<input type="radio" name="optionsOwls" id="optionsRadios3" value="option3">
						Errol hiền hậu
					</label><br>
					<label>
						<input type="radio" name="optionsOwls" id="optionsRadios4" value="option4">
						Hermes ngạo nghễ
					</label><br><br>
				</div>
			</div>

			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Choose your background:</label>
				<div class="col-sm-10">
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios1" value="option1" checked>
						Lâu đài Hogwarts
					</label><br>
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios2" value="option2">
						Trang trại Hang Sóc
					</label><br>
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios3" value="option3">
						Privet Drive
					</label><br>
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios4" value="option4">
						Quidditch chiều hoàng hôn
					</label><br>
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios5" value="option5">
						Quidditch ngày đẹp trời
					</label><br><br>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="Create letter" class="btn btn-default">
				</div>
			</div>

		</form>
	</div>
</body>
</html>