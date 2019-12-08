<?php
session_start();
require 'php/fpdf.php';
require 'php/helveticab.php';
require 'funciones.php';

if($_SESSION['cliente'] || $_SESSION['remi']){
   $nombre = $_SESSION['cliente'];
   $remision = $_SESSION['remi'];

} else{  

   header('Location: remicli.php');
}

 
//$remision = $_POST['remision'];  
$conexion = conexion('galeria','root',''); 
                    if(!$conexion){
                       
                 header('location: index.php');
                    } else {

                     $statement1 = $conexion->prepare("SELECT * FROM numeroremision WHERE remision ='$remision'");
                     $statement1->execute();
                     $resultado1 = $statement1->fetchAll();

                     foreach ($resultado1 as $row) {
                        $fecha = $row['fecha'];
                     }
                                     
                       
    $statement = $conexion->prepare("SELECT * FROM remision WHERE cliente= '$nombre' and remision ='$remision' ");
    $statement->execute();
    $resultado = $statement->fetchAll();
    $pagina=1;
    $pdf = new FPDF();
    $pdf->AddPage(); 
    $pdf->SetFont('Arial','B',15);       
    $pdf->Image('img/logo-largo.png',10,10,50);
    $pdf->Cell(150,20,"REMISIONES",0,0,'C');
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,20,"p - ".$pagina,0,0,'C');
    $pdf->Cell(2,10,"",0,1,'L');
    $pdf->Cell(2,10,"",0,1,'L');
    $pdf->Cell(80,10,"cliente : ".$nombre,0,0,'c');
    $pdf->Cell(50,10,"remision : $remision",0,0,'c');
    $pdf->Cell(40,10,"fecha : ".$fecha,0,1,'R');
    $pdf->Cell(95,10,"PRODUCTO",0,0,'c');
    $pdf->Cell(35,10,"CANTIDAD",0,0,'c');
    $pdf->Cell(18,10,"PRECIO",0,0,'R');
    $pdf->Cell(30,10,"SUBTOTAL",0,1,'R');
     $i=0;
   
                     
         foreach ($resultado as $row) {  
            
             if ($i< 22){
             $producto = utf8_decode($row["producto"] );
             $cantidad = $row["cantidad"] ;
             $precio =$row["precio"] ;
             $subtotal =$row["subtotal"] ;
             $acumulado = $row['acumulado'];
             $pdf->Cell(105,10,$producto,0,0,'L');
             $pdf->Cell(30,10,$cantidad,0,0,'L');
             $pdf->Cell(30,10,"$ ".$precio,0,0,'L');
             $pdf->Cell(30,10,"$ ".$subtotal,0,0,'L');             
             $pdf->Cell(2,10,"",0,1,'L');
             $i=$i+1;
              
            }else{
               $pdf->AddPage(); 
               $pagina= $pagina+1;
    $pdf->SetFont('Arial','B',15);       
    $pdf->Image('img/logo-largo.png',10,10,50);
    $pdf->Cell(140,20,"REMISIONES",0,0,'C');   
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,20,"p - ".$pagina,0,0,'C');
    $pdf->Cell(2,10,"",0,1,'L');
    $pdf->Cell(2,10,"",0,1,'L');
    $pdf->Cell(80,10,"cliente : ".$nombre,0,0,'c');
    $pdf->Cell(50,10,"remision : $remision",0,0,'c');
    $pdf->Cell(40,10,"fecha : ".$fecha,0,1,'R');
    $pdf->Cell(95,10,"PRODUCTO",0,0,'c');
    $pdf->Cell(35,10,"CANTIDAD",0,0,'c');
    $pdf->Cell(18,10,"PRECIO",0,0,'R');
    $pdf->Cell(30,10,"SUBTOTAL",0,1,'R');
    $i=0;
   

            }
       
                     }

                     
                     $pdf->Cell(125,10,"total : ".$acumulado,0,0,'R');
                     
                     $pdf->Output(); 

                    }
	
   
    