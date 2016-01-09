<?php
	include'conexion.php';
	$conexion = conectar();
	$nc =$_POST["query"];
	$query = "$nc" or die("Error in the consult.." . mysqli_error($conexion));
	$result = $conexion->query($query);

    if ($result->num_rows > 0) {
			echo "<tr>
				<td><strong>Id</strong></td>
				<td><strong>Nombre</strong></td>
				<td><strong>Observaciones</strong></td>
			</tr>";
 	   while($row = $result->fetch_assoc())
 	   {
 	   	if($row["estatus"]=='a'){
		 echo "<tr><td width=\"20%\"><font color=='yellow' face=\"verdana\">" .
		 $row["idAlumnos"] . "</font></td>";
		  echo "<td width=\"20%\"><font color=='yellow' face=\"verdana\">" .
		 $row["nombre"] . "</font></td>";
		  echo "<td width=\"20%\"><font color=='yellow' face=\"verdana\">" .
		 $row["observaciones"] . "</font></td>";
		}
		else{
		 echo "<tr><td width=\"20%\"><font color=='violet' face=\"verdana\">" .
		 $row["idAlumnos"] . "</font></td>";
		  echo "<td width=\"20%\"><font color=='violet' face=\"verdana\">" .
		 $row["nombre"] . "</font></td>";
		  echo "<td width=\"20%\"><font color=='violet' face=\"verdana\">" .
		 $row["observaciones"] . "</font></td>";
		}
	}
    }
		else {
			echo '<script>alert("No hay alumnos en el grupo")</script>';
		}
		$result->close();
		mysqli_close($conexion);

?>
