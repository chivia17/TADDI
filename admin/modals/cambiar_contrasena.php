<?php

include("../conexion/conexionMysql.php");

$usuario = $_POST["passrfc"];
$contrasena = $_POST["pswAct"];
$nva_contrasena = $_POST["pswNew"];
$confirmar = $_POST["pswChk"];
//$usuario = "OERE931028";
//$contrasena = "123456789";
//$nva_contrasena = "12345";
//$confirmar = "12345";

$conexion = new MySQL();
$query = $conexion->consulta("SET NAMES 'utf8'");
$query = $conexion->consulta("BEGIN");
$query = $conexion->consulta("SELECT rfc, contrasena FROM administrador WHERE rfc = '".$usuario."'");
$resultado = mysql_fetch_array($query);
if($usuario == $resultado ["rfc"])
{
	if($contrasena == $resultado ["contrasena"])
	{
		if($nva_contrasena == $confirmar)
		{
			$query = $conexion->consulta("UPDATE administrador SET contrasena = '".$nva_contrasena."' WHERE rfc = '".$usuario."'");
			$query = $conexion->consulta("COMMIT");
			echo '<script language="javascript">alert("El cambio de contraseña se ralizó correctamente.");</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Error: No cincide la contraseña nueva con la confirmacion");</script>';
		}
	}
	else
	{
		echo '<script language="javascript">alert("Error: Contraseña Incorrecta");</script>';
	}
}
else
{
	echo '<script language="javascript">alert("Error: Usuario no registrado");</script>';
}

echo '<script language="javascript">window.location.href="../";</script>';

?>
