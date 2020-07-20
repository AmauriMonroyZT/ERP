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
<link rel="stylesheet" type="text/css" href="estilonuevacompra.css">
  <title>Nueva venta</title>
  <script language="JavaScript">

        
 


    </script>
</head>
<body>
  <form method="POST"  action="nuevacompra.php">
    <fieldset>
      
  <div class="">
  <div class="container" id="login">
<div class="panel panel-danger">
<div class="panel-heading text-center">
<h2>Datos de la compra</h2>
</div>
<div class="panel-body" id="panel-body">
  <h4>Nombre del producto comprado</h4>
  <input type="text" class="form-control" name="nombreproducto" ><br>
  <h4>Cantidad</h4>
  <input type="number" class="form-control" name="cantidad">
  <h4>Fecha de compra</h4>
  <input type="date" class="form-control" name="fecha" required ><br>
  <h4>Cuota pagada</h4>
  <input type="decimal"  name="total" class="form-control"> 
<input type="submit" name="submit" value="Registrar compra" class="btn btn-success" align="center">
  <a href="graficarcompras.php" id="Volver" type="submit">Graficar</a>

  </div>
      </fieldset>
</form>



  

</div>
</div>
</div>
</div>


</body>
</html>