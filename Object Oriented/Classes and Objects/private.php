

<?php

class person {
public $name ;
public $prix; 

private function Hello(){
echo'hello';
}
 function set_name($name){

  $this->name =$name;
}
}


$Person =new person();

$Person->hello();



