<?php
 require "../vendor/autoload.php";
 include("../functions.php");
 include("../config.php");
 error_reporting(E_ERROR | E_PARSE);
$octave=new Octave(false);

$input = $_GET["vstup"];
//print_r($_GET);

$result["ans"] = $octave->query($input);
$sent_vars = $result["ans"];

$sql = "INSERT INTO `informations`(`id_author`,`requested_api`, `sent_vars`, `info`, `error`) VALUES (1, 'calc-api','{$input}', 'success', NULL)";

if ($conn->query($sql) === TRUE) {
    echo json_encode($result);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
//echo "\n";
//print_r($result);



?>