<?php
include'conexion.php';
$conexion = conectar();
$nc =$_POST["query"];
$query = "$nc" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if($result->num_rows > 0)
{
$row = $result->fetch_assoc();
echo $row["ob_cues"];
}
else
echo '<script language="javascript">alert("Alumno No Encontrado");</script>';
?>
