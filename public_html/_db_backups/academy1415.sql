-- MySQL dump 10.13  Distrib 5.5.19, for Linux (x86_64)
--
-- Host: 68.178.217.4    Database: academy1415
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
-- Table structure for table `badges`
--

DROP TABLE IF EXISTS `badges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `badges` (
  `badge_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) DEFAULT NULL,
  `name` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`badge_id`),
  KEY `fk_badges_faculties_idx` (`faculty_id`),
  CONSTRAINT `fk_badges_faculties` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `badges`
--

LOCK TABLES `badges` WRITE;
/*!40000 ALTER TABLE `badges` DISABLE KEYS */;
/*!40000 ALTER TABLE `badges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` tinytext,
  `points` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`course_id`),
  KEY `fk_courses_faculties_idx` (`faculty_id`),
  CONSTRAINT `fk_courses_faculties` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (3,1,'Talent Planning','The basics of the TM Process',20),(4,2,'Sales','Sales Course',40),(5,11,'GCDP Flow','How to implement the stages of the GCDP Customer Flow on the GIS',100);
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses_contain_resources`
--

DROP TABLE IF EXISTS `courses_contain_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses_contain_resources` (
  `courses_course_id` int(11) NOT NULL,
  `resources_resource_id` int(11) NOT NULL,
  PRIMARY KEY (`courses_course_id`,`resources_resource_id`),
  KEY `fk_courses_contain_resources_resources_idx` (`resources_resource_id`),
  KEY `fk_courses_contrain_resources_courses_idx` (`courses_course_id`),
  CONSTRAINT `fk_courses_contain_resources_courses` FOREIGN KEY (`courses_course_id`) REFERENCES `courses` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_courses_contain_resources_resources` FOREIGN KEY (`resources_resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses_contain_resources`
--

LOCK TABLES `courses_contain_resources` WRITE;
/*!40000 ALTER TABLE `courses_contain_resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `courses_contain_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses_require_courses`
--

DROP TABLE IF EXISTS `courses_require_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses_require_courses` (
  `base_course_id` int(11) NOT NULL,
  `required_course_id` int(11) NOT NULL,
  PRIMARY KEY (`base_course_id`,`required_course_id`),
  KEY `fk_courses_require_courses_courses2_idx` (`required_course_id`),
  KEY `fk_courses_require_courses_courses1_idx` (`base_course_id`),
  CONSTRAINT `fk_courses_require_courses_courses1` FOREIGN KEY (`base_course_id`) REFERENCES `courses` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_courses_require_courses_courses2` FOREIGN KEY (`required_course_id`) REFERENCES `courses` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses_require_courses`
--

LOCK TABLES `courses_require_courses` WRITE;
/*!40000 ALTER TABLE `courses_require_courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `courses_require_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entities`
--

DROP TABLE IF EXISTS `entities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entities` (
  `entity_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`entity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entities`
--

LOCK TABLES `entities` WRITE;
/*!40000 ALTER TABLE `entities` DISABLE KEYS */;
INSERT INTO `entities` VALUES (1,'Mexico'),(2,'Aguascalientes'),(3,'Ciudad Victoria'),(4,'Celaya'),(5,'Chihuahua'),(6,'Ciudad JuÃ¡rez'),(7,'Ciudad ObregÃ³n'),(8,'Cuernavaca'),(9,'Guadalajara'),(10,'Guanajuato'),(11,'Hermosillo'),(12,'IPN'),(13,'ITAM'),(14,'Estado de MÃ©xico'),(15,'Monterrey'),(16,'Tampico'),(17,'Toluca'),(18,'Laguna'),(19,'LeÃ³n'),(20,'MÃ©rida'),(21,'Oaxaca'),(22,'Puebla'),(23,'QuerÃ©taro'),(24,'Santa Fe'),(25,'Sinaloa'),(26,'Tabasco'),(27,'UAEMEX'),(28,'UDEM'),(29,'ULSA'),(30,'UNAM'),(31,'UP'),(32,'Veracruz'),(33,'Zacatecas');
/*!40000 ALTER TABLE `entities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entities_have_users`
--

DROP TABLE IF EXISTS `entities_have_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entities_have_users` (
  `entity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `portfolio` varchar(10) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`entity_id`,`user_id`),
  KEY `fk_entities_have_users_users_idx` (`user_id`),
  KEY `fk_entities_have_users_entities_idx` (`entity_id`),
  CONSTRAINT `fk_entities_have_users_entities` FOREIGN KEY (`entity_id`) REFERENCES `entities` (`entity_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_have_users_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entities_have_users`
--

LOCK TABLES `entities_have_users` WRITE;
/*!40000 ALTER TABLE `entities_have_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `entities_have_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expert_users`
--

DROP TABLE IF EXISTS `expert_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expert_users` (
  `user_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`faculty_id`),
  KEY `fk_expert_users_faculties_idx` (`faculty_id`),
  KEY `fk_expert_users_users_idx` (`user_id`),
  CONSTRAINT `fk_expert_users_faculties` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_expert_users_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expert_users`
--

LOCK TABLES `expert_users` WRITE;
/*!40000 ALTER TABLE `expert_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `expert_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculties` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculties`
--

LOCK TABLES `faculties` WRITE;
/*!40000 ALTER TABLE `faculties` DISABLE KEYS */;
INSERT INTO `faculties` VALUES (1,'TM'),(2,'iGIP'),(3,'iGCDP'),(4,'oGIP'),(5,'oGCDP'),(6,'Finance'),(7,'MKT'),(8,'AD'),(9,'Alumni'),(10,'ER'),(11,'GIS'),(12,'Leadership');
/*!40000 ALTER TABLE `faculties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(45) NOT NULL,
  `data_type` varchar(45) NOT NULL,
  PRIMARY KEY (`option_id`),
  KEY `fk_options_questions_idx` (`question_id`),
  CONSTRAINT `fk_options_questions` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `type` varchar(45) NOT NULL,
  `default_answer` varchar(255) DEFAULT NULL,
  `default_data_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`question_id`),
  KEY `fk_questions_resources_idx` (`resource_id`),
  CONSTRAINT `fk_questions_resources` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` tinytext,
  `type` char(1) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`request_id`),
  KEY `fk_requests_users_idx` (`user_id`),
  KEY `fk_requests_faculties_idx` (`faculty_id`),
  CONSTRAINT `fk_requests_faculties` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_requests_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `description` tinytext,
  `creation_date` date NOT NULL,
  `last_update_date` date NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `points` smallint(5) unsigned DEFAULT '0',
  `created_by_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`resource_id`),
  KEY `fk_resources_users_idx` (`created_by_id`),
  CONSTRAINT `fk_resources_users` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resources`
--

LOCK TABLES `resources` WRITE;
/*!40000 ALTER TABLE `resources` DISABLE KEYS */;
INSERT INTO `resources` VALUES (1,'www.aiesecacademy.aiesecmexico.org.mx','Link del sitio de Aiesec Academy ','2014-08-04','2014-08-04',0,10,NULL);
/*!40000 ALTER TABLE `resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resources_require_resources`
--

DROP TABLE IF EXISTS `resources_require_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resources_require_resources` (
  `base_resource_id` int(11) NOT NULL,
  `required_resource_id` int(11) NOT NULL,
  PRIMARY KEY (`base_resource_id`,`required_resource_id`),
  KEY `fk_resources_require_resources_resources2_idx` (`required_resource_id`),
  KEY `fk_resources_require_resources_resources1_idx` (`base_resource_id`),
  CONSTRAINT `fk_resources_require_resources_resources1` FOREIGN KEY (`base_resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resources_require_resources_resources2` FOREIGN KEY (`required_resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resources_require_resources`
--

LOCK TABLES `resources_require_resources` WRITE;
/*!40000 ALTER TABLE `resources_require_resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `resources_require_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_logs`
--

DROP TABLE IF EXISTS `session_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_logs` (
  `session_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`session_log_id`),
  KEY `fk_session_logs_users_idx` (`user_id`),
  CONSTRAINT `fk_session_logs_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_logs`
--

LOCK TABLES `session_logs` WRITE;
/*!40000 ALTER TABLE `session_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `is_editor` tinyint(1) NOT NULL,
  `is_banned` tinyint(1) NOT NULL,
  `registration_date` date NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sergio.garcia@aiesec.net','Sergio','Garcia',1,0,'2014-07-18'),(2,'sabina.malacon@aiesec.net','Sabina','MalacÃ³n',1,0,'2014-07-18'),(3,'mario.arambula@aiesec.net','Mario','ArÃ¡mbula',1,0,'2014-07-18'),(4,'andy.gamino@aiesec.net','Andrea','GamiÃ±o',0,0,'2014-07-18'),(5,'enrique.bistrain@aiesec.net','Enrique','Bistrain',0,0,'2014-07-18'),(6,'daniel.pineda@aiesec.net','Daniel','Pineda',0,1,'2014-07-18'),(7,'erick.cuadrado@aiesec.net','Erick ','Cuadrado',1,0,'2014-08-10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_complete_resources`
--

DROP TABLE IF EXISTS `users_complete_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_complete_resources` (
  `user_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `note` decimal(5,2) NOT NULL,
  `stamp` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`resource_id`),
  KEY `fk_users_complete_resources_resources_idx` (`resource_id`),
  KEY `fk_users_complete_resources_users_idx` (`user_id`),
  CONSTRAINT `fk_users_complete_resources_resources` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_complete_resources_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_complete_resources`
--

LOCK TABLES `users_complete_resources` WRITE;
/*!40000 ALTER TABLE `users_complete_resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_complete_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_get_badges`
--

DROP TABLE IF EXISTS `users_get_badges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_get_badges` (
  `user_id` int(11) NOT NULL,
  `badge_id` int(11) NOT NULL,
  `stamp` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`badge_id`),
  KEY `fk_users_get_badges_badges_idx` (`badge_id`),
  KEY `fk_users_get_badges_users_idx` (`user_id`),
  CONSTRAINT `fk_users_get_badges_badges` FOREIGN KEY (`badge_id`) REFERENCES `badges` (`badge_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_get_badges_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_get_badges`
--

LOCK TABLES `users_get_badges` WRITE;
/*!40000 ALTER TABLE `users_get_badges` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_get_badges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_view_resources`
--

DROP TABLE IF EXISTS `users_view_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_view_resources` (
  `user_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `count` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`resource_id`),
  KEY `fk_users_view_resources_resources_idx` (`resource_id`),
  KEY `fk_users_view_resources_users_idx` (`user_id`),
  CONSTRAINT `fk_users_view_resources_resources` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_view_resources_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_view_resources`
--

LOCK TABLES `users_view_resources` WRITE;
/*!40000 ALTER TABLE `users_view_resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_view_resources` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-15 12:36:59
