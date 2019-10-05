<?php 
function getConnexion()
{
  /* $mysqli = new Mysqli('localhost', 'root', '', 'galeria'); */
  $mysqli = new Mysqli('50.62.209.18', 'carlosibarra', 'salome1961', 'galeria');
  if($mysqli->connect_errno) exit('Error en la conexión: ' . $mysqli->connect_errno);
  $mysqli->set_charset('utf8');
  return $mysqli;
}