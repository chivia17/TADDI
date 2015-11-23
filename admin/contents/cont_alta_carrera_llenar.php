<?php
	require_once("conexion.php");
	$conexion=conectar();
	$cveC=$_POST["clave"];
	$nombreC=$_POST["nombre"];

	$sql="call insCarrera('$cveC','$nombreC')";
	if(!mysqli_query($conexion,$sql)){
		echo "<script>alert('Error al dar de alta') 
    document.location='../alta_carrera.php';</script>";
	}
	else{		
		echo "<script>alert('Alta realizada') 
    document.location='../alta_carrera.php';</script>";
		
	}
			
?>