
<div class="row">
	<div class="titulo text-center">
		<h2><b>EXPEDIENTE</b></h2>
	</div>
</div>

<br><br>		
<form role="form" method="post" action="">
	<div class="row">
		<div class="form-horizontal">
			<div class="form-group">
				<label for="noControl" class="col-sm-4 control-label">Numero de Control</label>
				<div class="col-sm-4">
				    <input type="text" class="form-control" id="noControl" name="noControl" placeholder="Número de control">
				</div>
				<div class="col-sm-2">
      				<button type="submit" class="btn btn-default btn-block">Buscar</button>
    			</div>
			</div>
		</div>
	</div>
</form>
	<hr>
	<br>
	<div class="row">
		<div class="panel panel-success">
	  		<div class="panel-heading">
	  			<h4 class="panel-title">Notas sobre las encuestas</h4>	  		
			</div>
			<div class="panel-body">
				<textarea class="form-control" rows="10" id="txaNotas" readonly></textarea><br>
				<div class="text-right" id="divModNotas">
					<input type="submit" class="btn btn-default" id="btnModNotas" value="Modificar">
				</div>
				<div class="text-right" id="divGrdCambios">
					<input type="submit" class="btn btn-primary" id="btnGrdCambios" value="Guardar cambios">
					<input type="submit" class="btn btn-default" id="btnCanCambios" value="Cancelar">
				</div>
				<script type="text/javascript" src="./js/jquery.js"></script>
			</div>
		</div>
	</div>


