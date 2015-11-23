<?php
$cve=$_SESSION["cveCar"];
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>BAJA ALUMNO</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<label for="clave" class="col-md-2 control-label">Numero de Control</label>
				<div class="col-md-2">
				    <input type="text" class="form-control" id="nc" name="nc" placeholder="NC">
				</div>
			</div>
		<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
				    <button type="submit" class="btn btn-default"name="baja">Dar de Baja</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php
	require_once("conexion.php");
	if(isset($_POST['baja'])){
		$nc=$_POST['nc'];
		$conexion=conectar();
		$sql="select cveCarrera,idAlumnos from alumnos inner join grupos on alumnos.idGrupos=grupos.idGrupos where cveCarrera='$cve' and idAlumnos=$nc";
		$resp = $conexion->query($sql);
		$row = $resp->fetch_assoc();
		if($row['cveCarrera']==$cve){
			$sql2="update alumnos set activo=0 where idAlumnos='$nc'";
			$resp2 = $conexion->query($sql2);
			echo "<script>alert('Baja Realizada')
    		document.location='./baja_alumno.php';</script>";
		}
		else{
			echo "<script>alert('El alumno no pertenece a la carrera $cve') 
    		document.location='./baja_alumno.php';</script>";
		}
	}
?>