<?php
	include'conexion.php';
	$conexion = conectar();
	$nc =$_POST["query"];
	$help =$_POST["gp"];
	$oie;
	$query = "$nc" or die("Error in the consult.." . mysqli_error($conexion));
	$result = $conexion->query($query);
	$auxi= $conexion->query("select NomInsti from institucion");
	if($auxi->num_rows > 0){
		while($row = $auxi->fetch_assoc())
 	   {
 	   	echo "<tr><th class=text-center colspan=7>REPORTE SEMESTRAL DEL TUTOR</tr>";
		echo "<tr><td colspan=7>".$row["NomInsti"]."</td></tr>";
		}
	}
	$sal;
	$auxj= $conexion->query("Select idTutores from grupos where idGrupos=".$help);
	if($auxj->num_rows > 0){
		while($row = $auxj->fetch_assoc())
 	   	{
			$sal=$row["idTutores"];
			
		}
	}
	$auxi=$conexion->query("Select nombreTutor,apellPTutor,apellMTutor from tutores where idTutores='$sal'");
			if($auxi->num_rows > 0){
			while($rows = $auxi->fetch_assoc())
 	   			{
				echo "<tr>
						<td colspan=2>Nombre del tutor:</td>
						<td colspan=2>".$rows["nombreTutor"]." ".$rows["apellPTutor"]." ".$rows["apellMTutor"]."</td>
						<td colspan=2>Fecha:</td>
						<td colspan=3>
							<input type=date class=form-control name=fecReporte>
						</td>
					</tr>";
				}
			}
	$auxi=$conexion->query("Select Hora from grupos where idGrupos=".$help);
	if($auxi->num_rows > 0){
		while($row = $auxi->fetch_assoc())
 	   {
		echo "<tr>
						<td colspan=1>Programa educativo:</td>
						<td colspan=1></td>
						<td colspan=2>Grupo: ".$help."</td>
						<td colspan=3>Hora:".$row["Hora"]."</td>
						</tr>";
		}
	}
	echo "<tr>
						<th>No.</th>
						<th>No. de control</th>
						<th>Lista de estudiantes</th>
						<th>Calificación</th>
						<th>Asistencia</th>
						<th>Área canalizada</th>
						<th>Observaciones</th>
					</tr>";
	$cont=1;
    if ($result->num_rows > 0) {
    	
 	   while($row = $result->fetch_assoc())
 	   {
 	   	echo "<tr><td>".$cont."</td><td width=\"20%\"><font face=\"verdana\">" .
		 $row["idAlumnos"] . "</font></td><td width=\"20%\"><font  face=\"verdana\">" .
		 $row["nombre"] . "</font></td><td contenteditable=true></td>
		 <td contenteditable=true></td><td contenteditable=true></td><td width=\"20%\"><font  face=\"verdana\">" .
		 $row["observaciones"] . "</font></td></tr>";
		 $cont=$cont+1;
		}
    }
		else {
			echo '<script>alert("Alumno no encontrado")</script>';
		}
		$result->close();
		mysqli_close($conexion);
?>
