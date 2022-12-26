<?php
abstract class Vehicle {
    // declare a normal method
    public function start($name) {
        echo $name;
    }
}

class Car extends Vehicle {
 
}

$car = new Car();

$car->start("car 1"); 


?>