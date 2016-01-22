<?php
require_once("comboBox_carreras.php");
?>

<div id="contenido">
	<div class="titulo text-center">
		<h2><b>EVALUACIÓN TUTOR</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" action="" method="">
			<div class="form-group">
				<label for="selectCarrera" class="col-sm-2 control-label">Carrera</label>
				<div class="col-sm-10">
  					<select required id="selectCarrera" name="selectCarrera" class="form-control">
   						<option value="">Seleccion Carrera</option>
							<?php
								$carreras=getCarreras();
								foreach ($carreras as $indice => $registro) {
									echo "<option value='".$registro["cveCarrera"]."'>".$registro["NombreCarrera"]."</option>";
								}
										?>
     				</select>
				</div>
			</div>
			<div class="form-group">
				<label for="selectTutor" class="col-sm-2 control-label">Tutor</label>
				<div class="col-sm-10">
  					<select required name="selectTutor" class="form-control" id="selectTutor">
  					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="button" class="btn btn-default" name="btnBuscar" id="btnBET">Buscar</button>
				</div>
			</div>
		</form>
		<br><br>
			<div id="grafica"></div>
	</div>
</div>
