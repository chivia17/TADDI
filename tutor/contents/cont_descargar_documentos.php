<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="titulo text-center">
		<h2><b>DOCUMENTOS</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<div class="panel panel-success">
	  				<div class="panel-heading">Documentos</div>
	 					<table class="table" id="tableArchivos">
	 						<tr><td><strong>Documento</strong></td><td><strong>Descripción</strong></td><td class="text-center"><strong>Ver</strong></td><td class="text-center"><strong>Descargar</strong></td></tr>
	 						<?php
	 						$dir="../contents/Archivos/*";
	 						foreach (glob($dir) as $filename) {
	 							$aux="$filename";
	 							$aux = substr($aux, 21);
    							echo "<tr><td>$aux</td><td>".filesize($filename).
						"</td><td class=text-center><a href=$filename>Ver</a>
				</td><td class=text-center><a href=$filename download=$aux>Descargar</a>
									</td></tr>";
								}
	 						?>
	  					</table>
				</div>
			</div>
		</form>
	</div>
</div>
