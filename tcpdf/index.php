<?php
	require_once('tcpdf/config/lang/eng.php');
	require_once('tcpdf/tcpdf.php');
	require_once('conexion.php');
	$codigo=200;
	$cantidad=65;

	$pdf = new TCPDF('P', 'mm', 'C', true, 'UTF-8', false);
	$pdf->SetTitle('PDF flica PHP'); //Titlo del pdf
	$pdf->setPrintHeader(false); //No se imprime cabecera
	$pdf->setPrintFooter(false); //No se imprime pie de pagina
	$pdf->SetMargins(3,2,0,false);//Se define margenes izquierdo, alto, derecho
	$pdf->SetAutoPageBreak(true, 1); //Se define un salto de pagina con un limite de pie de pagina
	$pdf->addPage();

	$sql = "SELECT * FROM codigo where id_producto ='$codigo'";
	$cosas = $mysqli->query($sql);
	$row= mysqli_fetch_array($cosas);
	$html = '';
	
	for ($i=0; $i <= intval($cantidad/6); $i++) { 
		# code...
	//($cosas as $row){
		
		$pdf->SetFont('Helvetica', '', 8);
		$descripcion = $row['nombre'];			
		$barcode = $row['codigo'];
		$barcode = $pdf->serializeTCPDFtagParameters(array($barcode, 'C128', '', '', 29, 17.5, 0.5, array('position'=>'S', 'border'=>false, 'padding'=>0, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>7, 'stretchtext'=>4), 'N'));
		$html .= '<table border="0" cellpadding="2"  >				 
					<tr>
					    <td  width="100" ><h6>'.$descripcion.'</h6></td>
						<td width="100"  ><h6>'.$descripcion.'</h6></td>
						<td  width="100" ><h6>'.$descripcion.'</h6></td>
						<td width="100"  ><h6>'.$descripcion.'</h6></td>
						<td width="100"  ><h6>'.$descripcion.'</h6></td>
						<td width="100"  ><h6>'.$descripcion.'</h6></td>
					</tr>
					<tr >					    
						<td width="100"  height="35.2" ><tcpdf method="write1DBarcode" params="'.$barcode.'" /></td>
						<td width="100" height="35.2" ><tcpdf method="write1DBarcode" params="'.$barcode.'" /></td>
						<td width="100" height="35.2"  ><tcpdf method="write1DBarcode" params="'.$barcode.'" /></td>
						<td width="100" height="35.2" ><tcpdf method="write1DBarcode" params="'.$barcode.'" /></td>
						<td width="100" height="35.2" ><tcpdf method="write1DBarcode" params="'.$barcode.'" /></td>
						<td width="100" height="35.2" ><tcpdf method="write1DBarcode" params="'.$barcode.'" /></td>
						
					</tr>
				 </table>';	
				
	}
	
	$pdf->writeHTML($html, true, 1, true, 1);	
	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
?> 