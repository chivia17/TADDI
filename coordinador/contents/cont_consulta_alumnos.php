<?php
	require_once("conexion.php");
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CONSULTA ALUMNO</b></h2>
	</div>
	<div class="container">
		<br>
	<form class="form-horizontal" role="form" action="">
			<div class="form-group">
				<label for="clave" class="col-md-2 control-label">Numero de Control</label>
				<div class="col-md-2">
				    <input type="text" class="form-control" id="nc" name="nc" placeholder="NC">
				</div>
			</div>
		<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
				    <button type="button" id="con" class="btn btn-default">Consultar</button>
				</div>
			</div>
		<div class="form-group">
			<div class="panel panel-success">
					<div class="panel-heading">Datos Alumno</div>
					<table id="tacon" class="table">
						</table>
			</div>
		</div>
		</form>
	</div>
</div>
