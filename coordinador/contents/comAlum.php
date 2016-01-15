<?php
include'conexion.php';
$conexion = conectar();
$ncA =$_POST["nc"];
$cc = $_POST["id_ca"];
$query = "SELECT * FROM alumnos WHERE idAlumnos='$ncA'" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
  if ($result->num_rows > 0)
  {
   $row = $result->fetch_assoc();
    $idg= $row["idGrupos"];
    $query1 = "SELECT * FROM grupos WHERE idGrupos='$idg' AND cveCarrera='$cc'" or die("Error in the consult.." . mysqli_error($conexion));
    $result1 = $conexion->query($query1);
     if ($result1->num_rows > 0) {
        echo 1;
        }
        else{
          echo 0;
        }
  }
  else {
    echo 0;
  }
  $result->close();
  mysqli_close($conexion);




?>
