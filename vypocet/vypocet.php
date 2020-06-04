<?php
require_once ("../inverted_pendulum/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?php echo COUNT; ?></title>
</head>
<body>


<nav class="container-fluid-nav text-center p-3">

    <h3><?php echo FORMULAR; ?></h3>
</nav>
<div><a href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php" class="btn text-white"> <h1>←</h1> </a></div>

<a href="?lan=en">English </a>
<a href="?lan=sk">Slovak </a>

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