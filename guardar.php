<?php
$productos= json_decode($_POST["json"]);
$remision = ($productos->{"data"}[0]->{"remision"});
$cliente = ($productos->{"data"}[0]->{"nombre"});
$producto = ($productos->{"data"}[0]->{"producto"});
$precio = ($productos->{"data"}[0]->{"precio"});
$cantidad = ($productos->{"data"}[0]->{"cantidad"});
$subtotal = ($productos->{"data"}[0]->{"subtotal"});
$totales = ($productos->{"data"}[0]->{"totales"});
?>