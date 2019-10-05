<?php
require 'funciones.php';
require 'views/nav-admin.php';

?>

<center>
    <h1>MODULO DE ADMINISTRACION</h1>
    <div class='contenedor col-12' >    
    <a href="subir.php">
    <button class="btn btn-info btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Ingresar Producto <i class="fas fa-plus"></i>   </button></a>
        <a href="entrar.categoria.php">
    <button class="btn btn-info btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Agregar Categoria <i class="fas fa-plus"></i>   </button></a>  
      <a href="entrar.categoria.php">
    <button class="btn btn-danger btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Eliminar Categoria <i class="fas fa-trash"></i>   </button></a>  
    <a href="tabla.eli.producto.php">  
    <button class="btn btn-secondary btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Elimina/edita referencia <i class="fas fa-pen"></i>   </button></a>
    </div>
    <div class='contenedor col-12' >
    <a href="ingresoVendedor.php">  
    <button class="btn bg-success btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Crear Vendedor <i class="fas fa-suitcase"></i>   </button></a>
    <a href="codigos.php"> 
    <a href="codigo/index.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Listado de codigos <i class="fas fa-barcode"></i>   </button></a>
    <a href="codigos.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Codigo de Barras <i class="fas fa-barcode"></i>   </button></a>
    <a href="pedidos.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Crear Cliente <i class="fas fa-user-circle"></i>   </button></a>
    <a href="ingresarFactura.php">  
    <button class="btn bg-success btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">ingresar factuara <i class="fas fa-suitcase"></i>   </button></a>
    <a href="reporte.cobros.php">
    </div >
    <div class='contenedor col-12' > 
    <a href="reporte.cobros.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Tabla de cobros <i class="fas fa-clipboard-list"></i> </button></a>
    <a href="lector.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Prueba de Lector <i class="fas fa-digital-tachograph"></i> </button></a>
    <a href="remicli.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Hacer Remision <i class="fas fa-clipboard-list"></i> </button></a>
    <a href="tabla_busremi.php">  
    <button class="btn btn-warning btn-large my-3 mx-2 " data-toggle="modal" data-target="#modalNuevo">Buscar Remision <i class="fas fa-clipboard-list"></i> </button></a>
    
    </div>
</center>