<?php

//API KEY = f531aa0a174a5af8025a186bbe0e568e


/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'xzrinji');
define('DB_PASSWORD', 'Dragana5');
define('DB_NAME', 'final_project');

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$conn->set_charset("utf8");

// Check connection
if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}
else{
    //echo " Connected to database.";
}



//API KEY




?>
