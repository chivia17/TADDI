<?php
	@session_start();
	include 'contents/conexion.php';
	unset($_SESSION['receptor']);
	$tutor = null;
	$conexion = conectar();
	$query = "SELECT idTutores FROM alumnos INNER JOIN grupos ON alumnos.idGrupos = grupos.idGrupos WHERE idAlumnos = '".$_SESSION['nc']."'";
	if($result = $conexion->query($query)){
		$row = mysql_fetch_array($result);
		$tutor = $row['idTutores'];
	}
?>
<script type="text/javascript">

function quitar_input(){
	document.getElementById('td').style.display = 'none';
	document.getElementById('receptor').value = <?php echo $tutor; ?>;
}

function poner_input(){
	document.getElementById('td').style.display = 'block';
	document.getElementById('receptor').value = "";
}

</script>
<div>
	<table width = "800" height = "500">
		<form method = "post" action = "chat.php">
		<tr>
			<td><select name = "combo_chat">
				<option value = "tutor" onclick = "quitar_input()">Tutor</option>
				<option value = "alumno" onclick = "poner_input()">Alumno</option>
			</select></td>
		</tr>
		<tr>
			<td style = "display:none;" id = "td"><label>Numero de Control con quien quieres contactar:</label><input size = "90" id = "receptor" type = "text" name = "receptor" value = ""/></td>
		</tr>
		<tr>
			<td><button type = "submit" name = "ini_chat">Iniciar Chat</button></td>
		</tr>	
		</form>
		<script type="text/javascript">
			
		</script>
	</table>
</div>
