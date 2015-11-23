-- Host: 127.0.0.1    Database: mydb
-- -------------------------------------------------------
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
-- Table structure for table `administrador`--
DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `rfc` varchar(13) NOT NULL,
  `nombreAdministrador` varchar(100) DEFAULT NULL,
  `apellPAdministrador` varchar(100) DEFAULT NULL,
  `apellMAdministrador` varchar(100) DEFAULT NULL,
  `contraseÒa` varchar(13) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rfc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `administrador`--
LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES
  ('ABCDEF1234567','Alan','Lopez','Fraga','qwedsazxc','alan_0192@hotmail.com');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `alumnos`--
DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `idAlumnos` int(8) NOT NULL,
  `nombreAlumno` varchar(200) DEFAULT NULL,
  `apellPAlumno` varchar(100) DEFAULT NULL,
  `apellMAlumno` varchar(100) DEFAULT NULL,
  `contrasena` varchar(256) DEFAULT NULL,
  `activo` int(1) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `estatus` varchar(100) DEFAULT NULL,
  `ob_cues` varchar(1000) DEFAULT NULL,
  `idGrupos` varchar(45) NOT NULL DEFAULT '',
  `correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAlumnos`,`idGrupos`),
  KEY `fk_grupos_a` (`idGrupos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `alumnos`--
LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES
  ('12120310','Jorge Enrique','Covarrubias','Aparicio','1','0','Hackerman','a','a','2',''),
  ('12120350','Mario','Ziranda','Gonzalez','1','1','z','a','a','2','');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `anexo_lleno`--
DROP TABLE IF EXISTS `anexo_lleno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anexo_lleno` (
  `idAlumnos` int(8) NOT NULL DEFAULT '0',
  `idAnexos` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idAlumnos`,`idAnexos`),
  KEY `fk_anexo_al` (`idAnexos`),
  CONSTRAINT `fk_alumnos_al` FOREIGN KEY (`idAlumnos`) REFERENCES `alumnos` (`idAlumnos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_anexo_al` FOREIGN KEY (`idAnexos`) REFERENCES `anexos` (`idAnexo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `anexo_lleno`--
-- No data for table `anexo_lleno`

-- Table structure for table `anexos`--
DROP TABLE IF EXISTS `anexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anexos` (
  `idAnexo` int(11) NOT NULL,
  `DescripcionAnexo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAnexo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `anexos`--
-- No data for table `anexos`

-- Table structure for table `carreras`--
DROP TABLE IF EXISTS `carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carreras` (
  `cveCarrera` varchar(15) NOT NULL,
  `NombreCarrera` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cveCarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `carreras`--
LOCK TABLES `carreras` WRITE;
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
INSERT INTO `carreras` VALUES
  ('IINF-2010-220','INGENIERIA EN INFORMATICA'),
  ('ISIC-2010-224','INGENIERÕA EN SISTEMAS COMPUTACIONALES');
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `constancias`--
DROP TABLE IF EXISTS `constancias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constancias` (
  `idConstancias` int(11) NOT NULL,
  `num Constancia` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`idConstancias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `constancias`--
-- No data for table `constancias`

-- Table structure for table `coordinadores`--
DROP TABLE IF EXISTS `coordinadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coordinadores` (
  `rfc` varchar(13) NOT NULL DEFAULT '',
  `nombreCoordinador` varchar(100) DEFAULT NULL,
  `apellPCoordi` varchar(100) DEFAULT NULL,
  `apellMCoordi` varchar(100) DEFAULT NULL,
  `contrasena` varchar(13) DEFAULT NULL,
  `cveCarrera` varchar(15) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rfc`),
  KEY `fk_carrera_c` (`cveCarrera`),
  CONSTRAINT `fk_carrera` FOREIGN KEY (`cveCarrera`) REFERENCES `carreras` (`cveCarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `coordinadores`--
LOCK TABLES `coordinadores` WRITE;
/*!40000 ALTER TABLE `coordinadores` DISABLE KEYS */;
INSERT INTO `coordinadores` VALUES
  ('SAHM720522FA4','MIRIAM ZULMA','S√ÅNCHEZ','HERN√ÅNDEZ','SAHM720522FA4','ISIC-2010-224','');
/*!40000 ALTER TABLE `coordinadores` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `directivos`--
DROP TABLE IF EXISTS `directivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directivos` (
  `CveDirec` varchar(13) NOT NULL,
  `nombDire` varchar(50) DEFAULT NULL,
  `apellPDire` varchar(50) DEFAULT NULL,
  `apellMDire` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CveDirec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `directivos`--
-- No data for table `directivos`

-- Table structure for table `documentos`--
DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos` (
  `idDocumentos` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idDocumentos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `documentos`--
-- No data for table `documentos`

-- Table structure for table `grupos`--
DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos` (
  `idGrupos` varchar(45) NOT NULL,
  `NombreGrupo` varchar(45) DEFAULT NULL,
  `Salon` varchar(3) DEFAULT NULL,
  `Hora` varchar(5) DEFAULT NULL,
  `cveCarrera` varchar(15) NOT NULL DEFAULT '',
  `idPeriodo` int(11) NOT NULL DEFAULT '0',
  `idTutores` varchar(13) NOT NULL DEFAULT '',
  PRIMARY KEY (`idGrupos`,`cveCarrera`,`idPeriodo`,`idTutores`),
  KEY `fk_carrera_id` (`cveCarrera`),
  KEY `fk_grupos_id` (`idPeriodo`),
  KEY `fk_tutores_id` (`idTutores`),
  CONSTRAINT `fk_carrera_g` FOREIGN KEY (`cveCarrera`) REFERENCES `carreras` (`cveCarrera`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_periodo_g` FOREIGN KEY (`idPeriodo`) REFERENCES `periodo` (`idPeriodo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_tutores_g` FOREIGN KEY (`idTutores`) REFERENCES `tutores` (`idTutores`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `grupos`--
LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES
  ('1','2015-A-1','F2','13:00','IINF-2010-220','1','VEFY860815NDA'),
  ('2','2015-B-1','E3','12:00','ISIC-2010-224','1','VEFY860815NDA');
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `institucion`--
DROP TABLE IF EXISTS `institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucion` (
  `ClaInsti` varchar(50) NOT NULL,
  `NomInsti` varchar(100) DEFAULT NULL,
  `JefeDA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ClaInsti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `institucion`--
LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` VALUES
  ('ITM_0102','Instituto Tecnologico de morelia','Alan');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `logos`--
DROP TABLE IF EXISTS `logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logos` (
  `idLogo` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idLogo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `logos`--
-- No data for table `logos`

-- Table structure for table `periodo`--
DROP TABLE IF EXISTS `periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodo` (
  `idPeriodo` int(11) NOT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPeriodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `periodo`--
LOCK TABLES `periodo` WRITE;
/*!40000 ALTER TABLE `periodo` DISABLE KEYS */;
INSERT INTO `periodo` VALUES
  ('1','1','2015');
/*!40000 ALTER TABLE `periodo` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `preguntas`--
DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas` (
  `idPreguntas` int(11) NOT NULL,
  `DescripcionPregunta` varchar(400) DEFAULT NULL,
  `idAnexo` int(11) NOT NULL DEFAULT '0',
  `idSubanexos` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idPreguntas`,`idAnexo`,`idSubanexos`),
  KEY `fk_anexo_p` (`idSubanexos`,`idAnexo`),
  CONSTRAINT `fk_subanexo` FOREIGN KEY (`idSubanexos`, `idAnexo`) REFERENCES `subanexos` (`idSubanexos`, `idAnexo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `preguntas`--
-- No data for table `preguntas`

-- Table structure for table `respuestas`--
DROP TABLE IF EXISTS `respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuestas` (
  `idRespuestas` int(11) NOT NULL,
  `DescricionRespuesta` varchar(500) DEFAULT NULL,
  `idAlumnos` int(8) NOT NULL DEFAULT '0',
  `idPregunta` int(11) NOT NULL DEFAULT '0',
  `idAnexo` int(11) NOT NULL DEFAULT '0',
  `idSubanexos` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idRespuestas`,`idAlumnos`,`idSubanexos`,`idAnexo`,`idPregunta`),
  KEY `fk_alumnos_r` (`idAlumnos`),
  KEY `fk_preguntas_r_d` (`idPregunta`,`idAnexo`,`idSubanexos`),
  CONSTRAINT `fk_alumnos_r` FOREIGN KEY (`idAlumnos`) REFERENCES `alumnos` (`idAlumnos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_preguntas_r` FOREIGN KEY (`idPregunta`, `idAnexo`, `idSubanexos`) REFERENCES `preguntas` (`idPreguntas`, `idAnexo`, `idSubanexos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `respuestas`--
-- No data for table `respuestas`

-- Table structure for table `subanexos`--
DROP TABLE IF EXISTS `subanexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subanexos` (
  `idSubanexos` int(11) NOT NULL,
  `DescripcionSubanexo` varchar(45) DEFAULT NULL,
  `idAnexo` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idSubanexos`,`idAnexo`),
  KEY `fk_anexo_idx` (`idAnexo`),
  CONSTRAINT `fk_anexo` FOREIGN KEY (`idAnexo`) REFERENCES `anexos` (`idAnexo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `subanexos`--
-- No data for table `subanexos`

-- Table structure for table `tutores`--
DROP TABLE IF EXISTS `tutores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutores` (
  `idTutores` varchar(13) NOT NULL,
  `nombreTutor` varchar(100) DEFAULT NULL,
  `apellPTutor` varchar(100) DEFAULT NULL,
  `apellMTutor` varchar(100) DEFAULT NULL,
  `contrasena` varchar(13) DEFAULT NULL,
  `activo` int(1) DEFAULT NULL,
  `cveCarrera` varchar(15) NOT NULL DEFAULT '',
  `correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTutores`,`cveCarrera`),
  KEY `fk_carreras_t` (`cveCarrera`),
  CONSTRAINT `fk_carreras` FOREIGN KEY (`cveCarrera`) REFERENCES `carreras` (`cveCarrera`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
-- Dumping data for table `tutores`--
LOCK TABLES `tutores` WRITE;
/*!40000 ALTER TABLE `tutores` DISABLE KEYS */;
INSERT INTO `tutores` VALUES
  ('VEFY860815NDA','YANETH','VEGA','FLORES','VEFY860815NDA','1','IINF-2010-220','');
/*!40000 ALTER TABLE `tutores` ENABLE KEYS */;
UNLOCK TABLES;

-- FINISHED ----------------------------
-- Total time: 0.0077381134033203 seconds.
