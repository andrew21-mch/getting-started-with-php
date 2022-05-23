<?php

$students = ["Andrew", "Zuri", "Sara", "Sophie"];
$name = array_pop($students);
echo implode(" ", $students);

echo "\n";
//add an element to the end of the array using array_push
array_push($students, "Tatah");
echo implode(" ", $students);