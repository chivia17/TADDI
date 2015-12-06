<?php
include'../contents/conexion.php';
$conexion = conectar();
$nom =$_POST["nomA"];
$ap =$_POST["aP"];
$am =$_POST["aM"];
$ig =$_POST["iG"];
$nc =$_POST["ncA"];
$pass =$_POST["pas"];
$cor =$_POST["coE"];
$sql = "INSERT INTO alumnos (idAlumnos,nombreAlumno,apellPAlumno,apellMAlumno,
                             contrasena,activo,idGrupos,correo) VALUES
                             ('$nc','$nom','$ap','$am','$pass','0','$ig','$cor')";
 if ($conexion->query($sql) === TRUE)
      {
        echo "Alumno Registrado";
      } else {
       echo "Error: " . $sql . "<br>" . $conexion->error;
      }

$conn->close();
?>
