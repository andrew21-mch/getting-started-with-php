<?php

function addNumbers($num1, $num2): int {
    return $num1 + $num2;
}

function subTract($num1, $num2): int {
    return $num1 - $num2;
}

function multiply($num1, $num2) : int {
    return $num1 * $num2;
}

$stdn = fopen("php://stdin", "r");
print("Enter First Number: ");
$first = (int) fgets($stdn);
print("Enter Second Number: ");
$second = (int) fgets($stdn);
print("Enter Operator: 1.Add\n 2.Subtract\n 3.Multiply\n 4.Divide\n 5.Modulus\n");
$operator = fgets($stdn);

switch($operator){
    case 1:
        print(addNumbers($first, $second));
        break;
    case 2:
        print(subTract($first, $second));
        break;
    case 3:
        print(multiply($first, $second));
        break;
    default:
        print("INVALID OPERATOR");
}