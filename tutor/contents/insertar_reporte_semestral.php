<?php
include'conexion.php';
$conexion = conectar();
$conta =$_POST["contador"];
$auxi=0;

while($auxi < $conta){
$array[$auxi][0]=$_POST["numControl".$auxi];
$array[$auxi][1]=$_POST["vara".$auxi];
$array[$auxi][2]=$_POST["varb".$auxi];
$array[$auxi][3]=$_POST["varc".$auxi];
$auxi=$auxi+1;
}
$imp=0;
while($imp<$conta){
$query = "insert into ReporteSemestral values('".$array[$imp][0]."','".$array[$imp][1]."','".$array[$imp][2]."','".$array[$imp][3]."')" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
$imp=$imp+1;
}
echo "<script>alert('Reporte Guardado') 
		document.location='../reporte_semestral.php';</script>";
?>