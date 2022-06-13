<?php
// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Goat implements Animal {
  public function makeSound() {
    echo " Mehhh! ";
  }
}

class Pig implements Animal {
    public function makeSound() {
      echo " Hogg! ";
    }
  }

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}


// Create a list of animals
$cat = new Cat();
$pig = new Pig();
$dog = new Goat();
$mouse = new Mouse();
$animals = array($cat, $pig, $dog, $mouse);
// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>

