<?php
include'conexion.php';
alert("Entro");
 $cc =$_POST['valorCaja1'];
 $conexion = conectar();
 $query = "SELECT * FROM tuto WHERE cveCarrera= '$cc'" or die("Error in the consult.." . mysqli_error($conexion));
 $result = $conexion->query($query);
 while($row = mysqli_fetch_array($result))
 {
  	echo "<option value='".$row["nombre"]."'>".$row["nombre"]."</option>";

 }

?>
