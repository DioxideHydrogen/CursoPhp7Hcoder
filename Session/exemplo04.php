<?php

require_once "exemplo01.php";

session_regenerate_id();

echo session_id();

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";