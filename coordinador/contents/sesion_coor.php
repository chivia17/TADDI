<?php
session_start();
include'../contents/conexion.php';
$conexion = conectar();
$user =$_POST["us"];
$pass =$_POST["pas"];
$cvec =$_POST["cve"];
  if($result = $conexion->query("SELECT rfc, cveCarrera  FROM coordinadores
    WHERE rfc='$user' AND contrasena='$pass' AND cveCarrera='$cvec'"));
{
  if( $result->num_rows > 0)
  {
   $row = $result->fetch_assoc();
    $_SESSION["rfc"] = $row["rfc"];
    $_SESSION["cveCar"] = $row["cveCarrera"];
    echo 1;
  }
  else
    echo 0;
}
?>
