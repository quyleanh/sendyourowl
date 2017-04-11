<!DOCTYPE html>
<html lang="en">
<head>
  <title>#sendyourowl</title>
  <style>
    /*body {
      background-image: url("background.jpg");
      background-size:100% 100%;
    }*/
    body {
      background-color: gray;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;
      -o-background-size: cover;
      height:100%;
    }
    .textareaCenter {
      position: absolute;
      left: 0;
      top: 10%;
      width: 100%;
      text-align: center;
      font-size: 18px;
    }
    .form-control {
    	font-size: 18;
    	width: 200px;
    	height: 70px;
    }
  </style>
</head>
<body>
<form action="image.php" method="post" role="form">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Enter your owl:</label>
		<div class="col-sm-10">
			<textarea class="form-control" name="yourowl" rows="5"></textarea><br />
		</div>
	</div>

	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Choose your owl:</label>
		<div class="col-sm-10">
			<label>
				<input type="radio" name="optionsOwls" id="optionsRadios1" value="option1" checked>
				Hedwig
			</label>
			<label>
				<input type="radio" name="optionsOwls" id="optionsRadios2" value="option2">
				Pigwidgeon
			</label>
			<label>
				<input type="radio" name="optionsOwls" id="optionsRadios2" value="option3">
				Hermes
			</label>
			<label>
				<input type="radio" name="optionsOwls" id="optionsRadios2" value="option4">
				Errol
		</label>
		</div>
	</div>

	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Choose your owl:</label>
		<div class="col-sm-10">
			<label>
				<input type="radio" name="optionsBackgrounds" id="optionsRadios1" value="option1" checked>
				Background 1
			</label>
			<label>
				<input type="radio" name="optionsBackgrounds" id="optionsRadios2" value="option2">
				Background 2
			</label>
			<label>
				<input type="radio" name="optionsBackgrounds" id="optionsRadios2" value="option3">
				Background 3
			</label>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	
</form>
</body>
</html>