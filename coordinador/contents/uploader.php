<? 
//tomo el valor de un elemento de tipo texto del formulario 


//datos del archivo 
$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type']; 
$tamano_archivo = $_FILES['userfile']['size']; 
//compruebo si las características del archivo son las que deseo
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
      	echo "El archivo ha sido cargado correctamente."; 
   	}else{ 
      	echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
   	} 
?>