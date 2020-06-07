<?php

$cookie_name= "API_KEY";
$cookie_value = 'f531aa0a174a5af8025a186bbe0e568e';

if(!isset($_COOKIE[$cookie_name])) {

    header("Location: welcome.php");
} else {
    //echo "Cookie '" . $cookie_name . "' is set!<br>";
    //echo "Value is: " . $_COOKIE[$cookie_name];
}


