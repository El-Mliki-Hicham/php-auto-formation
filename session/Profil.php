<?php

$name = $_POST["name"];
$age = $_POST["age"];


if(isset($_POST['btn'])){
    echo  " your Name is  : ".$_SESSION['name'] = $name ; 
    echo  "<br>"."your age is : ". $_SESSION["age"]=$age;
    
}


?>