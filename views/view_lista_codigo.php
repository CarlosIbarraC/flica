<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<?php

?>
<body>
<div class="container">
<h2>Listado de Productos Flica</h2>
  <p>Aqui esta el listado de nuestros productos con su codigo de barras:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre Producto</th>
        <th>Referencia</th>
        <th>Codigo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td><svg id='<?php echo "barcode".$ver[2]; ?>'></svg> </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</div>
<script type="text/javascript">
 function arrayjsonbarcode(j){
     json=JSON.parse(j);
     arr=[];
     for(var x in json){
        arr.push(json[x]) ;
     }

return arr;

 }
 jsonvalor='<?php echo json_encode($arraycodigos) ?>';
 valores=arrayjsonbarcode(jsonvalor);
   for ( var i = 0; i < valores.length; i++){
       JsBarcode("#barcode" + valores[i], valores[i].toString(),{
           format: "codabar",
           lineColor: "#000",
           width: 2,
           height: 30,
           displayValue: true
       });
   }

</script>
    
</body>
</html>