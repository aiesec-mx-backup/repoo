-- MySQL dump 10.13  Distrib 5.5.19, for Linux (x86_64)
--
-- Host: 68.178.143.145    Database: aiesecipn
-- ------------------------------------------------------
-- Server version	5.5.33-log

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
-- Table structure for table `foda`
--

DROP TABLE IF EXISTS `foda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foda` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `fortalezas` varchar(250) NOT NULL,
  `debilidades` varchar(250) NOT NULL,
  `oportunidades` varchar(250) NOT NULL,
  `amenazas` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foda`
--

LOCK TABLES `foda` WRITE;
/*!40000 ALTER TABLE `foda` DISABLE KEYS */;
INSERT INTO `foda` VALUES (1,'cesar.seguracruz@aiesec.net','@Fortaleza Amarilla@Fuerza del Futuro','@Debilidad Negra@Debilidad Naranja@Debilidad PÃºrpura','@Oportunidades Doradas@Oportunidad Dorada','@Amenaza Sin Color@Amenaza Guinda@Amenaza Ruby'),(2,'prueba@aiesec.net','@prueba','@prueba','@prueba','@prueba'),(3,'Test@aiesec.net','@F','@D@Mala salud','@O','@A'),(4,'juan.test@aiesec.net','@F','@D@Mala salud','@O','@A'),(5,'test@aiesec.net','@72272@27@27','@27@27@272','@27@27@27','@metas'),(6,'zvrol@hotmail.com','@F','','@27@27','@A'),(7,'caro.mendoza@aiesec.net','@Apertura al cambio @Inteligencia emocional @Conocimientos multidisciplinarios','@Trabajo mejor bajo presiÃ³n@Perfeccionista@Autoexigente','@Aprender nuevos idiomas@Conocer otras formas de trabajo@Red de contactos ','@Tramites de titulaciÃ³n@Retraso en el periodo de inscripciones@Condiciones laborales'),(8,'miriam.cigarroave t','','','',''),(9,'jess.pureco@aiesec.net','@dedicada@impulsiva','@asertiva@buscar un empleo en provincia','','@Hacer que oGCDP en IPN  sea un Ã¡rea capaz de aprender y operar nuevos procesos, sin de jar de descuidar la calidad de las experiencias de liderazgo que brinda.'),(10,'michel.vellve@aiesec.net','@Responsable@Persevereante','@Obstinado','',''),(11,'miguel.hernandezt@aiesec.net','','','',''),(12,'luisjavier.castillo@aiesec.net','@Optimista@Inteligente@Honesto','@Perfeccionista@Reservado@Obsesivo','@AIESEC@Universidad@Idiomas','@Crisis Financiera en MÃ©xico@Competencia Profesional@Problemas PolÃ­ticos que afectan a la educaciÃ³n'),(13,'david.jara@aiesec.net','@Perseverante@Responsable@DinÃ¡mico','@Timidez@Red de contactos pequeÃ±a@Dependiente','@Crecimiento de campo laboral@Estudio de posgrado@Aperture de negocios','@Competencia laboral@Fracaso laboral@Inestabilidad econÃ³mica'),(14,'nayelli.zamorano@aiesec.net','@Honesta@Persistente@Paciente','@DistraÃ­da@A veces Impuntual@Indecisa','@Fijarme en los detalles@Organizar tiempos@Analizar la situaciÃ³n','@SaturaciÃ³n de trabajo@Exceso de confianza@Dejarme llevar por los sentimientos'),(15,'paola.espinosajimenez@aiesec.net','@Puntualidad@Responsabilidad@Disciplina','@PÃ¡nico escÃ©nico@Perfeccionismo','@Instituciones de investigaciÃ³n@AIESEC@Instituciones de educaciÃ³n superior','@Salud@Competencia laboral@Desempleo'),(16,'','','','',''),(17,'jorge.illescas@aiesec.net','@No@me@gusta','@hacer@fodas.@Prefiero','@comenzar a@hacer las @cosas','@que tengo@que @hacer.');
/*!40000 ALTER TABLE `foda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master_user`
--

DROP TABLE IF EXISTS `master_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master_user` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_user`
--

LOCK TABLES `master_user` WRITE;
/*!40000 ALTER TABLE `master_user` DISABLE KEYS */;
INSERT INTO `master_user` VALUES ('cesar.seguracruz@aiesec.net','arigato1',1),('develop.ipn@aiesec.org.mx','koperus17',2);
/*!40000 ALTER TABLE `master_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `self_awareness`
--

DROP TABLE IF EXISTS `self_awareness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `self_awareness` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `suenos` varchar(250) DEFAULT NULL,
  `intereses` varchar(250) DEFAULT NULL,
  `actividades` varchar(250) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `self_awareness`
--

LOCK TABLES `self_awareness` WRITE;
/*!40000 ALTER TABLE `self_awareness` DISABLE KEYS */;
INSERT INTO `self_awareness` VALUES (1,'cesar.seguracruz@aiesec.net','SueÃ±os Morados','Intereses Azules','Actividades Rojas','2014-11-17 21:50:15'),(2,'prueba@aiesec.net','sadjskdjf','prueba','prueba','2014-11-26 05:19:04'),(3,'Test@aiesec.net','Ejemplo de SueÃ±os','Ejemplo de Intereses','Estudiar por ejemplo.','2014-11-26 15:34:43'),(4,'juan.test@aiesec.net','Ejemplo de SueÃ±os','Ejemplo de Intereses','Estudiar por ejemplo.','2014-11-26 15:50:06'),(5,'test@aiesec.net','27','27','27','2014-11-28 05:58:01'),(6,'zvrol@hotmail.com','Ejemplo de SueÃ±os','Ejemplo de Intereses','Estudiar por ejemplo.','2014-12-04 22:33:13'),(7,'caro.mendoza@aiesec.net','Ser un agente de cambio, que tenga la capacidad de inspirar a otros a la acciÃ³n.','Consolidar mi segundo emprendimiento social, dirigido al fortalecimiento de habilidades ejecutivas en mujeres emprendedores y en niÃ±os para fortalecer sus ideas de emprendimiento. ','VinculaciÃ³n en COPARMEX JÃ³venes, CEO de ASEMET,SC, Equipo fundador de Voluntarios verdes, Cleantech Challenge MÃ©xico, Blogger ','2014-12-05 06:09:23'),(8,'miriam.cigarroave t','','','','2014-12-07 19:01:21'),(9,'jess.pureco@aiesec.net','Deseo lograr todos los objetivos que me proponga para llegar a una meta final, la cual es mi why de todo lo que hago, en compaÃ±Ã­a de los que amo.','Aprender a tratar a las personas, aprender idiomas, ayudar a los que amo a logar sus metas.','trabajo medio tiempo, estudio el Ãºltimo semestre de mi carreara y paso tiempo con mi familia.','2014-12-08 02:01:59'),(10,'michel.vellve@aiesec.net','Ser feliz y tener una vida prÃ³spera con mi familia.','Ser exitoso y dejar un legado positivo a los que me rodean.','Soy Google Student Ambassador, estudiante de ingenierÃ­a en informÃ¡tica, emprendedor y en algunas ocasiones DJ.','2014-12-08 04:29:00'),(11,'miguel.hernandezt@aiesec.net','Hacer una practica en el extranjero','Seguir ampliando mi conocimiento','Empleo formal y deportes','2014-12-09 04:20:30'),(12,'luisjavier.castillo@aiesec.net','Tengo muchos sueÃ±os.. uno a corto plazo es realizar movilidad acadÃ©mica en Francia ya que me encantarÃ­a vivir en otro paÃ­s.. Otro sueÃ±o es crear una empresa basada en biotecnologÃ­a..','Me gusta mucho el canto, el baile, el teatro, los idiomas, la trova, viajar, me gusta la biotecnologÃ­a, conocer gente nueva, aprender siempre algo diferente que sea Ãºtil, me encanta la geografÃ­a y los animales.','Estudio tres idiomas, estudio la carrera de biotecnologÃ­a y soy coordinador de finanzas de una asociaciÃ³n.','2014-12-09 06:48:28'),(13,'david.jara@aiesec.net','Ser dueÃ±o de un gran negocio','BioingenierÃ­a, biotecnologÃ­a, numismÃ¡tica, fitness , dietÃ©tica, moda y tendencia ','Estudiante de Ing., estudio de inglÃ©s, practicante de pesas y apoyo en negocio familiar.','2014-12-10 01:37:54'),(14,'nayelli.zamorano@aiesec.net','Aportar una gran idea al mundo, tener mi propia empresa, ayudar a las personas','Los idiomas, las diferentes culturas, la mÃºsica, los eventos.','Toco la baterÃ­a, el piano, gamelan, el violÃ­n, Bailarina, Salgo a pasear, trabajo, busco nuevas oportunidades','2014-12-10 06:29:54'),(15,'paola.espinosajimenez@aiesec.net','Dentro de AIESEC mis sueÃ±os son ayudar a que cade vez mÃ¡s personas desarrollen sus habilidades de liderazgo y que tengan experiencias positivas que los hagan emprendedores.','Marketing, ventas y creaciÃ³n de contactos. ','Estudio en la universidad y estudio idiomas por mi cuenta.','2014-12-11 01:09:59'),(16,'','','','','2014-12-15 00:17:48'),(17,'jorge.illescas@aiesec.net','Quiero ser dueÃ±o de un restaurante de comida mexicana en el extranjero.  Quiero tener una casa propia y una familia. Quiero desarrollarme profesionalmente en el extranjero.','Me interesan las TI, el desarrollo de software, los videojuegos, la cocina mexicana, el manga','Desarrollo software para Sidetec S. de R.L. desde hace 2 aÃ±os. Me capacito constantemente para estar al dÃ­a en los lenguajes y metodologÃ­as de programaciÃ³n que se usan en el desarrollo de software. Toco la guitarra, practico PIU amateur y tambiÃ©','2014-12-15 19:22:25');
/*!40000 ALTER TABLE `self_awareness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timeline`
--

DROP TABLE IF EXISTS `timeline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timeline` (
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(40) DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `meta` varchar(250) DEFAULT NULL,
  `3m` varchar(250) NOT NULL,
  `6m` varchar(250) NOT NULL,
  `12m` varchar(250) NOT NULL,
  `24m` varchar(250) NOT NULL,
  `60m` varchar(250) NOT NULL,
  `120m` varchar(250) NOT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timeline`
--

LOCK TABLES `timeline` WRITE;
/*!40000 ALTER TABLE `timeline` DISABLE KEYS */;
INSERT INTO `timeline` VALUES ('2014-11-17 21:50:15','cesar.seguracruz@aiesec.net',0,' Ser VP ','  ',' Hacer un ttt ','  ','  ','  ','  ',1),('2014-11-17 21:50:15','cesar.seguracruz@aiesec.net',1,' MEta 21 ','  ','  ','  ','  ','  ','  ',2),('2014-11-17 21:50:15','cesar.seguracruz@aiesec.net',1,' Meta 22 ','  ','  ','  ','  ','  ','  ',3),('2014-11-17 21:50:15','cesar.seguracruz@aiesec.net',1,'  ','  ','  ','  ','  ','  ',' 120m ',4),('2014-11-17 21:50:15','cesar.seguracruz@aiesec.net',2,' Meta ',' 3m ',' 6m ',' 12m ',' 24m ',' 60m ',' 120m ',5),('2014-11-26 15:34:43','Test@aiesec.net',0,' Algo ','  ','  ','  ','  ','  ','  ',6),('2014-11-26 15:34:43','Test@aiesec.net',1,'  ',' Algo a 3m ','  ','  ','  ','  ','  ',7),('2014-11-26 15:34:43','Test@aiesec.net',2,' Personal  ','  ','  ','  ',' 2 aÃ±os ','  ','  ',8),('2014-11-26 15:50:06','juan.test@aiesec.net',0,' Algo ','  ','  ','  ','  ','  ','  ',9),('2014-11-26 15:50:06','juan.test@aiesec.net',1,'  ',' Algo a 3m ','  ','  ','  ','  ','  ',10),('2014-11-26 15:50:06','juan.test@aiesec.net',2,' Personal  ','  ','  ','  ',' 2 aÃ±os ','  ','  ',11),('2014-11-28 05:58:01','test@aiesec.net',0,' 3m ',' 6m  ',' 12m ',' 24m ',' 60m ',' 120m ',' 0 ',12),('2014-11-28 05:58:01','test@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 0 ',13),('2014-11-28 05:58:01','test@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 0 ',14),('2014-11-28 05:58:01','test@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 1 ',15),('2014-11-28 05:58:01','test@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 1 ',16),('2014-11-28 05:58:01','test@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 1 ',17),('2014-11-28 05:58:01','test@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 2 ',18),('2014-11-28 05:58:01','test@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 2 ',19),('2014-11-28 05:58:01','test@aiesec.net',3,'  ','  ','  ','  ','  ','  ',' 2 ',20),('2014-12-04 22:33:13','zvrol@hotmail.com',0,' Algo ','  ',' asd ',' h ',' h ',' h ',' h ',21),('2014-12-04 22:33:13','zvrol@hotmail.com',0,' h ',' h ',' h ',' h ',' hh ',' h ',' h ',22),('2014-12-04 22:33:13','zvrol@hotmail.com',0,' h ',' h ',' h ',' h ',' h ',' h ',' h ',23),('2014-12-04 22:33:13','zvrol@hotmail.com',1,' u ',' u ',' u ','  ',' u ',' u ',' u ',24),('2014-12-04 22:33:13','zvrol@hotmail.com',1,' i ',' i ',' i ',' i ',' i ',' i ',' i ',25),('2014-12-04 22:33:13','zvrol@hotmail.com',1,' l ',' l ',' l ',' l ',' l ',' l ',' l ',26),('2014-12-04 22:33:13','zvrol@hotmail.com',2,' l ',' l ',' l ',' ll ',' l ',' l ',' l ',27),('2014-12-04 22:33:13','zvrol@hotmail.com',2,' xx ',' x ',' x ',' x ',' x ',' x ',' x ',28),('2014-12-04 22:33:13','zvrol@hotmail.com',0,' x ',' x ',' x ',' x ',' x ',' x ',' x ',29),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',0,' Ser OCP del 45 aniversario de AIESEC en IPN. ',' Consolidar las relaciones pendientes del 2014 con el Alumni.  ',' Concluir al 100% la planeaciÃ³n de intercambios e ingresos generados a partor del Alumni.  ',' Postularme como OCP del 45 Aniversario.  ','  ','  ','  ',30),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',0,' Ser LCP de AIESEC en IPN. ',' Asistir a CONAL. ',' Asistir a ILC Brazil.  ',' Presentar mi aplicaciÃ³n para LCP en  AIESEC IPN. ','  ','  ','  ',31),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',0,' Ser MCVP BD en AIESEC MÃ‰XICO u otra entidad de LATAM.  ',' Consolidarme como el mejor MCB de BD por 6 meses consecutivos.  ',' Presentar Dare! en ILC Brazil.  ',' Aplicar a MCVP BD.  ',' Aplicar a MCVP BD abroad.  ','  ','  ',32),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',1,' Ser Directora Nacional del Instituto para la Juventud, ',' Establecer relaciones con las entidades de juventud locales.  ',' Elaborar proyectos que resuelvas las necesidades de los jÃ³venes en los municipios de TecÃ¡mac y Ecatepec.  ',' Postularme como miembro del consejo honorario del IMEJ.  ',' Postularme como directora del Instituto nacional de juventud en TecÃ¡mac o Ecatepec.  ',' Ser Directora Nacional del Instituto para la Juventud, ','  ',33),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',1,' Consolidar mi iniciativa de emprendimiento social.  ',' Establecer un modelo de negocio que pueda garantizar la sustentabilidad financiera del proyecto.  ',' Aplicar para la vicepresidencia de COPARMEX en el Ã¡rea de Responsabilidad Social.  ',' Iniciar operaciones.  ',' Consolidarnos como la primera opciÃ³n para el emprendimiento social de jovenes y niÃ±os en el Estado de MÃ©xico.  ',' Consolidarnos como la primera opciÃ³n para el emprendimiento social de jovenes y niÃ±os en el paÃ­s.  ',' Consolidarnos como la primera opciÃ³n para el emprendimiento social de jovenes y niÃ±os en Latinoamerica.   ',34),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',1,' Obtener la certificaciÃ³n en ASEMET, SC. ',' Acudir a las oficinas de la entidad acreditadora y establecer un plan de trabajo.  ',' Obtener la acreditaciÃ³n.  ',' Pasar la visita de vigilancia con 0 no confirmidades. ',' Renovar la acreditaciÃ³n.  ','  ','  ',35),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',2,' Recibir mi titulo de la carrera de Ing, ',' Ir a la direcciÃ³n de profesiones a pedir el status de miis documentos.  ',' Dar seguimiento al trÃ¡mite y recoger mis documentos.  ','  ','  ','  ','  ',36),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',2,' Conluir la carrera en ComunicaciÃ³n diigital. ',' Aprobar el sexto semestre.  ',' Aprobar el septimo semestre.  ',' Aprobar el octavio semestre, y presentar tesis. ','  ','  ','  ',37),('2014-12-05 06:09:23','caro.mendoza@aiesec.net',2,' Estudiar una maestrÃ­a en Negocios, Mercadotecnia, GestiÃ³n de calidad, o EvaluaciÃ³n de proyectos de inversiÃ³n. ',' Concluir los trÃ¡mites para la obtenciÃ³n del titulo. ',' Aplicar a las convocatorias vigentes para el ingreso a la MaestrÃ­a.  ',' Concluir el primer semestre de la maestria.  ',' Concluir la maestrÃ­a y/o especialidad.  ',' Iniciar el proceso para iniciar un postgrado en el extranjero.  ','  ',38),('2014-12-07 19:01:21','miriam.cigarroave t',0,'  ','  ','  ','  ','  ','  ',' 0 ',39),('2014-12-07 19:01:21','miriam.cigarroave t',0,'  ','  ','  ','  ','  ','  ',' 0 ',40),('2014-12-07 19:01:21','miriam.cigarroave t',0,'  ','  ','  ','  ','  ','  ',' 0 ',41),('2014-12-07 19:01:21','miriam.cigarroave t',0,'  ','  ','  ','  ','  ','  ',' 1 ',42),('2014-12-07 19:01:21','miriam.cigarroave t',0,'  ','  ','  ','  ','  ','  ',' 1 ',43),('2014-12-07 19:01:21','miriam.cigarroave t',0,'  ','  ','  ','  ','  ','  ',' 1 ',44),('2014-12-07 19:01:21','miriam.cigarroave t',0,'  ','  ','  ','  ','  ','  ',' 2 ',45),('2014-12-07 19:01:21','miriam.cigarroave t',0,'  ','  ','  ','  ','  ','  ',' 2 ',46),('2014-12-07 19:01:21','miriam.cigarroave t',3,'  ','  ','  ','  ','  ','  ',' 2 ',47),('2014-12-08 02:01:59','jess.pureco@aiesec.net',0,'  ','  ',' 0 ',' TÃ©rminar carrera ',' concluir los Ãºltimos meses del ultimo semestre de mi carrera ','  ','  ',48),('2014-12-08 02:01:59','jess.pureco@aiesec.net',0,'  ','  ',' 1 ',' Establecer mi propio negocio ',' preparaciÃ³n de plan de negocio ',' Buscar proveedores en provincia ',' pedir un fondo perdido ',49),('2014-12-09 04:20:30','miguel.hernandezt@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 0 ',50),('2014-12-09 04:20:30','miguel.hernandezt@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 0 ',51),('2014-12-09 04:20:30','miguel.hernandezt@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 1 ',52),('2014-12-09 04:20:30','miguel.hernandezt@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 1 ',53),('2014-12-09 04:20:30','miguel.hernandezt@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 1 ',54),('2014-12-09 04:20:30','miguel.hernandezt@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 2 ',55),('2014-12-09 04:20:30','miguel.hernandezt@aiesec.net',0,'  ','  ','  ','  ','  ','  ',' 2 ',56),('2014-12-09 04:20:30','miguel.hernandezt@aiesec.net',3,'  ','  ','  ','  ','  ','  ',' 2 ',57),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Ser MCB de FNZ&L ',' Ser LCVP Fnz&L y adecuarme a los cambios a nivel nacional ',' Ser FACI en congresos y darme a conocer a nivel nacional ',' Ser MCB de FNZ&L ','  ','  ','  ',58),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Ser CEEDER en AIESEC Francia ',' Ser LCVP FNZ&L ',' Ser MCB comenzando el siguiente periodo ',' Asistir a un congreso internacional ',' Ser Ceeder en AIESEC Francia ','  ','  ',59),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Ser MCVP AD en AIESEC MÃ©xico (Puede que si, puede que no) ',' Ser parte de la EB ',' Ser parte del equipo nacional ',' Ser parte e una EB en otro paÃ­s ',' Ser MCVP AD en MÃ©xico ','  ','  ',60),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' VIAJAR alrededor del mundo ',' Viajar en MÃ©xico (Aguascalientes jaja :P ) ',' Viajar en MÃ©xico \r\nCancÃºn - MTY ',' Viajar a otro paÃ­s... congreso internacional ',' Viajar a Francia y visitar Alemania, Italia, Grecia, BÃ©lgica, Holanda, Austria, Suiza, Dinamarca.... y todos los paÃ­ses que pueda en Europa :3 ',' Viajar a Asia! Principalmente JapÃ³n (Aprovechando las olimpiadas :3 ) ',' Viajar a muchos paÃ­ses por negocios y aprovechar para vacaciones ',61),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',1,' Realizar un verano de investigaciÃ³n en el DF ',' Postularme en el progrma ay continuar con un buen promedio ',' Recibir aceptaciÃ³n del investigador y realizar la prÃ¡ctica relacionada con Bioprocesos o la Industria FarmacÃ©utica ','  ','  ','  ','  ',62),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',1,' Generar un congreso Internacional de BiotecnologÃ­a ',' Conseguir un lugar adecuado ',' Plantear los ponentes y los ejes temÃ¡ticos a tratar ',' Realizar el congreso internacional ','  ','  ','  ',63),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',1,' Realizar movilidad acadÃ©mica con prÃ¡ctica profesional a Francia ',' Seguir con un buen promedio y certificar el Italiano ',' Seguir con el promedio y certificar el inglÃ©s (de nuevo) ',' Seguir con un buen promedio, realizando actividades extracurriculares y certificar el FrancÃ©s B2 ',' A mediados de aÃ±o realizar la movilidad por un aÃ±o (medio aÃ±o estudiar y medio aÃ±o trabajar) ','  ','  ',64),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Hacer ejercicio ',' Intentar que se me haga hÃ¡bito  ',' Fallar y retomarlo ',' Tenerlo ya como hÃ¡bito diario o al menos tres veces por semana ',' Realizar ejercicio diario ',' Ir al gym ',' Seguir yendo :P ',65),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',2,' Aprender a delegar actividades ',' Ser VP ',' No hacerlo bien e intentarlo de nuevo ',' Pues espero que ya para entonces ya sepa jajaja :P ','  ','  ','  ',66),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',2,' Aprender griego o latÃ­n ',' - ',' - ',' - ',' - ',' Ya que tenga tiempo.. me gustarÃ­a tomar algÃºn curso de griego ','  ',67),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',2,' Aprender alemÃ¡n ',' Tomar clases particulares de alemÃ¡n ',' - ',' - ',' Tomar un curso en Francia y visitar Alemania :3 ','  ','  ',68),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Casarme ',' No ',' No ',' No ',' QuizÃ¡s conozca a una francesa.. pero no! jaja ',' DependerÃ¡ si conozco a alguien con quien realmente quiera pasar el resto de mi vida :3 ','  ',69),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Tener Hijos ',' -  ',' - ',' - ',' - ',' - ',' Me gustarÃ­a tener dos hijos a los 30 aÃ±os aprox ',70),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Continuar viendo a mis amigos de la secundaria y prepa ',' Realizar una cena de fin de aÃ±o :3 ',' QuizÃ¡s se pierda un poco el contacto por escuela, AIESEC, etc ',' Llamar o mensajearlos de vez en cuando.. y asistir a diferentes eventos donde me inviten ',' Seguir asÃ­.. ',' y asÃ­ ',' y asÃ­ para siempre :3 ',71),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Aprender a bailar tango ',' - ',' - ',' - ',' - ',' Tomar clases de Tango :P ','  ',72),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Seguir con mi familia ',' Visitar de vez en cuando a mis abuelitos del DF con mi mamÃ¡ ',' Ir a CancÃºn a visitar a mis familaires de por allÃ¡ :P ',' Conocer a la familia que tengo en MTY ',' Videollamadas :D ',' Visitas regulares, llamadas, cenas familiares etc ',' TambiÃ©n ser parte de la fam de mi esposa sin descuidar la mÃ­a :D ',73),('2014-12-09 06:48:28','luisjavier.castillo@aiesec.net',0,' Tomar clases de canto y guitarra ',' - ',' - ',' - ',' Tomar clases de canto en Francia :3 :D ',' Tomar cursos de canto y guitarra ',' Cantar en conferencias jajajaja xD ok no ',74),('2014-12-10 01:37:54','david.jara@aiesec.net',0,'  ',' Mayor involucraciÃ³n y participaciÃ³n en OGIP ',' CoordinaciÃ³n de Ã¡rea ',' Ser VP ','  ','  ','  ',75),('2014-12-10 01:37:54','david.jara@aiesec.net',0,'  ',' DecisiÃ³n de posible cambio de Ã¡rea  ',' Asistencia a congreso nacional ',' ParticipaciÃ³n en Global citizen ','  ','  ','  ',76),('2014-12-10 01:37:54','david.jara@aiesec.net',1,'  ','  ',' Inicio de servicio social ',' certificaciÃ³n toefl ',' FinalizaciÃ³n de licenciatura ','  ','  ',77),('2014-12-10 01:37:54','david.jara@aiesec.net',1,'  ','  ','  ',' Inicio de nuevo idioma ','  ','  ','  ',78),('2014-12-10 01:37:54','david.jara@aiesec.net',1,'  ','  ','  ',' Estancia laboral ','  ','  ','  ',79),('2014-12-10 01:37:54','david.jara@aiesec.net',2,'  ','  ',' Tomar curso de fotografia ',' CertificaciÃ³n FMFF ',' Obtener empleo ',' Independencia financiera ',' Inversiones de alto riesgo ',80),('2014-12-10 01:37:54','david.jara@aiesec.net',2,'  ','  ',' Realizar viaje a otro pais ',' Incursion dentro del estilismo y barberia ','  ','  ','  ',81),('2014-12-10 01:37:54','david.jara@aiesec.net',2,'  ','  ',' Iniciar negocio de bajo riesgo ','  ','  ','  ','  ',82),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',0,' Take a GIP ',' To gain more experience about AIESEC ','  ','  ','  ','  ','  ',83),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',0,' Become an LCP or VP ','  ','  ','  ',' Lead and share all my AIESEC experience with my LC. ','  ','  ',84),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',0,' Be part of an International LC ','  ','  ','  ','  ',' Create and share AIESEC experiences in other country ','  ',85),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',1,' Echar a andar mi empresa ','  ','  ','  ',' Contar con la experiencia y contactos necesarios para tener Ã©xito ','  ','  ',86),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',1,' Aprender al 100% Ã¡rabe y japonÃ©s ','  ','  ',' Practicarlo diariamente para certificarme ','  ','  ','  ',87),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',1,' Terminar el proceso de titulaciÃ³n ','  ','  ',' Realizar tramitÃ©s necesarios para obtener mi tÃ­tulo. ','  ','  ','  ',88),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',2,' Tener una relaciÃ³n sentimental estable ','  ','  ','  ',' Decidir correctamente mi vida sentimental y decidir si quiero formar una familia ','  ','  ',89),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',2,' RelaciÃ³n sana con familia y amigos ',' Cuidar mis relaciones familiares y de amistades, para tener estabilidad emocional. ','  ','  ','  ','  ','  ',90),('2014-12-10 06:29:54','nayelli.zamorano@aiesec.net',2,' Ser feliz ',' Desde que recuerdo he hecho lo que me gusta para ser feliz y asÃ­ lo harÃ© siempre ','  ','  ','  ','  ','  ',91),('2014-12-11 01:09:59','paola.espinosajimenez@aiesec.net',0,' Ser LCVP en IPN para 2016 ',' Asistir a TtT para certificarme ',' Ser OC de SMI  ',' Ser VP en AIESEC en IPN ','  ','  ','  ',92),('2014-12-11 01:09:59','paola.espinosajimenez@aiesec.net',0,'  ',' Ser coordinadora de Ã¡rea ','  ',' Ser EP para prÃ¡ctica de voluntariado ','  ','  ','  ',93),('2014-12-11 01:09:59','paola.espinosajimenez@aiesec.net',1,' Ser licenciada en fÃ­sica y matemÃ¡ticas titulada. ',' Estar aprobada en los parciales. ',' Estar aprobada en el semestre. ',' Estar aprobada en el semestre. ',' Estar aprobada en toda carrera. ',' Ser maestra en ciencias de materiales. ',' Ser doctora en fÃ­sica nuclear. ',94),('2014-12-11 01:09:59','paola.espinosajimenez@aiesec.net',1,'  ','  ','  ',' Estar autorizada para iniciar la tesis. ',' Estar aprobada en la tesis. ','  ','  ',95),('2014-12-11 01:09:59','paola.espinosajimenez@aiesec.net',1,'  ','  ','  ','  ',' Ser licenciada en fÃ­sica y matemÃ¡ticas titulada. ','  ','  ',96),('2014-12-11 01:09:59','paola.espinosajimenez@aiesec.net',2,' Ser residente en Rumania. ',' Ser estudiante de rumano. ',' Ser estudiante de rumano. ',' Ser estudiante de intercambio de maestrÃ­a en la Universitatea Politehnica din Bucuresti  ',' Ser trabajadora del ININ o CFE Laguna Verde ',' Ser estudiante de doctorado en la Universitatea Politehnica din Bucuresti  ',' Ser residente en Rumania. ',97),('2014-12-11 01:09:59','paola.espinosajimenez@aiesec.net',2,'  ','  ',' Ser trabajadora de medio tiempo. ','  ','  ',' Ser trabajadora de la Central Nuclear de Cernavoda ','  ',98),('2014-12-15 19:22:25','jorge.illescas@aiesec.net',0,' Ser un gran miembro de OGCDP ',' Esforzarme mucho ',' Seguir haciÃ©ndolo ',' Evaluar mi desempeÃ±o. Por ahora eso es todo. ','  ','  ','  ',99),('2014-12-15 19:22:25','jorge.illescas@aiesec.net',0,' Pagar mis deudas ',' Ahorrar y pagar lo que debo ',' Terminar de pagar mis deudas. ','  ','  ','  ','  ',100),('2014-12-15 19:22:25','jorge.illescas@aiesec.net',1,' Certificarme como Microsoft Developer ',' Estudiar para el primer examen y presentarlo a los 2 meses. Luego seguir estudiando. ',' Presentar el segundo examen al 4 mes y estudiar para el siguiente, que serÃ¡ al 6Â° mes ',' Para el octavo mes debo de haber presentado y aprobado 4 exÃ¡menes, En caso de haber fallado en alguno tendrÃ© que esforzarme mÃ¡s para lograr el tÃ­tulo deseado en un aÃ±o. ','  ','  ','  ',101),('2014-12-15 19:22:25','jorge.illescas@aiesec.net',2,' Comprar un WiiU ',' Esto lo harÃ© en el siguiente mes. Es muy importante para mÃ­, no tomen esto como una broma. ','  ','  ','  ','  ','  ',102),('2014-12-15 19:22:25','jorge.illescas@aiesec.net',0,' Aprender un tercer idioma ',' Estudiar mucho ',' Seguir estudiando ',' Evaluar el progreso y buscar ponerlo en prÃ¡ctica en una prÃ¡ctica profesional o social. ','  ','  ','  ',103),('2014-12-15 19:22:25','jorge.illescas@aiesec.net',0,' Ahorrar para mi prÃ¡ctica profesional ',' Una vez pagadas mis deudas tendrÃ© medio aÃ±o para juntar el dinero necesario para irme a otro paÃ­s. ',' Espero juntar lo suficiente en 6 meses. Todo depende de la prÃ¡ctica que busque. ','  ','  ','  ','  ',104);
/*!40000 ALTER TABLE `timeline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `foto` blob NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Miguel Segura',22,'dragon_PNG981.png','cesar.seguracruz@aiesec.net'),(2,'bla',123,'descarga.jpg','prueba@aiesec.net'),(3,'Test Online',22,'Anivia_the_Cryophoenix_Wallpaper_2wgh7.jpg','Test@aiesec.net'),(4,'Test Online',22,'Anivia_the_Cryophoenix_Wallpaper_2wgh7.jpg','juan.test@aiesec.net'),(5,'Test del 27',27,'','test@aiesec.net'),(6,'Miguel Segura Test',23,'10404527_485699361562012_3110891891826900841_n.jpg','zvrol@hotmail.com'),(7,'Carolina Mendoza',24,'caro.jpg','caro.mendoza@aiesec.net'),(8,'Miriam Beatriz Cigarroa Ventura',20,'','miriam.cigarroave t'),(9,'Jessica Pureco',23,'','jess.pureco@aiesec.net'),(10,'Michel Vellve',21,'297579_2435072350397_1013743381_n.jpg','michel.vellve@aiesec.net'),(11,'Miguel Hernandez',24,'','miguel.hernandezt@aiesec.net'),(12,'Luis Javier Castillo Ramos',20,'480676_10151491260352416_1704350629_n.jpg','luisjavier.castillo@aiesec.net'),(13,'David Jara Aguilar',22,'','david.jara@aiesec.net'),(14,'Nayelli Zamorano Landaverde',23,'IMG_20141209_055034.jpg','nayelli.zamorano@aiesec.net'),(15,'Paola Andrea Espinosa JimÃ©nez',20,'Myself.jpg','paola.espinosajimenez@aiesec.net'),(16,'',0,'',''),(17,'Jorge David Illescas RodrÃ­guez',23,'fl.png','jorge.illescas@aiesec.net');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-15 12:36:47
