<?php
include'conexion.php';
$conexion = conectar();
$cveTut =$_POST["cve"];

$result = $conexion->query("SELECT AVG(DescricionRespuesta) FROM respuestas WHERE idPregunta=1 AND idAnexo=8 AND idTutor='$cveTut'");
$row = $result->fetch_assoc();
$r1=(double)$row['AVG(DescricionRespuesta)'];
$result = $conexion->query("SELECT AVG(DescricionRespuesta) FROM respuestas WHERE idPregunta=2 AND idAnexo=8 AND idTutor='$cveTut'");
$row = $result->fetch_assoc();
$r2=(double)$row['AVG(DescricionRespuesta)'];
$result = $conexion->query("SELECT AVG(DescricionRespuesta) FROM respuestas WHERE idPregunta=3 AND idAnexo=8 AND idTutor='$cveTut'");
$row = $result->fetch_assoc();
$r3=(double)$row['AVG(DescricionRespuesta)'];
$result = $conexion->query("SELECT AVG(DescricionRespuesta) FROM respuestas WHERE idPregunta=4 AND idAnexo=8 AND idTutor='$cveTut'");
$row = $result->fetch_assoc();
$r4=(double)$row['AVG(DescricionRespuesta)'];

$data = array(0 => $r1,
              1 => $r2,
              2 => $r3,
              3 => $r4
             );
echo json_encode($data);
?>
