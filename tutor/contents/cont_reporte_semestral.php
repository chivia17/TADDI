<?php
$cve = $_SESSION["rfc"];
<<<<<<< HEAD
$carrera=$_SESSION["cveCar"];
=======
>>>>>>> origin/master
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="text-center">
		<p class="titles t">- REPORTE SEMESTRAL -</p>
	</div>
	<hr>
</div>

<br><br>		
<form role="form" method="post" action="">
	<div class="row">
		<div class="form-horizontal">
  			<div class="form-group">
<<<<<<< HEAD
    			
=======
    			<label for="selGrupo" class="col-sm-2 control-label">Grupo</label>
    			<div class="col-sm-7">
	      			<select required name="selGrupo" class="form-control" id="grupo">
                		<option value="">--Selecciona grupo--</option>
                		<?php
										include'conexion.php';
										$conexion = conectar();
										$query = "SELECT idGrupos, NombreGrupo FROM grupos WHERE idTutores='$cve'" or die("Error in the consult.." . mysqli_error($conexion));
										$result = $conexion->query($query);
										while($row = mysqli_fetch_array($result))
										{
											echo "<option value='".$row["idGrupos"]."'>".$row["NombreGrupo"]."</option>";
										 }
										?>
  					</select><br>
    			</div>
    			<div class="col-sm-2">
      				<button type="button" class="btn btn-primary btn-block" id="reporte">Ver listado</button>
    			</div>
>>>>>>> origin/master
  			</div>
		</div>
		<hr>
	</div>	
		
	<br>
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">Reporte</div>
			<div class="table-responsive">
<<<<<<< HEAD
				<table class="table table-bordered table-hover">
					<tr>
						<th class="text-center" colspan="7">REPORTE SEMESTRAL DEL TUTOR</td>
					</tr>
					<tr>
						<td colspan="7">Instituto Tecnológico de Morelia</td>
					</tr>
					<?php                					
							        	$servidor = "localhost";
							        	$basedatos = "mydb";
							        	$usuario = "root";
							        	$contrasena = "";

								        $conexion = new PDO("mysql:host=$servidor;dbname=$basedatos",
							                            $usuario,
							                            $contrasena,
							                            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

							    	    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
							        	
							    	$resp=false;
							        $consulta="Select concat(nombreTutor,' ',apellPTutor,' ',apellMTutor) as nombre,idTutores from Tutores where idTutores='$cve'";
							        $sentencia=$conexion->prepare($consulta);
							        try {
							        if(!$sentencia->execute()){
							            print_r($sentencia->errorInfo());
							            echo "<script>alert('Error en la consulta')</script>";
							        }
							        $resp = $sentencia->fetchAll();
							        if(!$resp){
        								echo "<script>alert('$cve')</script>";
							        	echo "<script>alert('Resp vacio')</script>";
							        }							       
							        $sentencia->closeCursor();
							        }
							        catch(PDOException $e){
							            echo "Error al ejecutar la sentencia: \n";
							            print_r($e->getMessage());
							        }
							        echo "<tr>";				
							        echo "<td colspan=\"2\">Nombre del tutor:</td>	";			
									foreach ($resp as $indice => $registro) {        								
        								echo "<td colspan=\"3\">".$registro["nombre"]."</td>";
        							}        							
        							echo "<td colspan=\"1\">Fecha:</td>";
									echo "<td colspan=\"1\">";
									echo "<input type=\"date\" class=\"form-control\" name=\"fecReporte\">";
									echo "</td>";
									echo "</tr>";
							?>
							<?php
									$servidor = "localhost";
							        	$basedatos = "mydb";
							        	$usuario = "root";
							        	$contrasena = "";

								        $conexion = new PDO("mysql:host=$servidor;dbname=$basedatos",
							                            $usuario,
							                            $contrasena,
							                            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

							    	    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
							        	
							    	$resp=false;
							        $consulta="select DescricionRespuesta from (select idAlumnos from alumnos inner join grupos on alumnos.idGrupos=grupos.idGrupos where grupos.cveCarrera='$carrera') x inner join
respuestas on x.idAlumnos=respuestas.idAlumnos where idAnexo=9 and idSubanexos=9;";
							        $sentencia=$conexion->prepare($consulta);
							        try {
							        if(!$sentencia->execute()){
							            print_r($sentencia->errorInfo());
							            echo "<script>alert('Error en la consulta')</script>";
							        }
							        $resp = $sentencia->fetchAll();
							        if(!$resp){
        								echo "<script>alert('$cve')</script>";
							        	echo "<script>alert('Resp vacio')</script>";
							        }							       
							        $sentencia->closeCursor();
							        }
							        catch(PDOException $e){
							            echo "Error al ejecutar la sentencia: \n";
							            print_r($e->getMessage());
							        }
									echo "<tr>";
									echo "<td colspan=\"2\">Programa educativo:</td>";
									echo "<td colspan=\"1\">".$carrera." </td>";
									echo "<td colspan=\"1\">Grupo:</td>";
									echo "<td colspan=\"1\">Todos los grupos</td>";
									echo "<td colspan=\"1\">Hora:</td>";
									echo "<td colspan=\"1\" contenteditable=\"false\"></td>";
									echo "</tr>";

									echo "<tr>";
									echo "<th>No.</th>";
									echo "<th>No. de control</th>";
									echo "<th>Lista de estudiantes</th>";
									echo "<th>Calificación</th>";
									echo "<th>% Asistencia</th>";
									echo "<th>Área canalizada</th>";
									echo "<th>Observaciones</th>";
									echo "</tr>";
									$cont=1;
									foreach ($resp as $indice => $registro) {        								
        								//echo "<td colspan=\"3\">".$registro["nombre"]."</td>";
        								if(($cont/5)==0||$cont==1){
        									echo "<tr>";	
        									echo "<td>".$cont."</td>";
        								}										
										echo "<td>".$registro["DescricionRespuesta"]."</td>";
										if($cont/6==0){
        									echo "<7tr>";	
        								}  
										$cont=$cont+1;
        							}				
        							if(isset($_POST['nuevo'])){
        								echo "<tr>";
        								echo "<td></td>";
        								echo "<td></td>";
        								echo "<td></td>";
        								echo "<td></td>";
        								echo "<td></td>";
        								echo "<td></td>";
        								echo "</tr>";
        							}					
						?>									
					<tr>
						<td colspan="2">Observaciones:</td>
						<td colspan="5" contenteditable="false"></td>
					</tr>
=======
				<table class="table table-bordered table-hover" id="table1">
>>>>>>> origin/master
				</table>
			</div>
		</div>
	</div>
	
	<br>
	<div class="row">
		<div class="col-xs-6 col-sm-3">
			<button type="submit" class="btn btn-primary btn-block">Guardar cambios</button><br>
		</div>
		<div class="col-xs-6 col-sm-3">
			<button type="submit" class="btn btn-danger btn-block">Cancelar</button><br>
		</div>
		<div class="col-xs-6 col-sm-3">
			<button type="submit" class="btn btn-info btn-block">Generar PDF</button>
		</div>
		<div class="col-xs-6 col-sm-3">
			<button type="submit" class="btn btn-warning btn-block" name="nuevo">Imprimir</button>
		</div>
	</div>
	<br>
	
</form>