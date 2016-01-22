<?php
session_start();
$nc = $_SESSION["nc"];
$idG =  $_SESSION["idGrup"];
include'../contents/conexion.php';
$conexion = conectar();
$result = $conexion->query("SELECT * FROM grupos WHERE idGrupos='$idG'");
$row = $result->fetch_assoc();
$tut = $row["idTutores"];
$r1 =$_POST["p1"];
$r2 =$_POST["p2"];
$r3 =$_POST["p3"];
$r4 =$_POST["p4"];
$query = "CALL llenaEva('$r1','$r2','$r3','$r4','$nc','$tut')" or die
                           ("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if($result)
echo "Evaluacion Guardada";
else
 echo "Error: " . $query . "<br>" . $conexion->error;
?>
