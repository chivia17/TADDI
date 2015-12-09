<?php
@session_start();
include '../contents/conexion.php';
	if(isset($_SESSION['nc']))
	{
?>
<div>
	<table width = "800" height = "500">
		<form method = "post" action = "contents/cont_env_men_chat.php">
		<tr>
			<?php if(isset($_POST['receptor'])){
				if($_POST['combo_chat'] == 'alumno'){
					unset($_SESSION['receptor']);
					$conexion = conectar();
						$query = "SELECT nombreAlumno FROM alumnos WHERE idAlumnos = '".$_POST['receptor']."'";
						if($result = $conexion->query($query)){
							if($result->num_rows > 0){
								$_SESSION['receptor'] = $_POST['receptor'];
							}
							else{
								echo '<script language="javascript">alert("La persona con la que intentas contactar no esta en la base de datos!"); window.location.href="chat(1).php"; </script>';	
							}
						}
						else{
							echo '<script language="javascript">alert("Error!");</script>';
						}
					}
				}
			?>
		</tr>
		<tr>
			<td><iframe name = "iframe" width = "700" heigth = "400" src="contents/con_rec_men_chat.php"></iframe></td>
		</tr>
		<tr>
			<td><input type = "text" name = "mensaje"/> <button type = "submit" name = "enviar">Enviar</button></td>
		</tr>
		<tr>
			<td>Estas conectado como: <?php echo $_SESSION['nc']; ?></td>
		</tr>	
		</form>
	</table>
</div>
<?php
}
	else
	{
		
		echo '<script language="javascript">alert("Error!: Debes iniciar sesión");</script>';
	}
?>