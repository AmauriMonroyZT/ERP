<?php
$nombre=$_POST['materia'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha'];
$proveedor=$_POST['proveedor'];
$responsable=$_POST['responsable'];


$conexion=mysqli_connect("localhost", "root", "", "proyecto") or die ("No se pudo establecer la conexion");
mysqli_query($conexion, "insert into materias_primas values(default,'$nombre','$cantidad','$fecha','$proveedor','$responsable')") or die("Error al insertar los datos en destino");


header('Location:index.php');


?>