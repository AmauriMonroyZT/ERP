<?php 

require_once("conexion.php");

class Ventas extends Conexion{

    public function nombres(){
        $this->sentencia = "SELECT nombre_producto FROM ventas;";
        $res = $this->obtenerSentencia();
        $nombres = "";
        while($fila = $res->fetch_assoc()){
            $nombres = $nombres."'".$fila["nombre_producto"]."',";
        }
        return $nombres;
    }

    public function cantidades(){
        $this->sentencia = "SELECT cantidad FROM ventas;";
        $res = $this->obtenerSentencia();
        $cantidades = "";
        while($fila = $res->fetch_assoc()){
            $cantidades = $cantidades.$fila["cantidad"].",";
        }
        return $cantidades;
    }



   
}

 ?>