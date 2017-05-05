<?php
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<link rel="stylesheet" href="styles/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="bootstrap-maxlength.min.js"></script>
	<script src="highlight.pack.js"></script>
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
			<h3><b><?php echo $lang['HEADER_TITLE_H3_TOP']; ?></b></h3>
			<img src="images/logo.png" class="img-circle" width="30%" height="30%" alt="Bird">
			<h3>#SendYourOwl</h3>
		</div>

		<form class="ajax-call" id="testLoading" action="image.php" method="post" role="form">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_ENTER_LETTER']; ?></label>
				<div class="col-sm-10">
					<textarea class="form-control" name="yourowl" rows="5" placeholder="<?php echo $lang['PLACE_HOLDER']; ?>" maxlength="500" minlength="20"></textarea><br />
				</div>
			</div>

			<div class="form-group">
				<label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_OWL']; ?></label>
				<div class="col-sm-10">
					<label>
						<input type="radio" name="optionsOwls" id="optionsRadios1" value="option1" checked>
						<?php echo $lang['OWL_1']; ?>
					</label><br>
					<label>
						<input type="radio" name="optionsOwls" id="optionsRadios2" value="option2">
						<?php echo $lang['OWL_2']; ?>
					</label><br>
					<label>
						<input type="radio" name="optionsOwls" id="optionsRadios3" value="option3">
						<?php echo $lang['OWL_3']; ?>
					</label><br>
					<label>
						<input type="radio" name="optionsOwls" id="optionsRadios4" value="option4">
						<?php echo $lang['OWL_4']; ?>
					</label><br><br>
				</div>
			</div>

			<div class="form-group">
				<label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_BACKGROUND']; ?></label>
				<div class="col-sm-10">
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios1" value="option1" checked>
						<?php echo $lang['BG_1']; ?>
					</label><br>
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios2" value="option2">
						<?php echo $lang['BG_2']; ?>
					</label><br>
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios3" value="option3">
						<?php echo $lang['BG_3']; ?>
					</label><br>
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios4" value="option4">
						<?php echo $lang['BG_4']; ?>
					</label><br>
					<label>
						<input type="radio" name="optionsBackgrounds" id="optionsRadios5" value="option5">
						<?php echo $lang['BG_5']; ?>
					</label><br><br>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="<?php echo $lang['BUTTON_CREATE']; ?>" class="btn btn-default">
				</div>
			</div>

		</form>
	</div>
</body>
</html>