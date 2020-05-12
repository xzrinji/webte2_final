<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.js"></script>
    <script src="ball_beam/simulation.js"></script>
    <script src="ball_beam/grafy.js"></script>
    <script src="ball_beam/script.js"></script>
    
    <title>Ball Beam</title>
</head>
<body>
  <div class="fixed-top positoin-absolute"><a href="index.php" class="btn text-white"> <h1>←</h1> </a></div>
<div class="row bg-dark text-white" id="grafy">
    <div class="col h-25" id="graf1">
    <canvas  id="myChart"></canvas>
    </div>
    <div class="col h-25" id="graf2">
    <canvas  id="myChart2"></canvas>
    </div>
    

</div>

<div class="row bg-dark text-white" id="bottom">

    <div class="col-lg input p-5">
    <form id="api-call-form">
  <div class="form-group">
    <label for="pozicia">Pozícia loptičky</label>
    <input type="number" step="0.01" class="form-control w-25" id="pozicia" aria-describedby="poziciaTip" name="pozicia" placeholder="0.0-0.95">
    <small id="poziciaTip" class="form-text text-danger invisible">Zadaný vstup nie je platný, vstup musi byť 0-0.95</small>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Odoslať</button>
</form>
<div class="form-check  mt-5">
    <input type="checkbox" class="form-check-input" id="graph" checked>
    <label class="form-check-label" for="graph">Graf</label>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="animation" checked>
    <label class="form-check-label" for="animation">Animácia</label>
  </div>
    </div>
    <div class="col canvas" id="canvas-div"></div>

</div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>