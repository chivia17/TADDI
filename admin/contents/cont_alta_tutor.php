<?php
require_once("comboBox_carreras.php");
?>
<div id="contenido">
	<div class="titulo text-center">
					<h2><b>ALTA TUTOR</b></h2>
			</div>
			<div class="container">
				<br>
				<form class="form-horizontal" role="form" method="post" action="./contents/cont_alta_tutor_llenar.php">
				  <div class="form-group">
				    <label for="idcor" class="col-md-2 control-label">Id Tutor</label>
				    <div class="col-md-2">
				      <input type="text" class="form-control" id="idcor" name="idcor" placeholder="id">
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
  							<select name="cveCarrera" class="form-control">    
   					    		<option name="">-Seleccione una carrera-</option>
   					    		<?php
        							$carreras=getCarreras();
        							foreach ($carreras as $indice => $registro) {
        								echo "<option name='".$registro["cveCarrera"]."'>".$registro["cveCarrera"]."</option>";
        							}
            			        ?>
  							</select>
				  </div>	
				  <div class="form-group container">
				  	<center>
					  	<input type="radio" name="group1" value="si" checked> Activo
					    <input type="radio" name="group1" value="no"> No Activo
				    </center>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-3">
				      <button type="submit" class="btn btn-default">Agregar</button>
				    </div>
				  </div>
				</form>
			</div>
</div>