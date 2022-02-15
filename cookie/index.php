<?php
$name = 'key';
$value = "hicham";
setcookie($name, $value, time() + (5)); // 86400 = 1 day



if(empty($_COOKIE[$name])) {
     echo "Cookie named '" . $name . "' is not set!";
} else {
     echo "Cookie '" . $name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$name];
}
?>
