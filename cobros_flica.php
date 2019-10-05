<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'Exception.php';
 require 'PHPMailer.php';
 require 'SMTP.php';

require "funciones.php";
/* $conexion = conexion('galeria', 'root', ''); */
$conexion = conexion('galeria','root','');

if (!$conexion) {
	die();
}
session_start();

$a = $_POST['cobro'];
$b = $_POST['factura'];
$c = $_POST['monto'];
$d = $_POST['com-cobro'];
$g = $_POST['optradio'];
$e = $_POST['fecha'];
$fd =$_SESSION['tres']+1000 ;

$statement = $conexion->prepare("INSERT INTO cobros(id,cliente,factura,valor,tipo,comentario,recibo,fecha) VALUES(null,'$a','$b','$c','$g','$d','$fd','$e')");
$statement->execute();
$resultado = $statement->fetchAll();
if ($statement) { 
  $nombre='flica';
  $correo='ceibarra1@gmail.com';
  $mensaje='probando salida automatica';
 
  $respuesta= ('El Cliente '.' ' . strtoupper($a).' '.'pago la factura #'.' '.$b.' ' .'por $.'. $c.' '.'el dia'.' '.$e);
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
      $mail->addAddress($correo, $nombre);
      $correo1 =$_POST['correo'];
      if(!$correo1) {   
       
      }else{
        $mail->addAddress($correo1, $nombre);
      }     
      
           // Add a recipient
                     // Name is optional      
  
      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Prueba';
      $mail->Body    = $respuesta;
      $mail->AltBody = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur adipisci, reprehenderit ullam ad ut veritatis?';
  
      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }	
    header("location: tabla_envio.php");     
   } 
   else{
     echo("INSERCION NO EXITOSA");
     echo $_SESSION['max'];
	 }
   
   
?>      

