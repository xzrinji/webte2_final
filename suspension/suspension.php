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
    <script src="script.js"></script>
    <script src="graf.js"></script>
    <script src="animation.js"></script>
    
    <title><?php echo TITLE3; ?></title>
</head>
<body>
<div><a href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php?API_KEY=f531aa0a174a5af8025a186bbe0e568e"> <h1>←</h1> </a></div>

<a href="?lan=en">&raquo; English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a>
<a href="?lan=sk">&raquo; Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a>

<h4>Graf označuje v čase meniacu sa pozíciu kolesa pri nabiehaní na
    rôzne prekážky.</h4>
<div style="width: 0px; height: 0px;">
    <canvas  id="myChart"></canvas>
</div>
<div style="width: 0px; height: 0px;">
    <canvas  id="myChart2"></canvas>
</div>

</body>
</html>
