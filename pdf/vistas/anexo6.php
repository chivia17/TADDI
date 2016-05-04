<?php
if(!isset($_SESSION)){
    session_start();
}
//include_once'../contents/conexion.php';
$nc = $_SESSION["nc"];
$conexion = conectar();
$query = "SELECT * FROM testauto WHERE nc='$nc'" or die("Error in the consult.." . mysqli_error($conexion)); ;
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
 		     <p >- TEST DE AUTOESTIMA -</p>
			 </td>
		  </tr>
	  </table>
    <br/>

    <div aling="left" style="width:90%">
    	<table id="central"  >
    		<tr>
    			<td>
    				<table id="datos">
              <tr class="fila">
    						<td style="width:1%">
    							<b>1. A la hora de tomar decisiones en tu vida, como proponer cosas nuevas en el trabajo,<br>iniciar alguna actividad de ocio,o elegir un color nuevo para pintar tu casa,<br> ¿sueles buscarla aprobación o el apoyo de las personas que te rodean?</b>
                    <br/>
                    <br/>
                    <?php echo $respuestas[0] ?>
    						</td>
    					</tr>
    					<tr class="fila">
    						<td style="width:1%">
    						<b>2. Imagina que estás en una reunión social o familiar importante; adviertes que vas vestido<br> para la ocasión y que desentonas con los demás, ¿cómo te comportas?</b>
                   <br/>
                   <br/>
                   <?php echo $respuestas[1] ?>
    						</td>
    					</tr>
    					<tr class="fila">
    						<td style="width:1%">
    						<b>3. Tienes muchas ganas de irte a comprar ropa y le pides a algún amigo que te acompañe. Esta<br> persona es más alta y más atractiva que tú, y todo lo que se prueba le<br> queda mucho mejor que a ti.</b>
                  <br/>
                  <br/>
                  <?php echo $respuestas[2] ?>
    						</td>
    					</tr>
    					<tr class="fila">
    						<td style="width:1%">
    						<b>4. Un día conoces a alguien nuevo y muy interesante, estás charlando animadamente y llega el<br> momento de hablar de ti, ¿cuál de las siguientes opciones mejor se ajusta<br> a lo que cuentas?</b>
                   <br/>
                   <br/>
                   <?php echo $respuestas[3] ?>
    						</td>
    					</tr>
    					<tr class="fila">
    						<td style="width:1%">
    						<b>5. En tu lugar de trabajo o de estudios, se está explicando algo que es completamente nuevo<br> para ti. Llega un momento en que te das cuenta que no has entendido casi<br> nada ¿qué haces?</b>
                <br/>
                <br/>
                <?php echo $respuestas[4] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:1%">
    						<b>6. Tener un trabajo bien remunerado y que nos guste es algo difícil de conseguir, si tuvieras<br> que valorar tu empleo o tu situación laboral, ¿cómo la definirías?</b>
                  <br/>
                  <br/>
                  <?php echo $respuestas[5] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:1%">
    						<b>7. Has tenido un día duro, has trabajado con más ahínco para finalizar una tarea en la oficina,<br> has hecho todas las gestiones que tenías pendientes, has resuelto<br> un par de problemas domésticos y encima le has hecho un favor a un amigo. ¿Qué haces al llegar a casa?</b>
                    <br/>
                    <br/>
                    <?php echo $respuestas[6] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:1%">
    						<b>8. En tu trabajo están buscando a una persona que represente a la empresa en un concurso del ramo.<br> Piden una persona que cumpla unos requisitos, entre ellos, explicar<br> bien su trabajo y que haga una demostración práctica del mismo.</b>
                   <br/>
                   <br/>
                   <?php echo $respuestas[7] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:1%">
    						<b>9. ¿Con cuál de las siguientes frases sobre la buena fortuna estás más de acuerdo?</b>
                <br/>
                <br/>
                <?php echo $respuestas[8] ?>
    						</td>
    					</tr>
              <tr class="fila">
    						<td style="width:1%">
    						<b>10. En una fiesta en la que no conoces a nadie excepto a los anfitriones, te presentan a un grupo<br> de personas de aspecto interesante. ¿Cuál es tu actitud?</b>
                <br/>
                <br/>
                <?php echo $respuestas[9] ?>
    						</td>
    					</tr>
    				</table>
    			</td>
    		</tr>
    	</table>
      </div>
        <!-- Fin del cuerpo de la hoja -->
