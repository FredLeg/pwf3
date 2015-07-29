-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 192.168.1.19    Database: pwf3
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `justificatifs`
--

DROP TABLE IF EXISTS `justificatifs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `justificatifs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `absence_id` int(10) unsigned NOT NULL,
  `comment` mediumtext,
  PRIMARY KEY (`id`),
  KEY `fk_justificatifs_absence_idx` (`absence_id`),
  CONSTRAINT `fk_justificatifs_absence` FOREIGN KEY (`absence_id`) REFERENCES `presence` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Prévoir des fichiers attachés\ncatégoriser les motifs (exemple: pb ratp, ph pôle emploi)\nnoter aussi les abandons ou départs pour emploi trouvé\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `justificatifs`
--

LOCK TABLES `justificatifs` WRITE;
/*!40000 ALTER TABLE `justificatifs` DISABLE KEYS */;
/*!40000 ALTER TABLE `justificatifs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presence`
--

DROP TABLE IF EXISTS `presence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presence` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `day` date DEFAULT NULL,
  `R1` tinyint(1) DEFAULT '0' COMMENT 'Petit retard',
  `R2` tinyint(1) DEFAULT '0' COMMENT 'Grand retard',
  `D1` tinyint(1) DEFAULT '0' COMMENT 'Petit départ anticipé',
  `D2` tinyint(1) DEFAULT '0' COMMENT 'Grand départ anticipé',
  `absent` tinyint(1) DEFAULT NULL COMMENT 'Absent',
  `motif` varchar(255) DEFAULT NULL,
  `update_user_id` int(10) unsigned DEFAULT NULL COMMENT 'Le prof qui a noté les absences',
  `update_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_student_date` (`student_id`,`day`),
  KEY `fk_absence_student_idx` (`student_id`),
  CONSTRAINT `fk_absence_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presence`
--

LOCK TABLES `presence` WRITE;
/*!40000 ALTER TABLE `presence` DISABLE KEYS */;
/*!40000 ALTER TABLE `presence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL COMMENT 'Ligne fixe de l''école (Ne pas confondre avec le mobile du directeur)',
  `date_creation` date DEFAULT NULL COMMENT 'Date de création de l''école',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school`
--

LOCK TABLES `school` WRITE;
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
INSERT INTO `school` VALUES (1,'Paris - 4e Arrodissement','18 rue Geoffroy l’Asnier – 75 004 PARIS',' 0 805 62 2345',NULL),(2,'Paris - 10e Arrondissement','Les Ekluz – 13, rue des Écluses Saint-Martin, 75010 Paris',NULL,NULL),(3,'Hirson - (Picardie) ','Sémaphore, Bâtiment B, 02500 Buire',NULL,NULL),(4,'Nanterre - ( Haut-de-Seine) ','136, avenue Pablo Picasso, 92000 Nanterre',NULL,NULL),(5,'Piennes - (Lorraine)','6, rue Raimondi, 54490 Piennes',NULL,NULL);
/*!40000 ALTER TABLE `school` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `school_id` int(10) unsigned NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_session_school_idx` (`school_id`),
  CONSTRAINT `fk_session_school` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES (10,1,'2015-04-22','2015-08-07');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_has_user`
--

DROP TABLE IF EXISTS `session_has_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_has_user` (
  `session_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `course` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`session_id`,`user_id`),
  KEY `fk_session_has_user_user_idx` (`user_id`),
  KEY `fk_session_has_user_session_idx` (`session_id`),
  CONSTRAINT `fk_session_has_user_session` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_session_has_user_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_has_user`
--

LOCK TABLES `session_has_user` WRITE;
/*!40000 ALTER TABLE `session_has_user` DISABLE KEYS */;
INSERT INTO `session_has_user` VALUES (10,2,'Commandes Linux'),(10,4,'PHP'),(10,5,'HTML, Javascript'),(10,6,'WordPress'),(10,8,'opquast');
/*!40000 ALTER TABLE `session_has_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` int(10) unsigned NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `gender` int(1) DEFAULT NULL COMMENT '0 : femme\n1 : homme',
  `photo` varchar(45) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `num_pe` varchar(45) DEFAULT NULL COMMENT 'Numéro de Pôle Emploi',
  `from_city` varchar(45) DEFAULT NULL COMMENT 'Ville d''où vient l''étudant pour suivre la formation.\n(Il ne s''agit pas du lieu de naissance)',
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_student_session_idx` (`session_id`),
  CONSTRAINT `fk_student_session` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,10,'Frédéric','Legembre',1,'fred.jpg','1968-09-14',NULL,'Paris','frederic.legembre@gmail.com','06 63 07 43 20'),(2,10,'Cyril','Salson',1,NULL,NULL,NULL,'Nice','cyr.slsn@gmail.com',NULL),(3,10,'Ludovic','Chounavelle',1,NULL,NULL,NULL,'Lilles','ludovik@me.com',NULL),(4,10,'Eric','Madjarian',1,'eric.jpg',NULL,NULL,NULL,'eric.net@live.fr','06 51 42 84 20'),(5,10,'Man','Bahn Duc',1,'man.jpg',NULL,NULL,NULL,'manbanhduc@gmail.com',NULL),(6,10,'Franjo','Mihaljcuk',1,NULL,'1968-05-13',NULL,NULL,'franjo.mihaljcuk@gmail.com','06 52 95 48 08'),(7,10,'Clarisse','Carzon',0,NULL,NULL,NULL,'Paris','clarissecarzon@gmail.com',NULL),(8,10,'Alicia','Rodriguez',0,NULL,NULL,NULL,NULL,'aly.rodrgz@gmail.com',NULL),(9,10,'Antoine','Dupuy',1,NULL,'1993-07-07',NULL,NULL,'a.dupuy.pro@gmail.com','06 11 47 89 82'),(10,10,'Birny','Joao',1,NULL,NULL,NULL,'Plaisir, 78','birny.joao@yahoo.fr',NULL),(11,10,'Thibault','Fruchard',1,NULL,NULL,NULL,NULL,'tfruchard@gmail.com',NULL),(12,10,'Nicolas','Brohette',1,NULL,NULL,NULL,NULL,'brohette.nicolas@gmail.com;manalegende2@gmail.com',NULL),(13,10,'Morgan','De la Guesdonniere',1,NULL,NULL,NULL,NULL,'tgif28@gmail.com',NULL),(14,10,'Alexandre','Le Roux',1,NULL,NULL,NULL,NULL,'alexlr@mac.com',NULL),(15,10,'Sylvain','Lebourgeois',1,NULL,NULL,NULL,NULL,'sylvain.lebourgeois@gmail.com;lesysy@gmail.com',NULL),(16,10,'Régis','Micaa',1,NULL,NULL,NULL,NULL,'regis.micaa@laposte.net',NULL),(17,10,'Alexander','Ping',1,NULL,NULL,NULL,NULL,'alexping@gmx.com',NULL),(18,10,'Mouhsin','Sarhdaoui',1,NULL,NULL,NULL,NULL,'mouhsine.s@live.fr',NULL),(19,10,'Vincent','Thiblet',1,NULL,NULL,NULL,NULL,'vincent.thiblet@gmail.com',NULL),(20,10,'Julien',NULL,1,NULL,NULL,NULL,NULL,'julwebdesign@gmail.com',NULL),(21,10,'Jean-Pierre',NULL,1,NULL,NULL,NULL,NULL,'tgif28@gmail.com',NULL);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `school_id` int(10) unsigned DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `titre` varchar(45) DEFAULT NULL COMMENT '\ndev_note: risque de double emploi avec les groupes',
  `firstname` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `infos` varchar(255) DEFAULT NULL COMMENT 'Infos utiles à usage interne de l''école',
  `password` char(60) DEFAULT NULL,
  `level` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_user_school_idx` (`school_id`),
  CONSTRAINT `fk_user_school` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,NULL,NULL,'président et co-fondateur','Alain Assouline',NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,NULL,'co-fondateur et directeur pédagogique','Dario Spagnolo',NULL,'dario.spagnolo@wf3.fr','06 31 29 69 09',NULL,NULL,NULL),(3,1,NULL,'directrice','Sylvianne Peretz',NULL,'sylviane.peretz@wf3.fr','06 74 97 82 22',NULL,NULL,NULL),(4,1,NULL,'prof','Denis Nerborac',NULL,'denis.nerborac@wf3.fr;denis.nerborac@gmail.com',NULL,NULL,NULL,NULL),(5,NULL,NULL,'prof','Stéphane Bachelier',NULL,'	stephane.bachelier+wf3@gmail.com','06 42 24 48 09',NULL,NULL,NULL),(6,NULL,NULL,'prof','Maxime Vasse',NULL,'maxime@wype.fr',NULL,'http://www.wype.fr',NULL,NULL),(7,NULL,NULL,'admin','fred','','frederic.legembre@gmail.com','',NULL,'$2y$10$A/IuhOajle9wISng5bzeEuiiLW/ZCuQSKynsTMlwQgx1yHpd6fMwO',2),(8,NULL,NULL,'prof','Delphine Malassingne',NULL,'delphine.m@nissone.com',NULL,NULL,NULL,NULL),(9,1,NULL,'assistant de direction','Boris',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-29 16:13:03
