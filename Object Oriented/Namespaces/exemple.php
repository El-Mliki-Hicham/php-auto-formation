<?php
require_once("Animal.php");


$Animal = new class\Table\Animal();
$Person = new class\Table\Person();

$Animal->getName('dog');
$Person->getName('hicham');
echo $Animal->name . "  ".
$Person->name;
?>