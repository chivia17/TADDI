<?php
function conectar(){
		try{
        	$servidor = "localhost";
        	$basedatos = "mydb";
        	$usuario = "root";
        	$contrasena = "";
 
	        $conexion = mysqli_connect("$servidor","$usuario","","$basedatos");
        	return $conexion;
    	}catch (PDOException $e){
        	die ("No se puede conectar a la base de datos". $e->getMessage());
    	}
	}
?>