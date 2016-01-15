<?php
include'conexion.php';
$conexion = conectar();
$ncA =$_POST["nc"];
$query = "SELECT * FROM alumnos WHERE idAlumnos='$ncA'" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
  if ($result->num_rows > 0) {
    echo 1;
  }
  else {
    echo 0;
  }
  $result->close();
  mysqli_close($conexion);




?>
