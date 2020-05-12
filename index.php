<?php
include "config.php";

$vlado = "Vladimir";
$zelo = "Zelko";
$daca = "Dragana";

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
            <li><a href="index.php" class="lang" key="home">Home</a></li>
            <li><a href="inverted_pendulum.php" class="lang" key="kyvadlo">Inverted pendulum</a></li>
            <li><a href="ball-beam" class="lang" key="gulicka">Ball beam</a></li>
            <li><a href="#suspension" class="lang" key="tlmic">Suspension</a></li>
            <li><a href="#aircraft" class="lang" key="lietadlo">Aircraft pitch</a></li>
            <li><a href="#contact" class="lang" key="contact">Contact<i class="fas fa-caret-down"></i> </a>
                <ul>
                    <li><a href="#vladimir" class="contact" id="Vladimir">Vladimir</a></li>
                    <li><a href="#zelko" class="contact" id="Zelko">Zelko</a></li>
                    <li><a href="#dragana" class="contact" id="Dragana">Dragana</a></li>
                </ul>
            </li>
            <li><a href="#eng" id="en" class="translate"> English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"> </a></li>
            <li><a href="#sk" id="sk" class="translate"> Slovak <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
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

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>



</div>
</body>
</html>

