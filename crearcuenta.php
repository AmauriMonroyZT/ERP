<?php
$nombre=$_POST['nombre'];
$apellidopaterno=$_POST['apellidopaterno'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$password=$_POST['password'];
$pais=$_POST['pais'];
$ciudad=$_POST['ciudad'];
$codigopostal=$_POST['codigopostal'];
$direcciones=$_POST['direcciones'];
$condiciones=$_POST['tipo'];

if (!is_null($condiciones)) {
$conexion=mysqli_connect("localhost", "id12959055_proyectoamauri", "proyecto1997", "id12959055_proyecto1"

) or die ("No se pudo establecer la conexion con la base de datos");
mysqli_query($conexion, "insert into clientes values(default,'$nombre','$apellidopaterno','$telefono','$email','$password','$pais','$ciudad','$codigopostal','$direcciones')") or die("Error al insertar los datos");

header('Location:login.php');
}else{
   echo "Debes de aceptar terminos y condiciones";
   echo '<script language="JavaScript"> alert("Gracias por aceptar las politicas"); </script>';
header('Location:index.php');
}
?>