<?php
	require_once("comboBox_carreras.php");
	require_once("conexion.php");
?>
<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>INFORME DE TUTOR</b></h2>
	</div>
	<div class="container">
		<br>
		<form class="form-horizontal" role="form" method="post" action="">
				 
				  <div class="form-group">
				    <label for="sele" class="col-md-2 control-label">Tutor</label>
				    <div class="col-md-6">
				       <select name="idTutores" class="form-control">
				       		<option name="a">-Selecciona un tutor-</option>	
				       		<?php
        							$carreras=getTutores();
        							foreach ($carreras as $indice => $registro) {
        								echo "<option value='".$registro["idTutores"]."'>".$registro["nombreTutor"]."</option>";

        							}
            			        ?>
  							</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-3">
				      <button type="submit" class="btn btn-default" name="buscar">Consultar</button>
				    </div>
				  </div>				  
			</form>
	</div>
</div>
<?php
								require_once("conexion.php");
								$conexion=conectar();

								if(isset($_POST['buscar'])){										

								$nTutores=$_POST['idTutores'];																

								$sql="call tutClave('$nTutores')";	
									$resp = $conexion->query($sql);
									if(!$resp){
									}
									else{

									if ($resp->num_rows > 0) {
										echo "<div class=\"form-group\">
				<div class=\"panel panel-success\">
	  				<div class=\"panel-heading\">Informe de tutor</div>	 					
				</div>
			</div>";
								    // output data of each row
									echo "<table class='table'>
	 								<tr>
 									<td><strong>Id</strong></td>
  									<td><strong>Nombre</strong></td>
 									<td><strong>Carrera</strong></td>
								</tr>";
								  					
								    	while($row = $resp->fetch_assoc()) {
								        	echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
		            						$row["ID"] . "</font></td>";
	              							echo "<td width=\"25%\"><font face=\"verdana\">" .
		            						$row["Nombre"] . "</font></td>";
											echo "<td width=\"25%\"><font face=\"verdana\">" .
											$row["Carrera"] . "</font></td>";
								    	}
								    	echo "</table>";
									} else {
								    	echo "0 results";
									}	
									$conexion->close();
								}
							}
?>