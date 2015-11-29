<div id="contenido">
	<div class="titulo text-center">
		<h2><b>CARGAR DOCUMENTOS</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" action="./contents/cargarArchivo.php" method="POST" enctype="multipart/form-data">
  			<!--div class="form-group">
    			<label for="txtDesc" class="col-sm-2 control-label">Descripción</label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" name="textDesc">
    			</div>
  			</div-->
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
							<input type="file" name="userfile" id="userfile" required>
						</span>
						<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar</a>
					</div>
				</div>
			</div>
  			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-default" name="btnCargar">Cargar documento</button>
    			</div>
  			</div>
		</form>
	</div>
</div>	