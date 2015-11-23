<?php
require_once("comboBox_carreras.php");
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>ALTA GRUPO</b></h2>
	</div>
				<br>
				<form class="form-horizontal" role="form" method="post" action="../admin/contents/cont_alta_grupo_llenar.php"
				onsubmit="return validar_alta_gru('nomgru','horagru');">
				  <div class="form-group">
				    <label for="idgru" class="col-md-2 control-label">Id Grupo</label>
				    <div class="col-md-6">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="idgru" name="idgru" placeholder="id" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nomgru" class="col-md-2 control-label">Nombre</label>
				    <div class="col-md-6">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="nomgru" name="nomgru" placeholder="Nombre" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="salgru" class="col-md-2 control-label">Salón</label>
				    <div class="col-md-6">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="salgru" name="salgru" placeholder="Salón" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="horagru" class="col-md-2 control-label">Hora</label>
				    <div class="col-md-6">
				      <input type="text" class="form-control" id="horagru" name="horagru" placeholder="HORA" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="seleccar" class="col-md-2 control-label">Carrera</label>
				    <div class="col-md-6">
  							<select required name="cveCarrera" class="form-control">    
   					    		<option value="" name="">-Seleccione una carrera-</option>
   					    		<?php
        							$carreras=getCarreras();
        							foreach ($carreras as $indice => $registro) {
        								echo "<option name='".$registro["cveCarrera"]."'>".$registro["cveCarrera"]."</option>";
        							}
            			        ?>
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="sele" class="col-md-2 control-label">Tutor</label>
				    <div class="col-md-6">
				      <select required name="idTutores" class="form-control">    
   					    		<option value="" name="">-Seleccione un Tutor-</option>
   					    		<?php
        							$carreras=getTutores();
        							foreach ($carreras as $indice => $registro) {
        								echo "<option value='".$registro["idTutores"]."'>".$registro["nombreTutor"]."</option>";
        							}
            			        ?>
  							</select>
				    </div>
				  </div>
				  	
				  <div class="form-group">
				    <label for="sel" class="col-md-2 control-label">Periodo</label>
				    <div class="col-md-6">
				    <select required name="idPeriodo" class="form-control">
   					    		<option value="" name="">-Seleccione un Periodo-</option>
   					    		<?php
        							$carreras=getPeriodos();
        							foreach ($carreras as $indice => $registro) {
        								echo "<option value='".$registro["idPeriodo"]."'>".$registro["periodo"]."</option>";
        							}
            			        ?>
  							</select>
				    </div>
				  </div>
				  <div class="row">
			  		<div class="col-sm-12">
			  			<div id="errors_gru"></div>
			  		</div>
		  		</div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-3">
				      <button type="submit" class="btn btn-default">Agregar</button>
				    </div>
				  </div>
				</form>
	
</div>