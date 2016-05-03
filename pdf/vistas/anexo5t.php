<?php
session_start();
include'../contents/conexion.php';
$nc = $_GET["nc"];
$conexion = conectar();
$query = "SELECT * FROM testesta WHERE nc='$nc'" or die("Error in the consult.." . mysqli_error($conexion)); ;
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

#footer {padding-top:3px 0; border-top: 2px solid #46d; width:100%;}
#footer .fila td {text-align:left; width:100%;}
#footer .fila td span {font-size: 10px; color: #000;}

#titulo {margin-top:130px; width:100%;}
#titulo tr td {text-align: center; width:100%;}

#central {margin-top:25px; width:100%; height:40%; }
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
 		     <p >- TEST DE ESTILOS DE APRENDIZAJE -</p>
			 </td>
		  </tr>
	  </table>
    <br/>

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
                1. Me ayuda trazar o escribir a mano las palabras cuando tengo que aprenderlas de memoria
    						</td>
                <td style="width:45%">
                 <?php echo $respuestas[0] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  2. Recuerdo mejor un tema al escuchar una conferencia en vez de leer un libro de texto
    						</td>
                <td style="width:45%">
                  <?php echo $respuestas[1] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                3. Prefiero las clases que requieren una prueba sobre lo que se lee en el libro de texto
    						</td>
                <td style="width:45%">
                  <?php echo $respuestas[2] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  4. Me gusta comer bocados y mascar chicle, cuando estudio
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[3] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  5. Al prestar atención a una conferencia, puedo recordar las ideas principales sin anotarlas
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[4] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  6. Prefiero las instrucciones escritas sobre las orales
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[5] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  7. Yo resuelvo bien los rompecabezas y los laberintos
    						</td>
                <td style="width:45%">
                 <?php echo $respuestas[6] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  8. Me ayuda ver diapositivas y videos para comprender un tema
    						</td>
                <td style="width:45%">
                  <?php echo $respuestas[7] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                9. Recuerdo más cuando leo un libro que cuando escucho una conferencia
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[8] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  10. Por lo general, tengo que escribir los números del teléfono para recordarlos bien
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[9] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  11. Prefiero recibir las noticias escuchando la radio en vez de leerlas en un periódico
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[10] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  12. Me gusta tener algo como un bolígrafo o un lápiz en la mano cuando estudio
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[11] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  13. Necesito copiar los ejemplos de la pizarra del maestro para examinarlos más tarde
    						</td>
                <td style="width:45%">
                  <?php echo $respuestas[12] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  14. Prefiero las instrucciones orales del maestro a aquellas escritas en un examen o en la pizarra
    						</td>
                <td style="width:45%">
                  <?php echo $respuestas[13] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  15. Prefiero que un libro de texto tenga diagramas gráficos y cuadros porque me ayudan mejor a entender el material
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[14] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  16. Me gusta escuchar música al estudiar una obra, novela, etc.
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[15] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  17. Tengo que apuntar listas de cosas que quiero hacer para recordarlas
    						</td>
                <td style="width:45%">
                  <?php echo $respuestas[16] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  18. Puedo corregir mi tarea examinándola y encontrando la mayoría de los errores
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[17] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                 19. Prefiero leer el periódico en vez de escuchar las noticias
    						</td>
                <td style="width:45%">
                   <?php echo $respuestas[18] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:160%">
                  20. Puedo recordar los números de teléfono cuando los oigo
    						</td>
                <td style="width:45%">
                  <?php echo $respuestas[19] ?>
    						</td>
    					</tr>
              <tr class="fila">
                <td style="width:160%">
                  21. Gozo el trabajo que me exige usar la mano o herramientas
                </td>
                <td style="width:45%">
                   <?php echo $respuestas[20] ?>
                </td>
              </tr>
              <tr class="fila">
                <td style="width:160%">
                  22. Cuando escribo algo, necesito leerlo en voz alta para oír como suena
                </td>
                <td style="width:45%">
                   <?php echo $respuestas[21] ?>
                </td>
              </tr>
              <tr class="fila">
                <td style="width:160%">
                  23.  Puedo recordar mejor las cosas cuando puedo moverme mientras estoy aprendiéndolas, por ejemplo: caminar al estudiar o participar en una actividad que me permita moverme, etc.
                </td>
                <td style="width:45%">
                    <?php echo $respuestas[22] ?>
                </td>
              </tr>
    				</table>
    			</td>
    		</tr>
    	</table>
      </div>
        <!-- Fin del cuerpo de la hoja -->
