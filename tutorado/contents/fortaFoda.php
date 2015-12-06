<?php
session_start();
$nc = $_SESSION["nc"];
include'../contents/conexion.php';
$conexion = conectar();
$r1 =$_POST["p1"];
$r2 =$_POST["p2"];
$r3 =$_POST["p3"];
$r4 =$_POST["p4"];
$query = "CALL forFo('$r1','$r2','$r3','$r4','$nc')" or die
                           ("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if($result)
echo "Alta Realizada";
else
 echo "Error: " . $query . "<br>" . $conexion->error;
?>
