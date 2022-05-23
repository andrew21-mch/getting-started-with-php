<?php

$y = 8;
$x = 7;

echo "FIRST: $x " . "SECOND: $y <br>";

define("SUM", ($x + $y), true);

echo "Sum: " . SUM . "<br>";
