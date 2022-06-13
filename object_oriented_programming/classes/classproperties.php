<?php
class Fruit {

    //Properties
    public $name;
    public $color;


    //Method
    function set_name($givenname){
        $this->name = $givenname;
    }

    function set_color($givencolor){
        $this->color = $givencolor;
    }

    function getName(){
        return $this->name;
    }

    function getColor(){
        return $this->color;
    }

}

//define a new object
$apple = new Fruit();

$apple->set_name("Apple");
$apple->set_color("Green");
echo "The Fruit called " . $apple->getName() . "Has Color " . $apple->getColor();