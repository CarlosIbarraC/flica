<?php
session_start();

$id = $_POST['id'];


$_SESSION['idfoto'] = $id;

echo $id;
?>