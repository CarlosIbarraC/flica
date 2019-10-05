<?php
	require 'fpdf/fpdf.php';	
    include 'barcode.php';
	require 'conexion.php';
	require '../funciones.php';

	
	

	$cantidad=$_POST['cantidad'];	
	$id = $_POST['id_referencia'];
	/* $statement = $conexion->prepare("INSERT INTO cobros(id,cliente,factura,valor,tipo,comentario,recibo,fecha) VALUES(null,'$a','$b','$c','$g','$d','$fd','$e')");
	$statement->execute(); 
	$conexion = conexion('galeria','root','');
    $statement = $conexion->prepare("SELECT nombre , codigo FROM codigo WHERE id_producto = $id ");
    $statement->execute();
     $row = $statement->fetch_assoc(); 	
	$sql = "SELECT nombre , codigo FROM codigo WHERE id_producto = $id ";
	$resultado = $mysqli->query($sql);	 */
	
	$conexion= new mysqli('50.62.209.223','carlosibarra','salome1961','galeria');
    if ($conexion->connect_errno){
    die('lo siento no se conecto');
    }
    $sql="SELECT nombre , codigo FROM codigo WHERE id_producto = $id ";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true, 20);
	$pdf->SetFont('arial','','6');
	$pdf->SetLeftMargin(3);		
	$y=5;
	$x=3;	
	/* $row = $statement->fetch_assoc(); */
	for ($i = 1; $i <= $cantidad; $i++) {
	   		
		$code = $row['codigo'];	
		$ref= $row['nombre'];
		/* $pdf->SetXY($x,($y+55)); */
			 
		barcode('codigos/'.$code.'.png',$code, 55, 'horizontal', 'code128', true);		
		$pdf->Image('codigos/'.$code.'.png',$x,$y,30,0,'PNG');
		
		
		/* $pdf->Cell(35,20,$ref,0,0,'L');	 */	
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
	
	//-------------------------------------------------------------------------//

	/* $conexion=conexion('galeria','root','');
$statement = $conexion->prepare('SELECT * FROM codigo WHERE id_producto = $id');
$statement->execute();
$row = $statement->fetch_assoc(); 
$cotx=4;
$coty=4;
$pdf = new PDF_BARCODE ('P','mm');
$pdf->AddPage(); */



/* for ($i = 1; $i <= $cantidad; $i++){  
   
    $pdf->EAN13($cotx,$coty,$row['codigo'], 15, 0.32, 12);
    $coty=$coty+27;  
     if ($coty>278) {       
        $coty=4; 
        $cotx= $cotx+34;
        if ($cotx>180){
            $cotx=4;
            $coty=4;
            $pdf->AddPage();
            
        }
               
         }
   
}

$pdf->Output(); */

?>
	
    