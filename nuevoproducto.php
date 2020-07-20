<?php
$nombre=$_POST['nombreproducto'];
$precio=$_POST['precio'];
$marca=$_POST['marca'];
$existencia=$_POST['existencia'];


$conexion=mysqli_connect("localhost", "root", "", "proyecto") or die ("No se pudo establecer la conexion");
mysqli_query($conexion, "insert into productos values(default,'$nombre','$precio','$marca','$existencia')") or die("Error al insertar los datos en destino");






header('Location:index.php');


?>