<div class="contenido container">
	<div class="container titulo">
					<h2><b>ALTA COORDINADOR</b></h2>
			</div>
			<div class="container">
				<br>
				<form class="form-horizontal" role="form" method="post" action="">
				  <div class="form-group">
				    <label for="idcor" class="col-md-2 control-label">Id Coordinador</label>
				    <div class="col-md-2">
				      <input type="text" class="form-control" id="idcor" name="idcor" placeholder="id">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="rfc" class="col-md-2 control-label">RFC</label>
				    <div class="col-md-3">
				      <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nomcor" class="col-md-2 control-label">Nombre</label>
				    <div class="col-md-4">
				      <input type="text" class="form-control" id="nomcor" name="nomcor" placeholder="Nombre">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="apepacor" class="col-md-2 control-label">Apellido Paterno</label>
				    <div class="col-md-4">
				      <input type="text" class="form-control" id="apepacor" name="apepacor" placeholder="Apellido Paterno">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="apemacor" class="col-md-2 control-label">Apellido Materno</label>
				    <div class="col-md-4">
				      <input type="text" class="form-control" id="apemacor" name="apemacor" placeholder="Apellido Materno">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="passcor" class="col-md-2 control-label">Contraseña</label>
				    <div class="col-md-4">
				      <input type="text" class="form-control" id="passcor" name="passcor" placeholder="Contraseña">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="seleccar" class="col-md-2 control-label">Carrera</label>
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
				      <button type="submit" class="btn btn-default">Agregar</button>
				    </div>
				  </div>
				</form>
			</div>	
</div>