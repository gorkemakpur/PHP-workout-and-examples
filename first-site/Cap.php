<?php 
	header("content-type:image/jpeg");
	$yeniresim=imagecreatefromjpeg("images.jpeg");
	$yazirengi=imagecolorallocate($yeniresim,rand(0,255),rand(0,255),rand(0,255));
	$deger=rand(1,20000);
	$angle=rand(1,20);
	$fontsize=rand(40,60);
	imagettftext($yeniresim,$fontsize,$angle,40,70,$yazirengi,"captcha.ttf",$deger);
	imagejpeg($yeniresim);
	?>