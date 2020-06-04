<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet" href="stilos.css">
  <script src="jquery-3.2.0.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="jquery-1.11.1.min.js"></script>
    <script src="sesioncar.js">
      
    </script>
    <script language="JavaScript">

        
 window.alert("Estamos monitoreando el impacto del coronavirus Cov-2019 en China y en todo el mundo. Para proporcionar seguridad en todos nuestros envíos");


    </script>
  <style >
.navbar{

        color: white;
        
}
#envios{
  color: black;
}

   #envi{
  color: white;
}
 
#inicio{
    margin-top: 15px;/*Lo mueve hacia arriba*/ 
    /*padding: px;*/
}

  </style>

</head>
<body>
  <nav class="navbar navbar-inverse" >
  <div class="container" id="conatiner">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="inicio.php">Inicio</a>
      <span class="glyphicon glyphicon-home" aria-hidden="true" id="inicio" ></span>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Reportes <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Facturación</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Envíos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="consultaenvio.php">Mis envíos</a></li>
            <li><a href="nuevoenvio.php">Nuevo envío </a></li>
            <li><a href="#">Rastrear envío</a></li>
            <!--<li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Necesito ayuda</a></li>
        <li class="dropdown">
           <a style="color:white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
            <?php echo ''.$_SESSION['correo']; echo "  "; ?> 
           <span class="glyphicon glyphicon-th-list" aria-hidden="true" id="envi"> 
           </span>    

             </a>
        <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Amauri Monroy <span class="caret">
            </span>
        </a>-->
          <ul class="dropdown-menu">
            <li><a href="consultaenvio.php">  <span class="glyphicon glyphicon-send" aria-hidden="true" id="envios"></span>  Mis envios</a>
             
            </li>
            <li><a href="updatepassword.php"> <span class="glyphicon glyphicon-lock" aria-hidden="true" id="envios"> Cambiar contraseña</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true" id="envios"> Configuración</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="cerrarsesion.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true" id="envios"> CerrarSesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<H1 align="center"> ¡Bienvenido, nos alegra tenerte aquí! </H1> <br>
<H1 align="center"> Todos nuestros envios estan asegurados...  </H1>
<div class="movimiento">
   <figure>
     <img class="img1" src="1s.jpg" />
     <img class="img2" src="2s.jpg" /> 
     <img class="img3" src="3s.jpg" />        
   </figure> 
</div>
</body>
</html>