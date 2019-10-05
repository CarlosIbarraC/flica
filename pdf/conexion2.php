<?php
/* $mysqli = new mysqli('localhost','root','','galeria'); */

$mysqli = new mysqli('localhost','root','','galeria'); 
if($mysqli->connect_error){
    die('Error en la conexion'.$mysqli->connect_error);
}
?> 