<?php
include'conexion.php';
$conexion = conectar();
$nc =$_POST["nc"];
$carr =$_POST["gru"];
$query = "CALL cambioGrupo('$nc','$carr')" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if($result)
echo "Cambio Realizado"; 
?>
