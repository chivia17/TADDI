<?php
require_once("../contents/comboBox_carreras.php");
?>
<!DOCTYPE html>
<html>
	<?php include "./includes/head.html"; ?>
	<body>
		<header class="cabecera">
			<div class="row">
				<div class="col-xs-3 col-sm-5 col-lg-8">
					<img src="../img/logoTec.png" class="img-responsive">
				</div>
				<div class="col-xs-9 col-sm-7 col-lg-4">
					<img src="../img/tadii.png" class="img-responsive">
				</div>
			</div>
		</header>
		<div id="background_login">
			<div class="row">
				<div class="col-xs-3 col-md-3 col-lg-3">
					<div class="text-left">
						<button class="btn-back" onclick="location='./login.php'">
							<span class="glyphicon glyphicon-arrow-left"></span>
						</button>
					</div>
				</div>
				<div class="col-xs-3 col-md-3 col-lg-3"></div>
				<div class="col-xs-3 col-md-3 col-lg-3"></div>
				<div class="col-xs-9 col-md-3 col-lg-3">
					<div class="text-right">
						<button class="btn btn-success" id="btn-registrar" onclick="location='./login.php'">Iniciar sesión</button>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-xs-2 col-md-4 col-lg-4"></div>
				<div class="col-xs-8 col-md-4 col-lg-4 text-center">
					<img class="img-center" src="../img/tutorado_120.png" alt="">
					<h3 class="helv">TUTORADO</h3>
					<form method="post" action="" onsubmit="">
						<input class="form-control" id="nomAl" type="text" placeholder="Nombre(s)">
						<input class="form-control" id="apPat" type="text"  placeholder="Apellido Paterno">
						<input class="form-control" id="apMat" type="text"  placeholder="Apellido Materno">
						<input class="form-control" id="corr" type="text"  placeholder="Correo Electronico">
						<select class="form-control" name="" id="selCar">
							<option value="">--Seleccionar carrera--</option>
							<?php
								 $carreras=getCarreras();
										 foreach ($carreras as $indice => $registro) {
												echo "<option value='".$registro["cveCarrera"]."'>".$registro["NombreCarrera"]."</option>";
											}
							?>
						</select>
						<select class="form-control" name="" id="selGru">
							<option value="">--Seleccionar grupo--</option>
						</select>
						<input class="form-control" id="nc" type="text" placeholder="No. de control" >
						<input class="form-control" id="pass" type="password" placeholder="Contraseña">
						<input class="form-control" id="pasr" type="password" placeholder="Repetir contraseña">
						<div class="form-group"></div>
						<input class="btn btn-block" id="sesion-tutorado" type="submit" value="Registrarse">
					</form>
				</div>
				<div class="col-xs-2 col-md-4 col-lg-4"></div>
			</div><br><br><br>
		</div>
		<footer>
			<div id="foot">
				<p class="text-right text-muted">
					<br><br><a href="#">Ayuda y contacto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    			</p>
     		</div>
		</footer>
	</body>
</html>
