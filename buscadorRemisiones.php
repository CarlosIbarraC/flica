<?php
require 'funciones.php';
/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
if(!$conexion){
	header('location: index.php');
}
$statement = $conexion->prepare("SELECT id,titulo FROM referencias ORDER BY titulo");
$statement->execute();
$resultado = $statement->fetchAll();
?>
<div class="row mx-0">
   <div class="col-sm-12"></div> 
    <div class="col-sm-12">    
    <select  id="buscadorvivo" class="form-control input-lg">
    <option value="0">seleccione Producto</option>
    <?php
          foreach ($resultado as $ver){          
    ?>         
     <option value="<?php echo "ref:".$ver[0]."-".$ver[1]; ?>">         
     <?php echo $ver[0]."-".$ver[1]  ?> </option>    
    <?php
       }
     ?>            
    </select>  
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
      $('#buscadorvivo').select2(); 
      
      /* $('#buscadorvivo').change(function(){
        var id =  $('#buscadorvivo').val();
        console.log( $('#buscadorvivo').val());
       $.ajax({
         type:"POST",
         data:'id=' + id ,
         url:'crearSessionCodigo.php',        
         success:function(r){         
            console.log(r);
            $("#btnPdf").removeClass("btnPdf");
            $('#buscadorvivo').val('');
         }
       });
    }); */
  });
  
  
  
</script>