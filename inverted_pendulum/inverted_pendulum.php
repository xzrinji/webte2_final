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

    <script>
        function update(){
            var checkbox = $(this);
            var name = checkbox.data('name');
            if( checkbox.is(':checked') ) {
                $( '#' + name ).show();
            } else {
                $( '#' + name ).hide();
            }
        }

        //just setup change and each to use the same function
        $('.show_hide').change(update).each(update);
    </script>

</head>
<body>
<a href="?lan=en">&raquo; English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a>
<a href="?lan=sk">&raquo; Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a>


<div><a href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php" class="btn text-white"> <h1>←</h1> </a></div>


<div>
    <label > <?php echo DESCRIPTION; ?>  </label> <br>
    <input class="show_hide" value="Graph" type="checkbox" name="checkbox" checked/> <?php echo GRAPH; ?> <br>
    <input class="show_hide" value="Simulation" type="checkbox" name="checkbox" checked />  <?php echo SIMULATION; ?> <br>
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
<div id="graph" style="width: 800px; height: 800px;">
    <canvas id="myChart"></canvas>
    <canvas id="myChart2"></canvas>
</div>


<!--  Simulation   -->
<div id="simulation">

    <script type="text/javascript" src="simulation.js"></script>

</div>
</body>
</html>
