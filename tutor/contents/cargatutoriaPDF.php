<?php
include_once('PDF.php');

$pdf = new PDF();

$pdf->AddPage();

$miCabecera = array('Grupo', 'Hora', 'Salon', 'Maestro');

$misDatos = array(
            array('grupo' => 'Esperbe', 'hora' => 'Martínez', 'salon' => '20420423', 'maestro' => 'Mario')
            );

$pdf->tablaHorizontal($miCabecera, $misDatos);
$pdf->Output('prueba.pdf','D');
?>
