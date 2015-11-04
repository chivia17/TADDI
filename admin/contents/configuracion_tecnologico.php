<?php

include("../conexion/conexionMysql.php");


//$CveDire = $_POST ["CveDI"];
//$CveDire = "12345";
//$CvePV = $_POST ["CvePV"];
//$CvePV = "123456";
//$CveA = $_POST ["CveSA"];
//$CveA = "1234567";
//$CveSA = $_POST ["CveSSA"];
//$CveSA = "12345678";
$estado = "Error en actualización de datos. \\n";

$conexion = new MySQL();
$query = $conexion->consulta("BEGIN");
if (!empty($_POST["nomtec"]) && !empty($_POST["nomDA"]))
{
	$query = $conexion->consulta("UPDATE institucion SET NomInsti = '".$_POST["nomtec"]."', JefeDA = '".$_POST["nomDA"]."'");
}
if (!empty($_POST ["CveDI"]) && !empty($_POST ["nomDI"]) && !empty($_POST ["appDI"]) && !empty($_POST ["apmDI"]))
{
	$query = $conexion->consulta("DELETE FROM directivos WHERE puesto = 'Director General'");
	$query = $conexion->consulta("INSERT INTO directivos (CveDirec, nombDire, apellPDire, apellMDire, puesto) VALUES ('".$_POST ["CveDI"]."','".$_POST ["nomDI"]."','".$_POST ["appDI"]."','".$_POST ["apmDI"]."','Director General')");
}
if (!empty($_POST ["CvePV"]) && !empty($_POST ["nomPV"]) && !empty($_POST ["appPV"]) && !empty($_POST ["apmPV"]))
{
	$query = $conexion->consulta("DELETE FROM directivos WHERE puesto = 'Encargado Subdireccion de Planeacion y Vinculacion'");
	$query = $conexion->consulta("INSERT INTO directivos (CveDirec, nombDire, apellPDire, apellMDire, puesto) VALUES ('".$_POST ["CvePV"]."','".$_POST ["nomPV"]."','".$_POST ["appPV"]."','".$_POST ["apmPV"]."','Encargado Subdireccion de Planeacion y Vinculacion')");
}
if (!empty($_POST ["CveSSA"]) && !empty($_POST ["nomSSA"]) && !empty($_POST ["appSSA"]) && !empty($_POST ["apmSSA"]))
{
	$query = $conexion->consulta("DELETE FROM directivos WHERE puesto = 'Encargado Subdireccion de Servicios Administrativo'");
	$query = $conexion->consulta("INSERT INTO directivos (CveDirec, nombDire, apellPDire, apellMDire, puesto) VALUES ('".$_POST ["CveSSA"]."','".$_POST ["nomSSA"]."','".$_POST ["appSSA"]."','".$_POST ["apmSSA"]."','Encargado Subdireccion de Servicios Administrativo')");
}
if (!empty($_POST ["CveSA"]) && !empty($_POST ["nomSA"]) && !empty($_POST ["appSA"]) && !empty($_POST ["apmSA"]))
{
	$query = $conexion->consulta("DELETE FROM directivos WHERE puesto = 'Encargado Subdireccion Academica'");
	$query = $conexion->consulta("INSERT INTO directivos (CveDirec, nombDire, apellPDire, apellMDire, puesto) VALUES ('".$_POST ["CveSA"]."','".$_POST ["nomSA"]."','".$_POST ["appSA"]."','".$_POST ["apmSA"]."','Encargado Subdireccion Academica')");
	$query = $conexion->consulta("COMMIT");
	$estado = "Actualizacion de Datos: Correcto.\\n";
}

if(!empty($_FILES['fileDoc']['name']))
{
	$target_path = "../../img/logoTec.png";
	$info_imagen = getimagesize($_FILES["fileDoc"]["tmp_name"]);
	$max_img_alt = 71;
	$max_img_anc = 69;
	$mTipo = exif_imagetype($_FILES["fileDoc"]["tmp_name"]);
	if(($info_imagen[0] != $max_img_alt) || ($info_imagen[1] != $max_img_anc))
	{
		$estado = $estado."Hubo un error al actualizar logo. Por favor intentelo mas tarde.";
	}
	else
	{
		if(move_uploaded_file($_FILES['fileDoc']['tmp_name'], $target_path))
		{
			$estado = $estado."Actualización de Logo: Correcto";
		}
		else
		{
			$estado = $estado."Hubo un error al actualizar logo. Por favor intentelo mas tarde.";
		}
	}
}
echo '<script language="javascript">alert("'.$estado.'"); window.location.href="../";</script>';
?>