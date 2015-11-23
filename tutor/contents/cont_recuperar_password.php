<div class="row">
	<div class="titulo text-center">
		<h2><b>RECUPERAR CONTRASEÑA</b></h2>
	</div>
</div>
<br><br><br>
<form class="form-horizontal" role="form" method="post" action="./contents/recuperar_contrasena.php">
	<div class="row">
		<div class="form-horizontal">
			<div class="form-group">
				<label for="recPassAlumno" class="col-sm-4 control-label">Numero de Control</label>
				<div class="col-sm-4">
				    <input type="text" class="form-control" id="recPassAlumno" name="recPassAlumno" placeholder="Número de control">
				</div>
				<div class="col-sm-2">
      				<button type="submit" class="btn btn-default btn-block" id="enviarPass">Enviar contraseña</button>
    			</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div id="errors_rfc"></div>
		</div>
	</div>
</form>
				
			