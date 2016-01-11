<?php
	include'conexion.php';
	$conexion = conectar();
	$nc =$_POST["query"];
	$cc =$_POST["id_ca"];
	$query = "$nc" or die("Error in the consult.." . mysqli_error($conexion));
	$result = $conexion->query($query);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
			$idg= $row["idGrupos"];
			$query1 = "SELECT * FROM grupos WHERE idGrupos='$idg' AND cveCarrera='$cc'" or die("Error in the consult.." . mysqli_error($conexion));
			$result1 = $conexion->query($query1);
			if ($result1->num_rows > 0) {
			echo "<tr>
				<td><strong>Id</strong></td>
				<td><strong>Nombre</strong></td>
				<td><strong>Observaciones</strong></td>
				<td><strong>Activo</strong></td>
			</tr>";
		 echo "<tr><td width=\"20%\"><font face=\"verdana\">" .
		 $row["idAlumnos"] . "</font></td>";
		  echo "<td width=\"20%\"><font face=\"verdana\">" .
		 $row["nombre"] . "</font></td>";
		  echo "<td width=\"20%\"><font face=\"verdana\">" .
		 $row["observaciones"] . "</font></td>";
		 echo "<td width=\"20%\"><font face=\"verdana\">" .
   	 $row["activo"] . "</font></td>";}
		 else {
		 	echo '<script>alert("Alumno no encontrado")</script>';
		 }
    }
		else {
			echo '<script>alert("Alumno no encontrado")</script>';
		}
		$result->close();
		mysqli_close($conexion);

?>
