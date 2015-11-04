<?php
require_once("comboBox_carreras.php");
?>
<div class="container" id="contenido ">
	<div class="titulo text-center">
					<h2><b>ALTA COORDINADOR</b></h2>
			</div>
			<div class="container">
				<br>
				<form class="form-horizontal" role="form" method="post" action="./contents/cont_alta_coordinador_llenar.php" 
				onsubmit="return validar_alta_coor('rfcc','correoc','nomcor','apepacor','apemacor');">
				  <div class="form-group">
				    <label for="rfc" class="col-md-2 control-label">RFC</label>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				       type="text" class="form-control" id="rfcc" name="rfc" placeholder="rfc" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nomcor" class="col-md-2 control-label">Nombre</label>
				    <div class="col-md-4">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				       type="text" class="form-control" id="nomcor" name="nomcor" placeholder="Nombre" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="apepacor" class="col-md-2 control-label">Apellido Paterno</label>
				    <div class="col-md-4">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				       type="text" class="form-control" id="apepacor" name="apepacor" placeholder="Apellido Paterno" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="apemacor" class="col-md-2 control-label">Apellido Materno</label>
				    <div class="col-md-4">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				       type="text" class="form-control" id="apemacor" name="apemacor" placeholder="Apellido Materno" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="passcor" class="col-md-2 control-label">Contraseña</label>
				    <div class="col-md-4">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				       type="text" class="form-control" id="passcor" name="passcor" placeholder="Contraseña" required>
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="correoc" class="col-md-2 control-label">Correo</label>
				    <div class="col-md-3">
				      <input style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();"
				       type="text" class="form-control" id="correoc" name="correoc" placeholder="Correo" required>
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
				  </div>
				  <div class="row">
			  		<div class="col-sm-12">
			  			<div id="errors_coor"></div>
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