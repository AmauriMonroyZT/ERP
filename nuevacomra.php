<?php
$nombre=$_POST['nombreproducto'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha'];
$total=$_POST['total'];


$conexion=mysqli_connect("localhost", "root", "", "proyecto") or die ("No se pudo establecer la conexion");
mysqli_query($conexion, "insert into compras values(default,'$nombre','$cantidad','$fecha','$total')") or die("Error al insertar los datos en destino");


header('Location:index.php');


?>