<?php
session_start();
$idCodigo =substr($_POST['id'],0,strpos( $_POST['id'], "-"));
$nombreCodigo=substr($_POST['id'],strpos( $_POST['id'], "-"),22);
$_SESSION['idCodigo'] = $idCodigo;
$_SESSION['nombreCodigo']=$nombreCodigo;
echo $nombreCodigo;
?>