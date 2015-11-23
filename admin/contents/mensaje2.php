<?php
include'conexion.php';
$conexion = conectar();
$idAlumno =$_POST["nc"];
$idGrupo =$_POST["carr"];
$query = "call cambioGrupo('$idAlumno','$idGrupo')" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
echo '<script language="javascript">alert("juas");</script>';
?>
