<?php



interface Animale {

   public function NomAnimal();
}

class Dog implements Animale {

    public function NomAnimal()
    {
        echo 'is dog';
    }
}
class Cat implements Animale{
    public function NomAnimal()
    {
        echo 'is Cat';
    }
}

class Table {
    public $name;
 public function animalName($name){
    $this->name = $name;
     echo $name . " ";

 }
}

$table = new Table ;
$table->animalName('ahmade');
$Dog = new Dog ;
$Dog->NomAnimal();

?>