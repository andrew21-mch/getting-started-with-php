<?php
//get the data fromt the submitted form
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;

//print out the arithmetic

echo "SUM: " . $sum . "<br>";
echo "DIFFERENCE " . $difference . "<br>";
echo "PRODUCT " . $product . "<br>";