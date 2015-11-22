<? 
//datos del archivo 
$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type'];
$nom=$nombre_archivo+$tipo_archivo;
//compruebo si las características del archivo son las que deseo
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "../../contents/Archivos/".$nombre_archivo)){
      	echo "<script>alert('Archivo cargado') 
		document.location='../cargar_docs.php';</script>";

   	}else{ 
      	echo "<script>alert('Ocurrio un error al cargar el archivo') 
		document.location='../cargar_docs.php';</script>"; 
   	} 
?>