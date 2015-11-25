<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<?php include "./includes/head.html"; ?>
	<body>
		<?php include "./includes/header.html"; ?>
		<?php include "./includes/nav.html"; ?>
		<div class="wrapper_info">
			<?php include "./includes/info_user.html"; ?>
		</div>
		<div class="wrapper">
			<?php include "./contents/cont_colorama.php"; ?>
		</div>
		<?php include "./modals/modalPsw.php"; ?>
		<?php include "./includes/footer.html"; ?>
	</body>
</html>
