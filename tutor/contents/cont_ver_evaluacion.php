<?php
$cve = $_SESSION["rfc"];
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="row">
	<div class="titulo text-center">
		<h2><b>EVALUACIÓN</b></h2>
	</div>
</div>
<br><br>
<div class="row">
	<div class="form-group">
		<div class="panel panel-success">
	  		<div class="panel-heading">Evaluación Tutor</div>
				<input type="hidden" id="cvec" value="<?=$_SESSION['rfc'];?>"></input>
	 		<div class="panel-body">
	 			<center>
	 			<h4>Gráfica</h4>
				<div class="resultados"><canvas id="grafico"></canvas></div>
	 			</center>
	 		</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(main);
  function main(){
var cve = $("#cvec").val();;
$.ajax({
					 type:'POST',
					 url:'./contents/graf_evalTut.php',
					 data:'cve='+cve,
					 success:function(data){
							 var valores = eval(data);
							 var e   = valores[0];
							 var f   = valores[1];
							 var m   = valores[2];
							 var a   = valores[3];
							 var Datos = {
											 labels : ['Pregunta 1', 'Pregunta 2', 'Pregunta 3', 'Pregunta 4'],
											 datasets : [
													 {
															 label:      'Evaluacion Tutor',
															 fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
															 strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
															 highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
															 highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
															 data : [e, f, m, a]
													 }
											 ]
									 }

							 var contexto = document.getElementById('grafico').getContext('2d');
							 window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
					 }
			 });
			 return false;
		 }
</script>
