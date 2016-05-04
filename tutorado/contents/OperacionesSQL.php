<?php
/**
*Operaciones del modulo de tutor con la base de datos
*Consultas
*Llamada a procedimientos
*Conexion a la B.D
*
*@author Covarrubias y asociados
*@copyright  Covarrubias y asociados
*@version 1.0
*/
require_once("conexion.php");

// Clase OperacionesSQL
class OperacionesSQL{

   private $conexion;

   /**
    *Constructor de la calse OperacionesSQL
    *obtiene la conexion a la B.D.
    */
   function __construct() {
      $this -> conexion=conectar();
   }

   /**
    *Destructuor de la clase OperacionesSQL
    *se libera la conexion de la B.D.
    */
   function __destruct() {
       $this -> conexion;
   }

   /**
    *Ejecuta las consultas a la B.D
    *@access private
    *@param string $sql query que se va ejecutar
    *@return int $res devuelve 1 si se ejecuto o 0 si hubo error
    */
   private function query($sql){
    $res;
    if(mysqli_query($this->conexion,$sql))
      	$res =1;
    	else
    		$res =0;
    return $res;
   }

   /**
    *Alta de alumnos a traves del metodo query
    *@param string $sql query a ejecutar
    *@return string $res mensaje dependiendo del resultado de la query
    */
   function altaAlumno($sql){
     $res;
     if($this->query($sql) == 1){
       $res= "Alumno registrado exitosamente";
     }
     else {
       $res= "Error al registrar alumno";
     }
     return $res;
   }

   /**
    *Guarda las respues de los anexos en la B.D. a traves
    *del metodo query
    *@param string $sql query a ejecutar
    *@return string $res mensaje dependiendo del resultado de la query
    */
   function guardarAnexo($sql){
     $res;
     if($this->query($sql) == 1){
       $res= "Anexo guardado con exitosamente";
     }
     else {
       $res= "Error al guardar anexo";
     }
     return $res;
   }


     function verificaAnexo($nc,$idA){
      $result= $this -> conexion -> query("SELECT * FROM anexo_lleno WHERE idAlumnos='$nc'
        AND idAnexos='$idA'");
        if( $result->num_rows > 0)
           return 1;
        else
          return 0;

     }

}
?>
