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
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em: " . date("d/m/Y"), $titleColor);
header("Content-Type: image/jpg");
imagejpeg($image);
imagedestroy($image);