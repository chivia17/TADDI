<?php
include'conexion.php';
$conexion = conectar();
$rfc =$_POST["cv"];
$cn =$_POST["conn"];
$cr =$_POST["conr"];
$query = "CALL updatePassT('$rfc','$cr')" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if($result)
echo '<script language="javascript">alert("Contraseña Cambiada");</script>';
else
echo '<script language="javascript">alert("Fallo el cambio");</script>';
?>
