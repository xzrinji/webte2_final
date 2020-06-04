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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../style.css">
    <script src="graph.js"></script>
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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
<a href="?lan=en">&raquo; English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a>
<a href="?lan=sk">&raquo; Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a>


<div><a href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php" class="btn text-white"> <h1>←</h1> </a></div>


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
<div class="graph" style="width: 800px; height: 800px;">
    <canvas id="myChart"></canvas>
    <canvas id="myChart2"></canvas>
</div>


<!--  Simulation   -->
<div class="simulation" id="simulation">

    <script type="text/javascript" src="simulation.js"></script>

</div>
</body>
</html>
