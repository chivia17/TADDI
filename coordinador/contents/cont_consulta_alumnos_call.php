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
								    // output data of each row
								    	while($row = $resp->fetch_assoc()) {
								        	echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
		            						$row["ID"] . "</font></td>";
	              							echo "<td width=\"25%\"><font face=\"verdana\">" .
		            						$row["Nombre"] . "</font></td>";
											echo "<td width=\"25%\"><font face=\"verdana\">" .
											$row["Carrera"] . "</font></td>";
								    	}
									} else {
								    	echo "0 results";
									}	
									$conexion->close();
								}
							}
								?>