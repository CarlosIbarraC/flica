<?php

require "OpenBarcode.php";

$upc = new UPC(null,4);
$number = "1234567890123";
$upc->set_label("be so");
$upc->build($number);
?>