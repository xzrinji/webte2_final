<?php
include "config.php";

require_once ("inverted_pendulum/functions.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title><?php echo TITLE4; ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        .row{
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
            height: 300px; /* Should be removed. Only for demonstration */
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
    <nav>
        <ul>
            <li><a href="index.php" class="lang" > <?php echo HOME; ?>  </a></li>
            <li><a href="inverted_pendulum/inverted_pendulum.php" class="lang" > <?php echo TITLE1; ?> </a></li>
            <li><a href="ball-beam" class="lang" > <?php echo TITLE2; ?> </a></li>
            <li><a href="suspension/suspension.php" class="lang" > <?php echo TITLE3; ?> </a></li>
            <li><a href="calc" class="lang"> <?php echo COUNT; ?> </a></li>
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

<div class="row">
    <div class="column" style="background-color:#aaa;">
        <h2>Zelko Urban</h2><br>
        <label><input type="checkbox"> GitHub</label><br>
        <label><input type="checkbox"> <?php echo BILING?></label><br>
        <label><input type="checkbox"> <?php echo API?></label><br>
        <label><input type="checkbox"> <?php echo API_KEY?></label><br>
        <label><input type="checkbox"> <?php echo INDIVIDUAL?> </label><br>
        <label><input type="checkbox"> <?php echo LOGGING?></label><br>
        <label><input type="checkbox"> <?php echo DESC_API?></label><br>
        <label><input type="checkbox"> <?php echo STATISTICS?></label><br>

    </div>
    <div class="column" style="background-color:#bbb;">
        <h2>Dragana Zrinji</h2><br>
        <label><input type="checkbox"> GitHub</label><br>
        <label><input type="checkbox"> <?php echo BILING?></label><br>
        <label><input type="checkbox"> <?php echo API?></label><br>
        <label><input type="checkbox"> <?php echo API_KEY?></label><br>
        <label><input type="checkbox"> <?php echo INDIVIDUAL?> </label><br>
        <label><input type="checkbox"> <?php echo LOGGING?></label><br>
        <label><input type="checkbox"> <?php echo DESC_API?></label><br>
        <label><input type="checkbox"> <?php echo STATISTICS?></label><br>

    </div>
    <div class="column" style="background-color:#ccc;">
        <h2>Vladimir Petrovic</h2><br>
        <label><input type="checkbox"> GitHub</label><br>
        <label><input type="checkbox"> <?php echo BILING?></label><br>
        <label><input type="checkbox"> <?php echo API?></label><br>
        <label><input type="checkbox"> <?php echo API_KEY?></label><br>
        <label><input type="checkbox"> <?php echo INDIVIDUAL?> </label><br>
        <label><input type="checkbox"> <?php echo LOGGING?></label><br>
        <label><input type="checkbox"> <?php echo DESC_API?></label><br>
        <label><input type="checkbox"> <?php echo STATISTICS?></label><br>

    </div>
</div>

<h1 style="text-align: center; color:darkslategray"> <?php echo TITLE5?></h1>

<div class="row">
    <div class="column" style="background-color:#ccc;">

        <h3><?php echo TITLE2?></h3>
        <p> <?php echo ZELKO ?></p>

    </div>
    <div class="column" style="background-color:#bbb;">
        <h3> <?php echo TITLE1?></h3>
        <p> <?php echo DRAGANA?></p>

    </div>
    <div class="column" style="background-color:#aaa;">

        <h3><?php echo TITLE3?></h3>


    </div>
</div>

</body>
</html>
