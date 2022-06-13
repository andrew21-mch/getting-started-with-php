<?php

include "Mamal.php";
class Dog extends Mamal
{
    function setName($name){
        $this->name = $name;
    }
    function getName() {
        return $this->name;
    }

}

$d = new Dog();
echo $d->setName("Jimmy");
echo $d->printOut();