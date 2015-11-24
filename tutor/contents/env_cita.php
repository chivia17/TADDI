<?php
include("../../admin/conexion/conexionMysql.php");
session_start();
$rfc = $_SESSION['rfc'];
//echo '<script language="javascript">alert("'.$rfc.'");</script>'; 

//$rfc = "SAHM720522FA4";
$cont_mail = $_POST["cont_mail"];
$destinatarios = "";
$fech = $_POST["datepicker"];
$conexion = new MySQL();
$numcont=$_POST["noControl"];
$query = $conexion->consulta("SET NAMES 'utf8'");
$query = $conexion->consulta("SELECT correo FROM alumnos WHERE idAlumnos = '".$numcont."'");

while($row = mysql_fetch_row($query))
{
	$destinatarios = $destinatarios.",".$row[0];
	//echo '<script language="javascript">alert("'.$row[0].'");</script>'; 
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