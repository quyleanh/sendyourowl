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

	function mergeImages($filename_src, $filename_dest, $filename_result) {
 		// Get dimensions for specified images
 		// _src is foreground, _dest is background
		list($width_src, $height_src) = getimagesize($filename_src);	
		list($width_dest, $height_dest) = getimagesize($filename_dest);
 		// Create new image with desired dimensions (background image)
		$image = imagecreatetruecolor($width_dest, $height_dest);
 		// Load images and then copy to destination image
		$image_x = imagecreatefrompng($filename_src);
		$image_y = imagecreatefrompng($filename_dest);
		imagecopy($image, $image_x, 0, 0, 0, 0, $width_dest, $height_dest);
		imagecopy($image, $image_y, 0, 0, 0, 0, $width_dest, $height_dest);
 		// Save the resulting image to disk (as PNG)
		imagepng($image, $filename_result);
		// Clean up
		imagedestroy($image);
		imagedestroy($image_x);
		imagedestroy($image_y);
	}

	function getOptions($owlOption = 'a', $bgOption = '1') {
		switch ($owlOption) {
			case 'option1':
				$owl = 'a';
				break;
			case 'option2':
				$owl = 'b';
				break;
			case 'option3':
				$owl = 'c';
				break;
			case 'option4':
				$owl = 'd';
				break;
			default:
				$owl = 'a';
			break;
		}
		switch ($bgOption) {
			case 'option1':
				$bg = '1';
				break;
			case 'option2':
				$bg = '2';
				break;
			case 'option3':
				$bg = '3';
				break;
			case 'option4':
				$bg = '4';
				break;				
			case 'option5':
				$bg = '5';
				break;
			default:
				$bg = '6';
				break;
		}
		return array ($owl, $bg);
	}

	?>

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

	list($foreGround, $backGround) = getOptions($_POST["optionsOwls"], $_POST["optionsBackgrounds"]);
	
	// fg[number]_bg[number]
	// Check the existent image
	$letterImage = "images/" . $foreGround . $backGround . ".png";

	$image = new PHPImage();
	$image->setDimensionsFromImage($letterImage);
	$image->draw($letterImage);

	$fontPath = './HONEY-CREAM.ttf';
	$image->setFont($fontPath);
	$image->setTextColor(array(0, 0, 0));
	$image->textBox($textLetter, array(
		'fontSize' => 72, // Desired starting font size
		'width' => 630,
		'height' => 470,
		'x' => 200,
		'y' => 420
		));
	$image->save($path, false, true);
	?>
	<div class="fill">	
		<a href="<?php echo $path?>" download>
			<img class="image" src="<?php echo $path?>" alt="#sendyourowl">
		</a>
	</div>
</body>
</html>
