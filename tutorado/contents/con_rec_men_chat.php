<?php
	session_start();
	include '../../contents/conexion.php';
	$conexion = conectar();
	if(isset($_SESSION['nc']) && $_SESSION['receptor'])
	{
		$query = "SELECT emisor, contenido FROM chat WHERE (emisor = '".$_SESSION['nc']."' AND receptor = '".$_SESSION['receptor']."' ) OR (emisor = '".$_SESSION['receptor']."' AND receptor = '".$_SESSION['nc']."') ORDER BY id DESC";
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
				echo $_SESSION['nc'];
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
		echo '<script language="javascript">alert("Error!: Faltan datos.1233");</script>';
	}
	header('refresh: 5; con_rec_men_chat.php');
?>