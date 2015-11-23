<?php
	include'conexion.php';
	$conexion = conectar();
	$cca =$_POST["id_ca"];
	$query = "SELECT * FROM tuto WHERE cveCarrera='$cca'" or die("Error in the consult.." . mysqli_error($conexion)); ;
	$result = $conexion->query($query);

	if ($result->num_rows > 0) {
	 while ($row = $result->fetch_assoc()) {
			 $html .= '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
	 }
}
echo $html;
?>
