<?php
require_once("conexion.php");
$conexion=conectar();
$sql=$_POST['sent'];
if(mysqli_query($conexion,$sql)){
		echo "Alta realizada";
	}
	else{
		echo "Error al dar de alta";
	}
?>