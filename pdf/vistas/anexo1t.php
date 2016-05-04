<?php
session_start();
//include'../contents/conexion.php';
$nc = $_GET["nc"];
$conexion = conectar();
$query = "SELECT * FROM testent WHERE nc='$nc'" or die("Error in the consult.." . mysqli_error($conexion)); ;
$result = $conexion->query($query);
$i=0;
while($row = mysqli_fetch_array($result)){
  $respuestas[$i] = $row["respuesta"];
  $i++;
 }
$img = "../contents/imagAlum/".$nc.".png";
$query = "SELECT * FROM datalum WHERE nc='$nc'" or die("Error in the consult.." . mysqli_error($conexion)); ;
$result = $conexion->query($query);
while($row = mysqli_fetch_array($result)){
  $nom = $row["nombre"];
  $carr =  $row["carrera"];
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
 		     <p >- FORMATO DE ENTEVISTA -</p>
			 </td>
		  </tr>
	  </table>
    <br/>


    <table aling="center" style="width:170%; height:20%; margin-left:240px" >
      <tr style="width:100%">

        <img src=<?php echo $img  ?>>

      </tr>
    </table>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>



<div aling="left">
	<table id="central"  >
		<tr>
			<td >
				<table id="datos">
          <tr class="fila">
						<td style="width:205%; height:10%">
              <b>Nombre:</b>&nbsp;<?php echo $nom ?><br/>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:205%; height:10%">
              <b>Estatura:</b>&nbsp;<?php echo $respuestas[1] ?>&nbsp;cm.
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <b>Peso:</b>&nbsp;<?php echo $respuestas[2] ?>&nbsp;Kg.<br/><br/>
              <b>Carrera:</b>&nbsp;<?php echo $carr ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:205%; height:10%">
              <b>Fecha de Nacimiento:</b>&nbsp;<?php echo $respuestas[5] ?><br/><br/>
              <b>Sexo:</b>&nbsp;<?php echo $respuestas[3] ?>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <b>Edad:</b>&nbsp;<?php echo $respuestas[4] ?>&nbsp;años
						</td>
					</tr>
          <tr class="fila">
						<td style="width:205%; height:10%">
              <b>Estado civil:</b>&nbsp;<?php echo $respuestas[6] ?><br/>
						</td>
					</tr>
          <tr class="fila">
            <td style="width:205%; height:10%">
              <b>Trabaja:</b>&nbsp;<?php echo $respuestas[7] ?><br/>
            </td>
          </tr>
          <tr class="fila">
            <td style="width:205%; height:10%">
              <b>Lugar de Nacimiento:</b> &nbsp;<?php echo $respuestas[8] ?>
              <p><b>Domicilio Actual:</b>&nbsp;<?php echo $respuestas[9] ?></p>
            </td>
          </tr>
          <tr class="fila">
            <td style="width:205%; height:10%">
              <b>Teléfono:</b>&nbsp;(<?php echo $respuestas[11] ?>)&nbsp;<?php echo $respuestas[12]?>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <b>C.P.</b>&nbsp;<?php echo $respuestas[10] ?>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <b>E-mail:</b>&nbsp;<?php echo $respuestas[13] ?>
            </td>
          </tr>
          <tr class="fila">
						<td style="width:205%; height:10%">
              <b>Tipo de Vivienda:</b>&nbsp;<?php echo $respuestas[14] ?><br/>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:205%; height:10%">
              <b>La casa o Departamento donde vives es:</b> &nbsp;<?php echo $respuestas[15]?><br/>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:205%; height:10%">
              <b>Numero de personas con las que vives:</b>&nbsp;<?php echo $respuestas[16] ?><br/><br/>
              <b>Parentesco:</b>&nbsp;<?php echo $respuestas[17] ?>
						</td>
					</tr>
          <tr class="fila">
						<td style="width:205%; height:10%">
              <b>Nombre del Padre:</b> &nbsp;<?php echo $respuestas[18] ?><br/><br/>
              <b>Edad:</b>&nbsp;<?php echo $respuestas[19] ?>&nbsp;años
						</td>
					</tr>
          <tr class="fila">
            <td style="width:205%; height:10%">
              <b>Trabaja:</b>&nbsp;<?php echo $respuestas[20] ?><br/><br/>
              <b>Profesión:</b>&nbsp;<?php echo $respuestas[21] ?>
            </td>
          </tr>
				</table>
			</td>
		</tr>
	</table>
  </div>
    <!-- Fin del cuerpo de la hoja -->
