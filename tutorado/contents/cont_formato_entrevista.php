<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="titulo text-center">
		<p class="titles t">- FORMATO DE ENTREVISTA -</p>
	</div>
	<hr>
</div>

<br>

<div class="panel panel-success">
<div class="panel-heading">FORMATO DE ENTREVISTA</div>
	<div class="panel-body">
		<form class="formulario" nctype="multipart/form-data" method="post" action="" role="form">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
					<div class="thumbnail">
						<img src="" alt="" style="width: 200px; height:200px;"><br>
            <div class="caption">
							<label class="btn btn-primary" for="my-file-selector">
								<input name="imagen" id="my-file-selector" type="file" style="display:none;">
								Seleccionar imagen
							</label>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<label for="inpNombre">Nombre:</label>
					<input type="text" class="form-control" id="inpNombre" placeholder="Nombre">
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<label for="selCarrera">Carrera:</label>
					<select class="form-control" name="" id="selCarrera">
						<option value="">Seleccionar opción</option>
						<option value="">Ing. en Sistemas Computacionales</option>
						<option value="">Ing. Informática</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6 col-lg-3">
					<label for="inpEstatura">Estatura:</label>
					<input type="number" class="form-control" id="inpEstatura" placeholder="m." min="0">
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-3">
					<label for="inpPeso">Peso:</label>
					<input type="text" class="form-control" id="inpPeso" placeholder="Kg.">
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-3">
					<label for="selSexo">Sexo:</label>
					<select class="form-control" name="" id="selSexo">
						<option value="">Seleccionar opción</option>
						<option value="Femenino">Femenino</option>
						<option value="Masculino">Masculino</option>
					</select>
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-3">
					<label for="inpEdad">Edad:</label>
					<input type="number" class="form-control" id="inpEdad" placeholder="Edad" min="0">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					<label for="inpDate">Fecha nacimiento:</label>
					<input type="date" class="form-control" name="" id="inpDate">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					<label for="selCivil">Estado civil:</label>
					<select class="form-control" name="" id="selCivil">
						<option value="">Seleccionar opción</option>
						<option value="Soltero">Soltero</option>
						<option value="Casado">Casado</option>
						<option value="Otro">Otro</option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					<label for="selTrabaja">Trabaja:</label>
					<select class="form-control" name="" id="selTrabaja">
						<option value="">Seleccionar opción</option>
						<option value="Sí">Sí</option>
						<option value="No">No</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					<label for="inpLugNac">Lugar de nacimiento:</label>
					<input type="text" class="form-control" id="inpLugNac" placeholder="Lugar de nacimiento">
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<label for="inpDomicilio">Domicilio actual:</label>
					<input type="text" class="form-control" id="inpDomicilio" placeholder="Domicilio actual">
				</div>
				<div class="form-group col-sm-2 col-md-2 col-lg-2">
					<label for="inpCP">C. P.:</label>
					<input type="number" class="form-control" id="inpCP" placeholder="Código postal" min="0">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<label for="inpTelefono">Teléfono:</label>
					<div class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-3 col-md-3 col-lg-3">
								<input type="text" class="form-control" id="inpLada" placeholder="Lada">
							</div>
							<div class="col-sm-9 col-md-9 col-lg-9">
								<input type="text" class="form-control" id="inpTel" placeholder="Teléfono">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<label for="inpEmail">E-mail:</label>
					<input type="email" class="form-control" id="inpEmail" placeholder="E-mail" min="0">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<label for="selVivienda">Tipo de vivienda:</label>
					<select class="form-control" name="" id="selVivienda">
						<option value="">Seleccionar opción</option>
						<option value="Casa">Casa</option>
						<option value="Departamento">Departamento</option>
					</select>
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					<label for="selPropiedad">La casa o departamento donde vive es:</label>
					<select class="form-control" name="" id="selPropiedad">
						<option value="">Seleccionar opción</option>
						<option value="Propia">Propia</option>
						<option value="Rentada">Rentada</option>
						<option value="Prestada">Prestada</option>
						<option value="Otro">Otro</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6 col-lg-4">
					<label for="inpNumPer">Número de personas con las que vives:</label>
					<input type="number" class="form-control" id="inpNumPer" min="0">
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-3">
					<label for="selParentesco">Parentesco:</label>
					<select class="form-control" name="" id="selParentesco">
						<option value="">Seleccionar opción</option>
						<option value="Tutor">Tutor</option>
						<option value="Familiar">Familiar</option>
						<option value="Padres">Padres</option>
						<option value="Otro">Otro</option>
					</select>
				</div>
				<div class="form-group col-sm-12 col-md-12 col-lg-5">
					<label for="selNomPadre">Nombre del padre:</label>
					<input type="text" class="form-control" id="selNomPadre">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					<label for="inpEdadPadre">Edad:</label>
					<input type="number" class="form-control" id="inpEdadPadre" min="0">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					<label for="selTraPadre">Trabaja:</label>
					<select class="form-control" name="" id="selTraPadre">
						<option value="">Seleccionar opción</option>
						<option value="Sí">Sí</option>
						<option value="No">No</option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					<label for="inpProPadre">Profesión:</label>
					<input type="text" class="form-control" id="inpProPadre">
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<button type="button" class="btn btn-success btn-block" id="grdEntrevista">Guardar</button>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</form>
	</div>
</div>


<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4"></div>
	<div class="col-lg-4 text-right">
		<button class="btn btn-default" id="nextLinea" onclick="location='./linea_vida.php'" disabled>Siguiente anexo &rarr;				</button>
	</div>

	<script>
		//El botón siguiente anexo está deshabilitado hasta que los cambios son guardados
		$("#grdEntrevista").click(function(){
			$("#nextLinea").removeAttr("disabled");
		});
	</script>
</div>
