f8cdbae8a8a38621e336351a5281543be34a204b<?php

include "config.php";

require_once ('inverted_pendulum/functions.php');

?>
<!DOCTYPE html>

<html>
<head>
    <title>Finalne zadanie</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
            <li><a href="calc" class="lang"> <?php echo COUNT; ?> </a></li>
            <li><a href="#contact" class="lang" > <?php echo CONTACT; ?> <i class="fas fa-caret-down"></i> </a>
                <ul>
                    <li><a href="#vladimir" class="contact" id="Vladimir">Vladimir</a></li>
                    <li><a href="#zelko" class="contact" id="Zelko">Zelko</a></li>
                    <li><a href="#dragana" class="contact" id="Dragana">Dragana</a></li>
                </ul>
            </li>
            <li><a href="?lan=en">English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a></li>
            <li><a href="?lan=sk">Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
        </ul>
    </nav>
</div>
<div class="body">

    <div class="contact-info">
        <div class="firstname"></div>
        <div class="lastname"></div>
        <div class="email"></div>
        <div class="project"></div>
    </div>

    <div class="about">

        <p> <?php echo WELCOME; ?>

        <h4> <?php echo TITLE1; ?></h4>
        <p>  <?php echo DESCRIPTION_INVERTED; ?></p>
        <h4> <?php  echo TITLE2; ?></h4>
        <p>  <?php echo DESCRIPTION_BALL; ?></p>
        <h4> <?php echo TITLE3; ?></h4>
        <p>  <?php echo DESCRIPTION_SUSPENSION; ?></p>

    </div>



</div>
</body>
</html>

