<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="titulo text-center">
		<p class="titles t">- DOCUMENTOS -</p>
		<hr>
	</div>
</div>	

<br>


<div class="panel panel-success">
	<div class="panel-heading">Documentos</div>
		<table class="table">
			<tr><td><strong>Documento</strong></td><td><strong>Descripción</strong></td><td class="text-center"><strong>Ver</strong></td><td class="text-center"><strong>Descargar</strong></td></tr>
	 						<?php
	 						include "conexion.php";	
	 						$dir="../contents/Archivos/";
	 						$archivo="";
	 						$descri="";
	 						$conexion = conectar();
	 						$ruta="";
	 						$resultado = $conexion->query("SELECT * from archivos");
	 						while($row = $resultado->fetch_assoc())
     						{
     						$ruta=$dir.$row['nombre'];
     						 echo "<tr><td>".$row['nombre']."</td><td>".$row['descripcion'].
						"</td><td class=text-center><a href=$ruta><span class='glyphicon glyphicon-eye-open'></span></a>
				</td><td class=text-center><a href=$ruta download=".$row['nombre']."><span class='glyphicon glyphicon-download-alt'></span></a></td></tr>";
    						}
	 						?>
		</table>
</div>
