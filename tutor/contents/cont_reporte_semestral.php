<?php
$cve = $_SESSION["rfc"];
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="text-center">
		<p class="titles t">- REPORTE SEMESTRAL -</p>
	</div>
	<hr>
</div>

<br><br>		
<form role="form" method="post" action="./contents/insertar_reporte_semestral.php">
	<div class="row">
		<div class="form-horizontal">
  			<div class="form-group">
    			<label for="selGrupo" class="col-sm-2 control-label">Grupo</label>
    			<div class="col-sm-7">
	      			<select required name="selGrupo" class="form-control" id="grupo">
                		<option value="">--Selecciona grupo--</option>
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
  					</select><br>
    			</div>
    			<div class="col-sm-2">
      				<button type="button" class="btn btn-primary btn-block" id="reporte">Ver listado</button>
    			</div>
  			</div>
		</div>
		<hr>
	</div>	
		
	<br>
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">ISC-20151</div>
			<div class="table-responsive">
				<table class="table table-bordered table-hover" id="table1">
				</table>
			</div>
		</div>
	</div>
	
	<br>
	<div class="row">
		<div class="col-xs-6 col-sm-3">
			<button type="submit" class="btn btn-primary btn-block">Guardar cambios</button><br>
		</div>
		<div class="col-xs-6 col-sm-3">
			<button type="submit" class="btn btn-danger btn-block">Cancelar</button><br>
		</div>
		<div class="col-xs-6 col-sm-3">
			<button type="submit" class="btn btn-info btn-block">Generar PDF</button>
		</div>
		<div class="col-xs-6 col-sm-3">
			<button type="submit" class="btn btn-warning btn-block">Imprimir</button>
		</div>
	</div>
	<br>
	
</form>

