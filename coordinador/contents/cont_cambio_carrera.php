<?php
$cve = $_SESSION["cveCar"];
 ?>
 <div class="contenido container">
 	<div class="titulo text-center">
 		<h2><b>CAMBIO DE CARRERA</b></h2>
 	</div>
 	<div class="container">
 		<br>
 		<form class="form-horizontal" role="form" action="">
 			<div class="form-group">
 				<label for="clave" class="col-md-2 control-label">Numero de Control</label>
 				<div class="col-md-2">
 				    <input type="text" class="form-control" id="nc" name="nc" placeholder="NC" required>
 				</div>
 				<div class="col-md-2">
 				    <button type="button" class="btn btn-default buscar" id="busc">Buscar</button>
 				</div>
 			</div>
 			<div class="form-group">
 				<div class="panel panel-success">
 	  				<div class="panel-heading" id="alumno">Alumno</div>
 						<table class="table" id="table">
 	  					</table>
 				</div>
 			</div>
 			<div>
 			<div class="form-group">
 				    <label for="seleccar" class="col-md-2 control-label">Nueva Carrera</label>
 				    <div class="col-md-6">
 				     	<form action="" method="post">
 								<select name="programa" class="form-control" id="prog">
                 <?php
                 include'conexion.php';
                 $conexion = conectar();
                 $query = "SELECT * FROM carrera WHERE cveCarrera='$cve'" or die("Error in the consult.." . mysqli_error($conexion));
                 $result = $conexion->query($query);
                 while($row = mysqli_fetch_array($result))
                 {
                   echo "<option value=''>--Selecciona Carrera--</option>";
                   echo "<option value='".$row["cveCarrera"]."'>".$row["NombreCarrera"]."</option>";
                  }
                 ?>
   							</select>
 						</form>
 				    </div>
 				  </div>
 					<div class="form-group">
 								<label for="seleccar" class="col-md-2 control-label">Grupo</label>
 								<div class="col-md-6">
 									<form action="" method="post">
               			<select name="grup" class="form-control" id="grup">
 										</select>
 								</form>
 								</div>
 							</div>
 				</div>
 			<div class="form-group">
 				<div class="col-lg-offset-2 col-lg-10" id="res">
 				    <button type="submit" class="btn btn-default cambiar" id="camb">Cambiar</button>
 				</div>
 			</div>
 		</form>
 	</div>
 </div>
