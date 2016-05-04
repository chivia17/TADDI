<?php
if(!isset($_SESSION)){
    session_start();
}
//include_once'../contents/conexion.php';
$nc = $_SESSION["nc"];
$conexion = conectar();
$query = "SELECT * FROM testhabest WHERE nc='$nc'" or die("Error in the consult.." . mysqli_error($conexion)); ;
$result = $conexion->query($query);
$i=0;
while($row = mysqli_fetch_array($result))
{
  $respuestas[$i] = $row["respuesta"];
  $i++;
 }
?>
<!-- IMPORTANTE: El contenido de la etiqueta style debe estar entre comentarios de HTML -->
<style>
#encabezado {padding:10px 0; border-top: 1px solid; border-bottom: 1px solid; width:100%;}
#encabezado .fila #col_1 {width: 100%}
#encabezado .fila #col_2 {text-align:left; width: 55%}
#encabezado .fila #col_3 {width: 15%}
#encabezado .fila #col_4 {width: 15%}

#encabezado .fila td img {width:100%}
#encabezado .fila #col_2 #span1{font-size: 15px;}
#encabezado .fila #col_2 #span2{font-size: 12px; color: #4d9;}

#footer {padding-top:5px 0; border-top: 2px solid #46d; width:100%;}
#footer .fila td {text-align:left; width:100%;}
#footer .fila td span {font-size: 10px; color: #000;}

#titulo {margin-top:130px; width:100%;}
#titulo tr td {text-align: center; width:100%;}

#central {margin-top:25px; width:100%; height:50%; }
#central tr td {padding-right: 80px; text-align: left; width:100%;}

#datos {border:1px solid; margin-left:10px; width:50%;}
#datos tr {border:1px solid;}
#datos tr td{border:1px solid;}
</style>
<!-- page define la hoja con los márgenes señalados -->

    <page_header> <!-- Define el header de la hoja -->
		<table id="encabezado" style="width:100%">
            <tr class="fila">
                <td id="col_1" >
					<img src="../img/header.png">
				</td>
            </tr>
        </table>
    </page_header>

    <page_footer> <!-- Define el footer de la hoja -->
      <table id="footer" style="width:100%">
              <tr class="fila">
          <td>
            <img src="../img/footer.jpg">
          </td>
        </tr>
          </table>
    </page_footer>

    <!-- Define el cuerpo de la hoja -->
    <table id="titulo" >
	  	<tr class="fila">
		  	<td>
 		     <p >- HABILIDADES DE ESTUDIO -</p>
			 </td>
		  </tr>
	  </table>

<div aling="left">
	<table id="central"  >
		<tr>
			<td >
				<table id="datos">
          <tr class="fila">
						<td style="width:100%">
              Preguntas
						</td>
            <td style="width:45%">
              Respuestas
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              A. ¿Sueles dejar para el último la preparación de tus trabajos?
						</td>
            <td style="width:45%">
              <?php echo $respuestas[0] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              B. ¿Crees que el sueño o el cansancio te impidan estudiar eficazmente en muchas ocasiones?
						</td>
            <td style="width:45%">
              <?php echo $respuestas[1] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
            C. ¿Es frecuente que no termines tu tarea a tiempo?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[2] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              D. ¿Tiendes a emplear tiempo en leer revistas, ver televisión o charlar cuando debieras dedicarlos a estudiar?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[3] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              E. Tus actividades sociales deportivas. ¿te llevan a descuidar, a menudo, tus tareas escolares?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[4] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              F. ¿Sueles dejar pasar un día o más antes de repasar los apuntes tomados en clase?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[5] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              G. ¿Sueles dedicar tu tiempo libre entre las 4:00 de la tarde y las 9:00 de la noche a otras actividades que no sean estudiar?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[6] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              H. ¿Descubres algunas veces de pronto, que debes entregar una tarea antes de lo que creías?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[7] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              I. ¿Te retrasas, con frecuencia, en una asignatura debido a que tienes que estudiar otra?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[8] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              J. ¿Te parece que tu rendimiento es muy bajo, en relación con el tiempo que dedicas al estudio?
						</td>
            <td style="width:45%">
              <?php echo $respuestas[9] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              K. ¿Está situado tu escritorio directamente frente a una ventana, puerta u otra fuente de distración?
						</td>
            <td style="width:45%">
              <?php echo $respuestas[10] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              L. ¿Sueles tener fotografías, trofeos o recuerdos sobre tu mesa de escritorio?
						</td>
            <td style="width:45%">
              <?php echo $respuestas[11] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              M. ¿Sueles estudiar recostado en la cama o arrellanado en un asiento cómodo?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[12] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              N. ¿Produce resplandor la lámpara que utilizas al estudiar?
						</td>
            <td style="width:45%">
              <?php echo $respuestas[13] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              O. Tu mesa de estudio ¿está tan desordenada y llena de objetos, que no dispones de sitio suficiente para estudiar con eficacia?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[14] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              P. ¿Sueles interrumpir tu estudio, por personas que vienen a visitarte?
						</td>
            <td style="width:45%">
              <?php echo $respuestas[15] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              Q. ¿Estudias, con frecuencia, mientras tienes puesta la televisión y/o la radio?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[16] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              R. En el lugar donde estudias, ¿se pueden ver con facilidad revistas, fotos de jóvenes o materiales pertenecientes a tu afición?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[17] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              S. ¿Con frecuencia, interrumpen tu estudio, actividades o ruidos que provienen del exterior?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[18] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:160%">
              T. ¿Suele hacerse lento tu estudio debido a que no tienes a la mano los libros y los materiales necesarios?
						</td>
            <td style="width:45%">
             <?php echo $respuestas[19] ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </div>
    <!-- Fin del cuerpo de la hoja -->
