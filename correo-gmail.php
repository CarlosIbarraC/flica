<?php

$nombre='flica';
$correo='ceibarra1@gmail.com';
$mensaje='probando salida automatica';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ceibarra1@gmail.com';                 // SMTP username
    $mail->Password = 'salome1964';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ceibarra1@gmail.com', $nombre);
    $mail->addAddress($correo, 'Joe User');
    //$mail->addAddress($correo1, 'Joe User');
         // Add a recipient
                   // Name is optional
    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Prueba';
    $mail->Body    = 'prueba de entrada automatica</b>';
    $mail->AltBody = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur adipisci, reprehenderit ullam ad ut veritatis?';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>