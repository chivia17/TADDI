<?php
	include'conexion.php';
	$opciones = '<option value="0"> Elige un Tutor</option>';
	$conexion = conectar();
	$nc =$_POST["nc"];
	$query = "SELECT * FROM alum WHERE idAlumnos='$nc' AND activo = 0" or die("Error in the consult.." . mysqli_error($conexion));
	$result = $conexion->query($query);
	echo "<tr>
		<td><strong>Id</strong></td>
			<td><strong>Nombre</strong></td>
		<td><strong>Observaciones</strong></td>
	</tr>";

    if ($result->num_rows > 0) {
 	   $row = $result->fetch_assoc();
		 echo "<tr><td width=\"20%\"><font face=\"verdana\">" .
		 $row["idAlumnos"] . "</font></td>";
		  echo "<td width=\"20%\"><font face=\"verdana\">" .
		 $row["nombre"] . "</font></td>";
		  echo "<td width=\"20%\"><font face=\"verdana\">" .
		 $row["observaciones"] . "</font></td>";
		  echo $html;
    }
		else {
			echo '<script>alert("Alumno no encontrado o no disponible para cambio")</script>';
		}

?>
