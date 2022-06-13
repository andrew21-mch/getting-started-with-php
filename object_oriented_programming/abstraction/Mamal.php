<?php
abstract class Mamal
{
    public $name;

    // Force Extending class to define this method
    abstract protected function getName();

    // Common method
    public function printOut() {
        print $this->getName() . "\n";
    }
}
