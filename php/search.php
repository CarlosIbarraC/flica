<?php 
if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');

require_once 'conexion.php';

function search()
{
  $mysqli = getConnexion();
  $search = $mysqli->real_escape_string($_POST['search']);
  $query = "SELECT id_clientes, cliente FROM clientes WHERE cliente LIKE '%$search%' ";
  $res = $mysqli->query($query);
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo "<p>$row[id_clientes].$row[cliente]</p>";
  }
}

search();