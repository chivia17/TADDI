<?php
$cve = $_SESSION["cveCar"];
 ?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CATÁLOGO GRUPOS</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<div class="panel panel-success">
	  				<div class="panel-heading">Grupos</div>
	 					<table class="table">
	 						<tr>
 								<td><strong>Grupo</strong></td>
  							<td><strong>Periodo</strong></td>
 								<td><strong>Año</strong></td>
								<td><strong>Carrera</strong></td>
                <td><strong>Tutor</strong></td>
							</tr>
							<?php
							include'conexion.php';
							$conexion = conectar();
							$query = "SELECT * FROM grup WHERE cveCarrera='$cve'" or die("Error in the consult.." . mysqli_error($conexion));
							$result = $conexion->query($query);
							while($row = mysqli_fetch_array($result))
							{
							 echo "<tr><td width=\"20%\"><font face=\"verdana\">" .
							 $row["NombreGrupo"] . "</font></td>";
							 echo "<td width=\"20%\"><font face=\"verdana\">" .
							 $row["per"] . "</font></td>";
							 echo "<td width=\"20%\"><font face=\"verdana\">" .
							 $row["ano"] . "</font></td>";
							 echo "<td width=\"20%\"><font face=\"verdana\">" .
							 $row["NombreCarrera"] . "</font></td>";
							 echo "<td width=\"25%\"><font face=\"verdana\">" .
							 $row["nombre"] . "</font></td>";
							 }
						 ?>
	  					</table>
				</div>
			</div>
		</form>
	</div>
</div>
