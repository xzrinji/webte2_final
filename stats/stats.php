<?php

//phpinfo();
require_once ('../inverted_pendulum/functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title><?php echo STATISTICS?></title>
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
          <a class="dropdown-item" href="#">Statistics </a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo CONTACT; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
          <a class="dropdown-item" href="#">Vladimir</a>
          <a class="dropdown-item" href="#">Zelko</a>
          <a class="dropdown-item" href="#">Dragana</a>
          <a class="dropdown-item" href="#">Work</a>
          
        </div>
      </li>
      <li class="nav-item"><a href="?lan=en">English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a></li>
      <li class="nav-item"><a href="?lan=sk">Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
    </ul>
  </div>
</nav>
</div>
<nav class="container-fluid-nav text-center p-3">

    <h3><?php echo STATISTICS; ?></h3>
</nav>
<h3 style="text-align: center; margin-top: 5%;"><?php echo TABLE?></h3>

<div class="container mt-5 card p-5" id="stats-card">
    <?php


    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'xzrinji');
    define('DB_PASSWORD', 'Dragana5');
    define('DB_NAME', 'final_project');

    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $conn->set_charset("utf8");

    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }
    else{
        //echo " Connected to database.";
    }

    $sql = "SELECT requested_api, COUNT(*) AS count FROM informations GROUP BY requested_api";
    $result = $conn->query($sql);
    $response = array();
    while ($row = $result->fetch_assoc()) {
        array_push($response, $row);
    }
    //echo json_encode($response);

    ?>
    <table class="table table-hover" id="table-stats">
  <thead>
    <tr>
      <th scope="col"><?php echo PROJECT;?></th>
      <th scope="col"><?php echo COUNTER?></th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($response as $r)
  {

    echo "<tr>";
    echo "<td>".$r['requested_api']."</td>";
    echo "<td>".$r['count']."</td>";
    echo "</tr >";

    }
    ?>


  </tbody>
</table>

        <form action="" method="POST" id="form-mail">
            <label><?php echo EMAIL;?></label><br>
            <input type="email"name="email_entered" placeholder="mail@mail.com"/>
            <br><br>
            <input type="submit" name="submitbutton" value="<?php echo SEND;?>" class="btn btn-primary"/>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>