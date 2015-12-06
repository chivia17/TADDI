<?php
include("../../admin/conexion/conexionMysql.php");
session_start();
$rfc = $_SESSION['nc'];
//echo '<script language="javascript">alert("'.$rfc.'");</script>'; 

//$rfc = "SAHM720522FA4";
$cont_mail = $_POST["cont_mail"];
$destinatarios = "";

$conexion = new MySQL();
$query = $conexion->consulta("SET NAMES 'utf8'");
$query = $conexion->consulta("SELECT idGrupos FROM grupos WHERE idTutores = '".$rfc."'");
$resultado = mysql_fetch_array($query);
$query = $conexion->consulta("SELECT correo FROM alumnos WHERE idGrupos = '".$resultado["idGrupos"]."'");

while($row = mysql_fetch_row($query))
{
	$destinatarios = $destinatarios.",".$row[0];
	//echo '<script language="javascript">alert("'.$row[0].'");</script>'; 
}
if($destinatarios != "")
{
	$correo = $destinatarios;
	$correo = utf8_decode($correo);
	$asunto = utf8_decode("Aviso de Coordinador");
	$mensaje = $cont_mail;
	$mensaje = str_replace("\n.", "\n..", $mensaje);
	mail($correo, $asunto, $mensaje);
	echo '<script language="javascript">alert("Correos enviados");</script>'; 
}
else
{
	echo '<script language="javascript">alert("No existen tutores asignados");</script>'; 
}
echo '<script language="javascript">window.location.href="../env_correo.php";</script>'; 
?>