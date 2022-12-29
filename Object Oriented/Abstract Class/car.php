<?php
 interface  Vehicle {

      function start($name) ;
    
    

 } 
class Car implements Vehicle {

    public function start($name){
        echo $name;
    }

}

$car = new Car();

$car->start("car 1"); 

$Vehicle = new Vehicle();

$Vehicle->start("car 2")

?>

<!-- redifinition  -->
<!-- object interface -->
<!-- encapsulation -->