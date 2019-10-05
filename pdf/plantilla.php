<?php
require 'fpdf.php'; 


class PDF extends FPDF
{
   function Header()
   {

       $this->Image('../img/logo-largo.png',5,5,30);
       $this->SetFont('Arial','B',15);
       $this->Cell(120,10,'reporte de estado',0,0,'C');
       $this->Ln(20);

   }
   function Footer()
   {

       $this->SetY(-15);
       $this->SetFont('Arial','I', 8);
       $n=$this->PageNo().'/{nb}';
       $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
     
   }
}
?>