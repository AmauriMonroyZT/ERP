<?php  

session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="estilonuevoenvio.css">
  <title>Nueva envío</title>
  <script language="JavaScript">

        
 window.alert("Estamos monitoreando el impacto del coronavirus Cov-2019 en China y en todo el mundo. Para proporcionar seguridad en todos nuestros envíos");


    </script>
</head>
<body>
    
  <form method="POST"  action="formadepago.php">
    <fieldset>
      
  <div class="">
  <div class="container" id="login">
<div class="panel panel-primary">
<div class="panel-heading text-center">
<h2>Origen</h2>
</div>
<div class="panel-body" id="panel-body">
  <h4>Nombre</h4>
  <input type="text" class="form-control" name="nombre" required pattern="[A-Za-z]+" ><br>
  <h4>Apellido</h4>
  <input type="text" class="form-control" name="apellidopaterno" required pattern="[A-Za-z]+">
  <h4>Telefono</h4>
  <input type="number" class="form-control" name="telefono" required ><br>
  <h4>Correo</h4>
  <input type="email"  name="email" required type="email" placeholder="ejemplo@gmail.com">
<h4>Código Postal</h4>
  <input type="number" class="form-control" name="codigopostal" required>
  <h4>Calle y número</h4>
  <input type="text" class="form-control" name="direcciones" required>
</div>
      </fieldset>

      <fieldset>
        
  
  <div class="container" id="login2" >
<div class="panel panel-danger">
<div class="panel-heading text-center">
<h2>Destino</h2>
</div>
<div class="panel-body" id="panel-body">
  <h4>Nombre</h4>
  <input type="text" class="form-control" name="nombr" required pattern="[A-Za-z]+" ><br>
  <h4>Apellido</h4>
  <input type="text" class="form-control" name="apellidopatern" required pattern="[A-Za-z]+">
  <h4>Telefono</h4>
  <input type="number" class="form-control" name="telefon" required ><br>
  <h4>Correo</h4>
  <input type="email"  name="email" required type="emai" placeholder="ejemplo@gmail.com">
<h4>Código Postal</h4>
  <input type="number" class="form-control" name="codigoposta" required>
  <h4>Calle y número</h4>
  <input type="text" class="form-control" name="direccione" required>
</div>
<input type="submit" name="submit" value="Siguiente" class="btn btn-success" align="center">
    </fieldset>

</form>

   

  

</div>
</div>
</div>
</div>


</body>
</html>