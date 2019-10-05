<?php
require ('pdf_barcode.php');
include 'helvetica.php';
require 'insertarcod.php';
include 'barcode.php';


/* $conexion=conexion('galeria','root',''); */
$conexion = conexion('galeria','root','');
$statement = $conexion->prepare('SELECT * FROM codigo');
$statement->execute();
$resultado = $statement->fetchAll(); 
/* $cotx=4;
$coty=4; */
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
	$pdf->SetFont('arial','','8');		
	$y=4;
	$x=4;


foreach ($resultado as $row){  
   
   /*  $pdf->EAN13($cotx,$coty,$row['codigo'], 15, 0.32, 12);
    $coty=$coty+27;  
     if ($coty>278) {       
        $coty=4; 
        $cotx= $cotx+34;
        if ($cotx>180){
            $cotx=4;
            $coty=4;
            $pdf->AddPage();
            
        }
               
         } */
         $code = $row['codigo'];
         $nombre = $row['nombre'];	
        
		barcode('codigos/'.$code.'.png', $code, 45, 'horizontal', 'code128', true);		
		$pdf->Image('codigos/'.$code.'.png',$x,$y,30,0,'PNG');			
		$x = $x+35;
		if($x>180){  
			$y = $y+27.5;			
			$x= 3;			
			if($y>286){
				$pdf->AddPage();
				$x=3;
				$y=5;				
			}
        }
   
}

$pdf->Output();

?>