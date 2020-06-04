<?php  



session_start();


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script type="text/javascript" src="jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="jquery-ui.js"></script>
    <link type="text/css" rel="stylesheet " href="jquery-ui.css"></link>

    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilobarranav.css">



  <title></title>
  <style >
    
 #menu{
          
        }

  </style>
</head>
<body>
<div class="container" id="menu">
<nav class="navbar navbar-expand-lg">
  <a href="" class="navbar-brand text-black">
    <img href="index.php" src="Imagenes/logo.png" height="40px">
  </a>
<button class="navbar-toggler" data-target="#menu" data-toggle="dropdown" type="button">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
  <ul id="textos" class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a href="inicio.php" class="nav-link" >Inicio</a>
    </li>
    <li class="nav-item active">
      <a href="sesion.php" class="nav-link" >Mi cuenta</a>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable">
        Administracion
      </a>
      <div class="dropdown-menu">
        <a href="#" class="drop-item"> Usuarios</a><br>
        <a href="#" class="drop-item"> Perfiles</a>
      </div>
    </li>
    <li class="nav-item active">
        
      <a href="cerrarsesion.php" class="nav-link" >cerrar sesion
      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
      </a>
      
    </li>
    <li class="nav-item active">
        
      <a href="correo.html" class="nav-link" >Contactanos
      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
      </a>
      
    </li>
  </ul>
<span class="navbar-text">
  Texto plano
  
</span>
</div>
</nav>
</div>
<div id="navegador">
<ul>
<!--<li><a href="#">Elemento 1</a></li>
<li><a href="#">Elemento 2</a></li>
<li><a href="#">Elemento 3</a></li>
<li><a href="#">Elemento 4</a></li> poner una nueva barra de navegacion-->
</ul>
</div>
</body>
</body>
</html>