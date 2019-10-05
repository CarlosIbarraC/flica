<?php
      require 'funciones.php';
      $buscar = $_POST['b'];
        
      if(!empty($buscar)) {
            buscar($buscar);
      }
        
      function buscar($b) {
       /*  $conexion = conexion('galeria', 'root', ''); */
       $conexion = conexion('galeria','root','');
        $statement = $conexion->prepare("SELECT * FROM clientes WHERE cliente LIKE '%".$b."%' LIMIT 9");
        
          
              
            $contar = @mysql_num_rows($statement);
              
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{
              while($row=mysql_fetch_array($statement)){
                $id_cliente = $row['id_cliente'];
                $cliente = $row['cliente'];
                $telefono = $row['telefono'];
                echo $id_cliente." - "."<a>".$cliente."</a>"."<br />";
            }
        }
  }
        
?>