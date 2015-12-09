<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CATÁLOGO CARRERAS</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<div class="panel panel-success">
	  				<div class="panel-heading">Carreras</div>
	 					<table class="table">
							<tr>
 								<td><strong>Cve Carrera</strong></td>
  								<td><strong>Nom Carrera</strong></td>
							</tr>
	 					<?php
						 include'conexion.php';
             $conexion = conectar();
             $query = "SELECT * FROM carrera" or die("Error in the consult.." . mysqli_error($conexion)); ;
             $result = $conexion->query($query);
             while($row = mysqli_fetch_array($result))
             {
              echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
	            $row["cveCarrera"] . "</font></td>";
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
