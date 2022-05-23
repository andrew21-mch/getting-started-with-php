<?php
$students = ["Andrew", "Zuri", "Sara", "Sophie"];
$students[] = "Tatah";

//reasign the first value to a new value called Andre
$students[0] = "Andre";
//print array using implode
echo implode(" ", $students);