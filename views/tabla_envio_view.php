
<head>
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>Tabla general</title>
</head>
<?php

/* $conexion = conexion('galeria', 'root', ''); */
$conexion = conexion('galeria','root','');

if (!$conexion) {
	die();
}
$statement = $conexion->prepare("SELECT * FROM cobros ORDER BY id DESC Limit 3");
$statement->execute();
$resultado = $statement->fetchAll();
$total=0;	
?>
<body>
<div class="col-sm-10 col-12 mx-auto my-3">
    <table style="width:100%" class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th class="text-center" scope="col">cliente</th>
        <th class="text-center" scope="col">Factura</th>
        <th class="text-center" scope="col">monto</th> 
        <th class="text-center" scope="col">Clase</th> 
        <th class="text-center" scope="col">Comentario</th>
        <th class="text-center" scope="col">Recibo #</th>
        <th class="text-center" scope="col">fecha y hora</th>
      </tr>
    </thead>
      <?php  
    
    
   
  
      foreach ($resultado as $row) {
          $valor=$row['valor'];
          $valor=number_format($valor, 2, ',', '.'); 
            
                    ?>
      <tr>          
        <td class="text-center "><?php echo $row["cliente"];?></td>
        <td class="text-center "><?php echo $row["factura"];?></td>
        <td class="text-right "><?php echo $valor;?></td> 
        <td class="text-center "><?php echo $row["tipo"];?></td>
        <td class="text-center "><?php echo $row["comentario"];?></td>
        <td class="text-center "><?php echo $row['recibo'];?></td>
        <td class="text-left"><?php echo $row["fecha"] ;?></td>
      </tr>
      <?php
       $total= ($total+ $row['valor']);            
      }
      $total=number_format($total, 2, ',', '.');
      $_SESSION["tres"]= sizeof($resultado);
      /* echo $_SESSION["tres"]; */
    
        ?>
        <thead class="thead-dark">           
            <tr>
              <th colspan="2" class="text-center">total</th>              
              <th class="text-right" ><?php echo $total;?></th>
              <th></th>
              <th></th>
              <th></th> 
              <th></th> 
            </tr>          
        </thead>
    </table>
</div>
</body>
</html>


