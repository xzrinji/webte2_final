<?php

 require "../vendor/autoload.php";
 include("../config.php");
 error_reporting(E_ERROR | E_PARSE);


 $pozicia = $_GET["initPos"];
 $nova_pozicia = $_GET["pozicia"];
$octave=new Octave(false);


$octave->run("pkg load control");
/*
$octave->run("M = .5;");
$octave->run("m = 0.2;");
$octave->run("b = 0.1;");
$octave->run("I = 0.006;");
$octave->run("g = 9.8;");
$octave->run("l = 0.3;");
$octave->run("p = I*(M+m)+M*m*l^2;");
$octave->run("A = [0 1 0 0; 0 -(I+m*l^2)*b/p (m^2*g*l^2)/p 0; 0 0 0 1; 0 -(m*l*b)/p m*g*l*(M+m)/p 0];");
$octave->run("B = [ 0; (I+m*l^2)/p; 0; m*l/p];");
$octave->run("C = [1 0 0 0; 0 0 1 0];");
$octave->run("D = [0; 0];");
$octave->run("K = lqr(A,B,C'*C,1);");
$octave->run("Ac = [(A-B*K)];");
$octave->run("N = -inv(C(1,:)*inv(A-B*K)*B);");
$octave->run("sys = ss(Ac,B*N,C,D);");
$octave->run("t = 0:0.05:10;");
$octave->run("r =0.2;");
$octave->run("initPozicia=0;");
$octave->run("initUhol=0;");
$octave->run("[y,t,x]=lsim(sys,r*ones(size(t)),t,[initPozicia;0;initUhol;0]);");

echo "<pre>";
print_r($octave->query("plot(t,y)"));
echo "</pre>";
*/
$octave->run("m = 0.111;");
$octave->run("R = 0.015;");
$octave->run("g = -9.8;");
$octave->run("J = 9.99e-6;");
$octave->run("H = -m*g/(J/(R^2)+m);");
$octave->run("A = [0 1 0 0; 0 0 H 0; 0 0 0 1; 0 0 0 0];");
$octave->run("B = [0;0;0;1];");
$octave->run("C = [1 0 0 0];");
$octave->run("D = [0];");
$octave->run("K = place(A,B,[-2+2i,-2-2i,-20,-80]);");
$octave->run("N = -inv(C*inv(A-B*K)*B);");

$octave->run("sys = ss(A-B*K,B,C,D);");

$octave->run("t = 0:0.01:5;");
$octave->run("r =". $pozicia.";");
$octave->run("initPozicia=0;");
$octave->run("initNaklon=0;");
$octave->run("[y,t,x]=lsim(N*sys,r*ones(size(t)),t,[initPozicia;0;initNaklon;0]);");
//$octave->run("plot(t,y)");

/*
echo "<pre>";
print_r($octave->query("plot(t,y)"));
echo "</pre>";
*/
$octave->run("r =". $nova_pozicia.";");
$octave->run("[y,t,x]=lsim(N*sys,r*ones(size(t)),t,x(size(x,1),:));");


//echo "<pre>";
//print_r($octave->query("plot(t,x(:,3))"));
//echo "</pre>";


$result["y"]= array_map('floatval',explode("\n", $octave->query("N*x(:,1)")));
$result["x"]= array_map('floatval',explode("\n", $octave->query("x(:,3)")));
$result["t"]= array_map('floatval',explode("\n", $octave->query("t")));

$json = json_encode($result);
$sql = "INSERT INTO `informations`(`id_author`,`requested_api`, `sent_vars`, `info`, `error`) VALUES (1, 'ball-beam-api','{$nova_pozicia}', 'success', NULL)";


if ($conn->query($sql) === TRUE) {
    echo json_encode($result);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
//echo "<pre>";
//var_dump($result["x"]);
//echo "</pre>";
//echo json_encode($result);

?>