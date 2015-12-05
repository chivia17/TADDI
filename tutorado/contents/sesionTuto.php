<?php
session_start();
include'../contents/conexion.php';
$conexion = conectar();
$user =$_POST["nc"];
$pass =$_POST["pas"];
   if($result = $conexion->query("SELECT idAlumnos, idGrupos
        FROM alumnos WHERE idAlumnos='$user' AND contrasena='$pass'"));
   {
    if( $result->num_rows > 0)
      {
       $row = $result->fetch_assoc();
       $_SESSION["nc"] = $row["idAlumnos"];
       $_SESSION["idGrup"] = $row["idGrupos"];
       echo 1;
      }
    else
      echo 0;
   }
?>
