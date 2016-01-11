<?php
$cve = $_SESSION["idGrup"];
?>
<div class="row">
	<div class="titulo text-center">
		<p class="titles t">- CARGA TUTORÍAS -</p>
	</div>
	<hr>
</div>
<br><br>
<div class="panel panel-success">
		<div class="panel-heading">Grupos de tutoría</div>
	<table class="table" id="table1">
		<?php
		include'conexion.php';
		$conexion = conectar();
		$query = "SELECT idGrupos,NombreGrupo, Hora, Salon FROM grupos WHERE idGrupos='$cve'" or die("Error in the consult.." . mysqli_error($conexion));
		$result = $conexion->query($query);
		echo "<tr>
			<td><strong>Grupo</strong></td>
			<td><strong>Hora</strong></td>
			<td><strong>Salón</strong></td>
			<td class='text-center'><strong>Descargar</strong></td>
			</tr>";
		while($row = mysqli_fetch_array($result))
		{
		 $id=$row["idGrupos"];
		 $hora=$row["Hora"];
		 $salon=$row["Salon"];
		 echo "<tr><td width=\"20%\"><font face=\"verdana\">" .
		 $row["NombreGrupo"] . "</font></td>";
		 echo "<td width=\"20%\"><font face=\"verdana\">" .
		 $row["Hora"] . "</font></td>";
		 echo "<td width=\"20%\"><font face=\"verdana\">" .
		 $row["Salon"] . "</font></td>";
		 echo "	<td class='text-center'>
		 <a href='contents/cargatutoriaPDF.php?id=$id&ho=$hora&sa=$salon' download>
		 <span class='glyphicon glyphicon-download-alt'></span></a></td>";
		}
		$result->close();
		mysqli_close($conexion);
		?>
		</table>
</div>
<br>
