<?php  //ventas
require 'funciones.php';
require 'views/nav-admin.php';

$mensaje='';

//$enviado='';
if ($_SERVER['REQUEST_METHOD'] == 'POST'  ) {     
    //ini_set("display_errors", 0);
    $vendedor = $_POST['vendedor']; 
    $vendedor = filter_var($vendedor,FILTER_SANITIZE_STRING);   
    $clave = $_POST['clave'];
    $claveConfirmo = $_POST['claveConfirmo'];

    if (!empty($vendedor)) {
        # code...
    
    if ($clave!=$claveConfirmo) {
        echo '<script language="javascript">alert("Las contraseñas no coinciden");</script>';
    }else{
    
  
    $conexion = conexion('galeria','root','');
	if(!$conexion){
		header('location: index.php');
        }
    $statement= $conexion->prepare("SELECT * FROM vendedores WHERE vendedor= :vendedor ");
    $statement->execute(array(':vendedor'=>$vendedor));
    $resultado= $statement->fetch();
     
     
    
     if (empty($resultado)) {
        $statement = $conexion->prepare("INSERT INTO vendedores(vendedor, password)
        VALUES( '$vendedor','$clave' )");     
        $statement->execute();
        $mensaje.=  'vendedor ingresado';
     }else {
         
        echo '<script language="javascript">alert("vendedor ya existe");</script>';
        
     }
   
    }
   
}else{
    echo '<script language="javascript">alert("coloca un vendedor por favor");</script>';
}
 


}

require 'views\viewFormVendedores.php';
?>





