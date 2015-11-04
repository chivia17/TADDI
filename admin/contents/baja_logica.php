<?php
include ("conexion.php");
$NumCont=$_POST['nc'];

$conn =conectar();
$sql = "UPDATE Alumnos SET activo=0 WHERE idAlumnos=$NumCont;";
$conn->query($sql);		
if ( $conn->affected_rows == 1) {
   echo "<script>alert('Baja Realizada') 
	document.location='../baja_alumno.php';</script>";
} else {
    echo "<script>alert('Error al dar la baja') 
    document.location='../baja_alumno.php';</script>";
}


?>