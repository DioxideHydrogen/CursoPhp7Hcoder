<?php

$link = "https://www.google.com/logos/doodles/2020/december-holidays-days-2-30-6753651837108830.3-law.gif";
$parse = parse_url($link);
$basename = basename($parse["path"]);
if(!file_exists($basename)){ // Bloco adicional feito por mim mesmo, apenas faz o download se o arquivo não existir
    $content = file_get_contents($link);
    $file = fopen("$basename","w+");
    fwrite($file,$content);
    fclose($file);
}
unset($link,$content,$parse);
?>

<img src="<?=$basename?>"/>