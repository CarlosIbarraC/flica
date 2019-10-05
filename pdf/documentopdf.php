
<?php
include 'conexion.php'; 
require 'fpdf/fpdf.php';
/* require 'helvetica.php'; */

$pdf = new FPDF('l','mm');

$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(232,232,232);
$pdf->Cell(70,6,'TITULO',1,0,'c,1'); $pdf->Cell(20,6,'TITULO',1,0,'c,1');
$pdf->AddPage();
$pdf->Image( "src='barcode.php?text=0123456789'", $pdf->GetX(), $pdf->GetY(),20); 







$pdf->Output();


?>
