<?php
include "config.php";

include "api_key.php";

require_once("inverted_pendulum/functions.php");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo TITLE4; ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            margin-top: 5%;
            margin-right: 2%;
            margin-left: 2%;
            margin-bottom: 5%;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 350px;
            /* Should be removed. Only for demonstration */
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

    <div class="row">
        <div class="column" style="background-color:#aaa;">
            <h2>Zelko Urban</h2><br>
            <label><input type="checkbox"> GitHub</label><br>
            <label><input type="checkbox"> <?php echo BILING ?></label><br>
            <label><input type="checkbox"> <?php echo API ?></label><br>
            <label><input type="checkbox"> <?php echo API_KEY ?></label><br>
            <label><input type="checkbox"> <?php echo INDIVIDUAL ?> </label><br>
            <label><input type="checkbox"> <?php echo LOGGING ?></label><br>
            <label><input type="checkbox"> <?php echo DESC_API ?></label><br>
            <label><input type="checkbox"> <?php echo STATISTICS ?></label><br>

        </div>
        <div class="column" style="background-color:#bbb;">
            <h2>Dragana Zrinji</h2><br>
            <label><input type="checkbox"> GitHub</label><br>
            <label><input type="checkbox"> <?php echo BILING ?></label><br>
            <label><input type="checkbox"> <?php echo API ?></label><br>
            <label><input type="checkbox"> <?php echo API_KEY ?></label><br>
            <label><input type="checkbox"> <?php echo INDIVIDUAL ?> </label><br>
            <label><input type="checkbox"> <?php echo LOGGING ?></label><br>
            <label><input type="checkbox"> <?php echo DESC_API ?></label><br>
            <label><input type="checkbox"> <?php echo STATISTICS ?></label><br>

        </div>
        <div class="column" style="background-color:#ccc;">
            <h2>Vladimir Petrovic</h2><br>
            <label><input type="checkbox"> GitHub</label><br>
            <label><input type="checkbox"> <?php echo BILING ?></label><br>
            <label><input type="checkbox"> <?php echo API ?></label><br>
            <label><input type="checkbox"> <?php echo API_KEY ?></label><br>
            <label><input type="checkbox"> <?php echo INDIVIDUAL ?> </label><br>
            <label><input type="checkbox"> <?php echo LOGGING ?></label><br>
            <label><input type="checkbox"> <?php echo DESC_API ?></label><br>
            <label><input type="checkbox"> <?php echo STATISTICS ?></label><br>

        </div>
    </div>

    <h1 style="text-align: center; color:darkslategray"> <?php echo TITLE5 ?></h1>

    <div class="row">
        <div class="column" style="background-color:#ccc;">

            <h3><?php echo TITLE2 ?></h3>
            <p> <?php echo ZELKO ?></p>

        </div>
        <div class="column" style="background-color:#bbb;">
            <h3> <?php echo TITLE1 ?></h3>
            <p> <?php echo DRAGANA ?></p>

        </div>
        <div class="column" style="background-color:#aaa;">

            <h3><?php echo TITLE3 ?></h3>
            <p><?php echo VLADO;?></p>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>