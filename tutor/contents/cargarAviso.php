<? 
//datos del archivo 
include'conexion.php';
$conexion = conectar();
$Aviso= $_POST['cont_aviso'];
$fecha= $_POST['datepicker'];
$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type'];
$nom=$nombre_archivo+$tipo_archivo;
$query = "insert into Avisos values('$Aviso','cve','$nombre_archivo','$fecha');" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
//compruebo si las características del archivo son las que deseo
   	
    if($result){
    	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "../../contents/Archivos/".$nombre_archivo)){
		echo "<script>alert('Aviso y archivo cargados') 
		document.location='../avisos.php';</script>";
	}
		else
      	echo "<script>alert('Aviso Cargado') 
		document.location='../avisos.php';</script>"; 
   	}else{ 
      	echo "<script>alert('Falla al cargar aviso') 
		document.location='../avisos.php';</script>";
   	} 
?>