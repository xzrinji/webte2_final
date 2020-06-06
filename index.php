<?php

include "config.php";

require_once ('inverted_pendulum/functions.php');

?>
<!DOCTYPE html>

<html>
<head>
    <title>Finalne zadanie</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <script src="script.js"></script>

</head>
<body>

<div class="dropdwn">
    <nav>
        <ul>
            <li><a href="index.php" class="lang" > <?php echo HOME; ?>  </a></li>
            <li><a href="inverted_pendulum/inverted_pendulum.php" class="lang" > <?php echo TITLE1; ?> </a></li>
            <li><a href="ball-beam" class="lang" > <?php echo TITLE2; ?> </a></li>
            <li><a href="suspension/suspension.php" class="lang" > <?php echo TITLE3; ?> </a></li>

            <li><a href="#contact" class="lang" > <?php echo MATHEMATICS; ?> <i class="fas fa-caret-down"></i> </a>
                <ul>
                    <li><a href="calc" class="lang"> <?php echo COUNT; ?> </a></li>
                    <li><a href="stats/stats.php" class="lang"> Statistics</a></li>
                </ul>
            </li>
            <li><a href="#contact" class="lang" > <?php echo CONTACT; ?> <i class="fas fa-caret-down"></i> </a>
                <ul>
                    <li><a href="#vladimir" class="contact" id="Vladimir">Vladimir</a></li>
                    <li><a href="#zelko" class="contact" id="Zelko">Zelko</a></li>
                    <li><a href="#dragana" class="contact" id="Dragana">Dragana</a></li>
                    <li><a href="work.php" class="contact" id="work">Work</a> </li>
                </ul>
            </li>
            <li><a href="?lan=en">English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a></li>
            <li><a href="?lan=sk">Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
        </ul>
    </nav>
</div>
<div class="background">

    <div class="body" style="position: center ; margin-bottom: 5%;">


    <div class="contact-info">
        <div class="firstname"></div>
        <div class="lastname"></div>
        <div class="email"></div>
        <div class="project"></div>
    </div>

    <div class="jumbotron container mt-4">
  <h1 class="display-4">Computer Aided System API</h1>
  <p class="lead"><?php echo WELCOME; ?></p>
  <hr class="my-4">
  
</div>

    <div class="about container">


        <p

        <div class="row">
        <div class="container">
        <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Cart-pendulum.svg/300px-Cart-pendulum.svg.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo TITLE1; ?></h5>
        <p class="card-text"><?php echo DESCRIPTION_INVERTED; ?></p>
        
      </div>
    </div>
  </div>

        </div>
        
        <div class="container">
        <div class="row no-gutters">
    
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php  echo TITLE2; ?></h5>
        <p class="card-text"><?php echo DESCRIPTION_BALL; ?></p>
        
      </div>
    </div>
    <div class="col-md-4">
      <img src="https://lh3.googleusercontent.com/proxy/UMBxceC-ofh3YmFTeAQ5mS05s5Qg8RpTmq6OTm6WmR3rWkI9bHfXZ4SaNRPqQzb09tc_ohWHWGEORVOQ8drc0shbePYM48uewRb_sa0hfs5KoPsz2HtujdB-QgP7HwCCo8y32-iuX1c1" class="card-img" alt="...">
    </div>
  </div>

        </div>

        <div class="container">
        <div class="row no-gutters">
    <div class="col-md-4">
      <img src="http://ctms.engin.umich.edu/CTMS/Content/Suspension/System/Modeling/figures/susp1.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo TITLE3; ?></h5>
        <p class="card-text"><?php echo DESCRIPTION_SUSPENSION; ?></p>
        
      </div>
    </div>
  </div>

        </div>

      
    </div>

    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

