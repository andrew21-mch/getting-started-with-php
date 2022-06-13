<?php
    //import the inheriting class
    include "Animal.php";

class Person extends Animal{
    public $country;

    function __construct($name, $age, $country)
    {
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    function set_age($age){
        $this->age = "Age: ".$age;
    }
}

$p = new Person("Andy", 25, "Cameroon");

echo $p->name . "\n";
$p->set_age(24);
echo $p->age . "\n";
echo $p->country;