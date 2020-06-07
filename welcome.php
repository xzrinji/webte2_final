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
            <li><a href="#contact" class="lang" > <?php echo MATHEMATICS; ?> <i class="fas fa-caret-down"></i> </a>
                <ul>
                    <li><a href="#" class="lang"> <?php echo COUNT; ?> </a></li>
                    <li><a href="#" class="lang"> Statistics</a></li>
                </ul>
            </li>
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
    <div class="about" style="height: 400px; margin-top: 10%;">

        <h3> <?php echo INFO_API;?> </h3>
        <br>
        <p> <?php echo HOWTO1 ;?></p>
        <br>
        <p> <?php echo HOWTO2 ;?></p>
        <br>
        <p> <?php echo HOWTO3 ;?></p>
        <p> <?php echo HOWTO4 ;?></p>
        <br>
        <?php

        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
            $_SERVER['REQUEST_URI'];

        //echo $url;

        $query = parse_url($url);


        if(isset($query['query']))
        {
            parse_url($query['query'],$params);

            if($query['query'] == 'API_KEY=f531aa0a174a5af8025a186bbe0e568e'){
                echo "   Ok. Please refresh page.";
                $cookie_name= "API_KEY";
                $cookie_value = 'f531aa0a174a5af8025a186bbe0e568e';
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                if(!isset($_COOKIE[$cookie_name])) {
                    echo "Cookie named '" . $cookie_name . "' is not set!";
                } else {
                    //echo "Cookie '" . $cookie_name . "' is set!<br>";
                    //echo "Value is: " . $_COOKIE[$cookie_name];
                    header("Location: index.php");
                }
                /*echo "<pre>";
                var_dump($query['query']);
                echo "</pre>";
                */


            }
            else{
                echo ERROR;
            }
        }
        else{
            echo ERROR2;
            $params = array();
        }

        $params['API_KEY'] = 'f531aa0a174a5af8025a186bbe0e568e';

        http_build_query($query);
        /*
        echo "<pre>";
        var_dump($query);
        echo "</pre>";
        */
        ?>


    </div>



</div>
</body>
</html>

