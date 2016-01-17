<?php
$cve=$_SESSION["cveCar"];
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>BAJA ALUMNO</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="" onsubmit="return validar_nc('nc');" required>
			<div class="form-group">
				<label for="clave" class="col-md-2 control-label">Numero de Control</label>
				<div class="col-md-2">
				    <input type="text" class="form-control" id="nc" name="nc" placeholder="NC" required>
				</div>
			</div>
		<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
				    <button type="submit" class="btn btn-default"id="baja">Dar de Baja</button>
				</div>
			</div>
		</form>
	</div>
</div>
