<!DOCTYPE html>
<html lang="en">
<head>
	<title>Your owl is here...</title>
	<link rel="stylesheet" href="styles/styles.css">
	<style>
		
	</style>
</head>
<body>
	<?php
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	function generateRandomString($length = 10) {
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}
	
	include 'PHPImage.php';

	$textLetter = $_POST["yourowl"];

	$datetime = new DateTime();
	$result = $datetime->format('Y-m-d H:i:s');
	$result = str_replace(":", "", $result);
	$result = str_replace(" ", "_", $result);
	$path = "owls/" . generateRandomString(4) . "_" . $result . ".png";
	chmod("owls/", 755);

	$bg = 'errol.png';
	$image = new PHPImage();
	$image->setDimensionsFromImage($bg);
	$image->draw($bg);

	$image->setFont('HONEY-CREAM.ttf');
	$image->setTextColor(array(0, 0, 0));
	$image->textBox($textLetter, array(
		'width' => 630,
		'height' => 470,
		'fontSize' => 40, // Desired starting font size
		'x' => 200,
		'y' => 420
		));
	$image->save($path, false, true);
	?>
	<div class="fill">
		<img class="image" src="<?php echo $path?>" />		
	</div>
</body>
</html>
