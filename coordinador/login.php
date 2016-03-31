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
				<div class="col-lg-12">
					<div class="text-left">
						<button class="btn-back" onclick="location='../indexB.html'">
							<span class="glyphicon glyphicon-arrow-left"></span>
						</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="login_wrapper">
					<img class="img-responsive" id="icon_user" src="../img/coordinador_120.png" alt="">
					<h3>COORDINADOR</h3>
					<form method="POST" action="return false" onsubmit="return false">
						<input class="form-control" id="userc" type="text" placeholder="Usuario">
						<input class="form-control" id="passc" type="password"  placeholder="Contraseña">
						<select required name="carr" id="selCIC" class="form-control">
						</select>
						<br>
						<input class="btn btn-block" id="sesion-coor" type="submit" value="Iniciar sesión">
					</form>
				</div>
			</div>
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
<?php
}
?>
