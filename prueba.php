<?php
session_start();
$codigo=$_SESSION['idCodigo'];
$producto=$_SESSION['nombreCodigo'];
$html = '
<html>
<head>
<style>
body {font-family: sans-serif;
	font-size: 2.8pt;	
}
.barras{
	margin-top:26px;
}
h1{
	text-align:center;
}
</style>
</head>
<body>
<div class="barras ">
<barcode code="'.$codigo.'" type="ISSN" text="1" size="0.8" height=".5" class="barcode" />
<h1 class="barcodeT">'.$producto.'</h1>
</div>
</body>
</html>
';
require_once('vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf([
	'margin_left' => 3,
	'margin_right' => 0,
	'margin_top' => 4,
	'margin_bottom' => 0,		
	'showBarcodeNumbers' => FALSE
]);
$mpdf->WriteHTML('<columns column-count="6" vAlign="J" column-gap="5.5" />');
try {		
 for ($i=0; $i < 6; $i++) { 
      for ($c=0; $c <11; $c++) { 
		$mpdf->WriteHTML($html);		
	  }		
	$mpdf->WriteHTML('<columnbreak />');
}
} catch (\Mpdf\MpdfException $e) {
	die ($e->getMessage());
}
$mpdf->Output();