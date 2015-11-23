<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$conexion = mysql_connect("localhost","root","123456789");
		mysql_select_db("mydb",$conexion);

		$cveC=$_POST['cveCarrera'];

		$sql=mysql_query("SELECT count(*) FROM tutores WHERE cveCarrera=$cveC");
			while($row=mysql_fetch_array($sql)){
				$x=(int)$row['count(*)'];
		    }
		    echo $x;
		$sql=mysql_query("SELECT count(*) FROM alumnos");
			while($row=mysql_fetch_array($sql)){
				$y=(int)$row['count(*)'];
			}	

?>

