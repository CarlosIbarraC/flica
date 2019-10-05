<?php
require 'funciones.php'; 
require 'views/nav-admin.php';
?>
       


		<div class="contenedor">
		
				<form action="" method="" id="formulario" onclick="saltar(event,'codigo')">  
				<div class="row mx-0">
				<div class="selector-pais col-4 text-center">
				<span>Elige Cliente</span>
				<select id="cliente"  >				
				</select>	
				</div>
				<div class="col-4">
				<input type="text" id="remision"  placeholder ="remision n:" class="form-control" readonly>	
				</div>
				<div class="col-4">
				<input type="text" id="fecha"  placeholder ="fecha:" class="form-control" maxlength="7" readonly>
				<input id="cli" class="p-2" readonly type="hidden">	
				</div>	   	
		  </div>
			</form>	
		</div>	
		<center>
			<div class="col-12 col-sm-10">
				<table  id="nombre" class="table-bordered my-4">  
					<tr>
					<td id="pos1" class="px-3"></td>
					<td id="pos2" class="px-3"></td>
					<td id="pos3" class="px-3"></td>
					</tr>
					<tr>
					<td id="pos4" class="px-3"></td>
					<td id="pos5" class="px-3"></td>
					<td id="pos6" class="px-3"></td>
					</tr>
				</table>
			</div>
		</center>
	<div  class="error_box mb-2" id="error_box">
	</div>
		<center>
			<div class="col-12" mt-4>
				<form action="" class="form-group" id="formulario1" >				
				<input id="codigo" type="text" placeholder="codigo barras" class="p-2" required maxlength="10" minlength="10" onkeyup ="saltar(event,'cantidad')">
				<div class="container">
					<!-- <div class="row mx-0">
					<div class="mt-2 col-12"> -->
					<input id="respro" class="form-control" readonly placeholder="producto" >
				<!-- 	</div>
				</div> -->
				</div>									
				<input id="cantidad" type="text" placeholder="cantidad" onkeyup ="saltar(event,'precio')" class="mt-2 p-2">
				<input id="precio" type="text" placeholder="precio" onkeyup ="saltar(event,'subtotal')" class="mt-2 p-2">		
				<input id="subtotal" type="text" placeholder="subtotal" readonly class="mt-2 p-2" onfocus="multiplica()">		
				</form>
			</div>
			<div>
				<div class="row">
					<div class="col-6">
			<button class="btn btn-warning my-2" type="button"  id="btn"  >GUARDAR</button>
			</div>
			    <div class="col-6" id="remis">
			<a href="pdfremision.php" target="_blank" id="arem"><button class="btn btn-info my-2"   ><i class="fas fa-file-pdf "></i> pdf</button></a>
			</div>
			</div>
			</div>
		</center>
		</div>
	 <div id="cod4">
	 </div>
		<center>
		<div id="pos8">		
		</div>
		<div id="tablaM"  class="col-10">
		<table id="tabla" class="table table-hover">
          <tr>
        <th>producto</th>
        <th>cantidad</th>
        <th>precio</th>
		<th>Subtotal</th>
		<th>acumulado</th>			
          </tr>        
    </tbody>
    </table>
		</div>
		</center>
			<div class="loader" id="loader">
			</div>		
	 <script src="js/cargar.js">
	 </script>		 
    
</body> 
</html> 