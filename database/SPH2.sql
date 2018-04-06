-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
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
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Client` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Commentaire`
--

DROP TABLE IF EXISTS `Commentaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Commentaire` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `tra_id` int(11) DEFAULT NULL,
  `com_commentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `IDX_E16CE76BB8F9D19F` (`tra_id`),
  CONSTRAINT `FK_E16CE76BB8F9D19F` FOREIGN KEY (`tra_id`) REFERENCES `Travail` (`tra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Commentaire`
--

LOCK TABLES `Commentaire` WRITE;
/*!40000 ALTER TABLE `Commentaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `Commentaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Travail`
--

DROP TABLE IF EXISTS `Travail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Travail` (
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
  KEY `IDX_5F344327BC4EE2B0` (`cli_id`),
  CONSTRAINT `FK_5F344327BC4EE2B0` FOREIGN KEY (`cli_id`) REFERENCES `Client` (`cli_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Travail`
--

LOCK TABLES `Travail` WRITE;
/*!40000 ALTER TABLE `Travail` DISABLE KEYS */;
/*!40000 ALTER TABLE `Travail` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
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
  CONSTRAINT `FK_14B78418B8F9D19F` FOREIGN KEY (`tra_id`) REFERENCES `Travail` (`tra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-06 10:32:59
