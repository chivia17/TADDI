<?php
include'conexion.php';
$conexion = conectar();
$pe  =$_POST["id_pe"];
$ctu =$_POST["id_tu"];
$query = "SELECT * FROM grupos WHERE idTutores='$ctu' AND idPeriodo='$pe'"
                     or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
if ($result->num_rows > 0) {
   echo "<option value=''>--Selecciona Grupo--</option>";
 while ($row = $result->fetch_assoc()) {
     $html .= '<option value="'.$row['idGrupos'].'">'.$row['NombreGrupo'].'</option>';
 }
}
echo $html;
?>
