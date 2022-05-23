<?php
$students = ["Andrew", "Zuri", "Sara", "Sophie"];
$first_name = array_shift($students);
echo $first_name;
echo implode(" ", $students);

echo "\n";

array_unshift($students, "Tatah");

echo implode(" ", $students);