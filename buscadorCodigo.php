<?php
require 'funciones.php';
/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
if(!$conexion){
	header('location: index.php');
}
$statement = $conexion->prepare("SELECT id_producto,nombre,codigo FROM codigo ORDER BY nombre ");
$statement->execute();
$resultado = $statement->fetchAll();
?>
<div class="row mx-0">
   <div class="col-sm-7"></div> 
    <div class="col-sm-5">
    <label >Buscador</label>
    <select  id="buscadorvivo" class="form-control input-lg">
    <option value="0">seleccione uno</option>
    <?php
          foreach ($resultado as $ver){          
    ?>         
     <option value="<?php echo $ver[2]."-".$ver[1]; ?>">         
     <?php echo $ver[1] ."codigo: ".$ver[2] ." id: ".$ver[0] ?> </option>    
    <?php
       }
     ?>            
    </select>  
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
      $('#buscadorvivo').select2(); 
      
      $('#buscadorvivo').change(function(){
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
    });
  });
  
  
  
</script>