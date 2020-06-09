<?php
require_once('../inverted_pendulum/functions.php');

include "../api_key.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.js"></script>
  <script src="ball_beam/script.js"></script>
  <script src="ball_beam/animation.js"></script>
  <script src="ball_beam/grafy.js"></script>
  

  <title><?php echo TITLE2; ?> </title>
</head>

<body>



  <nav class="navbar navbar-light bg-dark">
    <div><a href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php?API_KEY=f531aa0a174a5af8025a186bbe0e568e" class="btn text-white">
        <h1>←</h1>
      </a></div>
      <div>
<a href="?lan=en">&raquo; English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a>
<a href="?lan=sk">&raquo; Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a>
</div>
  </nav>







  <div class=" bg-dark text-white" id="bottom">

    <div class="row input d-flex align-items-center flex-column">
      <form id="api-call-form">
        <div class="form-group">
          <label for="pozicia"><?php echo POSITION; ?> </label>
          <input type="number" step="0.01" class="form-control" id="pozicia" aria-describedby="poziciaTip" name="pozicia" placeholder="0.0-1.0">
          <small id="poziciaTip" class="form-text text-danger invisible"><?php echo ALERT; ?></small>
        </div>


        <button type="submit" class="btn btn-primary"><?php echo SEND; ?></button>
      </form>
      <div class="container d-flex justify-content-center">
      <div class="form-check m-2">
        <input type="checkbox" class="form-check-input" id="graph" checked>
        <label class="form-check-label" for="graph"><?php echo GRAPH; ?></label>
      </div>
      <div class="form-check m-2">
        <input type="checkbox" class="form-check-input" id="animation" checked>
        <label class="form-check-label" for="animation"><?php echo SIMULATION; ?></label>
       
      </div>
      </div>
    </div>

    <div class="container" id="grafy">
    <div class="row bg-dark d-flex justify-content-center">
      <div class="container" id="graf1">
        <canvas id="myChart"></canvas>
      </div>
      <br>
      <div class="container" id="graf2">
        <canvas id="myChart2"></canvas>
      </div>
    </div>
    </div>

  </div>

  <div id="canvas-div">
  <div class="d-flex canvas"></div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>