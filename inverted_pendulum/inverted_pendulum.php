<?php
require_once ('functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../style.css">
    <script src="graph.js"></script>
    <title><?php echo TITLE1; ?> </title>

</head>
<body>
<a href="?lan=en">&raquo; English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a>
<a href="?lan=sk">&raquo; Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a>


<div><a href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php" class="btn text-white"> <h1>←</h1> </a></div>

<div>
    <label > <?php echo DESCRIPTION; ?>  </label> <br>
    <input class="show_hide" value="Graph" type="checkbox" data-name="graph" checked/> <?php echo GRAPH; ?> <br>
    <input class="show_hide" value="Simulation" type="checkbox" data-name="simulation" checked />  <?php echo SIMULATION; ?> <br>
</div>

<!-- Graph  -->
<div id="graph" style="width: 800px; height: 800px;">
    <canvas id="myChart"></canvas>
    <canvas id="myChart2"></canvas>
</div>



<!--  Simulation   -->
<div id="simulation">
    <!--hidden element to store the values for animation--------------->
    <input type="hidden" id="h" value="0" />
    <canvas id="Canvas_One" width="400" height="300" style="border:2px solid red;" class="imgforcontent">
    </canvas>
    <!----radio buttons for speed control---------------------------->
    <form name="pendulum" action="">
        <input id="R1" name="speed" value="Slow" type="radio" />Slow<br /><br />
        <input id="R2" name="speed" value="Medium" type="radio" />Medium<br /><br />
        <input id="R3" name="speed" value="Fast" type="radio" />Fast<br /><br />
    </form>
    <!---------------buttons to start and stop the animation------------------------>
    <div style="width:400px;">
        <input type="button" style="float:left;margin-left:10px;" value="Run" onclick="anim()" id="Animation" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="button" style="float:right;margin-right:10px;" value="Stop" onclick="window.clearInterval(x)" id="Stopping" >
    </div>
</div>
    <script type="text/javascript" src="simulation.js"></script>

</body>
</html>
