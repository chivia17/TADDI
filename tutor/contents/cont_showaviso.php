<?php
$rfc = $_SESSION['rfc'];
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="titulo text-center">
		<h2><b>Avisos</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<div class="panel panel-success">
	  				<div class="panel-heading">Aviso</div>
	 					<table class="table" id="tableArchivos">
	 						<tr><td><strong>Aviso</strong></td><td class="text-center"><strong>Ver documento</strong></td><td class="text-center"><strong>Descargar</strong></td></tr>
	 						<?php
	 						include "conexion.php";	 						
	 						$dir="../contents/Archivos/";
	 						$cveCarrera="";
	 						$nomArc="";
	 						$conexion = conectar();
	 						$query = $conexion->query("SET NAMES 'utf8'");
	 						$resultado = $conexion->query("SELECT cveCarrera from tutores where idTutores='".$rfc."'");
							while($row = $resultado->fetch_assoc())
     						{
     						 $cveCarrera=$row["cveCarrera"];
    						}
							$resultado = $conexion->query("SELECT Aviso, nomArchivo FROM avisos WHERE Carrera = '".$cveCarrera."'");
							while($row = $resultado->fetch_assoc())
     						{
     						 $avi=$row["Aviso"];
     						 $nomArc=$row["nomArchivo"];
     						 if(is_null($nomArc)){
     						 	echo "<tr><td>$avi</td><td class=text-center>No hay Archivo
								</td><td class=text-center>No hay Archivo
								</td></tr>";
     						 }
     						 else
     						 {
     						 	$url="../contents/Archivos/".$nomArc;
     						 	echo "<tr><td>$avi</td><td class=text-center><a href=$url>Ver</a>
								</td><td class=text-center><a href=$url download=$nomArc>Descargar</a>
									</td></tr>";
     						 }
     						 $nomArc="";
    						}
	 						?>
	  					</table>
				</div>
			</div>
		</form>
	</div>
</div>
