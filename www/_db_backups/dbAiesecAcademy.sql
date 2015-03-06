-- MySQL dump 10.13  Distrib 5.5.19, for Linux (x86_64)
--
-- Host: 68.178.143.69    Database: dbAiesecAcademy
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
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `video_link` varchar(50) DEFAULT NULL,
  `pres_link` varchar(50) DEFAULT NULL,
  `audio_link` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `num_clicks` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (1,'AD: Trainee Management - GIP','Having trainees in our LCs is not only a joy but a huge responsibility. To know deeply how to manage their stay in Mexico with the highest quality, read throughly the following booklet.','','30233679','','2014-02-17 14:11:47',0),(2,'AD: Trainee Management - GCDP','Having trainees in our LCs is not only a joy but a huge responsibility. To know deeply how to manage their stay in Mexico with the highest quality, read throughly the following booklet.','','30233680','','2014-02-17 14:11:47',0),(3,'Alumni: BoA and SG generation, implementation & ma','','M7BEpKRou88','29154038','','2014-02-17 14:11:47',0),(4,'Alumni: LLC Implementation and Engagement','','EUBurLXDMmE','29736486','https://www.dropbox.com/s/wxota9379208v51/LLC%20Implementation.mp3','2014-02-17 14:11:47',0),(5,'Core: GMail Label Tutorials','','','30540080','','2014-02-17 14:11:47',0),(6,'Core: AIESEC Experience','','','30233738','','2014-02-17 14:11:47',0),(7,'Core: How to create a MyAiesec.net Account','','itJmk6Q_cNo','30824299','','2014-02-17 14:11:47',0),(8,'Core: How to consolidate a BoA','','xXR81lJbOzQ','','','2014-02-17 14:11:47',0),(9,'Core: How to create a PODIO account','','igj2fNeMigs','','','2014-02-17 14:11:47',0),(10,'Core: How to design the perfect implementation str','','lXox3W2oWSo','','','2014-02-17 14:11:47',0),(11,'Core: University Approach','','VORgHstEfZ0','','','2014-02-17 14:11:47',0),(12,'ER: How to do a call','','dcfxJO69peA','30233781','https://www.dropbox.com/s/njpa4rv2ifdq4mo/How%20to%20Do%20a%20Call%7E1.mp3','2014-02-17 14:11:47',0),(13,'ER: How to get a succesful meeting','','','30233782','','2014-02-17 14:11:47',0),(14,'ER: Meet your Product','','ECORo3ZCOVc','30233780','','2014-02-17 14:11:47',0),(15,'iGCDP: Raising a TN Form (ICX)','','','30233821','','2014-02-17 14:11:47',0),(16,'iGCDP: RaMaRe','','','30233820','','2014-02-17 14:11:47',0),(17,'iGCDP: Selling to NGOs','','','30233822','','2014-02-17 14:11:47',0),(18,'iGCDP: ABC of Exchange','','','30233823','','2014-02-17 14:11:47',0),(19,'iGIP: Raising a TN Form (ICX)','','','30233821','','2014-02-17 14:11:47',0),(20,'iGIP: Auditing Process and Podio','','3EOrRJhhr74','','','2014-02-17 14:11:47',0),(21,'iGIP: Matching in myaiesec.net','','NMSA_li06ak','','','2014-02-17 14:11:47',0),(22,'iGIP: Company and Trainee/ Acceptance Note','','jVxX_zrobjk','','','2014-02-17 14:11:47',0),(23,'iGIP: RA-MA-RE Process in myaiesec.net','','','30233909','','2014-02-17 14:11:47',0),(24,'iGIP: Change TN from New to Available','','GgS2-W20XOY','','','2014-02-17 14:11:47',0),(25,'Mkt: MyAIESEC.net: How to create teams, wikis and ','','','30233926','','2014-02-17 14:11:47',0),(26,'Mkt: MyAIESEC.net: How to manage the platform','','','30233927','','2014-02-17 14:11:47',0),(27,'Mkt: MyAIESEC.net: Common Problems','','','30233925','','2014-02-17 14:11:47',0),(28,'oGCDP: PODIO Basics I (OGX)','','','30236327','','2014-02-17 14:11:47',0),(29,'oGCDP: PODIO Basics II (OGX)','','','30236328','','2014-02-17 14:11:47',0),(30,'oGCDP: PODIO Practical (OGX)','','','30236329','','2014-02-17 14:11:47',0),(31,'oGCDP: oGCDP MANUAL (OGX)','This manual includes all the steps and details you should know about management of your EPs through national OGX platfrom on Podio.','','31395451','','2014-02-17 14:11:47',0),(32,'oGCDP: International cooperation','Learn how to improve your results and quality of EP service through international cooperation.','ELPmnwHVfJs','','','2014-02-17 14:11:47',0),(33,'oGCDP: MyAIESEC.net','Learn the main parts of myaiesec.net for successful management of your LC data and exchange operations.','','30237178','','2014-02-17 14:11:47',0),(34,'oGCDP: Product understanding','Welcome to Global Citizen team! Watch the video to know all you need about our product.','b3YSlaLCxBo','','','2014-02-17 14:11:47',0),(35,'oGCDP: X processes: publicity & raising','Are you starting your oGCDP recruitment? Learn how to make publicity and start proces with your EP!','k9pZtaieLUA','','','2014-02-17 14:11:47',0),(36,'oGCDP: Exchange Management','','','30237179','https://www.dropbox.com/s/iqazbfmwrlicmkr/Exchange%20Management.mp3','2014-02-17 14:11:47',0),(37,'oGIP: PODIO Basics I (OGX)','First part of PODIO tool when you can get the informations about how to use the OGX tool.','','30236327','','2014-02-17 14:11:47',0),(38,'oGIP: PODIO Basics II (OGX)','Second part of PODIO tool when you can get the informations about how to use the OGX tool.','','30236328','','2014-02-17 14:11:47',0),(39,'oGIP: PODIO OGX Management (OGX)','Welcome in advanced level of podio for OGX workspace.','','30236329','','2014-02-17 14:11:47',0),(40,'oGIP: PODIO MANUAL (OGX)','All the terms and rules of using PODIO. Read it at least once','','30236330','','2014-02-17 14:11:47',0),(41,'oGIP: How to be the best EP manager','Video and presentations for better understanding of your role as EP manager. Starting with rules to expectation settings.','4wSZcHl2pdg','30237222','','2014-02-17 14:11:47',0),(42,'oGIP: Audit','All the knowledge needed to ensure safety of your EPs and no fines in your LC.','','30237219','','2014-02-17 14:11:47',0),(43,'oGIP: OPS agenda','How to make a perfect OPS accoding to national standards? By using national agenda! Enjoy','hrx9hjjuTwE','30237221','','2014-02-17 14:11:47',0),(44,'oGIP: what is Global Talents','The short explanation what is program Global Talents about. Watch it once and besure that you fully understand what are we doing in oGIP','_aXqc6SfucM','','','2014-02-17 14:11:47',0),(45,'oGIP: Engineering segent','Engineering is one of the focus of this term. Make sure you understand what is it about, which subsegments are we recruiting and to which country.','vj6cID07ZGA','','','2014-02-17 14:11:47',0),(46,'oGIP: Exchange Processes','Basic manual about each step of oGIP. Make sure that all the levels -from newbie to LCVP -have common understaning.','','30237220','','2014-02-17 14:11:47',0),(47,'oGIP: How to search for internship','Manual for you and for EPs to make sure you explore my@net in the proper way and you can find internship of your dream.','Y8NkBVQ2Yvo','','','2014-02-17 14:11:47',0),(48,'oGIP: XPP','Exchange Program Policies is the most important document in AIESEC. This video will help you to understand how to ensure safety of your EPs and what are the basic rules of oGIP','AIaxZRrfWX8','','','2014-02-17 14:11:47',0),(49,'oGIP: How to fill EP AN','','q27E-CbXwyQ','','','2014-02-17 14:11:47',0),(50,'TM: Global Competency Model (advanced)','The Global Competency Model describes the competency that AIESEC strives for and that we should look for and develop in the members of the organisation','bq0x0t-VeMg','','','2014-02-17 14:11:47',0),(51,'TM: Goal Setting','This is a training on how to set goal in the most effective way. It dicusses the cocnept of SMART goal setting for success','Uy6qGhki-K4','','','2014-02-17 14:11:47',0),(52,'TM: Pipeline Management','Pipeline Management is a training on how to manage the flow of members from one role to another withing AIESEC. It helps you undesrtand how to handle the open positions and have the right people in the right roles','','30237300','','2014-02-17 14:11:47',0),(53,'TM: PODIO','This training explains you how to use podio in the TM area. Podio is mainly used for recruitment and being aware of this will help a lot to gather all the data in the same place and make the recruitment more professional','9AqYLgF-Ah8','','','2014-02-17 14:11:47',0),(54,'TM: Talent Education','This training explains the purpose of education and how to use it in your LCs.','LWIMvXR-Yq4','30237298','','2014-02-17 14:11:47',0),(55,'TM: TM Role &12 TM Process Introduction','Find an explanation of the basics of AIESEC and discover what are the processes that AIESEC runs on a local level.','hxyUPsXVSX0','','','2014-02-17 14:11:47',0),(56,'TM: Transition & Knowledge Management','Here you can find a tutorial on how to do a transition in your LC. this explains you what is the best way to pass knowledge from one member to another when changing positions','6VGUv1qKZSk','','','2014-02-17 14:11:47',0),(57,'TM: Induction','This training gives all the knowledge you need to do a member induction. It will enable you to be prepared for when new members join the organisatoin','','30237296','','2014-02-17 14:11:47',0),(58,'TM: Recruitment','Click here to review the recruitment process for TM. Get an explanation of the key steps in recruitment new members.','7C9Hr1UttqI','30237297','','2014-02-17 14:11:47',0),(59,'TM: ABC Talent Management','Are you new in TM? Get to know all the basics of the area!','4SRjmD7Utxs','','','2014-02-17 14:11:47',0),(60,'How to Approve Mail','','','30824300','','2014-02-17 14:11:47',0),(61,'How to assign Roles','','','30824305','','2014-02-17 14:11:47',0),(62,'How to Create Teams','','','30824302','','2014-02-17 14:11:47',0),(63,'How to search and edit Teams','','','30824301','','2014-02-17 14:11:47',0),(64,'How to make an Email','','','30824298','','2014-02-17 14:11:47',0),(65,'How to raise a Form','','','30824303','','2014-02-17 14:11:47',0),(66,'AD: AD for Dummies','If you are not completely sure of what is AD or how it works you must take a look at this booklet.','','30822946','','2014-02-17 14:11:47',0),(67,'oGIP: IT segment','','IFslvl0fLQ8','','','2014-02-17 14:11:47',0),(68,'oGIP: Marketing segment','','ucL12wtzF-E','','','2014-02-17 14:11:47',0);
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `top_curso`
--

DROP TABLE IF EXISTS `top_curso`;
/*!50001 DROP VIEW IF EXISTS `top_curso`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `top_curso` (
  `id` int(11),
  `fecha` datetime,
  `num_clicks` int(11)
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tour`
--

DROP TABLE IF EXISTS `tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour`
--

LOCK TABLES `tour` WRITE;
/*!40000 ALTER TABLE `tour` DISABLE KEYS */;
INSERT INTO `tour` VALUES (1,'Get to know the AIESEC Platforms'),(2,'Get the AIESEC Full Scoop'),(3,'New LCP Tour');
/*!40000 ALTER TABLE `tour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour_cursos`
--

DROP TABLE IF EXISTS `tour_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tour_cursos` (
  `idTour` int(11) NOT NULL DEFAULT '0',
  `idCurso` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTour`,`idCurso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour_cursos`
--

LOCK TABLES `tour_cursos` WRITE;
/*!40000 ALTER TABLE `tour_cursos` DISABLE KEYS */;
INSERT INTO `tour_cursos` VALUES (1,6),(1,8),(1,24),(1,26),(1,60),(2,13),(2,17),(2,34),(2,44),(2,59),(2,61),(3,1),(3,9),(3,10),(3,12),(3,62);
/*!40000 ALTER TABLE `tour_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `top_curso`
--

/*!50001 DROP TABLE IF EXISTS `top_curso`*/;
/*!50001 DROP VIEW IF EXISTS `top_curso`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`dbAiesecAcademy`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `top_curso` AS select `curso`.`id` AS `id`,`curso`.`fecha` AS `fecha`,`curso`.`num_clicks` AS `num_clicks` from `curso` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-15 12:34:40
