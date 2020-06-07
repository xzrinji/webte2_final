<?php

include "config.php";
include "api_key.php";

require_once('inverted_pendulum/functions.php');


?>
<!DOCTYPE html>

<html>

<head>
    <title><?php echo MAIN;?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="script.js"></script>

</head>

<body>

    <div class="dropdwn">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php?API_KEY=f531aa0a174a5af8025a186bbe0e568e"><?php echo HOME; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo TITLE1; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo TITLE2; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo TITLE3; ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo MATHEMATICS; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><?php echo COUNT; ?> </a>
                            <a class="dropdown-item" href="#"><?php echo STATISTICS; ?>  </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo CONTACT; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item contact" href="#vladimir" id="vladimir">Vladimir</a>
                            <a class="dropdown-item contact" href="#zelko" id="zelko">Zelko</a>
                            <a class="dropdown-item contact" href="#dragana" id="dragana">Dragana</a>
                            <a class="dropdown-item contact" href="work.php">Work</a>

                        </div>
                    </li>
                    <li class="nav-item"><a href="?lan=en">English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a></li>
                    <li class="nav-item"><a href="?lan=sk">Slovak <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="jumbotron p-5">
        <div class="container p-5">
            <h1 class="display-4">Computer Aided System API</h1>
            <p class="lead"><?php echo WELCOME; ?></p>

        </div>
    </div>

    <div class="container-fluid d-flex h-100 flex-column card-row p-5">
    <div class="card-deck container text-white ">
        <div class="card shadow border-0">

        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Cart-pendulum.svg/300px-Cart-pendulum.svg.png" class="card-img img-responsive" alt="inverted-pendulum">
            <div class="card-body">
                <h5 class="card-title"><?php echo TITLE1; ?></h5>
                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Show More</a>
                <p class="card-text collapse multi-collapse pt-2" id="multiCollapseExample1"><?php echo DESCRIPTION_INVERTED; ?></p>
               
            </div>
        </div>
        <div class="card shadow border-0">
        <img src="https://i.ibb.co/9bW3nGc/ballbeam.png" class="card-img img-responsive" alt="ballbeam" >
            <div class="card-body">
                <h5 class="card-title"><?php echo TITLE2; ?></h5>
                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Show More</a>
                
                <p class="card-text collapse multi-collapse pt-2" id="multiCollapseExample2"><?php echo DESCRIPTION_BALL; ?></p>
                
            </div>
        </div>
        <div class="card shadow border-0">
        <img src="suspension.png" class="card-img shadow" alt="suspension" style=" height: 350px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo TITLE3; ?></h5>
                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Show More</a>
                
                <p class="card-text collapse multi-collapse pt-2" id="multiCollapseExample3"><?php echo DESCRIPTION_SUSPENSION; ?></p>
               
            </div>
        </div>
    </div>
    </div>


    <div class="background">

        <div class="body" style="position: center ; margin-bottom: 5%;">


            <div class="contact-info">
                <div class="firstname"></div>
                <div class="lastname"></div>
                <div class="email"></div>
                <div class="project"></div>
            </div>


        </div>

       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>