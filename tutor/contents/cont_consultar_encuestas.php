<?php

@session_start();
include 'conexion.php';
$alumno = "";
$carrera = "";
$semestre = "";
$grupo = "";
$no_control="";
if(isset($_POST['noControl'])){
	$conexion = conectar();
	$query = "SELECT idAlumnos,nombreAlumno, apellPAlumno, apellMAlumno, cveCarrera,  NombreGrupo FROM alumnos INNER JOIN grupos ON alumnos.idGrupos = grupos.idGrupos WHERE idAlumnos = '".$_POST['noControl']."'";
	if($result = $conexion->query($query)){
		if($result->num_rows == 1){
			$array = mysqli_fetch_array($result);
			$alumno = $array['nombreAlumno']." ".$array['apellPAlumno']." ".$array['apellMAlumno'];
			$carrera = $array['cveCarrera'];
			$grupo = $array['NombreGrupo'];
			$no_control = $array['idAlumnos'];
		}
		else
			echo '<script language="javascript">alert("Alumno no registrado!");</script>';
	}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="titulo text-center">
		<h2><b>ENCUESTAS</b></h2>
	</div>
</div>
<br><br>
<form role="form" method="post" action = "consultar_encuestas.php">
	<div class="row">
		<div class="form-horizontal">
			<div class="form-group">
				<label for="noControl" class="col-sm-4 control-label">Numero de Control</label>
				<div class="col-sm-4">
				    <input type="text" class="form-control" id="noControl" name="noControl" placeholder="Número de control" value = <?php echo $no_control; ?>>
				</div>
				<div class="col-sm-2">
      				<button type="submit" class="btn btn-default btn-block" onclick = "buscar()">Buscar</button>
    			</div>
			</div>
		</div>
	</div>
<form/>
<form role = "form" method = "post" action = "">
	<hr>
	<br>
	<div class="row">
		<div class="form-horizontal">
  			<div class="form-group">
    			<label for="nomAlumno" class="col-sm-1 control-label">Alumno</label>
    			<div class="col-sm-11">
	      			<input type="text" class="form-control" id="nomAlumno" name="" readonly value = "<?php echo $alumno;  ?>">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="carAlumno" class="col-sm-1 control-label">Carrera</label>
    			<div class="col-sm-6">
      				<input type="text" class="form-control" id="carAlumno" name="" readonly value = "<?php echo $carrera; ?>">
    			</div>
    			<label for="gpoAlumno" class="col-sm-1 control-label">Grupo</label>
    			<div class="col-sm-2">
      				<input type="text" class="form-control" id="gpoAlumno" name="" readonly value = "<?php echo $grupo; ?>">
    			</div>
  			</div>
		</div>
	</div>
	<hr>
	<br>
	<div class="row">
		<div class="form-group">
			<div class="panel panel-success">
	  			<div class="panel-heading">Encuestas</div>
	 				<table class="table">
	 					<tr>
 							<td><strong>Encuesta</strong></td>
  							<td class="text-center"><strong>Ver</strong></td>
						</tr>
						<tr>
					  		<td>Formato de entrevista</td>
						  	<td class="text-center"><a href="../pdf/pdf_blanco_tutor.php?nc=<?php echo $no_control;?>&estado=1"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Línea de vida</td>
							<td class="text-center"><a href="../pdf/pdf_blanco_tutor.php?nc=<?php echo $no_control;?>&estado=2"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Análisis FODA</td>
							<td class="text-center"><a href="../pdf/pdf_blanco_tutor.php?nc=<?php echo $no_control;?>&estado=3"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Encuesta sobre las Habilidades de Estudio</td>
							<td class="text-center"><a href="../pdf/pdf_blanco_tutor.php?nc=<?php echo $no_control;?>&estado=4"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Inventario sobre Estilos de Aprendizaje</td>
							<td class="text-center"><a href="../pdf/pdf_blanco_tutor.php?nc=<?php echo $no_control;?>&estado=5"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Test de Autoestima</td>
							<td class="text-center"><a href="../pdf/pdf_blanco_tutor.php?nc=<?php echo $no_control;?>&estado=6"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Test de Asertividad</td>
							<td class="text-center"><a href="../pdf/pdf_blanco_tutor.php?nc=<?php echo $no_control;?>&estado=7"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
						<tr>
							<td>Rúbrica para evaluar el desempeño del tutor</td>
							<td class="text-center"><a href="../pdf/pdf_blanco_tutor.php?nc=<?php echo $no_control;?>&estado=8"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
	  				</table>
			</div>
		</div>
	</div>

	<div class="row">
		<h4>Notas sobre las encuestas</h3>
		<textarea class="form-control" rows="3"></textarea><br>
		<div class="text-right">
			<button type="submit" class="btn btn-default">Guardar notas</button>
		</div>
	</div>


</form>
