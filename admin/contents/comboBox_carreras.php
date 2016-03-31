<?php
function conectar2(){//No debe ser variable de conexion mysqli
	try{
			$servidor = "localhost";
			$basedatos = "mydb";
			$usuario = "root";
			$contrasena = "";

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
		$consulta="Select * from carreras";

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
        $consulta="Select concat(apellPTutor,' ',apellMTutor,' ',nombreTutor) as nombreTutor,idTutores from tutores";

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

    function getAnios(){
        $resp=false;
        $consulta="Select distinct (ano), idPeriodo from periodo";

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
    function getGrupos(){
        $resp=false;
        $cveC=$_POST['cveCarrera'];
        $consulta="select idGrupo from grupos where cveCarrera=$cveC";
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
