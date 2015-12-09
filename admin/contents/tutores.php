<?php
include'conexion.php';
$conexion = conectar();
$cca =$_POST["id_ca"];
$query = "SELECT * FROM tut WHERE cveCarrera='$cca'" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if ($result->num_rows > 0) {
   echo "<option value=''>--Selecciona Tutor--</option>";
 while ($row = $result->fetch_assoc()) {
     $html .= '<option value="'.$row['idTutores'].'">'.$row['nombre'].'</option>';
 }
}
echo $html;
?>
