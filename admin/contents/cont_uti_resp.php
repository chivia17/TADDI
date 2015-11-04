<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$DROP_TABLES = true;
	$VERSION = "1.0";

		function on_error($errno, $errstr) { 
			die($errstr);
		}
		error_reporting(E_ALL ^ E_DEPRECATED);
	
		$HOST = "127.0.0.1";
		$USER = "root";
		$PASS ="";
		$DB ="mydb";
		$OUTPUT ="sql";
		/* ******************************************** */
		$timer_start = microtime(true);
		mysql_connect($HOST,$USER,$PASS);
		mysql_select_db($DB);
		$q_tables = mysql_query("SHOW TABLE STATUS");
		if (!$q_tables) {
			echo "Database <b>".htmlspecialchars("$DB")."</b> does not exist.";
			exit;
		}
		if (mysql_num_rows($q_tables) == 0) {
			echo "Database has no tables";
			exit;
		}
		header("content-type:text/plain");
		if ($OUTPUT != "txt") {
			$safename=preg_replace("/[^a-zA-Z0-9_-]/","_",$DB);
			header("content-type:text/plain");
			header("content-disposition:attachment;filename=\"$safename.sql\"");
		}
		// Preamble:
		echo "-- Host: $HOST    Database: $DB\n";
		echo "-- -------------------------------------------------------\n";
		echo <<<END
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
END;
		while ($table = mysql_fetch_object($q_tables)) {
			if ($table->Engine=='') continue; // don't dump views
			echo "\n-- Table structure for table `$table->Name`--\n";
			if ($DROP_TABLES) { 
				echo "DROP TABLE IF EXISTS `$table->Name`;\n";
			}
			echo "/*!40101 SET @saved_cs_client     = @@character_set_client */;\n/*!40101 SET character_set_client = utf8 */;\n";
			$CT = mysql_fetch_row(mysql_query("SHOW CREATE TABLE $table->Name"));
			echo "$CT[1];\n";
			echo "/*!40101 SET character_set_client = @saved_cs_client */;\n";
			
			echo "-- Dumping data for table `$table->Name`--\n";
			$q_data = mysql_query("SELECT * FROM `$table->Name`");
			if (mysql_num_rows($q_data) > 0) {
				echo "LOCK TABLES `$table->Name` WRITE;\n";
				echo "/*!40000 ALTER TABLE `$table->Name` DISABLE KEYS */;\n";
				echo "INSERT INTO `$table->Name` VALUES\n";
				$notfirstrow = false;
				while ($data = mysql_fetch_row($q_data)) {
					if ($notfirstrow) { echo ",\n  ("; } else { echo "  ("; $notfirstrow = true; }
					$notfirstcol=false;
					foreach($data as $value) {
						if ($notfirstcol) { echo ","; } else { $notfirstcol=true; }
						echo "'" . mysql_real_escape_string($value) . "'";
					}
					echo ")";
				}
				echo ";\n";
				echo "/*!40000 ALTER TABLE `$table->Name` ENABLE KEYS */;\n";
				echo "UNLOCK TABLES;\n";
			} else {
				echo "-- No data for table `$table->Name`\n";
			}
		}
		$timer_end = microtime(true);
		echo "\n-- FINISHED ----------------------------\n-- Total time: "
		. ($timer_end - $timer_start) . " seconds.\n";
?>