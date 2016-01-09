<? 
//datos del archivo 
include'conexion.php';
session_start();
$rfc = $_SESSION['rfc'];
$conexion = conectar();
$cvecarrera="";
$Aviso= $_POST['cont_aviso'];
$fecha= $_POST['datepicker'];
$fechi= substr($fecha, -4).substr($fecha,-5,1).substr($fecha,-10,3).substr($fecha,-7,2);
$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type'];
$nom=$nombre_archivo+$tipo_archivo;
$query = $conexion->query("SET NAMES 'utf8'");
$cvecarrera = $conexion->query("SELECT cveCarrera FROM coordinadores WHERE rfc = '".$rfc."'");
while($row = $cvecarrera->fetch_assoc())
     {
      $query = "insert into Avisos values('$Aviso','".$row["cveCarrera"]."','$nombre_archivo','$fechi');" or die("Error in the consult.." . mysqli_error($conexion));
      $result = $conexion->query($query);
    }
//$fin = mysql_result($cvecarrera, 0);
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