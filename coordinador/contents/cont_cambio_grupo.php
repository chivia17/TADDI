<?php
$cve = $_SESSION["cveCar"];
 ?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CAMBIO DE GRUPO</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form"  action="">
			<div class="form-group">
				<label for="clave" class="col-md-2 control-label">Numero de Control</label>
				<div class="col-md-2">
				    <input type="text" class="form-control" id="nc1" name="nc1" placeholder="NC">
				</div>
				<div class="col-md-2">
				    <button type="button" class="btn btn-default" id="busc1">Buscar</button>
				</div>
			</div>
			<div class="form-group">
				<div class="panel panel-success">
	  				<div class="panel-heading" id="alumno1">Alumno</div>
	 					<table class="table" id="table1">
	  					</table>
				</div>
			</div>
			<div class="form-group">
				    <label for="seleccar" class="col-md-2 control-label">Nuevo Grupo</label>
				    <div class="col-md-6">
				     	<form action="" method="post">
  							<select name="programa" class="form-control" id="grup1">
  							</select>
						</form>
				    </div>
				  </div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
				    <button type="submit" class="btn btn-default" id="camg">Cambiar</button>
				</div>
			</div>
		</form>
	</div>
</div>
