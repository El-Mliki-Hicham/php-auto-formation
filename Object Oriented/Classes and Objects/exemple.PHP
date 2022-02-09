

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
$Person = new person();

$Person->Hello();

$Person->set_name(' hicham');
echo $Person->name;



