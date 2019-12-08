<?php
require 'funciones.php';
require 'views/nav-admin.php';

?>

<center>
    <h1>MODULO DE ADMINISTRACION</h1>
    <div class='contenedor col-12' >    
    <a href="subir.php">
    <button class="btn btn-info btn-large my-3 mx-2 ">Ingresar Producto <i class="material-icons" style="color:#413c41;"> add_circle</i>   </button></a>
        <a href="entrar.categoria.php">
    <button class="btn btn-info btn-large my-3 mx-2 ">Agregar Categoria <i class="material-icons" style="color:#413c41;"> add_box</i>   </button></a>  
      <a href="entrar.categoria.php">
    <button class="btn btn-info btn-large my-3 mx-2 ">Eliminar Categoria <i class="material-icons" style="color:#413c41;"> delete</i>   </button></a>  
    <a href="tabla.eli.producto.php">  
    <button class="btn btn-info btn-large my-3 mx-2 ">Elimina/edita referencia <i class="material-icons" style="color:#413c41;"> border_color</i>   </button></a>
    </div>
    <div class='contenedor col-12' >
    <a href="ingresoVendedor.php">  
    <button class="btn btn-success btn-large my-3 mx-2 ">Crear Vendedor <i class="material-icons"  style="color:yellow;">person_add</i>   </button></a>
    <a href="remicli.php">  
    <button class="btn btn-success btn-large my-3 mx-2 ">Hacer Remision <i class="material-icons" style="color:yellow;" >edit note</i> </button></a>
    <a href="tabla_busremi.php">  
    <button class="btn btn-success btn-large my-3 mx-2 ">Buscar Remision <i class="material-icons" style="color:yellow;" >archive</i> </button></a>
    
    <a href="pedidos.php">  
    <button class="btn btn-success btn-large my-3 mx-2 ">Crear Cliente <i class="material-icons"  style="color:yellow;">folder_shared</i>    </button></a>  
    </div >

    <div class='contenedor col-12' >
    <a href="ingresarFactura.php">  
    <button class="btn btn-success btn-large my-3 mx-2 ">Ingresar factuara <i class="material-icons"  style="color:yellow;">insert_drive_file</i>   </button></a>
    <a href="tablaCobros.php">  
    <button class="btn btn-success btn-large my-3 mx-2 ">Cobros Facturas <i class="material-icons"  style="color:yellow;">move_to_inbox</i>   </button></a>
    <a href="reporte.cobros.php">  
    <button class="btn btn-success btn-large my-3 mx-2 ">Tabla de cobros <i class="material-icons"  style="color:yellow;">move_to_inbox</i> </button></a>
    <a href="tablaClientes.php">  
    <button class="btn btn-success btn-large my-3 mx-2 ">Editar Clientes <i class="material-icons"  style="color:yellow;">move_to_inbox</i> </button></a>
    </div >

    <div class='contenedor col-12' > 
   
    <a href="lector.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " >Prueba de Lector <i class="material-icons" >crop_free</i> </button></a>    
    <a href="codigo/index.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " >Listado de codigos <i class="material-icons" >style</i>   </button></a>
    <a href="codigos.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " >imprimir codigos-Barras <i class="material-icons" >straighten</i>    </button></a>
    
    </div>
</center>