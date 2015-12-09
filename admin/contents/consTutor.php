<?php
include'conexion.php';
include_once('PDFCT.php');
$num = $_GET["tuto"];
$num1 = $_GET["grup"];
$num2 = $_GET["per"];
$num3 = $_GET["carr"];
$conexion = conectar();
$result = $conexion->query("SELECT periodo FROM periodo WHERE idPeriodo='$num2'");
$row = $result->fetch_assoc();
$periodo = $row["periodo"];
$result = $conexion->query("SELECT * FROM tuto WHERE id='$num'");
$row = $result->fetch_assoc();
$tutor = $row["nombre"];
$result = $conexion->query("SELECT NombreCarrera FROM carrera WHERE cveCarrera='$num3'");
$row = $result->fetch_assoc();
$carrera = $row["NombreCarrera"];
$result = $conexion->query("SELECT COUNT(*) AS cantidad FROM alumnos WHERE idGrupos='$num1'");
$row = $result->fetch_assoc();

$cantidad = $row["cantidad"];
$arrayMeses = array('ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO',
   'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE');
$fecha="MORELIA, MICH. A ". date("d") ." DE " .$arrayMeses[date('m')-1]. " DEL " . date("Y");
$pdf = new PDFCT();
$pdf->AddPage();
$dep=utf8_decode("DEPENDENCIA:               SUBD. ACADÉMICA");
$sec=utf8_decode("SECCÍON:               DESAROLLO ACDÉMICO");
$pdf->Cell(195,60,utf8_decode('DEPENDENCIA:                SUBD. ACADÉMICA'),10,0,'R');
$pdf->Ln(5);
$pdf->Cell(195,60,utf8_decode('SECCÍON:                 DESAROLLO ACDÉMICO'),10,0,'R');
$pdf->Ln(5);
$pdf->Cell(195,60,utf8_decode('OFICIO:                                    D.A.213.10/2015'),10,0,'R');
$pdf->Ln(10);
$pdf->SetFont('Arial','',8);
$pdf->Cell(195,60,$fecha,10,0,'R');
$pdf->Ln(5);
$pdf->Cell(195,60,utf8_decode('ASUNTO:                        CONSTACIA TUTORÍAS'),10,0,'R');
$pdf->Ln(25);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,60,utf8_decode('A QUIEN CORRESPONDA:'),10,0,'R');
$pdf->SetAutoPageBreak(true);
$pdf->Ln(18);
$pdf->SetFont('Arial','',13);
$pdf->SetY(100);
$html = "<br>       Le informo que el (la) C. Profesor (a) $tutor, de la carrera de $carrera participo como tutor en el semestre $periodo, atendiendo un total de $cantidad alumnos <br><br><br>
          Se extiende la solicitud a peticion del interesado, para los fines legales que juzgue convenientes";
$pdf->WriteHTML($html);
$pdf->Ln(15);
$pdf->SetFont('Arial','b',13);
$pdf->Cell(110,60,utf8_decode('ATENTAMENTE'),10,0,'R');
$pdf->Ln(100);
$pdf->SetFont('Arial','b',11);
$html="JEFE DEL DEPARTAMENTO DE                                                       SUBDIRECTOR ACADEMICO      <br>    DESAROLLO ACADEMICO";
$pdf->WriteHTML($html);
$pdf->Output('prueba.pdf','D');
?>
