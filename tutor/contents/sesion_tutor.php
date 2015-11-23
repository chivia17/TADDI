<?php
session_start();
include'../contents/conexion.php';
$conexion = conectar();
$user =$_POST["us"];
$pass =$_POST["pas"];
   if($result = $conexion->query("SELECT idTutores, cveCarrera
        FROM tutores WHERE idTutores='$user' AND contrasena='$pass'"));
   {
    if( $result->num_rows > 0)
      {
       $row = $result->fetch_assoc();
       $_SESSION["rfc"] = $row["idTutores"];
       $_SESSION["cveCar"] = $row["cveCarrera"];
       echo 1;
      }
    else
      echo 0;
   }
?>
