<?php

$stdn = fopen("php://stdin", "r");
print("Enter First Number: ");
$first = (int) fgets($stdn);
print("Enter Second Number: ");
$second = (int) fgets($stdn);
print("Enter Operator: 1.Add\n 2.Subtract\n 3.Multiply\n 4.Divide\n 5.Modulus\n");
$operator = fgets($stdn);

switch($operator){
    case 1://addition
        $sum = $first + $second;
        print("\nRESULT LOADING\n");
        print("===========================\n");
        print("SUM: $sum\n");
        print("===========================\n");
        break;
    case 2://subtraction
        $diff = $first - $second;
        print("\nRESULT LOADING\n");
        print("===========================\n");
        print("DIFFERENCE: $diff\n");
        print("===========================\n");
        break;
    case 3://multiplication
        $prod = $first * $second;
        print("\nRESULT LOADING\n");
        print("===========================\n");
        print("PRODUCT: $prod\n");
        print("===========================\n");
        break;
    default:
        print("\nRESULT LOADING\n");
        print("===========================\n");
        print("INVALID OPERATOR\n");
        print("===========================\n");
        break;
}