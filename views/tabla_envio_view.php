
<head>
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>Tabla general</title>
</head>
<?php



$conexion = conexion('galeria','root','');
if(!$conexion){
header('location: index.php');
}


$parametro=$_REQUEST['w1'];
$statement = $conexion->prepare("SELECT * FROM factura  JOIN clientes ON factura.cliente=clientes.cliente  AND clientes.cliente ='" . $parametro. "' ");
$statement->execute();
$resultado = $statement->fetchAll();
$total=0;	
?>
<body>
<div class="col-sm-10 col-12 mx-auto my-3">
    <table style="width:100%" class="table table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th class="text-center" scope="col">cliente</th>
        <th class="text-center" scope="col">Factura</th>
        <th class="text-center" scope="col">fecha</th> 
        <th class="text-center" scope="col">valor Fac</th> 
         <th class="text-center" scope="col">valor Pago</th> 
        <th class="text-center" scope="col">pago</th>
         <!--<th class="text-center" scope="col">Recibo #</th>
        <th class="text-center" scope="col">fecha y hora</th> -->
      </tr>
    </thead>
      <?php  

    
    
   
  
      foreach ($resultado as $row) {
          $valor=$row['monto'];
          $valor=number_format($valor, 2, ',', '.'); 
          $pago =0;
            
                    ?>
      <tr>          
        <td class="text-center "><?php echo $row["cliente"];?></td>
        <td class="text-center "><?php echo $row["facturas"];?></td>
        <td class="text-left"><?php echo $row["fecha"] ;?></td>
        <td class="text-right "><?php echo $valor;?></td> 
        <td class="text-right "><?php echo $pago;?></td>  
        <td class="text-center "><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPago" onclick="agregarid('<?php echo $row['facturas'];?>')"><i class="fas fa-check"></i></button></td>
        <!--<td class="text-center "><?php echo $row["comentario"];?></td>
        <td class="text-center "><?php echo $row['recibo'];?></td>
        <td class="text-left"><?php echo $row["fecha"] ;?></td> -->
      </tr>
      

      <?php
       $total= ($total+ $row['monto']);            
      }
      $total=number_format($total, 2, ',', '.');
      $_SESSION["tres"]= sizeof($resultado);
      /* echo $_SESSION["tres"]; */
    
        ?>
        <thead class="thead-dark">           
            <tr>
              <th colspan="2" class="text-center">total</th>     
              <th></th>
              <th class="text-right" ><?php echo $total;?></th>
              <th></th>
              <th></th> 
              <!-- <th></th>  -->
            </tr>          
        </thead>
    </table>
</div>
<?php
$statement = $conexion->prepare("SELECT * FROM factura  WHERE  ");
$statement->execute();
$resultado = $statement->fetchAll();


?>


<!-- Modal -->
<div class="modal fade" id="modalPago" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Pago Factura</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>       
      </div>
      <div class="modal-body">
      <form action="guardarPagos.php" id="frpago" method="POST">
      <input type="text" hidden="" name="id_factura" id="id_factura"  >
      <label for="">Cliente</label>
        <input type="text" name="cliente" value="<?php echo $row['cliente'];?>" readonly>
        <label for="">Factura</label>
        <input type="text" name="cliente" value="<?php echo $row['facturas'];?>" readonly>
        <label for="">Cliente</label>
        <input type="text" name="cliente" value="<?php echo $row['fecha'];?>" readonly>
        <label for="">Cobro</label>       
        <input type="number" name="pago"id="pago"class="form-control">      
        </div>
     
         <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">volver</button>
        <button type="submit" class="btn btn-primary" id="guardarPago" >Enviar Pago</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- -------------------modal ------------------- -->

<center>
    <div>
        <a href="formulario_cobros.php" class="text-center"><button class="btn btn-success my-2">salir</button>   </a>
        <a href="cobros_ventas.php" class="text-center"><button class="btn btn-info my-2">volver a clientes</button>   </a>
    </div>
</center> 

</body>
</html>

<script type="text/javascript">
function agregarid(id_factura){

}
</script>


