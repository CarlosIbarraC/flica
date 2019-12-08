<?php

class crud{

    public function obtendatos($id){

       $obj = new conectando();
       $conexion=$obj->conectar();
   
       $sql= " SELECT id, 
                     cliente,
                     facturas,
                     fecha,
                     monto
                     from factura
                     where id='$id'";
                     $result = mysqli_query($conexion,$sql);
                     $ver=mysqli_fetch_row($result);
                     $datos= array(
                         'id'=>$ver[0],
                         'cliente' =>$ver[1],
                         'facturas' =>$ver[2],
                         'fecha' =>$ver[3],
                         'monto' =>$ver[4]
                     );
                return  $datos;    
    }

    public function agregarDatos($datos){

        $obj = new conectando();
        $conexion=$obj->conectar();
        $sql = "INSERT into pagos (cliente,factura,fecha,monto,pago,observaciones,fechaPago)
        values ('$datos[0]',
                 '$datos[1]',
                 '$datos[2]',
                 '$datos[3]',
                 '$datos[4]',
                 '$datos[5]',
                 '$datos[6]')";
         
         return mysqli_query($conexion,$sql);             
                 
                 
                   

    }
    public function obtenCliente($id_cliente){

        $obj = new conectando();
        $conexion=$obj->conectar();
    
        $sql= " SELECT id_clientes, 
                      cliente,
                      direccion,
                      telefono,
                      ciudad,
                      nit,
                      vendedor
                      from clientes
                      where id_clientes='$id_cliente'";
                      $result = mysqli_query($conexion,$sql);
                      $ver=mysqli_fetch_row($result);
                      $datos= array(
                          'id'=>$ver[0],
                          'cliente' =>$ver[1],
                          'direccion' =>$ver[2],
                          'telefono' =>$ver[3],
                          'ciudad' =>$ver[4],
                          'nit' =>$ver[5],
                          'vendedor' =>$ver[6]
                      );
                 return  $datos;    
     }
     public function editarCliente($datas){

        $obj = new conectando();
        $conexion=$obj->conectar();
        $sql="UPDATE clientes set
                      cliente='$datas[1]',
                      direccion ='$datas[2]',
                      telefono ='$datas[3]',
                      ciudad ='$datas[4]',
                      nit ='$datas[5]',
                      vendedor ='$datas[6]'
                      WHERE cliente='$datas[1]'";

                      return mysqli_query($conexion,$sql);

     }
     public function obtenPago($id){

        $obj = new conectando();
        $conexion=$obj->conectar();
    
        $sql= " SELECT
                     id,
                      cliente,
                      factura,
                      fecha,
                      monto,
                      pago,
                      estado
                      from pagos                      
                      where id='$id'";
                      $result = mysqli_query($conexion,$sql);
                      $ver=mysqli_fetch_row($result);
                      $datos= array(
                        'id' =>$ver[0], 
                        'cliente' =>$ver[1],
                        'factura' =>$ver[2],
                        'fecha' =>$ver[3],
                        'monto' =>$ver[4],
                        'pago' =>$ver[5],
                         'estado' =>$ver[6]
                      );
                 return  $datos;    
     }
     public function insertarCobro($datos){

        $obj = new conectando();
        $conexion=$obj->conectar();
        $sql="UPDATE pagos set  
                      /* id='$datos[4]',
                      cliente= '$datos[0]', 
                      factura= '$datos[1]',
                      monto= '$datos[2]', */                   
                      pago ='$datos[5]',
                      estado ='$datos[6]'
                      WHERE id='$datos[4]'";

                      return mysqli_query($conexion,$sql);

     }
}