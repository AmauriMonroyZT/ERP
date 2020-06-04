<?php
$nombre=$_POST['nombre'];
$apellidopaterno=$_POST['apellidopaterno'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$codigopostal=$_POST['codigopostal'];
$direcciones=$_POST['direcciones'];


$nombr=$_POST['nombr'];
$apellidopatern=$_POST['apellidopatern'];
$telefon=$_POST['telefon'];
$emai=$_POST['emai'];
$codigoposta=$_POST['codigoposta'];
$direccione=$_POST['direccione'];

 
$conexion=mysqli_connect("localhost", "root", "", "proyecto"

) or die ("No se pudo establecer la conexion");
mysqli_query($conexion, "insert into envios values(default,'$nombre','$apellidopaterno','$telefono','$email','$codigopostal','$direcciones')") or die("Error al insertar los datos en origen");


$conexion=mysqli_connect("localhost", "root", "", "proyecto") or die ("No se pudo establecer la conexion");
mysqli_query($conexion, "insert into destinos values(default,'$nombr','$apellidopatern','$telefon','$emai','$codigoposta','$direccione')") or die("Error al insertar los datos en destino");


 echo "<script> alert('tu peticion a sido correcta, ahora te pedimos una forma de pago'); </script>";

header('Location:sesion.php');


?>