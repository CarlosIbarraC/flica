<?php
require 'funciones.php';
/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
if(!$conexion){
	header('location: index.php');
}

$statement = $conexion->prepare("SELECT * FROM codigo ORDER BY nombre ");
$statement->execute();
$resultado = $statement->fetchAll();
?>
<div class="row mx-0">
   <div class="col-sm-7"></div> 
    <div class="col-sm-5">
    <label >Buscador</label>
    <select  id="buscadorcodigo" class="form-control input-lg">
    <option value="0">seleccione uno</option>
    <?php
          foreach ($resultado as $ver){          
    ?>         
     <option value="<?php echo $ver[0]; ?>">
         
     <?php echo $ver[1] ." ".$ver[0] ." ".$ver[2] ?> </option>
    
    <?php
       }
     ?>            
    </select>  
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
      $('#buscadorcodigo').select2();
      
      $('#buscadorcodigo').change(function(){
        var id =  $('#buscadorcodigo').val();
       $.ajax({
         type:"POST",
         data:'id=' + id,
         url:'crearsession.php',        
         success:function(r){
            $('#fotoreferencia').load('fotorreferencia.php');
            document.location.href = 'fotoreferencia.php#fot';
            
         }
       });
    });
  });
  
  
  
</script>