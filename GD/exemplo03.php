<?php
/**
 * 0R,0G,0B -> Black
 * 100R,100G,100B->Grey if more close to 255 more white, if not more black
 */
$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);
/**
 * file,fontSize,afterPixelsFromLeft,afterPixelsFromTop,String,color
 */
imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350,  $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts". DIRECTORY_SEPARATOR ."Playball". DIRECTORY_SEPARATOR ."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($image, 3, 440, 370, "Concluido em: " . date("d/m/Y"), $titleColor);
header("Content-Type: image/jpg");
imagejpeg($image);
imagedestroy($image);