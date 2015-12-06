<?php
include'conexion.php';
session_start();
$rfc = $_SESSION['nc'];
//echo '<script language="javascript">alert("'.$rfc.'");</script>'; 

//$rfc = "SAHM720522FA4";
$cont_mail = $_POST["cont_mail"];
$destinatarios = "";
$nombre="";

$conexion = conectar();
$query = $conexion->query("SET NAMES 'utf8'");
$resultado = $conexion->query(" SELECT correo FROM tutores WHERE idTutores = (select idTutores from grupos where idGrupos = (select idGrupos from alumnos where idAlumnos = '".$rfc."'))");
$resu =$conexion->query("SELECT nombreAlumno,apellPAlumno,apellMAlumno from alumnos where idAlumnos='".$rfc."'");
while($row = $resu->fetch_assoc())
     {
      $nombre=$row["nombreAlumno"]." ".$row["apellPAlumno"]." ".$row["apellMAlumno"];
    }
while($row = $resultado->fetch_assoc())
     {
      $destinatarios=$row["correo"];
    }
if($destinatarios != "")
{
	$correo = $destinatarios;
	$correo = utf8_decode($correo);
	$asunto = utf8_decode("Correo de tutorado ".$nombre);
	$mensaje = $cont_mail;
	$mensaje = str_replace("\n.", "\n..", $mensaje);
	mail($correo, $asunto, $mensaje);
	echo '<script language="javascript">alert("Correo enviado");</script>'; 
}
else
{
	echo '<script language="javascript">alert("No se tiene cargado un correo del tutor");</script>'; 
}
echo '<script language="javascript">window.location.href="../env_correo.php";</script>'; 
?>