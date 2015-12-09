<?php
	session_start();
	include'../../contents/conexion.php';
	$conexion = conectar();
	if(isset($_SESSION["rfc"]) && isset($_SESSION["receptor"]) && isset($_POST["mensaje"])){
		$receptor = $_SESSION["receptor"];
		$contenido = $_POST["mensaje"];
		$destinatarios = explode(",", $receptor);
		$i = 0;
		while($i < count($destinatarios)){
			$query = "INSERT INTO chat (emisor, receptor, contenido) VALUES ('".$_SESSION['rfc']."','".$destinatarios[$i]."','".$contenido."')";
			if($result = $conexion->query($query)){
				//echo '<script language="javascript">alert("Mensaje Enviado!"); window.location.href="../chat.php";</script>';
			}
			else{
				echo '<script language="javascript">alert("Error al enviar mensaje!");</script>';
			}
			$i++;
		}
		header("Location: ../chat.php");
	}
	else{
		echo '<script language="javascript">alert("Error!: Necesitas iniciar sesión12"); window.location.href="../";</script>';
	}
?>