<?php
$cve = $_SESSION["nc"];
 ?>
<div class="contenido container">
	<div class="titulo text-center">
		<p class="titles t">- AGENDAR CITA -</p>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="contents/env_cita.php">
			<div class="form-group">
				<label for="cont_mail" class="col-md-2 control-label">Contenido de Correo:</label>
				<div class="col-md-6">
				    <input type="text" class="form-control" id="cont_mail" name="cont_mail" placeholder="Contenido" required>
				</div>
			</div>
			<div>
				<label for="cont_fecha" class="col-md-2 control-label">Fecha para la asesoria</label><input id="datepicker" name="datepicker" type="text" required/>
			</div>
			<br><br>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-3">
				    <button type="submit" class="btn btn-default">Enviar</button>
				</div>
			</div>
		</form>
	</div>
</div>
