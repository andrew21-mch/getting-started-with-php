<?php
//for loop
for($i = 10; $i > 0; $i--){
    if($i == 5){
        break;
    }
    echo "FOR LOOP NUMBER: $i \n";
}

for($i = 10; $i > 0; $i--){
    if($i == 5){
        continue;
    }
    echo "FOR LOOP NUMBER: $i \n";
}