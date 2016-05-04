<?php
session_start();
//include'../contents/conexion.php';
$nc = $_GET["nc"];
$conexion = conectar();
$query = "SELECT * FROM testlinv WHERE nc='$nc'" or die("Error in the consult.." . mysqli_error($conexion)); ;
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
#encabezado .fila #col_2 {text-align:center; width: 55%}
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
#central tr td {padding-right: 80px; text-align: center; width:100%;}

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
 		     <p >- LÍNEA DE LA VIDA -</p>
			 </td>
		  </tr>
	  </table>

<div aling="left">
	<table id="central"  >
		<tr>
			<td >
				<table id="datos">
          <tr class="fila">
						<td style="width:5%">
							Edad
						</td>
						<td style="width:80%">
              Exítos, Logros, Alcances, etc
						</td>
            <td style="width:80%">
              Fracasos, Tropiezos, Dificultades,Limitaciones, etc.
            </td>
					</tr>
					<tr class="fila">
						<td style="width:5%">
							6 años
						</td>
						<td style="width:80%">
              <?php  echo   $respuestas[0] ?>
						</td>
            <td style="width:80%">
              <?php  echo   $respuestas[1] ?>
            </td>
					</tr>
					<tr class="fila">
						<td style="width:5%">
							12 años
						</td>
						<td style="width:80%">
             <?php  echo   $respuestas[2] ?>
						</td>
            <td style="width:80%">
             <?php  echo   $respuestas[3] ?>
            </td>
					</tr>
					<tr class="fila">
						<td style="width:5%">
							15 años
						</td>
						<td style="width:80%">
             <?php  echo   $respuestas[4] ?>
						</td>
            <td style="width:80%">
             <?php  echo   $respuestas[5] ?>
            </td>
					</tr>
					<tr class="fila">
						<td style="width:5%">
							18 años
						</td>
						<td style="width:80%">
             <?php  echo   $respuestas[6] ?>
						</td>
            <td style="width:80%">
             <?php  echo   $respuestas[7] ?>
            </td>
					</tr>
          <tr class="fila">
						<td style="width:5%">
							21 años
						</td>
						<td style="width:80%">
             <?php  echo   $respuestas[8] ?>
						</td>
            <td style="width:80%">
             <?php  echo   $respuestas[9] ?>
            </td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </div>
    <!-- Fin del cuerpo de la hoja -->
