<?php
//read the content of a file and display
$filename = "./file.txt";
$file = fopen($filename, "r");//open file in read mode
$content = fread($file, filesize($filename));//read file
echo $content;
fclose($file);//close file    