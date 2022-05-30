<?php

declare (strict_types=1);
function addNumbers(int $num1, int $num2): int {
    return $num1 + $num2;
}

$sum = addNumbers(12, 23);
print($sum);