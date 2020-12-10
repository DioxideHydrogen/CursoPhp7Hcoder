<?php

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));
$fileinfo = new finfo(FILEINFO_MIME);
$mimetype = $fileinfo->file($filename);

$base64 =  "data:$mimetype;base64," . $base64;

?>

<img src="<?=$base64?>"/>