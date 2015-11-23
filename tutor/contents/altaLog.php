<?php
include'conexion.php';
$conexion = conectar();
$nc =$_POST["nc"];
$query = "CALL altaLog('$nc')" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if($result)
echo '<script language="javascript">alert("Alta Realizada");</script>';
else
echo '<script language="javascript">alert("Fallo la Alta");</script>';  
?>
