<?php

class Animal {

    public $name ;
    public function Name($name){
         $this->name = $name;
    }
}
trait ListAnimal {

    public static $Cat = 'cat 1';
}

class Cat extends Animal {
   use ListAnimal;
}

$cat = new Cat ;
$cat->Name('cat Animal');

echo $cat->name
.'<br>'.
  Cat::$Cat ;
?>
