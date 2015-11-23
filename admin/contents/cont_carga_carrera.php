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
  					<select required name="cveCarrera" class="form-control cboton">    
   					    		<option value="" name="">-Seleccione una carrera-</option>
   					    		<?php
                    $a=actC();
                    function actC(){
        							$carreras=getCarreras();
        							foreach ($carreras as $indice => $registro) {
        								echo "<option name='".$registro["cveCarrera"]."'>".$registro["cveCarrera"]."</option>";
                      }
        							}
            			   ?>
  							</select>
				</div>
			</div>
			<div class="form-group">
				<label for="selectPeriodo" class="col-sm-2 control-label">Grupo</label>
				<div class="col-sm-4">
  					<select required name="idGrupos" class="form-control cboton2">    
   						<option value="">-Seleccione un grupo-</option>   						
  					</select>
				</div>
			</div>			
			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-6">
      				<button type="submit" class="btn btn-default">Imprimir</button>
    			</div>
  			</div>
		</form>
	</div>
</div>