

<?php

class person {
public $name ;
public $prix; 

public function Hello(){
echo'hello';
}
 function set_name($name){

  $this->name =$name;
}
}

class Colors extends person {

  public $color ; 

public function set_color($color){

  $this->color = $color;

}

}

$colors=new Colors();

$colors->hello();

$colors->set_name('hicham');

$colors->set_color(" blue");


echo ' '.$colors->name.' your color is '.$colors->color; 



