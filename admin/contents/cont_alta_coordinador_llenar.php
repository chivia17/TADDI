<?php
	require_once("conexion.php");
	$conexion=conectar();

	if(mysqli_connect_errno()){
		echo "No se pudo conectar con la BD" . mysqli_connect_error();
	}

	$id=$_POST['idcor'];
	$rfc=$_POST['rfc'];
	$nombre=$_POST['nomcor'];
	$aP=$_POST['apepacor'];
	$aM=$_POST['apemacor'];
	$pass=$_POST['passcor'];
	$cveC=$_POST['cveCarrera'];

	$sql="call insCoordinador('$id','$rfc','$nombre','$aP','$aM','$pass','$cveC')";

	if(!mysqli_query($conexion,$sql)){
		echo "<script>alert('Alta realizada') 
    document.location='../alta_coordinador.php';</script>";
	}
	else{		
		echo "<script>alert('Error al dar de alta') 
    document.location='../alta_coordinador.php';</script>";	
		
	}
?>