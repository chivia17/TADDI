<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>ALTA GRUPO</b></h2>
	</div>
				<br>
				<form class="form-horizontal" role="form" method="post" action="">
				  <div class="form-group">
				    <label for="idgru" class="col-md-2 control-label">Id Grupo</label>
				    <div class="col-md-6">
				      <input type="text" class="form-control" id="idgru" name="idgru" placeholder="id">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nomgru" class="col-md-2 control-label">Nombre</label>
				    <div class="col-md-6">
				      <input type="text" class="form-control" id="nomgru" name="nomgru" placeholder="Nombre">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="salgru" class="col-md-2 control-label">Salón</label>
				    <div class="col-md-6">
				      <input type="text" class="form-control" id="salgru" name="salgru" placeholder="Salón">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="horagru" class="col-md-2 control-label">Hora</label>
				    <div class="col-md-6">
				      <input type="text" class="form-control" id="horagru" name="horagru" placeholder="Hora">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="seleccar" class="col-md-2 control-label">Carrera</label>
				    <div class="col-md-6">
  							<select name="programa" class="form-control">    
   					    		<option value="ing_sis">Ingenieria en Sistemas Computacionales</option>
     				    		<option value="ing_ind">Ingenieria Industrial</option>
       							<option value="ing_bio">Ingenieria Bioquimica</option>
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="sele" class="col-md-2 control-label">Tutor</label>
				    <div class="col-md-6">
				      <select name="tutor" class="form-control">    
   					    		<option value="ing_sis">Zulma</option>
     				    		<option value="ing_ind">Yaneth</option>
       							<option value="ing_bio">Gabriela</option>
  							</select>
				    </div>
				  </div>
				  	
				  <div class="form-group">
				    <label for="sel" class="col-md-2 control-label">Periodo</label>
				    <div class="col-md-6">
  							<select name="periodo" class="form-control">    
   					    		<option value="e_j">Enero-Junio</option>
     				    		<option value="a_d">Agosto-Diciembre</option>
       							<option value="v">Verano</option>
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-3">
				      <button type="submit" class="btn btn-success">Agregar</button>
				    </div>
				  </div>
				</form>
	
</div>