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
 									<td><strong>RFC</strong></td>
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