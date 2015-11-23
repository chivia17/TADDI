<?php
$cve = $_SESSION["cveCar"];
require_once("comboBox_carreras.php");
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>ALTA GRUPO</b></h2>
	</div>
				<br>
				<form class="form-horizontal" role="form" method="post" action="../admin/contents/cont_alta_grupo_llenar.php">
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
  							<select name="cveCarrera" class="form-control">    
   					    		<option name="">-Seleccione una carrera-</option>
   					    		<?php
        							echo "<option name='"."$cve"."'>"."$cve"."</option>";
            			        ?>
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="sele" class="col-md-2 control-label">Tutor</label>
				    <div class="col-md-6">
				      <select name="idTutores" class="form-control">    
   					    		<option name="">-Seleccione un Tutor-</option>
   					    		<?php
        							include'conexion.php';
									$conexion = conectar();
									$query = "SELECT concat(nombreTutor,' ',apellPTutor,' ',apellMTutor) as nombreTutor,idTutores,cveCarrera FROM tutores WHERE cveCarrera='$cve'" or die("Error in the consult.." . mysqli_error($conexion));
									$result = $conexion->query($query);
									while($row = mysqli_fetch_array($result)) {
        								echo "<option value='".$row["idTutores"]."'>".$row["nombreTutor"]."</option>";
        							}
            			        ?>
  							</select>
				    </div>
				  </div>
				  	
				  <div class="form-group">
				    <label for="sel" class="col-md-2 control-label">Periodo</label>
				    <div class="col-md-6">
				    <select name="idPeriodo" class="form-control">
   					    		<option name="">-Seleccione un Periodo-</option>
   					    		<?php
        							$carreras=getPeriodos();
        							foreach ($carreras as $indice => $registro) {
        								echo "<option value='".$registro["idPeriodo"]."'>".$registro["periodo"]."</option>";
        							}
            			        ?>
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-3">
				      <button type="submit" class="btn btn-default">Agregar</button>
				    </div>
				  </div>
				</form>
	
</div>