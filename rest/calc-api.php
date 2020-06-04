<?php
 require "../vendor/autoload.php";
 error_reporting(E_ERROR | E_PARSE);
$octave=new Octave(false);

$input = $_GET["vstup"];
//print_r($_GET);
$result["ans"] = $octave->query($input);
//echo "\n";
//print_r($result);

echo json_encode($result);

?>