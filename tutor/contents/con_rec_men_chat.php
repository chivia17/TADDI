<?php
	session_start();
	include '../../contents/conexion.php';
	$conexion = conectar();
	if(isset($_SESSION['rfc']) && isset($_SESSION['receptor']))
	{
		$query = "SELECT emisor, contenido FROM chat WHERE (emisor = '".$_SESSION['rfc']."' AND receptor = '".$_SESSION['receptor']."' ) OR (emisor = '".$_SESSION['receptor']."' AND receptor = '".$_SESSION['rfc']."') ORDER BY id DESC";
		if($result = $conexion->query($query))
		{
			if($result->num_rows > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
					?>
					<strong><?php echo $row['emisor'] ?></strong>: <?php echo $row['contenido'] ?><br><br>
					<?php
				}
			}
			else
			{
				//echo $_SESSION['rfc'];
				?>
				<strong align = 'center'>No hay mensajes que mostrar</strong>
				<?php
			}
		}
		else
		{
			echo '<script language="javascript">alert("Error al mostrar mensajes!");</script>';
		}
	}
	else
	{
		echo '<script language="javascript">alert("Error!: Faltan datos.");</script>';
	}
	header('refresh: 5; con_rec_men_chat.php');
?>