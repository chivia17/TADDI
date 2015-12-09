<?php
include'conexion.php';
$conexion = conectar();
$nc =$_POST["nc"];
$exp =$_POST["ex"];
$query = "UPDATE alumnos SET ob_cues='$exp' WHERE idAlumnos='$nc'" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if($result)
echo "Se actualizo el expediente";
else
echo "Algo Fallo";
?>
