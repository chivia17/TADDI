<?php
/**
*Obtiene las respuestas del anexo debilidades FODA
*los valores se obtienen a traves de tutorado.js
*posteriormente se crea un objeto de la clase OperacionesSQL
*se llama el metodo guardarAnexo y se envia la query a ejecutar
*retorna al js el mensaje a mostrar
*
*@author Covarrubias y asociados
*@copyright Covarrubias y asociados
*@version 2.0
*/
session_start();
require_once ("OperacionesSQL.php");
$nc = $_SESSION["nc"];
$r1 =$_POST["p1"];
$r2 =$_POST["p2"];
$r3 =$_POST["p3"];
$r4 =$_POST["p4"];
$query = "CALL debFo('$r1','$r2','$r3','$r4','$nc')";
$anexo = new OperacionesSQL();
$res = $anexo -> guardarAnexo($query);
echo $res;
?>
