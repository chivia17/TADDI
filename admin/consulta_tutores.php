<!DOCTYPE html>
<html>
	<?php include "./includes/head.html"; ?>
	<body>
		<?php include "./includes/header.html"; ?>
		<div class="wrapper_info">
			<?php include "./includes/info_user.html"; ?>
		</div>
		<?php include "./includes/nav.html"; ?>
		<div class="wrapper">
			<?php include "./contents/cont_consulta_tutores.php"; ?>
		</div>
		<?php include "./modals/modalPsw.php"; ?>
		<?php include "./includes/footer.html"; ?>
	</body>	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	$(document).ready().function({
		alert("Hola desde JS!");
		$("#cveCarrera").on.("change",Fbuscar);
	}
	function Fbuscar(){
		alert("Ya cambié");
	}
	);
</script>
</html>