<?php
class MySQL
{
  private $conexion;

  public function MySQL()
  {
    if(!isset($this->conexion)){
      $this->conexion = (mysql_connect("localhost","mzulma","mZulma16$"))
     //$this->conexion = (mysql_connect("localhost","root",""))
        or die(mysql_error());
      mysql_select_db("taddi2",$this->conexion) or die(mysql_error());
     //mysql_select_db("tadii",$this->conexion) or die(mysql_error());
    }
  }

  public function consulta($consulta)
  {
    $resultado = mysql_query($consulta,$this->conexion);
    if(!$resultado){
      echo '<script language="javascript">alert("Actualizaciónn de Datos: Error\n'. mysql_error().'"); window.location.href="../";</script>';
	}
    return $resultado;

  }

  public function fetch_array($consulta){
   return mysql_fetch_array($consulta);
  }

  public function num_rows($consulta){
   return mysql_num_rows($consulta);
  }
}
?>
