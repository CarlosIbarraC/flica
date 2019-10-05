<?php
/* $mysqli = new mysqli('localhost','root','','galeria'); */

$mysqli = new mysqli('50.62.209.223','carlosibarra','salome1961','galeria'); 
if($mysqli->connect_error){
    die('Error en la conexion'.$mysqli->connect_error);
}
?>