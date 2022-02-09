

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

 function get_name(){
  return $this->name;
}

}
$Person = new person();

$Person->Hello();

$Person->set_name('hicham');
echo " ".$Person->get_name();



