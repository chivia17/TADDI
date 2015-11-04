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
		<form action="./contents/uploader.php" method="post" enctype="multipart/form-data"> 
   			 
   			<input type="hidden" name="MAX_FILE_SIZE" value="1000000"> 
   			<br> 
   			<br> 
   			<b>Enviar un nuevo archivo: </b> 
   			<br> 
   			<input name="userfile" type="file"> 
   			<br> 
   			<input type="submit" value="Enviar"> 
			</form>
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