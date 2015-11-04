<?php
	require_once("comboBox_carreras.php");
	require_once("conexion.php");
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>ESTADISTICAS</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
				 
				  <div class="form-group">
				    <label for="sele" class="col-md-2 control-label">Carrera</label>
				    <div class="col-md-6">
				       <select required name="idTutores" class="form-control">
				       		<option value="" name="a">-Selecciona una Carrera-</option>	
				       		<?php
        							$carreras=getCarreras();
        							foreach ($carreras as $indice => $registro) {
        								echo "<option value='".$registro["cveCarrera"]."'>".$registro["NombreCarrera"]."</option>";

        							}
            			        ?>
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-3">
				      <button type="submit" class="btn btn-default" id="con1204" name="buscar">Consultar</button>
				    </div>
				  </div>				  
			</form>
	</div>
</div>



<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$conexion = mysql_connect("localhost","root","123456789");
		mysql_select_db("mydb",$conexion);

		$sql=mysql_query("SELECT count(*) FROM tutores");
			while($row=mysql_fetch_array($sql)){
				$x=(int)$row['count(*)'];
		    }
		$sql=mysql_query("SELECT count(*) FROM alumnos");
			while($row=mysql_fetch_array($sql)){
				$y=(int)$row['count(*)'];
			}	

?>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
 		var data = google.visualization.arrayToDataTable([
	        ['Roles', 'Cantidad', { role: 'style' }],
	        ['Tutores', <?php echo $x ?>, '#999999'],
	        ['Tutorados', <?php echo $y ?>, '#00CED1'],
	    ]);
        var options = {
            title: 'Tutoría Académica Digital e Institucional',
	        hAxis: {title: 'Estadisticas', titleTextStyle: {color: 'red'}}
	    };
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
	        chart.draw(data, options);
        }
</script>
<center>
    <div id="chart_div" style="width: 70%; height: 400px;"></div>
</center>