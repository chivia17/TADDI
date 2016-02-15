<?php
function conectar(){
		try{
        	$servidor = "localhost";
        	$basedatos = "mydb";
        	$usuario = "mzulma";
        	$contrasena = "mZulma16$";

	        $conexion = mysqli_connect("$servidor","$usuario","$contrasena","$basedatos");
        	return $conexion;
    	}catch (PDOException $e){
        	die ("No se puede conectar a la base de datos". $e->getMessage());
    	}
	}
?>
