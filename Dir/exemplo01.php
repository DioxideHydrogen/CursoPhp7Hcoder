<?php
$dir = "/var/www/html";
$folder = scandir($dir);
$data = array();
foreach($folder as $content){
    if(!in_array($content,array(".",".."))){
        $filename = $dir . "/" . $content;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = str_replace("\\"," ","http://localhost/" . $filename);
        array_push($data, $info);
    }
}
echo json_encode($data);