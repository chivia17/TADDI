<?php
include'conexion.php';
session_start();
$rfc = $_SESSION['rfc'];
//echo '<script language="javascript">alert("'.$rfc.'");</script>'; 

//$rfc = "SAHM720522FA4";
$cont_mail = $_POST["cont_mail"];
$destinatarios = "";
$fech = $_POST["datepicker"];
$conexion = conectar();
$numcont=$_POST["noControl"];
$query = $conexion->query("SET NAMES 'utf8'");
$resultado = $conexion->query("SELECT correo FROM alumnos WHERE idAlumnos = '".$numcont."'");

while($row = $resultado->fetch_assoc())
     {
      $destinatarios=$row["correo"];
    }
if($destinatarios != "")
{
	$correo = $destinatarios;
	$correo = utf8_decode($correo);
	$asunto = utf8_decode("Cita de tutor Fecha=".$fech.".");
	$mensaje = $cont_mail;
	$mensaje = str_replace("\n.", "\n..", $mensaje);
	mail($correo, $asunto, $mensaje);
	echo '<script language="javascript">alert("Correos enviados");</script>'; 
}
else
{
	echo '<script language="javascript">alert("No existen Alumnos asignados");</script>'; 
}
echo '<script language="javascript">window.location.href="../cita.php";</script>'; 
?>