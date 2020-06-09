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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                        <a class="dropdown-item contact" href="#"><?php echo WORK; ?></a>

                    </div>
                </li>
                <li class="nav-item"><a href="?lan=en">English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a></li>
                <li class="nav-item"><a href="?lan=sk">Slovak <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="body">
<div class="bg-image"></div>
    <div class="about" style="margin-top: 5%; height: 400px;">

        <h3> <?php echo INFO_API;?> </h3>
        <br>
        <p> <?php echo HOWTO1 ;?></p>
        <img src="howto_api.png" alt="how to insert api key">

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


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</div>
</body>
</html>

