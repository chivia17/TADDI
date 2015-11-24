<?php
include'conexion.php';
include_once('PDF.php');
$id= $_GET["id"];
$conexion = conectar();
$query = "SELECT * FROM grup WHERE idGrupos='$id'" or die("Error in the consult.." . mysqli_error($conexion));
$result = $conexion->query($query);
$row = $result->fetch_assoc();

$pdf = new PDF();
$pdf->AddPage();
$miCabecera = array('Grupo', 'Hora', 'Salon', 'Maestro');
$misDatos = array(
            array('grupo' => $row["NombreGrupo"], 'hora' => $_GET["ho"], 'salon' => $_GET["sa"], 'maestro' => $row["nombre"])
            );

$pdf->tablaHorizontal($miCabecera, $misDatos);
$pdf->Output('prueba.pdf','D');
?>
