CREATE DATABASE  IF NOT EXISTS `iam` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `iam`;
-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: iam
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `Anneescolaire`
--

DROP TABLE IF EXISTS `Anneescolaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Anneescolaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `encours` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_54380EF9DE92C5CF` (`annee`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Anneescolaire`
--

LOCK TABLES `Anneescolaire` WRITE;
/*!40000 ALTER TABLE `Anneescolaire` DISABLE KEYS */;
INSERT INTO `Anneescolaire` VALUES (1,'2015-2016','2015-09-01','2016-06-30',1);
/*!40000 ALTER TABLE `Anneescolaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Classe`
--

DROP TABLE IF EXISTS `Classe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filiere_id` int(11) NOT NULL,
  `niveau_id` int(11) NOT NULL,
  `typeclasse_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_882BBAA0180AA129` (`filiere_id`),
  KEY `IDX_882BBAA0B3E9C81` (`niveau_id`),
  KEY `IDX_882BBAA06C61C795` (`typeclasse_id`),
  CONSTRAINT `FK_882BBAA0180AA129` FOREIGN KEY (`filiere_id`) REFERENCES `Filiere` (`id`),
  CONSTRAINT `FK_882BBAA06C61C795` FOREIGN KEY (`typeclasse_id`) REFERENCES `Typeclasse` (`id`),
  CONSTRAINT `FK_882BBAA0B3E9C81` FOREIGN KEY (`niveau_id`) REFERENCES `Niveau` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Classe`
--

LOCK TABLES `Classe` WRITE;
/*!40000 ALTER TABLE `Classe` DISABLE KEYS */;
INSERT INTO `Classe` VALUES (1,1,1,1,'TECH JR Première année Jour','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2015-11-18 12:51:11');
/*!40000 ALTER TABLE `Classe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ClasseMatiere`
--

DROP TABLE IF EXISTS `ClasseMatiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ClasseMatiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matiere_id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `professeur_id` int(11) DEFAULT NULL,
  `matieredebase` tinyint(1) NOT NULL,
  `coefficient` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3DAF0D6AF46CD258` (`matiere_id`),
  KEY `IDX_3DAF0D6A8F5EA509` (`classe_id`),
  KEY `IDX_3DAF0D6ABAB22EE9` (`professeur_id`),
  CONSTRAINT `FK_3DAF0D6A8F5EA509` FOREIGN KEY (`classe_id`) REFERENCES `Classe` (`id`),
  CONSTRAINT `FK_3DAF0D6ABAB22EE9` FOREIGN KEY (`professeur_id`) REFERENCES `Professeur` (`id`),
  CONSTRAINT `FK_3DAF0D6AF46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `FiliereMatiere` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ClasseMatiere`
--

LOCK TABLES `ClasseMatiere` WRITE;
/*!40000 ALTER TABLE `ClasseMatiere` DISABLE KEYS */;
/*!40000 ALTER TABLE `ClasseMatiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Classeetudiant`
--

DROP TABLE IF EXISTS `Classeetudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Classeetudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anneescolaire_id` int(11) NOT NULL,
  `etudiant_id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `responsabledeclasse` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B3CBDB277DEA6356` (`anneescolaire_id`),
  KEY `IDX_B3CBDB27DDEAB1A3` (`etudiant_id`),
  KEY `IDX_B3CBDB278F5EA509` (`classe_id`),
  CONSTRAINT `FK_B3CBDB277DEA6356` FOREIGN KEY (`anneescolaire_id`) REFERENCES `Anneescolaire` (`id`),
  CONSTRAINT `FK_B3CBDB278F5EA509` FOREIGN KEY (`classe_id`) REFERENCES `Classe` (`id`),
  CONSTRAINT `FK_B3CBDB27DDEAB1A3` FOREIGN KEY (`etudiant_id`) REFERENCES `Etudiant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Classeetudiant`
--

LOCK TABLES `Classeetudiant` WRITE;
/*!40000 ALTER TABLE `Classeetudiant` DISABLE KEYS */;
INSERT INTO `Classeetudiant` VALUES (1,1,1,1,1,1,'2015-11-18 12:51:51');
/*!40000 ALTER TABLE `Classeetudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Etudiant`
--

DROP TABLE IF EXISTS `Etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compte_id` int(11) DEFAULT NULL,
  `anneescolaire_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `date` datetime NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephoneurgence` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_880840B512B2DC9C` (`matricule`),
  UNIQUE KEY `UNIQ_880840B5F2C56620` (`compte_id`),
  KEY `IDX_880840B57DEA6356` (`anneescolaire_id`),
  CONSTRAINT `FK_880840B57DEA6356` FOREIGN KEY (`anneescolaire_id`) REFERENCES `Anneescolaire` (`id`),
  CONSTRAINT `FK_880840B5F2C56620` FOREIGN KEY (`compte_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Etudiant`
--

LOCK TABLES `Etudiant` WRITE;
/*!40000 ALTER TABLE `Etudiant` DISABLE KEYS */;
INSERT INTO `Etudiant` VALUES (1,3,1,'Aby','Homme','Junior','2010-05-01','2015-11-18 12:44:12','ETD00A','junioraby@architec.ma','0641746727','0522202848');
/*!40000 ALTER TABLE `Etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Filiere`
--

DROP TABLE IF EXISTS `Filiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Filiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formation_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E16D64025200282E` (`formation_id`),
  CONSTRAINT `FK_E16D64025200282E` FOREIGN KEY (`formation_id`) REFERENCES `Formation` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Filiere`
--

LOCK TABLES `Filiere` WRITE;
/*!40000 ALTER TABLE `Filiere` DISABLE KEYS */;
INSERT INTO `Filiere` VALUES (1,1,'TECH Junior','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2015-11-18 12:46:04');
/*!40000 ALTER TABLE `Filiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FiliereMatiere`
--

DROP TABLE IF EXISTS `FiliereMatiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FiliereMatiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filiere_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  `nombreheure` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5432A712180AA129` (`filiere_id`),
  KEY `IDX_5432A712F46CD258` (`matiere_id`),
  CONSTRAINT `FK_5432A712180AA129` FOREIGN KEY (`filiere_id`) REFERENCES `Filiere` (`id`),
  CONSTRAINT `FK_5432A712F46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `Matiere` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FiliereMatiere`
--

LOCK TABLES `FiliereMatiere` WRITE;
/*!40000 ALTER TABLE `FiliereMatiere` DISABLE KEYS */;
INSERT INTO `FiliereMatiere` VALUES (1,1,1,50,'2015-11-18 12:46:35');
/*!40000 ALTER TABLE `FiliereMatiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Formation`
--

DROP TABLE IF EXISTS `Formation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Formation`
--

LOCK TABLES `Formation` WRITE;
/*!40000 ALTER TABLE `Formation` DISABLE KEYS */;
INSERT INTO `Formation` VALUES (1,'FORM0','Technicien','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
/*!40000 ALTER TABLE `Formation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Matiere`
--

DROP TABLE IF EXISTS `Matiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Matiere`
--

LOCK TABLES `Matiere` WRITE;
/*!40000 ALTER TABLE `Matiere` DISABLE KEYS */;
INSERT INTO `Matiere` VALUES (1,'LapTop','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
/*!40000 ALTER TABLE `Matiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Message`
--

DROP TABLE IF EXISTS `Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_790009E3E2904019` (`thread_id`),
  KEY `IDX_790009E3F624B39D` (`sender_id`),
  CONSTRAINT `FK_790009E3E2904019` FOREIGN KEY (`thread_id`) REFERENCES `Thread` (`id`),
  CONSTRAINT `FK_790009E3F624B39D` FOREIGN KEY (`sender_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Message`
--

LOCK TABLES `Message` WRITE;
/*!40000 ALTER TABLE `Message` DISABLE KEYS */;
/*!40000 ALTER TABLE `Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MessageMetadata`
--

DROP TABLE IF EXISTS `MessageMetadata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MessageMetadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) DEFAULT NULL,
  `participant_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DA67B3AD537A1329` (`message_id`),
  KEY `IDX_DA67B3AD9D1C3019` (`participant_id`),
  CONSTRAINT `FK_DA67B3AD537A1329` FOREIGN KEY (`message_id`) REFERENCES `Message` (`id`),
  CONSTRAINT `FK_DA67B3AD9D1C3019` FOREIGN KEY (`participant_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MessageMetadata`
--

LOCK TABLES `MessageMetadata` WRITE;
/*!40000 ALTER TABLE `MessageMetadata` DISABLE KEYS */;
/*!40000 ALTER TABLE `MessageMetadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Newsletter`
--

DROP TABLE IF EXISTS `Newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Newsletter`
--

LOCK TABLES `Newsletter` WRITE;
/*!40000 ALTER TABLE `Newsletter` DISABLE KEYS */;
/*!40000 ALTER TABLE `Newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Niveau`
--

DROP TABLE IF EXISTS `Niveau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Niveau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Niveau`
--

LOCK TABLES `Niveau` WRITE;
/*!40000 ALTER TABLE `Niveau` DISABLE KEYS */;
INSERT INTO `Niveau` VALUES (1,'NIV0','Première année','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(2,'NIV1','Deuxième année','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
/*!40000 ALTER TABLE `Niveau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Niveauscolaire`
--

DROP TABLE IF EXISTS `Niveauscolaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Niveauscolaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Niveauscolaire`
--

LOCK TABLES `Niveauscolaire` WRITE;
/*!40000 ALTER TABLE `Niveauscolaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `Niveauscolaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ParentEleve`
--

DROP TABLE IF EXISTS `ParentEleve`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ParentEleve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etudiant_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lienparente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CB3AE38BDDEAB1A3` (`etudiant_id`),
  CONSTRAINT `FK_CB3AE38BDDEAB1A3` FOREIGN KEY (`etudiant_id`) REFERENCES `Etudiant` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ParentEleve`
--

LOCK TABLES `ParentEleve` WRITE;
/*!40000 ALTER TABLE `ParentEleve` DISABLE KEYS */;
/*!40000 ALTER TABLE `ParentEleve` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Planning`
--

DROP TABLE IF EXISTS `Planning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe_id` int(11) DEFAULT NULL,
  `anneescolaire_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `created` datetime NOT NULL,
  `complet` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2DEFDDA08F5EA509` (`classe_id`),
  KEY `IDX_2DEFDDA07DEA6356` (`anneescolaire_id`),
  CONSTRAINT `FK_2DEFDDA07DEA6356` FOREIGN KEY (`anneescolaire_id`) REFERENCES `Anneescolaire` (`id`),
  CONSTRAINT `FK_2DEFDDA08F5EA509` FOREIGN KEY (`classe_id`) REFERENCES `Classe` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Planning`
--

LOCK TABLES `Planning` WRITE;
/*!40000 ALTER TABLE `Planning` DISABLE KEYS */;
/*!40000 ALTER TABLE `Planning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Preinscription`
--

DROP TABLE IF EXISTS `Preinscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Preinscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `niveauinscription_id` int(11) DEFAULT NULL,
  `niveauscolaire_id` int(11) DEFAULT NULL,
  `filiere_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motivation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `traite` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A9FE27B7E25CEC3C` (`niveauinscription_id`),
  KEY `IDX_A9FE27B7111E0626` (`niveauscolaire_id`),
  KEY `IDX_A9FE27B7180AA129` (`filiere_id`),
  CONSTRAINT `FK_A9FE27B7111E0626` FOREIGN KEY (`niveauscolaire_id`) REFERENCES `Niveauscolaire` (`id`),
  CONSTRAINT `FK_A9FE27B7180AA129` FOREIGN KEY (`filiere_id`) REFERENCES `Filiere` (`id`),
  CONSTRAINT `FK_A9FE27B7E25CEC3C` FOREIGN KEY (`niveauinscription_id`) REFERENCES `Niveau` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Preinscription`
--

LOCK TABLES `Preinscription` WRITE;
/*!40000 ALTER TABLE `Preinscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `Preinscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Professeur`
--

DROP TABLE IF EXISTS `Professeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compte_id` int(11) DEFAULT NULL,
  `anneescolaire_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_58F8514912B2DC9C` (`matricule`),
  UNIQUE KEY `UNIQ_58F85149F2C56620` (`compte_id`),
  KEY `IDX_58F851497DEA6356` (`anneescolaire_id`),
  CONSTRAINT `FK_58F851497DEA6356` FOREIGN KEY (`anneescolaire_id`) REFERENCES `Anneescolaire` (`id`),
  CONSTRAINT `FK_58F85149F2C56620` FOREIGN KEY (`compte_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Professeur`
--

LOCK TABLES `Professeur` WRITE;
/*!40000 ALTER TABLE `Professeur` DISABLE KEYS */;
/*!40000 ALTER TABLE `Professeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProfesseurMatiere`
--

DROP TABLE IF EXISTS `ProfesseurMatiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProfesseurMatiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `professeur_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3F15B9FFBAB22EE9` (`professeur_id`),
  KEY `IDX_3F15B9FFF46CD258` (`matiere_id`),
  CONSTRAINT `FK_3F15B9FFBAB22EE9` FOREIGN KEY (`professeur_id`) REFERENCES `Professeur` (`id`),
  CONSTRAINT `FK_3F15B9FFF46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `Matiere` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProfesseurMatiere`
--

LOCK TABLES `ProfesseurMatiere` WRITE;
/*!40000 ALTER TABLE `ProfesseurMatiere` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProfesseurMatiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Salle`
--

DROP TABLE IF EXISTS `Salle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Salle`
--

LOCK TABLES `Salle` WRITE;
/*!40000 ALTER TABLE `Salle` DISABLE KEYS */;
/*!40000 ALTER TABLE `Salle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Seance`
--

DROP TABLE IF EXISTS `Seance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Seance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planning_id` int(11) NOT NULL,
  `salle_id` int(11) DEFAULT NULL,
  `matiere_id` int(11) NOT NULL,
  `professeur_id` int(11) DEFAULT NULL,
  `jour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `horaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D8D1F8383D865311` (`planning_id`),
  KEY `IDX_D8D1F838DC304035` (`salle_id`),
  KEY `IDX_D8D1F838F46CD258` (`matiere_id`),
  KEY `IDX_D8D1F838BAB22EE9` (`professeur_id`),
  CONSTRAINT `FK_D8D1F8383D865311` FOREIGN KEY (`planning_id`) REFERENCES `Planning` (`id`),
  CONSTRAINT `FK_D8D1F838BAB22EE9` FOREIGN KEY (`professeur_id`) REFERENCES `Professeur` (`id`),
  CONSTRAINT `FK_D8D1F838DC304035` FOREIGN KEY (`salle_id`) REFERENCES `Salle` (`id`),
  CONSTRAINT `FK_D8D1F838F46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `Matiere` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Seance`
--

LOCK TABLES `Seance` WRITE;
/*!40000 ALTER TABLE `Seance` DISABLE KEYS */;
/*!40000 ALTER TABLE `Seance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Thread`
--

DROP TABLE IF EXISTS `Thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isSpam` tinyint(1) NOT NULL,
  `createdBy_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_368C49B53174800F` (`createdBy_id`),
  CONSTRAINT `FK_368C49B53174800F` FOREIGN KEY (`createdBy_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Thread`
--

LOCK TABLES `Thread` WRITE;
/*!40000 ALTER TABLE `Thread` DISABLE KEYS */;
/*!40000 ALTER TABLE `Thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ThreadMetadata`
--

DROP TABLE IF EXISTS `ThreadMetadata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ThreadMetadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) DEFAULT NULL,
  `participant_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `last_participant_message_date` datetime DEFAULT NULL,
  `last_message_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BEF427AEE2904019` (`thread_id`),
  KEY `IDX_BEF427AE9D1C3019` (`participant_id`),
  CONSTRAINT `FK_BEF427AE9D1C3019` FOREIGN KEY (`participant_id`) REFERENCES `User` (`id`),
  CONSTRAINT `FK_BEF427AEE2904019` FOREIGN KEY (`thread_id`) REFERENCES `Thread` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ThreadMetadata`
--

LOCK TABLES `ThreadMetadata` WRITE;
/*!40000 ALTER TABLE `ThreadMetadata` DISABLE KEYS */;
/*!40000 ALTER TABLE `ThreadMetadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Typeclasse`
--

DROP TABLE IF EXISTS `Typeclasse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Typeclasse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Typeclasse`
--

LOCK TABLES `Typeclasse` WRITE;
/*!40000 ALTER TABLE `Typeclasse` DISABLE KEYS */;
INSERT INTO `Typeclasse` VALUES (1,'CJ','Cours de jour','2015-11-18 11:49:30'),(2,'CS','Cours de soir','2015-11-18 11:50:45');
/*!40000 ALTER TABLE `Typeclasse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'junior','junior','junioraby@gmail.com','junioraby@gmail.com',1,'tazhtdnvlv4sss4wookcskgko4800c0','IvEUhi2rM9t8wILQM4rb6Ybb1EMKZWBEa4iZn1qvce5qjGlGiD2YzqjZ93g0R1kSLdkrkL0sxv5UIDeIMhRMvA==','2015-11-18 12:41:28',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'default.jpg','2015-11-18 12:26:32'),(2,'admin','admin','admin@gmail.com','admin@gmail.com',1,'btxfzdmkjdw084ko04sc80080ogok4g','DeFrxMbN9lXwNp3Gv0i36uksPudiXfsg+7pK1jxTZjkjsmORIX+39vz1Tk3IzM0vNwzIBiIMMxavXQcLD40FsA==','2015-11-18 12:42:04',0,0,NULL,NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}',0,NULL,'default.jpg','2015-11-18 12:27:24'),(3,'ETD00A','etd00a','junioraby@architec.ma','junioraby@architec.ma',1,'nngxyw9eehcc4ggg0ck4wcckk4gcgw4','NUVH+0vkUTQOpHsmfdm1MDRcdZfbnRJPBKahZxYS2+fd93VlIZzXy8zMfaxKMhmIBCWEZNy7+pbY31fV1wyYQg==',NULL,0,0,NULL,NULL,NULL,'a:1:{i:0;s:13:\"ROLE_ETUDIANT\";}',0,NULL,'default.jpg','2015-11-18 12:44:12');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-28 14:12:44
