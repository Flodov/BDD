-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: projetBDD
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.12.04.1

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
-- Table structure for table `ACCOMPAGNE`
--

DROP TABLE IF EXISTS `ACCOMPAGNE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ACCOMPAGNE` (
  `id_pere` int(11) NOT NULL,
  `id_fils` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  PRIMARY KEY (`id_pere`,`id_fils`,`id_reservation`),
  KEY `id_fils` (`id_fils`),
  KEY `id_reservation` (`id_reservation`),
  CONSTRAINT `ACCOMPAGNE_ibfk_1` FOREIGN KEY (`id_pere`) REFERENCES `PERSONNE` (`id_personne`),
  CONSTRAINT `ACCOMPAGNE_ibfk_2` FOREIGN KEY (`id_fils`) REFERENCES `PERSONNE` (`id_personne`),
  CONSTRAINT `ACCOMPAGNE_ibfk_3` FOREIGN KEY (`id_reservation`) REFERENCES `RESERVATION` (`id_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ACCOMPAGNE`
--

LOCK TABLES `ACCOMPAGNE` WRITE;
/*!40000 ALTER TABLE `ACCOMPAGNE` DISABLE KEYS */;
/*!40000 ALTER TABLE `ACCOMPAGNE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ACTIVITE`
--

DROP TABLE IF EXISTS `ACTIVITE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ACTIVITE` (
  `id_activite` int(11) NOT NULL AUTO_INCREMENT,
  `nom_activité` varchar(60) DEFAULT NULL,
  `id_lieu` int(11) NOT NULL,
  PRIMARY KEY (`id_activite`),
  KEY `id_lieu` (`id_lieu`),
  CONSTRAINT `ACTIVITE_ibfk_1` FOREIGN KEY (`id_lieu`) REFERENCES `LIEU` (`id_lieu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ACTIVITE`
--

LOCK TABLES `ACTIVITE` WRITE;
/*!40000 ALTER TABLE `ACTIVITE` DISABLE KEYS */;
INSERT INTO `ACTIVITE` VALUES (1,'Volleyball',3);
/*!40000 ALTER TABLE `ACTIVITE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ANIME`
--

DROP TABLE IF EXISTS `ANIME`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ANIME` (
  `id_personne` int(11) NOT NULL,
  `id_activite` int(11) NOT NULL,
  `date_anime` date DEFAULT NULL,
  PRIMARY KEY (`id_activite`,`id_personne`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `ANIME_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `PERSONNE` (`id_personne`),
  CONSTRAINT `ANIME_ibfk_2` FOREIGN KEY (`id_activite`) REFERENCES `ACTIVITE` (`id_activite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ANIME`
--

LOCK TABLES `ANIME` WRITE;
/*!40000 ALTER TABLE `ANIME` DISABLE KEYS */;
INSERT INTO `ANIME` VALUES (3,1,'2014-07-01');
/*!40000 ALTER TABLE `ANIME` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMPLACEMENT`
--

DROP TABLE IF EXISTS `EMPLACEMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMPLACEMENT` (
  `id_emplacement` int(11) NOT NULL AUTO_INCREMENT,
  `prix_emplacement` int(11) DEFAULT NULL,
  `id_type_emplacement` int(11) NOT NULL,
  PRIMARY KEY (`id_emplacement`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMPLACEMENT`
--

LOCK TABLES `EMPLACEMENT` WRITE;
/*!40000 ALTER TABLE `EMPLACEMENT` DISABLE KEYS */;
INSERT INTO `EMPLACEMENT` VALUES (1,15,1);
/*!40000 ALTER TABLE `EMPLACEMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FACTURE`
--

DROP TABLE IF EXISTS `FACTURE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FACTURE` (
  `id_facture` int(11) NOT NULL AUTO_INCREMENT,
  `description_facture` varchar(120) DEFAULT NULL,
  `montant_facture` int(11) DEFAULT NULL,
  `date_facture` date DEFAULT NULL,
  `id_reservation` int(11) NOT NULL,
  PRIMARY KEY (`id_facture`),
  KEY `id_reservation` (`id_reservation`),
  CONSTRAINT `FACTURE_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `RESERVATION` (`id_reservation`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FACTURE`
--

LOCK TABLES `FACTURE` WRITE;
/*!40000 ALTER TABLE `FACTURE` DISABLE KEYS */;
INSERT INTO `FACTURE` VALUES (1,'Ma premiere facture',30,'2014-07-02',1);
/*!40000 ALTER TABLE `FACTURE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LIEU`
--

DROP TABLE IF EXISTS `LIEU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LIEU` (
  `id_lieu` int(11) NOT NULL AUTO_INCREMENT,
  `nom_lieu` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_lieu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LIEU`
--

LOCK TABLES `LIEU` WRITE;
/*!40000 ALTER TABLE `LIEU` DISABLE KEYS */;
INSERT INTO `LIEU` VALUES (1,'Plage'),(2,'Terrain de Foot'),(3,'Piscine');
/*!40000 ALTER TABLE `LIEU` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MODE_PAIEMENT`
--

DROP TABLE IF EXISTS `MODE_PAIEMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MODE_PAIEMENT` (
  `id_mode_paiement` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_mode_paiement` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_mode_paiement`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MODE_PAIEMENT`
--

LOCK TABLES `MODE_PAIEMENT` WRITE;
/*!40000 ALTER TABLE `MODE_PAIEMENT` DISABLE KEYS */;
INSERT INTO `MODE_PAIEMENT` VALUES (1,'Chèque');
/*!40000 ALTER TABLE `MODE_PAIEMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PARTICIPE`
--

DROP TABLE IF EXISTS `PARTICIPE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PARTICIPE` (
  `id_personne` int(11) NOT NULL,
  `id_activite` int(11) NOT NULL,
  `date_participe` date DEFAULT NULL,
  PRIMARY KEY (`id_activite`,`id_personne`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `PARTICIPE_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `PERSONNE` (`id_personne`),
  CONSTRAINT `PARTICIPE_ibfk_2` FOREIGN KEY (`id_activite`) REFERENCES `ACTIVITE` (`id_activite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PARTICIPE`
--

LOCK TABLES `PARTICIPE` WRITE;
/*!40000 ALTER TABLE `PARTICIPE` DISABLE KEYS */;
INSERT INTO `PARTICIPE` VALUES (2,1,'2014-07-01');
/*!40000 ALTER TABLE `PARTICIPE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PAYEE`
--

DROP TABLE IF EXISTS `PAYEE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PAYEE` (
  `id_facture` int(11) NOT NULL,
  `id_mode_paiement` int(11) NOT NULL,
  PRIMARY KEY (`id_facture`,`id_mode_paiement`),
  KEY `id_mode_paiement` (`id_mode_paiement`),
  CONSTRAINT `PAYEE_ibfk_1` FOREIGN KEY (`id_facture`) REFERENCES `FACTURE` (`id_facture`),
  CONSTRAINT `PAYEE_ibfk_2` FOREIGN KEY (`id_mode_paiement`) REFERENCES `MODE_PAIEMENT` (`id_mode_paiement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAYEE`
--

LOCK TABLES `PAYEE` WRITE;
/*!40000 ALTER TABLE `PAYEE` DISABLE KEYS */;
INSERT INTO `PAYEE` VALUES (1,1);
/*!40000 ALTER TABLE `PAYEE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PERSONNE`
--

DROP TABLE IF EXISTS `PERSONNE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PERSONNE` (
  `id_personne` int(11) NOT NULL AUTO_INCREMENT,
  `nom_personne` varchar(60) DEFAULT NULL,
  `prenom` varchar(60) DEFAULT NULL,
  `adresse_email` varchar(60) DEFAULT NULL,
  `estPersonel` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PERSONNE`
--

LOCK TABLES `PERSONNE` WRITE;
/*!40000 ALTER TABLE `PERSONNE` DISABLE KEYS */;
INSERT INTO `PERSONNE` VALUES (1,'Daudan','Florian','florian.daudan@gmil.ru',0),(2,'Daudan','Junior','',0),(3,'Janitor','Scruffy','scruffy@laposte.net',1);
/*!40000 ALTER TABLE `PERSONNE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RESERVATION`
--

DROP TABLE IF EXISTS `RESERVATION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RESERVATION` (
  `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `montant_total` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `id_personne` int(11) NOT NULL,
  `id_emplacement` int(11) NOT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `id_personne` (`id_personne`),
  KEY `id_emplacement` (`id_emplacement`),
  CONSTRAINT `RESERVATION_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `PERSONNE` (`id_personne`),
  CONSTRAINT `RESERVATION_ibfk_2` FOREIGN KEY (`id_emplacement`) REFERENCES `EMPLACEMENT` (`id_emplacement`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RESERVATION`
--

LOCK TABLES `RESERVATION` WRITE;
/*!40000 ALTER TABLE `RESERVATION` DISABLE KEYS */;
INSERT INTO `RESERVATION` VALUES (1,30,'2014-07-01','2014-07-02',1,1);
/*!40000 ALTER TABLE `RESERVATION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TEL`
--

DROP TABLE IF EXISTS `TEL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TEL` (
  `numTelephone` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`numTelephone`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `TEL_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `PERSONNE` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TEL`
--

LOCK TABLES `TEL` WRITE;
/*!40000 ALTER TABLE `TEL` DISABLE KEYS */;
INSERT INTO `TEL` VALUES (381880536,1);
/*!40000 ALTER TABLE `TEL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TYPE_EMPLACEMENT`
--

DROP TABLE IF EXISTS `TYPE_EMPLACEMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TYPE_EMPLACEMENT` (
  `id_type_emplacement` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type_emplacement` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_type_emplacement`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TYPE_EMPLACEMENT`
--

LOCK TABLES `TYPE_EMPLACEMENT` WRITE;
/*!40000 ALTER TABLE `TYPE_EMPLACEMENT` DISABLE KEYS */;
INSERT INTO `TYPE_EMPLACEMENT` VALUES (1,'Vierge');
/*!40000 ALTER TABLE `TYPE_EMPLACEMENT` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-25 16:07:42
