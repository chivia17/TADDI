<?php
include'conexion.php';
$conexion = conectar();
$nc =$_POST["nc"];
$query = "CALL bajaLog('$nc')" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
echo "0";
?>