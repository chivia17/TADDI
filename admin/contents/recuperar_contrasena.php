<?php
include("../conexion/conexionMysql.php");

$usuario = $_POST["recpassrfc"];
//$usuario = "OERE931028";

$conexion = new MySQL();
$query = $conexion->consulta("SET NAMES 'utf8'");
$query = $conexion->consulta("SELECT rfc, contraseña, correo FROM administrador WHERE rfc = '".$usuario."'");
$resultado = mysql_fetch_array($query);

if($usuario == $resultado ["rfc"])
{
	$contrasena = $resultado ["contraseña"];
	$contrasena = utf8_decode($contrasena);
	$correo = $resultado ["correo"];
	$correo = utf8_decode($correo);
	$asunto = utf8_decode("TADDI Resposicion contraseña");
	$mensaje = "Buenos dias, este correo es enviado por motivo de recuperación de contraseña.\r\n Su contraseña seria: ".$contrasena.".\r\n\r\nBuen dia!\r\n\r\n\r\n\r\nAtte. Sistema de tutorias TADDI";
	$mensaje = str_replace("\n.", "\n..", $mensaje);
	mail($correo, $asunto, $mensaje);
	echo '<script language="javascript">alert("Contraseña enviada");</script>'; 
}
else
{
	echo '<script language="javascript">alert("Usuario Inexistente");</script>'; 
}
echo '<script language="javascript">window.location.href="../rec_pass.php";</script>'; 
?>