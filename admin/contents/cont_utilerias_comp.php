<?php
	require_once("conexion.php");

	$conexion=conectar();

	if(mysqli_connect_errno()){
		echo "No se pudo conectar con la BD" . mysqli_connect_error();
	}

	$sql="call borrarAlumnos()";
	if(!mysqli_query($conexion,$sql)){
		echo "<script>alert('Error') 
    document.location='../utilerias_bd.php';</script>";
	}
	else{
		echo "<script>alert('Alumnos eliminados') 
    document.location='../utilerias_bd.php';</script>";
		
	}	
?>