<?php

/**
 * strtotime("+1 mounth +1 day +1 week");
 */
$ts = strtotime("2001-09-11");

echo date("d/m/Y", $ts);
echo "<br>";