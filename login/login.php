<?php
if(isset($_POST['user_password']) && !empty($_POST['user_password']))
{
    $user_password =md5($_POST['user_password']);

    $filename = 'password.txt';
    $handle = fopen($filename,'r');
    $file_password = fread($handle,filesize($filename));

    if($user_password == $file_password)
    {

        echo "Password is ok.";
        echo " <a href='https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php'> <h1> Welcome page</h1> </a>";
    }
    else{
        echo "Incorrect password";
    }

}
else{
    echo 'Enter a password';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<h3> Login </h3>

<form action="login.php" method="post">
    Password : <input type="password" name="user_password">
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>