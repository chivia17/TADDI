<?php
session_start();
if (isset($_SESSION['usuario']))
{
	header('Location : index.php');
}
else{
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
						<button class="btn-back" onclick="location='../indexB.html'">
							<span class="glyphicon glyphicon-arrow-left"></span>
						</button>
					</div>
				</div>
				<div class="col-xs-3 col-md-3 col-lg-3"></div>
				<div class="col-xs-3 col-md-3 col-lg-3"></div>
				<div class="col-xs-9 col-md-3 col-lg-3">
					<div class="text-right">
						<button class="btn btn-success" id="btn-registrar" onclick="location='./registro.php'">Registrarse</button>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-xs-2 col-md-4 col-lg-4"></div>
				<div class="col-xs-8 col-md-4 col-lg-4 text-center">
					<img class="img-center" src="../img/tutorado_120.png" alt="">
					<h3 class="helv">TUTORADO</h3>
					<form method="POST" action="return false" onsubmit="return false">
						<input class="form-control" id="userto" type="text" placeholder="Número de control">
						<input class="form-control" id="passto" type="password"  placeholder="Contraseña">
						<br>
						<input class="btn btn-block helv" id="sesion-tuto" type="submit" value="Iniciar sesión">
					</form>
				</div>
				<div class="col-xs-2 col-md-4 col-lg-4"></div>
			</div>
		</div>
		<footer>
			<div id="foot">
				<p class="text-right text-muted">
					<br><br><a href="#" style="margin-right:20px;">Ayuda y contacto</a>
    			</p>
     		</div>
		</footer>
	</body>
</html>
<?php
}
?>
