<?php
session_start();
$nc = $_SESSION["nc"];
include'../contents/conexion.php';
$conexion = conectar();
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
$r21 =$_POST["p21"];
$query = "CALL testEnt('$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8',
                       '$r9','$r10','$r11','$r12','$r13','$r14','$r15','$r16',
                        '$r17','$r18','$r19','$r20','$r21','$nc')" or die
                        ("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
  if($result)
      echo "Alta Realizada";
  else
      echo "Error: " . $query . "<br>" . $conexion->error;
?>
