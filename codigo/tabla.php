<?php

require_once "php/conexion.php";
$conexion=conexion();
$sql="SELECT* from codigo ORDER BY nombre";
$result=mysqli_query($conexion,$sql);
$arraycodigos=array();
?>

<br>
<br>
<table class="table">
    <tr> 
    
        <td>nombre</td>
        <td>Codigo</td>
        <td>Id Producto</td>        
    </tr>
    <?php while($ver=mysqli_fetch_row($result)) :
    $arraycodigos[]=(string)$ver[2];
    ?>
    <tr>
         <td><?php echo $ver[1]; ?></td>
         <td>
         
           <svg id='<?php echo "barcode".$ver[2]; ?>'></svg> 
               
         </td>
         <td><?php echo $ver[0]; ?></td>
    </tr>
    <?php endwhile; ?>
    </table>  
   

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
           height: 40,
           displayValue: true
       });
   }

</script>