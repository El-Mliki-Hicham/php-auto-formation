<?php


class person{


public $FirstName;
public $LastName;
public $Age;

public function   __Construct($FirstName,$LastName,$Age){


    echo $FirstName.'<br>'.$LastName."<br>".$Age;
}
}
$Person = new person("hicham",'El Mliki',"20ans");
