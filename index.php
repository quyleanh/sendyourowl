<?php
	//Set the Content Type
	header("Content-type: image/png");

	include 'PHPImage.php';

	$bg = 'errol.png';
	$image = new PHPImage();
	$image->setDimensionsFromImage($bg);
	$image->draw($bg);

	$image->setFont('HONEY-CREAM.TTF');
	$image->setTextColor(array(0, 0, 0));
	$image->textBox("Gửi Blien, \n Đây là bức thư fasdfađược làm theo kiểu ịn text vào ảnhfasdfa, cậu có thể gõ bất kỳ thứ gì vào đây dfasdfasdfasdfasdfasdfasd:D \n Quy Le Anh \n Quy Le Anh", array(
		'width' => 630,
		'height' => 470,
		'fontSize' => 40, // Desired starting font size
		'x' => 200,
		'y' => 420
	));
	$image->show();
?>