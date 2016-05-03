<?php
/**
*Obtiene los datos de registro del alumno,
*los valores se obtienen a traves de tutorado.js
*posteriormente se crea un objeto de la clase OperacionesSQL
*se llama el metodo altaAlumno y se envia la query a ejecutar
*retorna al js el mensaje a mostrar
*
*@author Covarrubias y asociados
*@copyright Covarrubias y asociados
*@version 2.0
*/
require_once("OperacionesSQL.php");
$nom =$_POST["nomA"];
$ap =$_POST["aP"];
$am =$_POST["aM"];
$ig =$_POST["iG"];
$nc =$_POST["ncA"];
$pass =$_POST["pas"];
$cor =$_POST["coE"];
$sql = "INSERT INTO alumnos (idAlumnos,nombreAlumno,apellPAlumno,apellMAlumno,
                             contrasena,activo,idGrupos,correo) VALUES
                             ('$nc','$nom','$ap','$am','$pass','0','$ig','$cor')";
$alta = new OperacionesSQL();
$res = $alta -> altaAlumno($sql);
echo $res;
?>
