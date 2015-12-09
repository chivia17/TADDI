<?php
session_start();
include'conexion.php';
include_once('PDF_Encuesta.php');
$no_control= $_SESSION['nc'];
$estado = $_GET['estado'];
$conexion = conectar();
$array = array();
$query = "SELECT DescripcionPregunta, DescricionRespuesta FROM (respuestas INNER JOIN preguntas ON  respuestas.idPregunta = preguntas.idPreguntas) INNER JOIN anexos ON preguntas.idAnexo = anexos.idAnexo WHERE idAlumnos = '$no_control' AND anexos.idAnexo = ".$estado." ORDER BY idPregunta ASC" or die("Error in the consult.." . mysqli_error($conexion));
if($result = $conexion->query($query)){
	if($result->num_rows > 0){
		$pdf = new PDF();
		$pdf->AddPage();
		while($row = mysqli_fetch_assoc($result)){
			array_push($array, $row);
		}
		$Cabecera = array('Pregunta', 'Respuesta');
		//$array = mysqli_fetch_array($result);
		$pdf->tablaHorizontal($Cabecera, $array);
		$pdf->Output();
	}
	else{
		echo '<script language="javascript">alert("No se ha contestado esta encuesta!"); window.location.href="../consultar_encuestas.php";</script>';
	}
}
?>
