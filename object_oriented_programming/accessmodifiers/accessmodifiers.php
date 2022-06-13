<?php
class People {
  public $name;
  protected $age;
  private $height;
}

$person1 = new People();
$person1->name = 'Blessing'; // OK

$person1->age = 25; // ERROR
$person1->height = 2.7; // ERROR
?>
