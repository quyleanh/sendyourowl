<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your owl is here...</title>
  <style>
    .image {
        max-width: 99%;
    	max-height: 99%;
    }
    .fill {
	    position: fixed;
	    left: 0;
	    right: 0;
	    top: 0;
	    bottom: 0;
	    text-align: center;
    }
  </style>
</head>
<body>
	<?php
	//Set the Content Type
	include 'PHPImage.php';

	$textLetter = $_POST["yourowl"];

	$bg = 'errol.png';
	$image = new PHPImage();
	$image->setDimensionsFromImage($bg);
	$image->draw($bg);

	$image->setFont('HONEY-CREAM.TTF');
	$image->setTextColor(array(0, 0, 0));
	$image->textBox($textLetter, array(
		'width' => 630,
		'height' => 470,
		'fontSize' => 40, // Desired starting font size
		'x' => 200,
		'y' => 420
	));
	$image->show();
	?>
	<div class="fill">
		<img class="image" src="saved.png" />		
	</div>
</body>
</html>
