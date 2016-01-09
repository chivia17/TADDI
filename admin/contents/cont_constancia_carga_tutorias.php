<?php
require_once("comboBox_carreras.php");
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CARGA DE TUTORIAS</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="" >
			<div class="form-group">
			 <label for="seleccar" class="col-md-2 control-label">Carrera</label>
			 <div class="col-md-6">
					 <select required name="programa" class="form-control" id="selCTCA">
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
