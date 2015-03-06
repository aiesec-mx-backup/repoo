-- MySQL dump 10.13  Distrib 5.5.19, for Linux (x86_64)
--
-- Host: 68.178.143.12    Database: dbaiesecrecruit
-- ------------------------------------------------------
-- Server version	5.5.37-35.0-log

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

--
-- Table structure for table `lc`
--

DROP TABLE IF EXISTS `lc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ubi` varchar(20) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lc`
--

LOCK TABLES `lc` WRITE;
/*!40000 ALTER TABLE `lc` DISABLE KEYS */;
INSERT INTO `lc` VALUES (1,'aguascalientes','comunicaciones.ags@aiesec.org.mx'),(2,'chihuahua','comunicaciones.chih@aiesec.org.mx'),(3,'ciudad_juarez','comunicaciones.cj@aiesec.org.mx'),(4,'cuernavaca','comunicaciones.cv@aiesec.org.mx'),(5,'culiacan','comunicaciones.sin@aiesec.org.mx'),(6,'edomex','comunicaciones.em@aiesec.org.mx'),(7,'guadalajara','comunicaciones.gdl@aiesec.org.mx'),(8,'guanajuato','comunicaciones.gto@aiesec.org.mx'),(9,'hermosillo','comunicaciones.her@aiesec.org.mx'),(10,'ipn','comunicaciones.ipn@aiesec.org.mx'),(11,'itam','comunicaciones.it@aiesec.org.mx'),(12,'la_salle','comunicaciones.lasalle@aiesec.org.mx'),(13,'laguna','comunicaciones.laguna@aiesec.org.mx'),(14,'leon','comunicaciones.leon@aiesec.org.mx'),(15,'merida','comunicaciones.mer@aiesec.org.mx'),(16,'monterrey','comunicaciones.mty@aiesec.org.mx'),(17,'puebla','comunicaciones.pue@aiesec.org.mx'),(18,'queretaro','comunicaciones.qro@aiesec.org.mx'),(19,'san_luis','comunicaciones.slp@aiesec.org.mx'),(20,'santa_fe','comunicaciones.sf@aiesec.org.mx'),(21,'tabasco','comunicaciones.tab@aiesec.org.mx'),(22,'toluca','comunicaciones.itesmtoluca@aiesec.org.mx'),(23,'uaemex','comunicaciones.uaemex@aiesec.org.mx'),(24,'udem','comunicaciones.udem@aiesec.org.mx'),(25,'unam','comunicaciones.unam@aiesec.org.mx'),(26,'up','comunicaciones.up@aiesec.org.mx'),(27,'veracruz','comunicaciones.ver@aiesec.org.mx'),(28,'zacatecas','comunicaciones.zac@aiesec.org.mx'),(29,'nst','nst');
/*!40000 ALTER TABLE `lc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `idLc` int(11) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `prog` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES (3,'2014-01-31 23:08:00',29,'Presencial','','Talent'),(5,'2014-01-24 23:09:00',16,'Virtual','http://aiesec.org.mx/recruitment/manage/','Talent'),(53,'2014-02-18 18:00:00',1,'Presencial','ITESM','Talent'),(54,'2014-02-18 18:00:00',1,'Presencial','ITESM','Citizen'),(18,'2014-02-21 13:30:00',22,'Presencial','TecnolÃ³gico de Monterrey Campus Toluca, SalÃ³n de Juicios Orales','Citizen'),(17,'2014-01-24 13:30:00',22,'Presencial','TecnolÃ³gico de Monterrey Campus Toluca','Citizen'),(20,'2014-01-30 13:30:00',22,'Presencial','TecnolÃ³gico de Monterrey Campus Toluca, SalÃ³n de Juicios Orales','Citizen'),(133,'2014-03-21 11:00:00',25,'Presencial','Auditorio 2, Trabajo Social, C.U.','Citizen'),(23,'2014-01-29 10:30:00',15,'Presencial','Universidad Anahuac Mayab, Auditorio. ','Citizen'),(24,'2014-01-29 09:00:00',15,'Presencial','UADY, Facultad de IngenierÃ­a. Aula Magna','Citizen'),(26,'2014-02-11 09:00:00',15,'Presencial','Universidad Modelo. Pasillo Principal.','Citizen'),(27,'2014-02-13 09:00:00',15,'Presencial','Universidad Modelo. Pasillo Principal','Citizen'),(28,'2014-02-05 13:00:00',15,'Presencial','UADY, FCA. Audiovisual 2','Citizen'),(29,'2014-02-05 18:00:00',15,'Presencial','UADY, FCA. Audiovisual 2.','Citizen'),(86,'2014-02-20 16:00:00',2,'Presencial','ITESM Comedor Ejecutivo','Citizen'),(85,'2014-02-20 16:00:00',2,'Presencial','ITESM Comedor Ejecutivo','Talent'),(110,'2014-02-27 17:00:00',18,'Presencial','UVM- Sala de usos multiples del edificio A','Talent'),(109,'2014-02-26 17:00:00',18,'Presencial','ITESM- Salon de grupos estudiantiles','Talent'),(115,'2014-03-11 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(114,'2014-03-06 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(113,'2014-02-27 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(112,'2014-03-04 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(55,'2014-02-20 10:00:00',1,'Presencial','ITESM','Talent'),(56,'2014-02-20 10:00:00',1,'Presencial','ITESM','Citizen'),(57,'2014-02-21 11:00:00',1,'Presencial','ITA','Talent'),(58,'2014-02-21 11:00:00',1,'Presencial','ITA','Citizen'),(59,'2014-02-21 18:00:00',1,'Presencial','ITA','Talent'),(60,'2014-02-21 18:00:00',1,'Presencial','ITA','Citizen'),(61,'2014-02-28 13:30:00',22,'Presencial','TecnolÃ³gico de Monterrey Campus Toluca, SalÃ³n de Juicios Orales','Citizen'),(62,'2014-02-21 11:00:00',17,'Presencial','Universidad Ibero Puebla SalÃ³n B203','Citizen'),(63,'2014-02-28 11:00:00',17,'Presencial','Universidad Ibero Puebla SalÃ³n B203','Citizen'),(64,'2014-03-18 16:00:00',17,'Presencial','Universidad Ibero Puebla SalÃ³n B203','Citizen'),(132,'2014-03-20 23:00:00',25,'Virtual','http://bit.ly/globalCit2','Citizen'),(92,'2014-02-27 16:00:00',1,'Presencial','UPA Sala Isoptica','Talent'),(91,'2014-02-27 16:00:00',1,'Presencial','UPA Sala Isoptica','Talent'),(90,'2014-02-20 16:00:00',1,'Presencial','UPA Auditorio 1','Talent'),(89,'2014-02-18 11:00:00',1,'Presencial','UPA Auditorio 1','Talent'),(73,'2014-02-13 16:00:00',18,'Presencial','Sala audiovisual Edificio B (UNIVERSIDAD : UVM)','Citizen'),(74,'2014-02-19 17:00:00',18,'Presencial','Sala audiovisual Edificio B (UNIVERSIDAD : UVM)','Citizen'),(75,'2014-02-17 17:00:00',18,'Presencial','Salon de grupos estudiantiles (UNIVERSIDAD: ITESM QuerÃ©taro)','Citizen'),(76,'2014-02-26 22:29:00',18,'Presencial','Salon de grupos estudiantiles (UNIVERSIDAD: ITESM QuerÃ©taro)','Citizen'),(77,'2014-02-13 21:15:00',24,'Virtual','http://bit.ly/1epdRDl','Citizen'),(78,'2014-02-13 09:30:00',27,'Presencial','Facultad de Artes PlÃ¡sticas de la Universidad Veracruzana','Citizen'),(79,'2014-02-14 13:00:00',23,'Presencial','Facultad de GeografÃ­a UAEM','Citizen'),(80,'2014-02-14 13:00:00',23,'Presencial','Facultad de GeografÃ­a UAEM','Citizen'),(81,'2014-02-18 17:00:00',23,'Presencial','Facultad de EconomÃ­a UAEM','Citizen'),(82,'2014-02-24 11:00:00',23,'Presencial','Facultad de PlaneaciÃ³n Urbana y Regional UAEM','Citizen'),(83,'2014-02-18 16:00:00',2,'Presencial','ITESM Comedor Ejecutivo','Talent'),(84,'2014-02-18 16:00:00',2,'Presencial','ITESM Comedor Ejecutivo','Citizen'),(116,'2014-03-13 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(99,'2014-02-19 11:10:00',1,'Presencial','UTR','Talent'),(100,'2014-02-19 12:00:00',1,'Presencial','UAA','Citizen'),(101,'2014-02-17 20:00:00',24,'Virtual','http://bit.ly/1fbZkzJ','Talent'),(102,'2014-02-18 10:00:00',2,'Presencial','TecnolÃ³gico de Chihuahua, CEC','Citizen'),(103,'2014-02-18 10:00:00',2,'Presencial','TecnolÃ³gico de Chihuahua, CEC','Citizen'),(104,'2014-02-20 21:00:00',3,'Virtual','http://bit.ly/1g7XH6d','Talent'),(117,'2014-03-18 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(118,'2014-03-20 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(119,'2014-03-25 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(120,'2014-03-27 21:00:00',20,'Virtual','www.anymeeting.com/AIESECinSantaFe1','Citizen'),(131,'2014-03-19 20:00:00',25,'Virtual','http://www.wiziq.com/online-class/1703203-sesiÃ³n-informativa-global-talent','Talent'),(130,'2014-03-18 20:00:00',25,'Virtual','http://bit.ly/globalcit ','Citizen'),(127,'2014-03-05 01:00:00',14,'Presencial','Ibero LeÃ³n, salon 010','Citizen');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-15 12:34:41
