<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="titulo text-center">
		<h2><b>ENCUESTAS</b></h2>
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
	<hr>	
	<br>
	<div class="row">
		<div class="form-horizontal">
  			<div class="form-group">
    			<label for="nomAlumno" class="col-sm-1 control-label">Alumno</label>
    			<div class="col-sm-11">
	      			<input type="text" class="form-control" id="nomAlumno" name="" readonly>
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="carAlumno" class="col-sm-1 control-label">Carrera</label>
    			<div class="col-sm-6">
      				<input type="text" class="form-control" id="carAlumno" name="" readonly>
    			</div>
    			<label for="semAlumno" class="col-sm-1 control-label">Semestre</label>
    			<div class="col-sm-1">
      				<input type="text" class="form-control" id="semAlumno" name="" readonly>
    			</div>
    			<label for="gpoAlumno" class="col-sm-1 control-label">Grupo</label>
    			<div class="col-sm-2">
      				<input type="text" class="form-control" id="gpoAlumno" name="" readonly>
    			</div>
  			</div>
		</div>
	</div>
	<hr>
	<br>
	<div class="row">
		<div class="form-group">
			<div class="panel panel-success">
	  			<div class="panel-heading">Encuestas</div>
	 				<table class="table">
	 					<tr>
 							<td><strong>Encuesta</strong></td>
  							<td class="text-center"><strong>Ver</strong></td>
						</tr>
						<tr>
					  		<td>Formato de entrevista</td>
						  	<td class="text-center"><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Línea de vida</td>
							<td class="text-center"><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Análisis FODA</td>
							<td class="text-center"><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
	  				</table>
			</div>
		</div>
	</div>
	
	<div class="row">
		<h4>Notas sobre las encuestas</h3>
		<textarea class="form-control" rows="3"></textarea><br>
		<div class="text-right">
			<button type="submit" class="btn btn-default">Guardar notas</button>
		</div>
	</div>
	
	
</form>

