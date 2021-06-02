<?php
function olustur () 
{
 $sifre = substr(md5(rand(0,999999999)),-6);
 if ($sifre) {
  session_start();
  $_SESSION["guv"] = $sifre;
  $width  = 70;
  $height =  20;
  $resim  = ImageCreate($width,$height);
  $beyaz  = ImageColorAllocate($resim, 255, 255, 255);
  $rand   = ImageColorAllocate($resim,  rand(0,200), rand(0,200), rand(0,200));
  ImageFill($resim, 0, 0, $rand);
  ImageString($resim, 5, 5, 3, $_SESSION["guv"], $beyaz);
  ImageLine($resim, 100, 19, 0, 19, $beyaz);
  header("Content-type: image/png");
  ImagePng($resim);
  ImageDestroy($resim);
 }
}
olustur();
?>
