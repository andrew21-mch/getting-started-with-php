<?php
$people = [
    $person1 = ["first_name" => "Andrew",
    "last_name" => "Zuri",
    "age" => "25",
    "hobbies" => "programming"],

    $person2 = ["first_name" => "Sara",
    "last_name" => "Sophie",
    "age" => "24",
    "hobbies" => "singing"],
    $person3 = ["first_name" => "Dre",
    "last_name" => "Sandy",
    "age" => "45",
    "hobbies" => "reading"],

];

foreach ($people as $person) {
    if($person["last_name"] == "Zuri"){
        echo "Hi {$person["last_name"]}, you are {$person["age"]} years And AWESOME";
    }

    echo "\n";
}