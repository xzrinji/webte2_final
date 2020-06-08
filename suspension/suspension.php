<?php
require_once ('../inverted_pendulum/functions.php');

include "../api_key.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.js"></script>
    <script src="suspension/script.js"></script>
    <script src="suspension/graf.js"></script>
    <script src="suspension/animation.js"></script>

    <script>
        $(document).ready(function(){
            $('input[type="checkbox"]').click(function(){
                var inputValue = $(this).attr("value");
                $("." + inputValue).toggle();
            });
        });
    </script>
    
    <title><?php echo TITLE3; ?></title>

    <style>
        .column {
            float: left;
            width: 45%;
            margin-left: 2.5%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>
</head>
<body>
<div><a href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php?API_KEY=f531aa0a174a5af8025a186bbe0e568e"> <h1>←</h1> </a></div>

<a href="?lan=en">&raquo; English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a>
<a href="?lan=sk">&raquo; Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a>

<h4><?php echo SUSP1; ?></h4>

<div>

    <label><input type="checkbox"  value="column" checked><?php echo GRAPH; ?>  </label><br>
    <label><input type="checkbox"  value="animacia" checked> <?php echo SIMULATION; ?> </label>

</div>

<div class="row" >
<div  class="column">
    <canvas  id="myChart"></canvas>
</div>
<br>
<div class="column">
    <canvas  id="myChart2"></canvas>
</div>
</div>

<div id="animation-div" class="animacia"></div>

</body>
</html>
