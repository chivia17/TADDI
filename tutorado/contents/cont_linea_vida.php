<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="titulo text-center">
		<p class="titles t">- LÍNEA DE LA VIDA -</p>
	</div>
	<hr>
</div>

<br>

<div class="panel panel-success">
	<div class="panel-heading">LA LÍNEA DE LA VIDA</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-2 col-lg-2 text-center"><strong>Edad</strong></div>
			<div class="col-xs-5 col-lg-5 text-center"><strong>Éxitos, Logros, Alcances, etc.</strong></div>
			<div class="col-xs-5 col-lg-5 text-center"><strong>Fracasos, Tropiezos, Dificultades, Limitaciones, etc.</strong></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-2 col-lg-2 text-center">6 años</div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="e1" cols="60" rows="5"></textarea></div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="f1" cols="60" rows="5"></textarea></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-2 col-lg-2 text-center">12 años</div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="e2" cols="60" rows="5"></textarea></div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="f2" cols="60" rows="5"></textarea></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-2 col-lg-2 text-center">15 años</div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="e3" cols="60" rows="5"></textarea></div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="f3" cols="60" rows="5"></textarea></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-2 col-lg-2 text-center">18 años</div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="e4" cols="60" rows="5"></textarea></div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="f4" cols="60" rows="5"></textarea></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-2 col-lg-2 text-center">21 años</div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="e5" cols="60" rows="5"></textarea></div>
			<div class="col-xs-5 col-lg-5"><textarea class="form-control" name="" id="f5" cols="60" rows="5"></textarea></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<button type="button" class="btn btn-success btn-block" id="grdLinea">Guardar</button>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4"></div>
	<div class="col-lg-4 text-right">
		<button class="btn btn-default" id="nextAnalisis" onclick="location='./analisis_foda.php'" disabled>Siguiente anexo &rarr;			</button>
	</div>
	<script>
		//El botón siguiente anexo está deshabilitado hasta que los cambios son guardados
		$("#grdLinea").click(function(){
			$("#nextAnalisis").removeAttr("disabled");
		});
	</script>
</div>
