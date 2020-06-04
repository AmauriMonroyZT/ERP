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
<link rel="stylesheet" type="text/css" href="css/estilosformulariousuario.css">
  <title>Nueva cuenta</title>
  <script language="JavaScript">

        
 window.alert("Estamos monitoreando el impacto del coronavirus 2019-nCoV en China y en todo el mundo. Para proporcionar seguridad ----en envíos");


    </script>
</head>
<body>
  <div class="">
  <div class="container" id="login">
<div class="panel panel-primary">
<div class="panel-heading text-center">
<h2>NUEVA CUENTA</h2>
</div>
<div class="panel-body" id="panel-body">
  <h4>Nompre</h4>
  <input type="text" class="form-control" name="nombre" required type="text"><br>
  <h4>Apellido Paterno</h4>
  <input type="text" class="form-control" name="apellidopaterno" required>
  <h4>Telefono</h4>
  <input type="tel" class="form-control" name="telefono" required="tel"><br>
  <h4>Correo</h4>
  <input type="email" class="form-control" name="email" required type="email">
  <h4>Contraseña</h4>
  <input type="password" class="form-control" name="password" required>
   <h4>País</h4>
  <input type="text" class="form-control" name="pais" required="text">
  <h4>Ciudad</h4>
  <input type="text" class="form-control" name="ciudad" required="text">
<h4>Código Postal</h4>
  <input type="number" class="form-control" name="codigopostal" required="number">
  <h4>Direcciones</h4>
  <input type="text" class="form-control" name="direcciones" required="text">
</div>
<div class="panel-footer" id="panel-footer">
  <form  action="crearcuenta.php">
    <fieldset>
    <!--  
    --> 
  <button class="btn btn-primary">Crear cuenta
  
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
   </button>
  </form>
  <form  action="formulariousuario.php">
  <button class="btn btn-default">R
    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
  </button>
</form>
    </fieldset>
  <br>
  <a href="index.php" id="Volver">Volver al inicio</a>
</div>
</div>
</div>
</div>

</body>
</html>