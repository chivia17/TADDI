<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CATÁLOGO COORDINADORES</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<div class="panel panel-success">
	  				<div class="panel-heading">Coordinadores</div>
	 					<table class="table">
	 						<tr>
  								<td><strong>Nombre</strong></td>
 								<td><strong>RFC</strong></td>
								<td><strong>Carrera</strong></td>
							</tr>
							<?php
							 include'conexion.php';
	             $conexion = conectar();
	             $query = "SELECT * FROM coor" or die("Error in the consult.." . mysqli_error($conexion));
	             $result = $conexion->query($query);
	             while($row = mysqli_fetch_array($result))
	             {
	              echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
		            $row["nombre"] . "</font></td>";
								echo "<td width=\"25%\"><font face=\"verdana\">" .
								$row["rfc"] . "</font></td>";
								echo "<td width=\"25%\"><font face=\"verdana\">" .
								$row["NombreCarrera"] . "</font></td>";
							  }
							?>
	  					</table>
				</div>
			</div>
		</form>
	</div>
</div>
