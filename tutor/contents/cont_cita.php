<?php
$cve = $_SESSION["rfc"];
 ?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>Agendar Cita</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="contents/env_cita.php">
			<div class="form-group">
				<label for="cont_mail" class="col-md-2 control-label">Contenido de Correo:</label>
				<div class="col-md-6">
				    <input type="text" class="form-control" id="cont_mail" name="cont_mail" placeholder="Contenido">
				</div>
			</div>
			<div>
				<label for="cont_fecha" class="col-md-2 control-label">Fecha para la asesoria</label><input id="datepicker" name="datepicker" type="text"/>
			</div>
			<br><br>
		<div class="form-horizontal">
  			<div class="form-group">
    			<label for="nvoGrupo" class="col-sm-2 control-label">Grupo</label>
    			<div class="col-sm-7">
	      			<select name="nvoGrupo" class="form-control" id="grupo">
										<?php
		                echo "<option>--Selecciona Grupo--</option>";
										include'conexion.php';
										$conexion = conectar();
										$query = "SELECT idGrupos, NombreGrupo FROM grupos WHERE idTutores='$cve'" or die("Error in the consult.." . mysqli_error($conexion));
										$result = $conexion->query($query);
										while($row = mysqli_fetch_array($result))
										{
											echo "<option value='".$row["idGrupos"]."'>".$row["NombreGrupo"]."</option>";
										 }
										?>
  					</select>
    			</div>
  			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="form-horizontal">
			<div class="form-group">
				<label for="noControl" class="col-sm-4 control-label">Numero de Control</label>
				<div class="col-sm-4">
				    <input type="text" class="form-control" id="noControl" name="noControl" placeholder="Número de control">
				</div>
				<div class="col-sm-2">
      				<button type="button" class="btn btn-default btn-block" id="busAlu">Buscar</button>
    			</div>
			</div>
		</div>
	</div>
	<hr>
	<br>
	<div class="form-group">
		<div class="panel panel-success">
	  		<div class="panel-heading">Datos del alumno</div>
	 		<table class="table" id="table1">
	  		</table>
		</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-3">
				    <button type="submit" class="btn btn-default">Enviar</button>
				</div>
			</div>
		</form>
	</div>
</div>

