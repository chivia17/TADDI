<?php
require_once("comboBox_carreras.php");
?>
<div class="container" id="contenido">
	<div class="titulo text-center">
		<h2><b>CARGAS POR CARRERA</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" action="" method="">
  			<div class="form-group">
				<label for="selectCarrera" class="col-sm-2 control-label">Carrera</label>
				<div class="col-sm-8">
  					<select required name="cveCarrera" class="form-control cboton" id="selCTCA">
   					    		<option value="" name="">-Seleccione una carrera-</option>
										<?php
											 $carreras=getCarreras();
											 echo "<option value=''>--Selecciona Carrera--</option>";
													 foreach ($carreras as $indice => $registro) {
															echo "<option value='".$registro["cveCarrera"]."'>".$registro["NombreCarrera"]."</option>";
														}
										?>
  							</select>
				</div>
			</div>
			<div class="panel panel-success">
					<div class="panel-heading">Grupos de tutoría</div>
				<table class="table" id="table1">
					</table>
			</div>
		</form>
	</div>
</div>
