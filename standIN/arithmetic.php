<?php
$stdn = fopen("php://stdin", "r");
print("Enter First Number: ");
$first = (int) fgets($stdn);
print("Enter Second Number: ");
$second = (int) fgets($stdn);

$sum = $first + $second;
$diff = $first - $second;
$prod = $first * $second;
$quot = $first / $second;
$mod = $first % $second;

print("\nRESULT LOADING\n");
print("===========================\n");
print("SUM: $sum\n");
print("DIFFERENCE: $diff\n");
print("PRODUCT: $prod\n");
print("QUOTIENT: $quot\n");
print("MODULUS: $mod\n");
print("===========================\n");