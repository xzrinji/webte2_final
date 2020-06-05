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
    <script src="script.js"></script>

</head>
<body>

<div class="dropdwn">
    <nav>
        <ul>
            <li><a href="#" class="lang" > <?php echo HOME; ?>  </a></li>
            <li><a href="#" class="lang" > <?php echo TITLE1; ?> </a></li>
            <li><a href="#" class="lang" > <?php echo TITLE2; ?> </a></li>
            <li><a href="#" class="lang" > <?php echo TITLE3; ?> </a></li>
            <li><a href="#" class="lang"> <?php echo COUNT; ?> </a></li>
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
<!--
    <div class="contact-info">
        <div class="firstname"></div>
        <div class="lastname"></div>
        <div class="email"></div>
        <div class="project"></div>
    </div>
-->
    <div class="about" style="height: 100px;">

        <h3> <?php echo INFO_API;?> </h3>

        <?php

        //echo "API KEY : ".$_GET['API_KEY'];

        $filename = 'password.txt';
        $handle = fopen($filename,'r');
        $file_password = fread($handle,filesize($filename));


        //echo "TEXT FILE : ".$file_password;

        if($_GET['API_KEY'] == $file_password)
        {
            header("Location: index.php");
        }
        else{
            echo "<h3>" .ERROR ."</h3>";
        }

        ?>

    </div>



</div>
</body>
</html>

