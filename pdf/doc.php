<?php
require 'insertarcod.php';
require 'fpdf/fpdf.php';	
include 'barcode.php';

/* $conexion=conexion('galeria','root',''); */
$conexion = conexion('galeria','root','');
$statement = $conexion->prepare('SELECT * FROM codigo');
$statement->execute();
$resultado = $statement->fetchAll(); 
$cotx=25;
$coty=13;
$pdf = new FPDF ();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetFont('arial','','10');	
$pdf->SetY(20);
$coty=23;
foreach ($resultado as $row){  
    $code = $row['codigo'];		
	barcode('codigos/'.$code.'.png', $code, 45, 'horizontal', 'code128', true);		
	$pdf->Image('codigos/'.$code.'.png',25,$coty,30,0,'PNG');
    /* $pdf->EAN13($cotx,$coty,$row['codigo'], 10, 0.25, 9); */
    $coty=$coty+17; 
    $nombre=utf8_decode($row['nombre']);
    $ref=$row['id_producto'];
    $pdf->SetX(20);
    $pdf->Cell(180,17,$nombre.' '.$ref,1,1,'C');    

     if ($coty>265) {       
        $coty=23; 
        $pdf->AddPage();
        $pdf->SetY(20);        
         }   
}
$pdf->Output();
?>