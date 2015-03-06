-- MySQL dump 10.13  Distrib 5.5.19, for Linux (x86_64)
--
-- Host: 184.168.225.59    Database: dbvivamexico
-- ------------------------------------------------------
-- Server version	5.0.96-log

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
-- Table structure for table `Ep`
--

DROP TABLE IF EXISTS `Ep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ep` (
  `id` int(11) NOT NULL auto_increment,
  `img_link` varchar(100) default NULL,
  `link` varchar(100) default NULL,
  `tipo` varchar(3) default NULL,
  `nombre` varchar(50) default NULL,
  `codigo` varchar(20) default NULL,
  `educacion` varchar(20) default NULL,
  `programa` varchar(20) default NULL,
  `inicia` datetime default NULL,
  `pais` varchar(20) default NULL,
  `email_ep` varchar(50) default NULL,
  `email_man` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ep`
--

LOCK TABLES `Ep` WRITE;
/*!40000 ALTER TABLE `Ep` DISABLE KEYS */;
INSERT INTO `Ep` VALUES (1,'images/eps/test.png','google.com','Vol','Test','1231231','mkt','Education','2014-01-21 16:00:00','Albania','test','test');
/*!40000 ALTER TABLE `Ep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tn`
--

DROP TABLE IF EXISTS `Tn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tn` (
  `id` int(11) NOT NULL auto_increment,
  `tipo` varchar(3) default NULL,
  `codigo` varchar(20) default NULL,
  `proyecto` varchar(30) default NULL,
  `nombre` varchar(50) default NULL,
  `link` varchar(100) default NULL,
  `comite` varchar(20) default NULL,
  `estado` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tn`
--

LOCK TABLES `Tn` WRITE;
/*!40000 ALTER TABLE `Tn` DISABLE KEYS */;
/*!40000 ALTER TABLE `Tn` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-15 12:33:38
