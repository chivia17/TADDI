<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$database = 'mydb';
$table = 'alumnos';
$cont=0;

if (!mysql_connect($db_host, $db_user, $db_pass))
  die("No se puede conectar a la bd");
mysql_select_db($database);

$handle = fopen("./Archivos/datos.csv", "r");

if( $handle ) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $import = "INSERT INTO $table (idAlumnos, nombreAlumno,apellPAlumno,apellMAlumno,contrasena,activo,observaciones,estatus,ob_cues,idGrupos,cveCarrera,correo) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]', '$data[11]')";
    if(mysql_query($import)){
    	$cont=$cont+1;
    }
  }
fclose($handle);
	echo "<script>alert('Altas realizadas: $cont') 
    document.location='../cargar_alumnos.php';</script>";
}
else{
	echo "<script>alert('Algo anda mal con el archivo') 
    document.location='../cargar_alumnos.php';</script>";
}
?>