<?php
require "../vendor/autoload.php";
include("../config.php");
error_reporting(E_ERROR | E_PARSE);


$initPrekazka = $_GET["initPrekazka"];
$novaPrekazka = $_GET["novaPrekazka"];
$octave=new Octave(false);

$octave->run("pkg load control");


$octave->run("m1 = 2500;");
$octave->run("m2 = 320;");
$octave->run("k1 = 80000;");
$octave->run("k2 = 500000;");
$octave->run("b1 = 350;");
$octave->run("b2 = 15020;");
$octave->run("A=[0 1 0 0;-(b1*b2)/(m1*m2) 0 ((b1/m1)*((b1/m1)+(b1/m2)+(b2/m2)))-(k1/m1) -(b1/m1);b2/m2 0 -((b1/m1)+(b1/m2)+(b2/m2)) 1;k2/m2 0 -((k1/m1)+(k1/m2)+(k2/m2)) 0];");
$octave->run("B=[0 0;1/m1 (b1*b2)/(m1*m2);0 -(b2/m2);(1/m1)+(1/m2) -(k2/m2)];");
$octave->run("C=[0 0 1 0]; D=[0 0];");
$octave->run("Aa = [[A,[0 0 0 0]'];[C, 0]];");
$octave->run("Ba = [B;[0 0]];");
$octave->run("Ca = [C,0];");
$octave->run("Da = D;");
$octave->run("K = [0 2.3e6 5e8 0 8e6];");


$octave->run("sys = ss(Aa-Ba(:,1)*K,Ba,Ca,Da);");

$octave->run("t = 0:0.01:5;");
$octave->run("r =". $initPrekazka.";");
$octave->run("initX1=0;");
$octave->run("initX1d=0;");
$octave->run("initX2=0;");
$octave->run("initX2d=0;");

$octave->run("[y,t,x]=lsim(sys*[0;1],r*ones(size(t)),t,[initX1;initX1d;initX2;initX2d;0]);");
$octave->run("plot(t,y)");


/*
echo "<pre>";
print_r($octave->query("plot(t,y)"));
echo "</pre>";
*/

$octave->run("r=".$novaPrekazka.";");
$octave->run("[y,t,x]=lsim(sys*[0;1],r*ones(size(t)),t,x(size(x,1),:));");
//$octave->run("plot(t,y)");

/*
echo "<pre>";
print_r($octave->query("plot(t,y)"));
echo "</pre>";
*/

$result["M2"]= array_map('floatval',explode("\n", $octave->query("x(:,1)")));
$result["M1"]= array_map('floatval',explode("\n", $octave->query("x(:,3)")));
$result["t"]= array_map('floatval',explode("\n", $octave->query("t")));
$result["r"] = array_map('floatval',explode("\n", $octave->query("r")));


$sql = "INSERT INTO `informations`(`id_author`,`requested_api`, `sent_vars`, `info`, `error`) VALUES (1, 'suspension-api','{$nova_pozicia}', 'success', NULL)";


if ($conn->query($sql) === TRUE) {
    echo json_encode($result);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>