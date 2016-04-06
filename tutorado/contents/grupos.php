<?php
include'conexion.php';
$conexion = conectar();
$cca =$_POST["id_ca"];
$query = "SELECT * FROM grupos WHERE cveCarrera='$cca'" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if ($result->num_rows > 0) {
    $html .= "<option value=''>--Selecciona Grupo--</option>";
 while ($row = $result->fetch_assoc()) {
     $html .= '<option value="'.$row['idGrupos'].'">'.$row['NombreGrupo'].'</option>';
 }
}
echo $html;
?>
