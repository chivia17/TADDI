<?php
session_start();
include'../contents/conexion.php';
$conexion = conectar();
$user =$_POST["us"];
$pass =$_POST["pas"];
  if($result = $conexion->query("SELECT rfc FROM administrador WHERE rfc='$user' AND contrasena='$pass'"));
{
  if( $result->num_rows > 0)
  {
   $row = $result->fetch_assoc();
    $_SESSION["rfc"] = $row["rfc"];
    echo 1;
  }
  else
    echo 0;
}
?>
