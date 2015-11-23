<div class="text-center" id="contenido">
	<div class="titulo text-center">
		<h2><b>UTILERIAS</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" action="./contents/cont_uti_resp.php">
  			<div class="form-group">
				<label for="respaldarBD" class="col-sm-4 control-label">Respaldar base de datos</label>
				<div class="col-sm-offset-2 col-sm-6">
      				<button type="submit" class="btn btn-default">Respaldar</button>
    			</div>
			</div>
					
		</form>
		<hr>
		<form class="form-horizontal" action="./contents/uploader.php" method="post" enctype="multipart/form-data"> 
   			<div class="form-group">
   				<br>
				<label for="cargarBD" class="col-sm-4 control-label">Cargar base de datos</label>
				<div class="col-sm-offset-2 col-sm-6">
      				<input type="hidden" name="MAX_FILE_SIZE" value="1000000"> 
   					<input name="userfile" type="file">
   					<button type="submit" class="btn btn-default">cargar</button>
    			</div>
			</div> 
			</form>
		<hr>
		<form class="form-horizontal" action="./contents/cargabd.php">
			<div class="form-group">
				<label for="restaurarBD" class="col-sm-4 control-label">Restaurar base de datos</label>
				<div class="col-sm-offset-2 col-sm-6">
      				<button type="submit" class="btn btn-default">Restaurar</button>
    			</div>
			</div>
		</form>
			<hr>
		<form class="form-horizontal" action="./contents/cont_utilerias_comp.php">			
			<div class="form-group">
				<label for="compactarBD" class="col-sm-4 control-label">Compactar base de datos</label>
				<div class="col-sm-offset-2 col-sm-6">
      				<button type="submit" class="btn btn-default">Compactar</button>
    			</div>
			</div>
		</form>
	</div>
</div>