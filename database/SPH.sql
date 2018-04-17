-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: SPH2
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cli_prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cli_provenance` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cli_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cli_adresse` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_code_postal` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `cli_ville` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cli_note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cli_telephone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'Juin','Christophe','web','a@a.com','11 Rue Du Soufflot','11000','toulouse','a','0612141618');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commentaire` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `tra_id` int(11) DEFAULT NULL,
  `com_commentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `IDX_67F068BCB8F9D19F` (`tra_id`),
  CONSTRAINT `FK_67F068BCB8F9D19F` FOREIGN KEY (`tra_id`) REFERENCES `travail` (`tra_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaire`
--

LOCK TABLES `commentaire` WRITE;
/*!40000 ALTER TABLE `commentaire` DISABLE KEYS */;
INSERT INTO `commentaire` VALUES (1,NULL,'commentaire'),(2,NULL,'dzdza'),(3,NULL,'zezee'),(4,NULL,'eee'),(5,NULL,'eferr'),(6,NULL,'dzzz'),(7,NULL,'ezez'),(8,NULL,'err'),(9,NULL,'err'),(10,NULL,'err'),(11,NULL,'aaa'),(12,NULL,'eee'),(13,NULL,'eee'),(14,NULL,'ee'),(15,NULL,'ee'),(16,NULL,'zz'),(17,NULL,'zz'),(18,NULL,'zzz'),(19,NULL,'aa'),(20,NULL,'eee'),(21,NULL,'zz'),(22,NULL,'fe,ftrpazoe'),(23,NULL,'zzzz'),(24,NULL,'zzz'),(25,NULL,'rrr'),(26,NULL,'sss'),(27,NULL,'ee'),(28,NULL,'ee'),(29,NULL,'fdefe');
/*!40000 ALTER TABLE `commentaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `fos_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`fos_id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'admin','admin','a@a.com','a@a.com',1,NULL,'$2y$13$AGDilWdqu0922fMsLCW4Iu1jD5aiFgRtUglsa55oWoWQgL/hYg7OS','2018-04-17 09:27:22',NULL,NULL,'a:0:{}');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `pho_id` int(11) NOT NULL AUTO_INCREMENT,
  `tra_id` int(11) DEFAULT NULL,
  `pho_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pho_id`),
  KEY `IDX_14B78418B8F9D19F` (`tra_id`),
  CONSTRAINT `FK_14B78418B8F9D19F` FOREIGN KEY (`tra_id`) REFERENCES `travail` (`tra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travail`
--

DROP TABLE IF EXISTS `travail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travail` (
  `tra_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_id` int(11) DEFAULT NULL,
  `tra_titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tra_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tra_prix` double NOT NULL,
  `tra_date_debut` date NOT NULL,
  `tra_date_rappel` date DEFAULT NULL,
  `tra_mode_paiment` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tra_lieux` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tra_garantie` longtext COLLATE utf8_unicode_ci,
  `tra_devis` longtext COLLATE utf8_unicode_ci,
  `tra_process_verbal` longtext COLLATE utf8_unicode_ci,
  `tra_facture` longtext COLLATE utf8_unicode_ci,
  `tra_date_devis` date NOT NULL,
  PRIMARY KEY (`tra_id`),
  KEY `IDX_90897ABBBC4EE2B0` (`cli_id`),
  CONSTRAINT `FK_90897ABBBC4EE2B0` FOREIGN KEY (`cli_id`) REFERENCES `client` (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travail`
--

LOCK TABLES `travail` WRITE;
/*!40000 ALTER TABLE `travail` DISABLE KEYS */;
INSERT INTO `travail` VALUES (1,1,'toiture','aaa',680,'2013-01-01',NULL,'CB',NULL,NULL,NULL,NULL,NULL,'2013-01-01');
/*!40000 ALTER TABLE `travail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-17 10:11:30
