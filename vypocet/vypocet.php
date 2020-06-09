<?php
require_once ("../inverted_pendulum/functions.php");

include "../api_key.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  

    <title><?php echo COUNT; ?></title>
</head>
<body>

<div class="dropdwn">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php?API_KEY=f531aa0a174a5af8025a186bbe0e568e"><?php echo HOME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inverted-pendulum"><?php echo TITLE1; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ball-beam"><?php echo TITLE2; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="suspension-model"><?php echo TITLE3; ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo MATHEMATICS; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="calc-api"><?php echo COUNT; ?> </a>
                        <a class="dropdown-item" href="statistics"><?php echo STATISTICS; ?> </a>
                    </div>
                </li>


            </ul>
            <ul>
                <li class="nav-item"><a href="?lan=en">English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a></li>
                <li class="nav-item"><a href="?lan=sk">Slovak <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
            </ul>
        </div>
    </nav>
</div>
<nav class="container-fluid-nav text-center p-3">

    <h3><?php echo FORMULAR; ?></h3>
</nav>


<div class="container mt-5 px-5">
    <form>

        <div class="form-group">
            <label for="vstup"><?php echo INPUT; ?></label>
            <textarea class="form-control" id="vstup" name="vstup" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo SEND; ?></button>
    </form>
    <label for="vystup" class=" mt-3"><?php echo OUTPUT; ?></label>
    <textarea class="form-control" id="vystup" name="vstup" rows="4" style="font-family:monospace;"></textarea>
</div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="vypocet/script.js"></script>

</body>
</html>