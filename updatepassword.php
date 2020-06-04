<?php

/*$var = "Correo o password incorrectos, favor de verificar";

  session_start();

if(isset($_POST['ok'])){
 if(!empty($_POST['correo'])){
  $conexion=new mysqli("localhost", "root", "", "proyecto");

   if ($conexion->connect_errno){
    echo "Error, favor de contactar al administrador";
   }else{
    $email=$_POST['correo'];
    $_SESSION['correo']=$email;
    $sql="SELECT * FROM clientes where correo='".$email."'";
    $resultado=$conexion->query($sql);

    $password=$_POST['password'];
    $_SESSION['password']=$password;
    $sql="SELECT * FROM clientes where password='".$password."'";
    $result=$conexion->query($sql);

    if($resultado->num_rows>0 && $result->num_rows>0){ 
     header('Location:sesion.php');
    }else{
      echo "<script> alert('".$var."'); </script>";
    }}}else{
      echo "Campos obligatorios, ingresa tus datos";
    }}//ISSET*/
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="strength.js"></script>
<script type="text/javascript" src="js.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="">
	<title>Cambiar contraseña</title>
</head>
<body>
	<div class="">
	<div class="container" id="login">
<div class="panel panel-primary">
<div class="panel-heading text-center">
<h2>LOGIN</h2>
</div>
<div class="panel-body" id="panel-body">
	<!--<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="margin:0; padding:0; display:inline;" action="sesion.php">-->
		<form action="validarcontra.php" method="POST">
	<h4>Contraseña Acutal</h4>
	<input type="password" class="form-control" name="p" required="text"><br>
	<h4>Nueva Contraseña</h4>
	<input type="password" class="form-control" name="pa" required="password">
	<h4>Confirmar Contraseña</h4>
	<input type="password" class="form-control" name="pas" required="password">
</div>
<div class="panel-footer" id="panel-footer">
		
		<!--  
		-->	 <br><br>
		<!-- <button class="btn btn-primary">Ingresar-->
	<input type="submit" class="btn btn-primary" name="ok" value="Guardar Cambios">
	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
 	<!-- </button>-->

 	 </form>
 	
	
	<br>

	<a href="inicio.php" id="Volver" type="submit">Volver al inicio</a>
</div>
</div>
</div>
</div>

</body>
</html>

