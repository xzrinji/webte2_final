<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';


$mail = new PHPMailer(true);        // Passing `true` enables exceptions
try {
    //Server settings
   // $mail->SMTPDebug = 2;         // Enable verbose debug output
   $mail->CharSet = 'UTF-8'; 
   $mail->isSMTP();                // Set mailer to use SMTP
    $mail->Host = 'mail.stuba.sk';  // Specify SMTP servers
    $mail->SMTPAuth = true;         // Enable SMTP authentication
    $mail->Username = "xurban";    // SMTP username
    $mail->Password = $password;    // SMTP password
    $mail->SMTPSecure = 'tls';      // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;               // TCP port to connect to

    //Recipients
    $mail->setFrom("xurban@stuba.sk", 'Mailer');
    $mail->addAddress($_POST["email_entered"], 'Joe User');     
//    $mail->addAddress('ellen@example.com');              // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('mickey.jpg', 'mys.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                            // Set email format to HTML
    $mail->Subject = 'Štatistika použitia API';
    $mail->Body    = $_POST["stats"];
    
    $mail->send();
    echo json_encode(array("status" => "success"));
} catch (Exception $e) {
    echo json_encode(array("status" => "error", "info" => $mail->ErrorInfo));
}

?>