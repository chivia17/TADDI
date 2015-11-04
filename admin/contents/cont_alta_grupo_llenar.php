<?php
	require_once("conexion.php");

	$conexion=conectar();

	if(mysqli_connect_errno()){
		echo "No se pudo conectar con la BD" . mysqli_connect_error();
	}

	$idGrupo=$_POST['idgru'];
	$nombreG=$_POST['nomgru'];
	$salon=$_POST['salgru'];
	$hora=$_POST['horagru'];
	$nCarrera=$_POST['cveCarrera'];
	$idPeriodo=$_POST['idPeriodo'];
	$idTutor=$_POST['idTutores'];

	$sql="select idPeriodo from periodo where periodo.periodo='$idPeriodo'"; //Consulta por el id del periodo
	$claveP=mysqli_query($conexion,$sql); //Recibe la consulta
	$row = $claveP->fetch_assoc(); //Convierte las filas
	$StringP="$row[idPeriodo]"; //Toma el resultado para poder guardarlo en string

	$sql2="select idTutores from tutores where '$idTutor'=tutores.nombreTutor";
	$claveT=mysqli_query($conexion,$sql2);
	$row2=$claveT->fetch_assoc();
	$StringT="$row2[idTutores]";

	$sql3="call insGrupos('$idGrupo','$nombreG','$salon','$hora','$nCarrera','$StringP','$StringT')";
	if(!mysqli_query($conexion,$sql3)){
		
		echo "<script>alert('Error al dar de alta') 
    document.location='../alta_grupo.php';</script>";	
			
	}
	else{		
		echo "<script>alert('Alta realizada') 
    document.location='../alta_grupo.php';</script>";
	}
?>