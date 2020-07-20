<?php 

require_once("conexion.php");

class Productos extends Conexion{

    public function nombres(){
        $this->sentencia = "SELECT Nombre FROM productos;";
        $res = $this->obtenerSentencia();
        $nombres = "";
        while($fila = $res->fetch_assoc()){
            $nombres = $nombres."'".$fila["Nombre"]."',";
        }
        return $nombres;
    }

    public function cantidades(){
        $this->sentencia = "SELECT cantidad FROM productos;";
        $res = $this->obtenerSentencia();
        $cantidades = "";
        while($fila = $res->fetch_assoc()){
            $cantidades = $cantidades.$fila["cantidad"].",";
        }
        return $cantidades;
    }



   
}

 ?>