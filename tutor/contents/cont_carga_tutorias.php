<?php
$cve = $_SESSION["rfc"];
 ?>
<div class="row">
	<div class="titulo text-center">
		<h2><b>CARGA POR TUTORÍA</b></h2>
	</div>
</div>
<br><br>
<div class="row">
	<div class="form-group">
		<div class="panel panel-success">
	  		<div class="panel-heading">Grupos de tutoría</div>
	 		<table class="table">
				<tr>
 					<td><strong>Grupo</strong></td>
  					<td><strong>Hora</strong></td>
  					<td><strong>Salón</strong></td>
  					<td class="text-center"><strong>Lista</strong></td>
				</tr>
				<?php
				include'conexion.php';
				$conexion = conectar();
				$query = "SELECT idGrupos,NombreGrupo, Hora, Salon FROM grupos WHERE idTutores='$cve'" or die("Error in the consult.." . mysqli_error($conexion));
				$result = $conexion->query($query);
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
			 ?>
	  		</table>
		</div>
		<br>
		<div class="text-right">
			<button type="submit" class="btn btn-default">Imprimir</button>
    	</div>
	</div>
</div>
