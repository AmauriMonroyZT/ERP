
<?php
session_start();

$conexion=new mysqli("localhost", "root", "", "proyecto"

);
   if ($conexion->connect_errno){
    echo "Error, favor de contactar al administrador";
   }else{
    $sql="SELECT * FROM envios";
    $resultado=$conexion->query($sql);
    if($resultado->num_rows>0){
        echo "<br><br>";
        echo '<form action="consultaenvio.php" method="post">';
        echo '<p aling="center"><table border="1" color="blue">';
        echo "<tr>";
        echo "<td><strong> ID USUARIO </strong> </td>";
        echo "<td><strong> NOMBRE </strong> </td>";
        echo "<td><strong> APELLIDOS </strong> </td>";
        echo "<td><strong> telefono </strong> </td>";
        echo "<td><strong> correo </strong> </td>";
        echo "<td><strong> codigo pos </strong> </td>";
        echo "<td><strong> direcciones </strong> </td>";
        echo "</tr>";

        while ($fila=$resultado->fetch_assoc()){   //SEPARAR TABLA EN UNIDADES (COLUMNAS)----PERMITE VISUALIZAR INFORMACION COMO UN ARREGLO
            echo '<tr>';
            echo '<td>'.$fila['id_envio'].'</td>';
            echo '<td>'.$fila['nombre'].'</td>';
            echo '<td>'.$fila['apellido_paterno'].'</td>';
            echo '<td>'.$fila['telefono'].'</td>';
            echo '<td>'.$fila['correo'].'</td>';
            echo '<td>'.$fila['codigopostal'].'</td>';
            echo '<td>'.$fila['direcciones'].'</td>';
            echo '</tr>';
        }
        echo "</p>";
        echo "</table>";
        echo "</form>";
    }else{
      echo "No hay elementos que mostrar";
    }
  }
echo "<a href='sesion.php'> Regresa </a>"

?>