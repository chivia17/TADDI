<?php
$cve = $_SESSION["cveCar"];
 ?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CONSTANCIA ALUMNO</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<label for="clave" class="col-md-2 control-label">Numero de Control</label>
				<div class="col-md-2">
				    <input type="text" class="form-control" id="conNC" name="nc" placeholder="NC">
				</div>
			</div>
		<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
				    <button type="button" class="btn btn-default" id="genCAC" >Generar</button>
				</div>
				  <input type="hidden" id="cvec" value="<?=$_SESSION['cveCar'];?>"></input>
			</div>
		</form>
	</div>
</div>
