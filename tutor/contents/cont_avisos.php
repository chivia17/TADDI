<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>AVISOS</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="./contents/cargarAviso.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="cont_aviso" class="col-md-2 control-label">Contenido del aviso:</label>
				<div class="col-md-6">
				    <input type="text" class="form-control" id="cont_aviso" name="cont_aviso" placeholder="Contenido">
				</div>
			</div>
			<div class="form-group">
				<label for="fileDoc" class="col-sm-2 control-label">Documento a cargar</label>
				<div class="col-sm-10">
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput">
							<i class="glyphicon glyphicon-file fileinput-exists"></i>
							<span class="fileinput-filename"></span>
						</div>
						<span class="input-group-addon btn btn-default btn-file">
							<span class="fileinput-new" >Seleccionar documento</span>
							<span class="fileinput-exists">Cambiar</span>
							<input type="file" name="userfile" id="userfile">
						</span>
						<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar</a>
					</div>
				</div>
			</div>
			<div>
				<label for="cont_fecha" class="col-md-2 control-label">Fecha para borrar aviso</label><input id="datepicker" name="datepicker" type="text"/>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-3">
				    <button type="submit" class="btn btn-default" name="btnCargar">Enviar</button>
				</div>
			</div>
		</form>
	</div>
</div>
