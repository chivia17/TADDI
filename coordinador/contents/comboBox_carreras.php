<?php
function conectar2(){//No debe ser variable de conexion mysqli
		try{
        	$servidor = "localhost";
        	$basedatos = "taddi2";
        	$usuario = "mzulma";
        	$contrasena = "mZulma16$";
	        $conexion = new PDO("mysql:host=$servidor;dbname=$basedatos",
                            $usuario,
                            $contrasena,
                            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    	    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        	return $conexion;
    	}catch (PDOException $e){
        	die ("No se puede conectar a la base de datos". $e->getMessage());
    	}
	}
	function getCarreras(){
		$resp=false;
		$consulta="Select cveCarrera,NombreCarrera from carreras where cveCarrera='$cve'";

		$conexion=conectar2();
		$sentencia=$conexion->prepare($consulta);
		try {
        if(!$sentencia->execute()){
            print_r($sentencia->errorInfo());
        }
        $resp = $sentencia->fetchAll();
        $sentencia->closeCursor();
    	}
    	catch(PDOException $e){
        	echo "Error al ejecutar la sentencia: \n";
            print_r($e->getMessage());
    	}
    return $resp;
	}
    function getTutores(){
        $resp=false;
        $consulta="Select nombreTutor,idTutores from tutores";

        $conexion=conectar2();
        $sentencia=$conexion->prepare($consulta);
        try {
        if(!$sentencia->execute()){
            print_r($sentencia->errorInfo());
        }
        $resp = $sentencia->fetchAll();
        $sentencia->closeCursor();
        }
        catch(PDOException $e){
            echo "Error al ejecutar la sentencia: \n";
            print_r($e->getMessage());
        }
    return $resp;
    }

    function getPeriodos(){
        $resp=false;
        $consulta="Select idPeriodo,periodo from periodo";

        $conexion=conectar2();
        $sentencia=$conexion->prepare($consulta);
        try {
        if(!$sentencia->execute()){
            print_r($sentencia->errorInfo());
        }
        $resp = $sentencia->fetchAll();
        $sentencia->closeCursor();
        }
        catch(PDOException $e){
            echo "Error al ejecutar la sentencia: \n";
            print_r($e->getMessage());
        }
    return $resp;
    }
?>
