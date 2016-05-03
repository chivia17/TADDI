<?php
/**
*Obtiene las respuestas del test de autoestima
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
$r5 =$_POST["p5"];
$r6 =$_POST["p6"];
$r7 =$_POST["p7"];
$r8 =$_POST["p8"];
$r9 =$_POST["p9"];
$r10 =$_POST["p10"];
$query = "CALL testAut('$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8',
                       '$r9','$r10','$nc')";
$anexo = new OperacionesSQL();
$res = $anexo -> guardarAnexo($query);
echo $res;
?>
