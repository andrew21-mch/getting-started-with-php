<?php
//open a file in append mode and write some content into it
$filename = "./file.txt";    
$handle = fopen($filename, "a");//open file in read mode    
fwrite($handle, "nfon@gmail.com \n");//write to file)  
fclose($handle);//close file
