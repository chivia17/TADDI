<?php
	require_once("conexion.php");

	$conexion=conectar();

	if(mysqli_connect_errno()){
		echo "No se pudo conectar con la BD" . mysqli_connect_error();
	}

	$id=$_POST['rfct'];
	$nombre=$_POST['nomcor'];
	$aP=$_POST['apepacor'];
	$aM=$_POST['apemacor'];
	$pass=$_POST['passcor'];
	$cveC=$_POST['cveCarrera'];
	$activo=$_POST['group1'];
	$correo=$_POST['correocor'];
	$acAux="0";

	if($activo=="si"){
		$acAux="1";
	}

	$sql="call insTutores('$id','$nombre','$aP','$aM','$pass','$acAux','$cveC','$correo')";	

	if(!mysqli_query($conexion,$sql)){
		echo "<script>alert('Error al dar de alta') 
    window.location.href = document.referrer;</script>";  
	}
	else{
		echo "<script>alert('Alta realizada') 
    window.location.href = document.referrer</script>";
		
	}
?>