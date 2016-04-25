<?
//datos del archivo
include'conexion.php';
$conexion = conectar();
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$dep= $_POST['depcri'];
$nom=$nombre_archivo+$tipo_archivo;
//compruebo si las características del archivo son las que deseo
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "../../contents/Archivos/".$nombre_archivo)){
      	$conexion->query("INSERT INTO archivos values('$nombre_archivo','$dep');");
      	echo "<script>alert('Archivo cargado')
		document.location='../carga_docs.php';</script>";

   	}else{
      	echo "<script>alert('Ocurrio un error al cargar el archivo')
		document.location='../carga_docs.php';</script>";
   	}
?>
