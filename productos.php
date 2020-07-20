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
<link rel="stylesheet" type="text/css" href="estilonuevoproducto.css">
  <title>Nuevo producto</title>
  <script language="JavaScript">

        
 


    </script>
</head>
<body>
  <form method="POST"  action="nuevoproducto.php">
    <fieldset>
      
  <div class="">
  <div class="container" id="login">
<div class="panel panel-primary">
<div class="panel-heading text-center">
<h2>Datos del producto</h2>
</div>
<div class="panel-body" id="panel-body">
  <h4>Nombre del producto</h4>
  <input type="text" class="form-control" name="nombreproducto" ><br>
  <h4>Precio</h4>
  <input type="decimal" class="form-control" name="precio">
  <h4>Marca</h4>
  <input type="text" class="form-control" name="marca" required ><br>
  <h4>En existencia</h4>
  <input type="number"  name="existencia" class="form-control"> 
<input type="submit" name="submit" value="Registrar producto" class="btn btn-success" align="center">
<a href="graficarproductos.php" id="Volver" type="submit">Graficar</a>
<a href="index.php">Inicio</a>
</div>
      </fieldset>


</form>

  
   

  

</div>
</div>
</div>
</div>


</body>
</html>