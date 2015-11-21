<div class="row">
	<div class="titulo text-center">
		<h2><b>ALTA ALUMNO</b></h2>
	</div>
</div>

<br><br>
<form class="form-horizontal" role="form" action="">
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
	<div class="form-group">
		<div class="panel panel-success">
	  		<div class="panel-heading">Datos del alumno</div>
	 		<table class="table">
				<tr>
 					<td><strong>Nombre</strong></td>
  					<td><strong>Carrera</strong></td>
  					<td><strong>Semestre</strong></td>
  					<td><strong>Grupo</strong></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
	  		</table>
		</div>
	</div>
	<hr>
	<br>	
	<div class="row">
		<div class="form-horizontal">
  			<div class="form-group">
    			<label for="nvoGrupo" class="col-sm-2 control-label">Nuevo grupo</label>
    			<div class="col-sm-7">
	      			<select name="nvoGrupo" class="form-control" id="nvoGrupo">
                		<option>--Selecciona grupo--</option>
  					</select>
    			</div>
    			<div class="col-sm-2">
      				<button type="submit" class="btn btn-default btn-block">Cambiar</button>
    			</div>
  			</div>
		</div>
	</div>	
</form>

