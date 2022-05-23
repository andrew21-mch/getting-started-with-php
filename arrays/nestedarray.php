<?php

//define a nested array of st
$students = [
    ["Andrew", "Zuri", "Sara", "Sophie"], //row0
    ["Tatah", "Andre", "Zuri", "Sara", "Sophie"],//row1
    ["Tatah", "Andre", "Zuri", "Sara", "Sophie"]// row2
];

print_r($students[0][0]);
print_r($students[0][1]);
echo "\n";
print_r($students[1][0]);
print_r($students[1][1]);
echo "\n";

print_r($students[2][0]);
print_r($students[2][1]);