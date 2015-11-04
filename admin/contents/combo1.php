<?
	include'conexion.php';
  $conexion = conectar();
  $query = "SELECT * FROM tuto" or die("Error in the consult.." . mysqli_error($conexion));
  $result = $conexion->query($query);
  while($row = mysqli_fetch_array($result))
  {
    echo "<option name='".$row["nombre"]."'>".$row["nombre"]."</option>";
  }
?>
