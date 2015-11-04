<?php
	require_once("conexion.php");
	$conexion=conectar();

	if(mysqli_connect_errno()){
		echo "No se pudo conectar con la BD" . mysqli_connect_error();
	}

	$rfc=$_POST['rfc'];
	$nombre=$_POST['nomcor'];
	$aP=$_POST['apepacor'];
	$aM=$_POST['apemacor'];
	$pass=$_POST['passcor'];
	$cveC=$_POST['cveCarrera'];
	$correo=$_POST['correoc'];

	$sql="call insCoordinador('$rfc','$nombre','$aP','$aM','$pass','$cveC','$correo')";

	if(!mysqli_query($conexion,$sql)){
		echo "<script>alert('Error al dar de alta') 
    document.location='../alta_coordinador.php';</script>";
	}
	else{		
		echo "<script>alert('Alta realizada') 
    document.location='../alta_coordinador.php';</script>";	
		
	}
?>