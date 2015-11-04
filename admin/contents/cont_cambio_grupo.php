<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CAMBIO DE GRUPO</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<label for="clave" class="col-md-2 control-label">Numero de Control</label>
				<div class="col-md-2">
				    <input type="text" class="form-control" id="nc" name="nc" placeholder="NC">
				</div>
				<div class="col-md-2">
				    <button type="submit" class="btn btn-default">Buscar</button>
				</div>
			</div>
			<div class="form-group">
				<div class="panel panel-success">
	  				<div class="panel-heading">Alumno</div>
	 					<table class="table">
	 						<tr>
 								<td><strong>Id</strong></td>
  								<td><strong>Nombre</strong></td>
 								<td><strong>Carrera</strong></td>
							</tr>
							<tr>
							  <td>12345</td>
							  <td>Zulma</td>
							  <td>Ingenieria en Sistemas Computacionales</td>
							</tr>
							 
							<tr>
							  <td>12346</td>
							  <td>Yaneth</td>
							  <td>Ingenieria Industrial</td>
							</tr>
	  					</table>
				</div>
			</div>
			<div class="form-group">
				    <label for="seleccar" class="col-md-2 control-label">Nuevo Grupo</label>
				    <div class="col-md-6">
				     	<form action="" method="post">
  							<select name="programa" class="form-control">    
   					    		<option value="ing_sis">Ingenieria en Sistemas Computacionales</option>
     				    		<option value="ing_ind">Ingenieria Industrial</option>
       							<option value="ing_bio">Ingenieria Bioquimica</option>
  							</select>
						</form>
				    </div>
				  </div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
				    <button type="submit" class="btn btn-default">Cambiar</button>
				</div>
			</div>
		</form>
	</div>
</div>