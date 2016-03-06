<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
$conecta = mysql_connect('localhost', 'mzulma', 'mZulma16$'); 
if (!$conecta) { 
die('No hay conexion : ' . mysql_error()); 
} 
$db_selected = mysql_select_db('taddi2', $conecta); 
$texto = file_get_contents("base.sql");
$sentencia = explode(";", $texto);
for($i = 0; $i < (count($sentencia)-1); $i++){
$db_selected = mysql_query ("$sentencia[$i];") or die(mysql_error()); 
}

echo "<script>alert('Respaldo realizado') 
		document.location='../utilerias_bd.php';</script>";
?>