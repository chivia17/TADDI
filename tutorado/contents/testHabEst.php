<?php
/**
*Obtiene las respuestas del anexo habilidades de estudio
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
$r11 =$_POST["p11"];
$r12 =$_POST["p12"];
$r13 =$_POST["p13"];
$r14 =$_POST["p14"];
$r15 =$_POST["p15"];
$r16 =$_POST["p16"];
$r17 =$_POST["p17"];
$r18 =$_POST["p18"];
$r19 =$_POST["p19"];
$r20 =$_POST["p20"];
$query = "CALL testHab('$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8',
                       '$r9','$r10','$r11','$r12','$r13','$r14','$r15','$r16',
                       '$r17','$r18','$r19','$r20','$nc')";
$anexo = new OperacionesSQL();
$res = $anexo -> guardarAnexo($query);
echo $res;
?>
