<!DOCTYPE html>
<html>
<body>

<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));

echo "<br>";

// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);

echo "<br>";

// Check if the variable is numeric  
$x = "Hello";
var_dump(is_numeric($x));


?>  



</body>
</html>