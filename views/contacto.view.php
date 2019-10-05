<div class="contenedor ">
<center>
	<h2 class='my-3'>CONTACTO EMPRESARIAL</h2>
</center>	
 
	<div class="row mx-0">
		<div class="contenedor wrap col-12 col-md-6">			
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="wrap1">
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
				<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion:" value="<?php if(!$enviado && isset($direccion)) echo $direccion ?>">
				<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono:" value="<?php if(!$enviado && isset($telefono)) echo $telefono ?>">
		            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad:" value="<?php if(!$enviado && isset($ciudad)) echo $ciudad ?>">
				<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
		
				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
		
				<?php if (!empty($errores)): ?>
					<div class="alert error">
						<?php echo $errores; ?>
					</div>
				<?php elseif($enviado): ?>
					<div class="alert success">
						<p>Enviado Correctamente</p>					
					</div>
				<?php endif ?>		
				<input type="submit" name="submit" class="btn sub" value="Enviar Correo">
			</form>
		</div>
		<div class="col-12 col-md-6  py-5 px-5">
			<h3 class="pt-5 pb-3">NUESTRO CORREO</h3>
			<h4 class="text-justify parrafo">Si tiene alguna pregunta sobre nuestros Productos o servicios que proveemos. Nosostros intentaremos responder a sus requerimientos y comentarios antes de 24 horas.</h4>
			<div>
				<div class="row my-4">
					<div class="col-1">
						<img src="img/linea.png" alt="">
					</div>
					<div class="col-11 ">
						<h3 class="text-left pb-1">Contacto & Direccion.</h3>
						<h4 class="text-justify parrafo">Cr 23 # 44-82 sur Barrio Santa Lucia Tel 7 606-430 </h4>
					</div>
				</div>
			</div>
			<h4 class="text-justify parrafo "><i class="fas fa-map-marker-alt pb-2"></i>    Cr 23 # 44-82 sur Barrio Santa Lucia </h4>
			<h4 class="text-justify parrafo "><i class="fas fa-phone pb-2"></i>   7606430 </h4>
			<h4 class="text-justify parrafo "><i class="fab fa-whatsapp-square pb-2"></i> 3122837519 </h4>
			<h4 class="text-justify parrafo "><i class="fas fa-envelope pb-2"></i> flicadistribuciones@gmail.com </h4>
		</div>
	</div>

</div>