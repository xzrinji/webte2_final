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


    <title>Štatistika</title>
</head>
<body>

<div class="dropdwn">
    <nav>
        <ul>
            <li><a href="../index.php" class="lang" > <?php echo HOME; ?>  </a></li>
            <li><a href="../inverted_pendulum/inverted_pendulum.php" class="lang" > <?php echo TITLE1; ?> </a></li>
            <li><a href="../ball-beam" class="lang" > <?php echo TITLE2; ?> </a></li>
            <li><a href="../suspension/suspension.php" class="lang" > <?php echo TITLE3; ?> </a></li>

            <li><a href="#math" class="lang" > <?php echo MATHEMATICS; ?> <i class="fas fa-caret-down"></i> </a>
                <ul>
                    <li><a href="calc" class="lang"> <?php echo COUNT; ?> </a></li>
                    <li><a href="stats/stats.php" class="lang"> Statistics</a></li>
                </ul>
            </li>
            <li><a href="#contact" class="lang" > <?php echo CONTACT; ?> <i class="fas fa-caret-down"></i> </a>
                <ul>
                    <li><a href="#vladimir" class="contact" id="Vladimir">Vladimir</a></li>
                    <li><a href="#zelko" class="contact" id="Zelko">Zelko</a></li>
                    <li><a href="#dragana" class="contact" id="Dragana">Dragana</a></li>
                    <li><a href="../work.php" class="contact" id="work">Work</a> </li>
                </ul>
            </li>
            <li><a href="?lan=en">English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a></li>
            <li><a href="?lan=sk">Slovak  <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
        </ul>
    </nav>
</div>
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

    <div class="container mt-5 card p-5" id="stats-card">
    <table class="table table-hover" id="table-stats">
  <thead>
    <tr>
      <th scope="col">Úloha</th>
      <th scope="col">Počet užívaní</th>
      
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
            <label>Enter Your E-mail Please If You Want To Recieve Page Statistics</label><br>
            <input type="email"name="email_entered" value='<?php echo $email; ?>'/>
            <br><br>
            <input type="submit" name="submitbutton" value="Submit" class="btn btn-primary"/>
        </form>


     
    </div>





    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>