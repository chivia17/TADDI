<?php
require_once("comboBox_carreras.php");
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CONSTANCIA GRUPO</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
				  <div class="form-group">
				    <label for="seleccar" class="col-md-2 control-label">Carrera</label>
				    <div class="col-md-6">
  							<select required name="programa" class="form-control" id="prog">
										<?php
		                   $carreras=getCarreras();
											   echo "<option value=''>--Selecciona Carrera</option>";
		                       foreach ($carreras as $indice => $registro) {
		                          echo "<option value='".$registro["cveCarrera"]."'>".$registro["NombreCarrera"]."</option>";
		                        }
		                ?>
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="sel" class="col-md-2 control-label">Grupo</label>
				    <div class="col-md-6">
  							<select required name="periodo" class="form-control" id="grup">
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-3">
				      <button type="submit" class="btn btn-default">Generar</button>
				    </div>
				  </div>
				</form>
	</div>
</div>
