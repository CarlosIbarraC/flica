<?php 
/* require'views/nav.view.php'; */
$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$ciudad = $_POST['ciudad'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa un nombre <br />';
	}
	if (!empty($direccion)) {
		$direccion = trim($direccion);
		$direccion = filter_var($direccion, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa una direccion <br />';
	}
	if (!empty($telefono)) {
		$telefono = trim($telefono);
		$telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa un telefono <br />';
	}
	if (!empty($ciudad)) {
		$ciudad = trim($ciudad);
		$ciudad = filter_var($ciudad, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa una ciudad <br />';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br />';
		}
	} else {
		$errores .= 'Por favor ingresa un correo <br />';
	}

	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= 'Por favor ingresa el mensaje <br />';
	}

	if(!$errores){
		$enviar_a = 'ceibarra1@gmail.com';
		$asunto = 'Correo enviado desde Labintox.com';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "Direccion: $direccion \n";
		$mensaje_preparado .= "tel: $telefono \n";
		$mensaje_preparado .= "Ciudad: $ciudad \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';

	}
    if($enviado== 'true'){
    	
	$responder_a ="$correo";
	$asunto = "gracias por tu correo $nombre \n";
	$mensaje= "Pronto te responderemos";
	mail($responder_a, $asunto, $mensaje);
    
}
}

require 'views/contacto.view.php';



?>