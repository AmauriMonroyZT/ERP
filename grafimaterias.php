<?php 

require_once("conexion.php");

class Materias extends Conexion{

    public function nombres(){
        $this->sentencia = "SELECT materia_adquirida FROM materias_primas;";
        $res = $this->obtenerSentencia();
        $nombres = "";
        while($fila = $res->fetch_assoc()){
            $nombres = $nombres."'".$fila["materia_adquirida"]."',";
        }
        return $nombres;
    }

    public function cantidades(){
        $this->sentencia = "SELECT cantidad FROM materias_primas;";
        $res = $this->obtenerSentencia();
        $cantidades = "";
        while($fila = $res->fetch_assoc()){
            $cantidades = $cantidades.$fila["cantidad"].",";
        }
        return $cantidades;
    }



   
}

 ?>