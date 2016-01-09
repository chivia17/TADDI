<?php

include("conexion/conexionMysql.php");

$conexion = new MySQL();
$query = $conexion->consulta("SELECT * FROM institucion");
$resultado = mysql_fetch_array($query);
$ClaInsti = $resultado["ClaInsti"];
$NomInsti = $resultado ["NomInsti"];
$JefeDA = $resultado ["JefeDA"];

$query = $conexion->consulta("SELECT * FROM directivos WHERE puesto = 'Director General'");
$resultado = mysql_fetch_array($query);
$CveDirec = $resultado ["CveDirec"];
$nombDire = $resultado ["nombDire"];
$apellPDire = $resultado ["apellPDire"];
$apellMDire = $resultado ["apellMDire"];

$query = $conexion->consulta("SELECT * FROM directivos WHERE puesto = 'Encargado Subdireccion de Planeacion y Vinculacion'");
$resultado = mysql_fetch_array($query);
$CvePV = $resultado ["CveDirec"];
$nombPV = $resultado ["nombDire"];
$apellPPV = $resultado ["apellPDire"];
$apellMPV = $resultado ["apellMDire"];

$query = $conexion->consulta("SELECT * FROM directivos WHERE puesto = 'Encargado Subdireccion Academica'");
$resultado = mysql_fetch_array($query);
$CveA = $resultado ["CveDirec"];
$nombA = $resultado ["nombDire"];
$apellPA = $resultado ["apellPDire"];
$apellMA = $resultado ["apellMDire"];

$query = $conexion->consulta("SELECT * FROM logos");
$resultado = mysql_fetch_array($query);
$idLogo = $resultado ["idLogo"];
$descripcion = $resultado ["descripcion"];
$url = $resultado ["url"];

?>
<div class="container" id="contenido ">
	<div class="titulo text-center">
					<h2><b>CONFIGURAR TECNOLÓGICO</b></h2>
	</div>
			<div class="container">
				<br>
				<form enctype="multipart/form-data" class="form-horizontal" role="form" method="post" action="./contents/configuracion_tecnologico.php">
				  <div class="form-group">
				    <label for="idcor" class="col-md-3 control-label">Nombre de la Institución</label>
				    <div class="col-md-6">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="nomtec" name="nomtec" placeholder="Nombre" value = "<?php echo $NomInsti ?>" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="rfc" class="col-md-3 control-label">Clave de la Institución</label>
				    <div class="col-md-3">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="cvetec" name="cvetec" placeholder="Clave" value = "<?php echo $ClaInsti ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nomcor" class="col-md-3 control-label">Nombre Jefe de Departamento de Desarrollo Académico</label>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="nomDA" name="nomDA" placeholder="Nombre" value = "<?php echo $JefeDA ?>" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nomcor" class="col-md-3 control-label">Nombre del Encargado de la Dirección del Instituto</label>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="CveDI" name="CveDI" placeholder="RFC" value = "<?php echo $CveDirec ?>" required>
				    </div>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="nomDI" name="nomDI" placeholder="Nombre" value = "<?php echo $nombDire ?>" required>
				    </div>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="appDI" name="appDI" placeholder="Apellido Paterno" value = "<?php echo $apellPDire ?>" required>
				    </div>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="apmDI" name="apmDI" placeholder="Apellido Materno" value = "<?php echo $apellMDire ?>" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nomcor" class="col-md-3 control-label">Nombre Subdirector Académico</label>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="CveSA" name="CveSA" placeholder="RFC" value = "<?php echo $CveA ?>" required>
				    </div>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="nomSA" name="nomSA" placeholder="Nombre" value = "<?php echo $nombA ?>" required>
				    </div>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="appSA" name="appSA" placeholder="Apellido Paterno" value = "<?php echo $apellPA ?>" required>
				    </div>
				    <div class="col-md-2">
				      <input style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"
				      type="text" class="form-control" id="apmSA" name="apmSA" placeholder="Apellido Materno" value = "<?php echo $apellMA ?>" required>
				    </div>
				  </div>
				  <div class="form-group">
				<label for="fileDoc" class="col-sm-2 control-label">Imagen a cargar</label>
				<div class="col-sm-10">
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput">
							<i class="glyphicon glyphicon-file fileinput-exists"></i>
							<span class="fileinput-filename"></span>
						</div>
						<span class="input-group-addon btn btn-default btn-file">
							<span class="fileinput-new">Seleccionar imagen</span>
							<span class="fileinput-exists">Cambiar</span>
							<input type="file" name="fileDoc" id='fileDoc'>
						</span>
						<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
				  <div class="form-group">
				    <div class="col-lg-offset-2 col-lg-10">
				      <button type="submit" id="guardartec" name="guardartec" class="btn btn-default">Guardar</button>
				    </div>
				  </div>
				</form>
			</div>
</div>
