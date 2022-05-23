<?php
$name = "Andrew";

function text(){
    global $name;
    echo $name;
}
 text();

// function text2(){
//     $Name = "Tatah";
//     echo $Name;
// }

// echo $Name;
// text2();

function sstat(){
   $age = 1;
    echo $age;
    $age++;
}

sstat();
sstat();
sstat();