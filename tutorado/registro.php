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
					<form method="POST" action="return false" onsubmit="return false">
						<input class="form-control" id="userc" type="text" placeholder="Nombre(s)">
						<input class="form-control" id="passc" type="text"  placeholder="Apellidos">
						<select class="form-control" name="" id="selCarrera">
							<option value="">Seleccionar carrera</option>
							<option value="">Ingeniería en sistemas computacionales</option>
							<option value="">Ingeniería informática</option>
						</select>
						<select class="form-control" name="" id="selGrupo">
							<option value="">Seleccionar grupo</option>
							<option value="">ISC20151</option>
							<option value="">IINF20151</option>
						</select>
						<input class="form-control" id="userc" type="text" placeholder="No. de control">
						<input class="form-control" id="userc" type="password" placeholder="Contraseña">
						<input class="form-control" id="userc" type="password" placeholder="Repetir contraseña">
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