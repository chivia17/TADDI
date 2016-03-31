<?php
include'conexion.php';
$conexion = conectar();
$cco =$_POST["id_co"];
$query = "SELECT * FROM coordinadores WHERE rfc='$cco'"
                     or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if ($result->num_rows > 0) {
   echo "<option value=''>--Selecciona Carrera--</option>";
 while ($row = $result->fetch_assoc()) {
     $html .= '<option value="'.$row['cveCarrera'].'">'.$row['cveCarrera'].'</option>';
 }
}
echo $html;
?>
