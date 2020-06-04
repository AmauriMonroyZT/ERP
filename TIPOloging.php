<?php
   $u=$_POST['usr'];
   $c=$_POST['pass'];
   $conexion=mysqli_connect("localhost", "root", "", "playtube");
   
   if (!$conexion) {
   	   echo "ERROR DE CONEXION, CONTACTE AL ADMINISTRADOR";
   }
   else{                                                                                              
   	   $consulta=mysqli_query($conexion, "select * FROM usuarios where nom='$u' and contra='$c'");
         $i=mysqli_num_rows($consulta);
         if ($i==1) {
         echo "BIENVENIDO";
         header('location:principal.html');
         }
         else{                                                                                              
         echo "USUARIO O CONTRASEÑA NO EXISTEN";
         echo "<a href='principal.html'> Regresar </a>";
   }}
?>