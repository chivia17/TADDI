<? 
//datos del archivo 
$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type']; 
$tamano_archivo = $_FILES['userfile']['size']; 
//compruebo si las características del archivo son las que deseo
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "base.sql")){ 
      	echo "<script>alert('Archivo cargado') 
		document.location='../utilerias_bd.php';</script>";

   	}else{ 
      	echo "<script>alert('Ocurrio un error al cargar el archivo') 
		document.location='../utilerias_bd.php';</script>"; 
   	} 
?>