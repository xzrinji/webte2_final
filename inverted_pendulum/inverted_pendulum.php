<?php
require_once ('functions.php');

include "../api_key.php";


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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.js"></script>
    <script src="inverted_pendulum/script.js"></script>
    <script type="text/javascript" src="inverted_pendulum/simulation.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="inverted_pendulum/graph.js"></script>

    <title><?php echo TITLE1; ?> </title>

    <style>
        .box{
            color: #fff;
            padding: 20px;
            display: none;
            margin-top: 20px;
        }
        .red{ background: #ff0000; }
        .green{ background: #228B22; }
        .blue{ background: #0000ff; }
        label{ margin-right: 15px; }




    </style>
    <script>
        $(document).ready(function(){
            $('input[type="checkbox"]').click(function(){
                var inputValue = $(this).attr("value");
                $("." + inputValue).toggle();
            });
        });
    </script>

</head>
<body>
<a href="?lan=en">&raquo; English </a>
<a href="?lan=sk">&raquo; Slovak  </a>


<div><a href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php?API_KEY=f531aa0a174a5af8025a186bbe0e568e" class="btn text-white"> <h1>←</h1> </a></div>


<div>
    <label > <?php echo DESCRIPTION; ?>  </label> <br>

    <label><input type="checkbox" name="Checkbox" value="graph" checked><?php echo GRAPH; ?>  </label>
    <label><input type="checkbox" name="Checkbox" value="simulation" checked> <?php echo SIMULATION; ?> </label>

</div>

<!-- Graph  -->

<form id="api-call-form">
    <div class="form-group">
        <label for="pozicia"> Choose :  </label>
        <input type="number" step="0.01" class="form-control w-25" id="pozicia" aria-describedby="poziciaTip" name="pozicia" placeholder="0.0-1.0">
        <small id="poziciaTip" class="form-text text-danger invisible"><?php echo ALERT; ?></small>
    </div>

    <button type="submit" class="btn btn-primary"><?php echo SEND; ?></button>
</form>
<div class="graph" style="width: 600px; height: 600px; margin-left: 25%;">
    <div class="column"><canvas id="myChart"></canvas></div>
    <div class="column"><canvas id="myChart2"></canvas></div>
</div>


<!--  Simulation   -->
<div class="simulation" id="simulation" style="margin-left: 40%;">


</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body></body>
</html>
