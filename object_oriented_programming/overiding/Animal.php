<?php

class Animal {
    private $name;
    private $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function set_name($name){
        $this->name = $name;
    }
    function set_age($age){
        $this->age = $age;
    }
    function get_age(){
        return $this->age;
    }

    function get_name(){
        return $this->name;
    }
}