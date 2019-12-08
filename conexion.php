<?php
class conectando{

    public function conectar(){

        $conectar=mysqli_connect('localhost',
                                   'root',
                                   '',
                                   'galeria');

           return $conectar;                        
    }
}
 