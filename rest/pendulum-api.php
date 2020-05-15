<?php
require "../vendor/autoload.php";
error_reporting(E_ERROR | E_PARSE);

$o=new Octave(false);
$o->init();

$time=microtime(true);
$result=$o->query("eye(700)");
echo "Time: ".number_format(microtime(true)-$time,8)." seconds\n";
echo "Size: ".strlen($result)." bytes\n";

?>