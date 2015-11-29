<?php
$cve = $_SESSION["rfc"];
 ?>
<div class="row">
	<div class="titulo text-center">
		<h2><b>Colorama</b></h2>
	</div>
</div>
<br><br>
<form class="form-horizontal" role="form" action="">
	<div class="row">
		<div class="form-horizontal">
  			<div class="form-group">
    			<label for="nvoGrupo" class="col-sm-2 control-label">Grupo</label>
    			<div class="col-sm-7">
	      			<select required name="nvoGrupo" class="form-control" id="grupo">
	      				<option value="">-Seleccionar Grupo-</option>
										<?php
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
	<div class="row1">
		<div class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-2">
      				<button type="button" class="btn btn-default btn-block" id="salon">Mostrar</button>
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
	</div>
	<hr>
	<br>
</form>
