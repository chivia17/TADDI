<?php
	require_once("conexion.php");

	$conexion=conectar();

	if(mysqli_connect_errno()){
		echo "No se pudo conectar con la BD" . mysqli_connect_error();
	}
	$anio=$_POST['anio'];
	$idGrupo=$_POST['idgru'];	
	$nombreG=$_POST['nomgru'];
	$salon=$_POST['salgru'];
	$hora=$_POST['horagru'];
	$nCarrera=$_POST['cveCarrera'];
	$idPeriodo=$_POST['idPeriodo'];
	$idTutor=$_POST['idTutores'];

	$llave=$nCarrera."-".$anio."-".$idPeriodo."-".$idGrupo;


	$sql3="call insGrupos('$llave','$nombreG','$salon','$hora','$nCarrera','$idPeriodo','$idTutor')";
	if(!mysqli_query($conexion,$sql3)){
		
		echo "<script>alert('Error al dar de alta') 
    window.location.href = document.referrer</script>";
	}
	else{		
		echo "<script>alert('Alta realizada') 
    window.location.href = document.referrer</script>";
	}
?>