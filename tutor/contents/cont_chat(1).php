<?php
	@session_start();
	unset($_SESSION['receptor']);
?>
<div>
	<table width = "800" height = "500">
		<form method = "post" action = "chat.php">
		<tr>
			<td><label>Numero de Control con quien quieres contactar:</label><input size = "90" id = "receptor" type = "text" name = "receptor" value = ""/></td>
		</tr>
		<tr>
			<td><button type = "submit" name = "ini_chat">Iniciar Chat</button></td>
		</tr>	
		</form>
		<script type="text/javascript">
			
		</script>
	</table>
</div>
