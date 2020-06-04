<?php
if (isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['mensaje'])  && !empty($_POST['mensaje']))
{
	
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mns=$_POST['mensaje'];


$header= 'From: '.$correo."\r\n";
$header .= "X-Mailer: PHP/".phpversion() ."\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
	

$mensaje= "Este mensaje ha sido enviado por: ".$nombre."\r\n";
$mensaje .= "su email es: ".$correo."\r\n";
$mensaje .= "mensaje: ".$mns."\r\n";
$mensaje .= "Enviado el: ".date('d/m/y', time());

$para='amaurigm97@outlook.com';
$asunto= 'mensaje de correo';
echo "enviando correo...\n\r";
mail($para,$asunto,utf8_decode($mensaje),$header);
echo "Correo enviado...";


}
else  {
	echo "No se envio mensaje";
}
echo "<a href="index.php" id="Volver" type="submit">Volver al inicio</a>;
?>