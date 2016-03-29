CREATE DATABASE  IF NOT EXISTS `crms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crms`;
-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: crms
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `Agenda`
--

DROP TABLE IF EXISTS `Agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campagne_id` int(11) NOT NULL,
  `groupe_id` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `datecreation` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2B41CD4116227374` (`campagne_id`),
  KEY `IDX_2B41CD417A45358C` (`groupe_id`),
  KEY `IDX_2B41CD41FB88E14F` (`utilisateur_id`),
  CONSTRAINT `FK_2B41CD4116227374` FOREIGN KEY (`campagne_id`) REFERENCES `Campagne` (`id`),
  CONSTRAINT `FK_2B41CD417A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `GroupeCampagne` (`id`),
  CONSTRAINT `FK_2B41CD41FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `Utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Agenda`
--

LOCK TABLES `Agenda` WRITE;
/*!40000 ALTER TABLE `Agenda` DISABLE KEYS */;
INSERT INTO `Agenda` VALUES (1,1,NULL,1,'2016-01-14 19:23:13',1,0),(2,1,NULL,2,'2016-01-16 10:19:43',1,0),(3,1,1,3,'2016-01-16 13:41:57',1,0),(4,1,NULL,4,'2016-01-16 15:39:53',1,0);
/*!40000 ALTER TABLE `Agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AgendaLog`
--

DROP TABLE IF EXISTS `AgendaLog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AgendaLog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda_id` int(11) NOT NULL,
  `datelog` datetime NOT NULL,
  `lastat` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `closeat` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B9A511FCEA67784A` (`agenda_id`),
  CONSTRAINT `FK_B9A511FCEA67784A` FOREIGN KEY (`agenda_id`) REFERENCES `Agenda` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AgendaLog`
--

LOCK TABLES `AgendaLog` WRITE;
/*!40000 ALTER TABLE `AgendaLog` DISABLE KEYS */;
INSERT INTO `AgendaLog` VALUES (1,1,'2016-01-14 19:23:13','2016-01-14 19:25:03',0,'2016-01-14 19:25:03'),(2,2,'2016-01-16 10:19:43','2016-01-16 10:27:34',0,'2016-01-16 10:27:34'),(3,3,'2016-01-16 13:41:57','2016-01-16 15:24:37',0,'2016-01-16 15:01:35'),(4,4,'2016-01-16 15:39:53','2016-01-16 15:41:31',0,'2016-01-16 15:41:31'),(5,4,'2016-01-16 15:42:48','2016-01-16 18:09:10',0,'2016-01-16 18:09:10'),(6,2,'2016-01-16 16:27:22','2016-01-16 16:40:22',0,'2016-01-16 16:28:02'),(7,1,'2016-01-16 16:41:51','2016-01-16 16:44:49',0,'2016-01-16 16:44:49'),(8,2,'2016-01-16 16:50:59','2016-01-16 18:57:55',0,'2016-01-16 17:07:55'),(9,2,'2016-01-16 23:06:59','2016-01-17 01:45:36',0,'2016-01-17 01:45:36'),(10,2,'2016-01-17 01:46:03','2016-01-17 01:48:17',0,'2016-01-17 01:48:17'),(11,4,'2016-01-17 01:47:33','2016-01-17 02:24:45',0,'2016-01-17 02:24:45'),(12,3,'2016-01-17 12:56:59','2016-01-17 13:43:57',1,NULL);
/*!40000 ALTER TABLE `AgendaLog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Appel`
--

DROP TABLE IF EXISTS `Appel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Appel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campagne_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` longtext COLLATE utf8_unicode_ci,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C0F1FCB916227374` (`campagne_id`),
  CONSTRAINT `FK_C0F1FCB916227374` FOREIGN KEY (`campagne_id`) REFERENCES `Campagne` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Appel`
--

LOCK TABLES `Appel` WRITE;
/*!40000 ALTER TABLE `Appel` DISABLE KEYS */;
INSERT INTO `Appel` VALUES (2,1,'Janell Mcclure','Robert Fitzgerald','robertfitzgerald@xumonk.com','608 Division Avenue, Faxon, Wyoming, 5748','+212 (873) 598-3370','+212 05(860) 577-2969'),(3,1,'Villarreal Moon','Keller Parks','kellerparks@xumonk.com','567 Strong Place, Bordelonville, Hawaii, 6899','+212 (802) 436-3662','+212 05(857) 600-3897'),(4,1,'Miriam Joyner','Foster Carey','fostercarey@xumonk.com','103 Moore Place, Robinson, Illinois, 3831','+212 (818) 453-3047','+212 05(965) 454-2985'),(5,1,'Luna Terry','Knox Benjamin','knoxbenjamin@xumonk.com','227 Stone Avenue, Berlin, Utah, 387','+212 (826) 552-2496','+212 05(863) 494-2339'),(6,1,'Henderson Marks','Elise Zamora','elisezamora@xumonk.com','655 Schenck Avenue, Witmer, Maine, 3599','+212 (826) 498-2947','+212 05(811) 494-2232'),(7,1,'Ora Kirby','Fulton Kelley','fultonkelley@xumonk.com','633 Otsego Street, Galesville, Virginia, 3497','+212 (959) 444-3964','+212 05(859) 441-2146'),(8,1,'Marianne Hammond','Emerson Munoz','emersonmunoz@xumonk.com','150 Voorhies Avenue, Campo, Alabama, 1542','+212 (819) 466-2157','+212 05(943) 407-3993'),(9,1,'Gardner Pena','Goodman House','goodmanhouse@xumonk.com','788 Bokee Court, Vale, Maryland, 4853','+212 (891) 585-2663','+212 05(924) 592-2865'),(10,1,'Juarez Trujillo','Peck Allen','peckallen@xumonk.com','948 Pulaski Street, Nadine, Arkansas, 9632','+212 (905) 544-2851','+212 05(955) 479-3226'),(11,1,'Beard Sutton','Elliott Estes','elliottestes@xumonk.com','236 Erasmus Street, Waterford, New York, 6565','+212 (815) 592-3045','+212 05(991) 416-3221'),(12,1,'Craft Pollard','Pitts Jackson','pittsjackson@xumonk.com','353 Wythe Avenue, Dargan, Ohio, 8236','+212 (979) 509-3462','+212 05(820) 469-2901'),(13,1,'Avery Carson','Whitehead Alford','whiteheadalford@xumonk.com','694 Ingraham Street, Levant, American Samoa, 4489','+212 (970) 512-3510','+212 05(853) 439-3030'),(14,1,'Calhoun Steele','Estrada Preston','estradapreston@xumonk.com','348 Hudson Avenue, Ryderwood, Marshall Islands, 8816','+212 (813) 600-2985','+212 05(863) 487-2685'),(15,1,'Slater Day','Marci Navarro','marcinavarro@xumonk.com','188 Beverly Road, Hayden, Massachusetts, 9319','+212 (830) 530-3229','+212 05(894) 539-3517'),(16,1,'Franklin Huff','Terri Odom','terriodom@xumonk.com','546 Walker Court, Cumminsville, North Dakota, 8896','+212 (917) 449-2393','+212 05(937) 506-3096');
/*!40000 ALTER TABLE `Appel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Campagne`
--

DROP TABLE IF EXISTS `Campagne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Campagne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typecampagne_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `ajouterpar_id` int(11) NOT NULL,
  `formulaire_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateajout` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AAED3F405053569B` (`formulaire_id`),
  KEY `IDX_AAED3F40686A5529` (`typecampagne_id`),
  KEY `IDX_AAED3F4019EB6921` (`client_id`),
  KEY `IDX_AAED3F4074CD371F` (`ajouterpar_id`),
  CONSTRAINT `FK_AAED3F4019EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`),
  CONSTRAINT `FK_AAED3F405053569B` FOREIGN KEY (`formulaire_id`) REFERENCES `Formulaire` (`id`),
  CONSTRAINT `FK_AAED3F40686A5529` FOREIGN KEY (`typecampagne_id`) REFERENCES `TypeCampagne` (`id`),
  CONSTRAINT `FK_AAED3F4074CD371F` FOREIGN KEY (`ajouterpar_id`) REFERENCES `Utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Campagne`
--

LOCK TABLES `Campagne` WRITE;
/*!40000 ALTER TABLE `Campagne` DISABLE KEYS */;
INSERT INTO `Campagne` VALUES (1,NULL,1,1,1,'CAM','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede,</p>','2016-01-14 19:15:11',1,0,NULL);
/*!40000 ALTER TABLE `Campagne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) DEFAULT NULL,
  `compte_id` int(11) DEFAULT NULL,
  `params_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ddn` date NOT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `motpasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateajout` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `adresse` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C0E80163E7927C74` (`email`),
  UNIQUE KEY `UNIQ_C0E80163ABE530DA` (`cin`),
  UNIQUE KEY `UNIQ_C0E80163F2C56620` (`compte_id`),
  UNIQUE KEY `UNIQ_C0E80163339CCA0F` (`params_id`),
  KEY `IDX_C0E801634296D31F` (`genre_id`),
  CONSTRAINT `FK_C0E80163339CCA0F` FOREIGN KEY (`params_id`) REFERENCES `Param` (`id`),
  CONSTRAINT `FK_C0E801634296D31F` FOREIGN KEY (`genre_id`) REFERENCES `Genre` (`id`),
  CONSTRAINT `FK_C0E80163F2C56620` FOREIGN KEY (`compte_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
INSERT INTO `Client` VALUES (1,1,5,8,'Amine','Malouf','amine@gmail.com','1989-02-01','','images/default.png','068745896','SZE00155A','amine','2016-01-14 17:20:20',1,0,NULL),(2,1,7,9,'PAUL','Yao','pyao@gmail.com','1990-06-05','RAS','images/QAS54855KI.jpeg','064782266','QAS54855KI','cli0002','2016-01-14 18:38:45',1,0,'RAS');
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Formulaire`
--

DROP TABLE IF EXISTS `Formulaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateajout` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Formulaire`
--

LOCK TABLES `Formulaire` WRITE;
/*!40000 ALTER TABLE `Formulaire` DISABLE KEYS */;
INSERT INTO `Formulaire` VALUES (1,'Form Init','2016-01-14 19:17:19',1,0);
/*!40000 ALTER TABLE `Formulaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FormulaireChamp`
--

DROP TABLE IF EXISTS `FormulaireChamp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FormulaireChamp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formulaire_id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `element` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_429060F95053569B` (`formulaire_id`),
  CONSTRAINT `FK_429060F95053569B` FOREIGN KEY (`formulaire_id`) REFERENCES `Formulaire` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FormulaireChamp`
--

LOCK TABLES `FormulaireChamp` WRITE;
/*!40000 ALTER TABLE `FormulaireChamp` DISABLE KEYS */;
INSERT INTO `FormulaireChamp` VALUES (1,1,'2016-01-14 19:19:03',1,'text','Nom','input',1,0),(2,1,'2016-01-14 19:19:27',1,'text','Prenom','input',1,0),(3,1,'2016-01-14 19:19:27',2,'number','Age','input',1,0),(4,1,'2016-01-16 10:25:19',4,'','Pays','select',1,0);
/*!40000 ALTER TABLE `FormulaireChamp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FormulaireChampOption`
--

DROP TABLE IF EXISTS `FormulaireChampOption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FormulaireChampOption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `champ_id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_38DB8210D32AA90E` (`champ_id`),
  CONSTRAINT `FK_38DB8210D32AA90E` FOREIGN KEY (`champ_id`) REFERENCES `FormulaireChamp` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FormulaireChampOption`
--

LOCK TABLES `FormulaireChampOption` WRITE;
/*!40000 ALTER TABLE `FormulaireChampOption` DISABLE KEYS */;
INSERT INTO `FormulaireChampOption` VALUES (1,4,'2016-01-16 10:25:19','Maroc'),(2,4,'2016-01-16 10:25:19',' Cote d\'Ivoire'),(3,4,'2016-01-16 10:25:19',' Mali'),(4,4,'2016-01-16 10:25:19',' France'),(5,4,'2016-01-16 10:25:19',' Autres');
/*!40000 ALTER TABLE `FormulaireChampOption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Genre`
--

DROP TABLE IF EXISTS `Genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Genre`
--

LOCK TABLES `Genre` WRITE;
/*!40000 ALTER TABLE `Genre` DISABLE KEYS */;
INSERT INTO `Genre` VALUES (1,'Homme','1'),(2,'Femme','2');
/*!40000 ALTER TABLE `Genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Groupe`
--

DROP TABLE IF EXISTS `Groupe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `superviseur_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `datecreation` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3158917B7BB80FF` (`superviseur_id`),
  CONSTRAINT `FK_3158917B7BB80FF` FOREIGN KEY (`superviseur_id`) REFERENCES `Utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Groupe`
--

LOCK TABLES `Groupe` WRITE;
/*!40000 ALTER TABLE `Groupe` DISABLE KEYS */;
INSERT INTO `Groupe` VALUES (1,2,'Alpha','GROUP0','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor','2016-01-14 18:13:17',1,0);
/*!40000 ALTER TABLE `Groupe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GroupeCampagne`
--

DROP TABLE IF EXISTS `GroupeCampagne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GroupeCampagne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupe_id` int(11) NOT NULL,
  `campagne_id` int(11) NOT NULL,
  `dateaffectation` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `datedesacffectation` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D5A641AB7A45358C` (`groupe_id`),
  KEY `IDX_D5A641AB16227374` (`campagne_id`),
  CONSTRAINT `FK_D5A641AB16227374` FOREIGN KEY (`campagne_id`) REFERENCES `Campagne` (`id`),
  CONSTRAINT `FK_D5A641AB7A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `Groupe` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GroupeCampagne`
--

LOCK TABLES `GroupeCampagne` WRITE;
/*!40000 ALTER TABLE `GroupeCampagne` DISABLE KEYS */;
INSERT INTO `GroupeCampagne` VALUES (1,1,1,'2016-01-16 08:28:31',1,0,NULL);
/*!40000 ALTER TABLE `GroupeCampagne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GroupeUtilisateur`
--

DROP TABLE IF EXISTS `GroupeUtilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GroupeUtilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) NOT NULL,
  `groupe_id` int(11) NOT NULL,
  `dateaffectation` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6E851F3AFB88E14F` (`utilisateur_id`),
  KEY `IDX_6E851F3A7A45358C` (`groupe_id`),
  CONSTRAINT `FK_6E851F3A7A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `Groupe` (`id`),
  CONSTRAINT `FK_6E851F3AFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `Utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GroupeUtilisateur`
--

LOCK TABLES `GroupeUtilisateur` WRITE;
/*!40000 ALTER TABLE `GroupeUtilisateur` DISABLE KEYS */;
INSERT INTO `GroupeUtilisateur` VALUES (1,3,1,'2016-01-16 10:27:01',1,0),(2,4,1,'2016-01-14 18:15:17',1,0);
/*!40000 ALTER TABLE `GroupeUtilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Log`
--

DROP TABLE IF EXISTS `Log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `connectedat` datetime NOT NULL,
  `deconnectedat` datetime DEFAULT NULL,
  `lastact` datetime DEFAULT NULL,
  `connected` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B7722E25A76ED395` (`user_id`),
  CONSTRAINT `FK_B7722E25A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Log`
--

LOCK TABLES `Log` WRITE;
/*!40000 ALTER TABLE `Log` DISABLE KEYS */;
INSERT INTO `Log` VALUES (1,1,'2016-01-09 14:31:09','2016-01-09 14:31:09','2016-01-09 14:31:09',0),(2,1,'2016-01-09 14:33:28','2016-01-09 14:33:28','2016-01-09 14:33:28',0),(3,1,'2016-01-14 17:28:29','2016-01-14 18:05:27','2016-01-14 18:05:23',0),(4,2,'2016-01-14 17:54:45','2016-01-14 18:01:46','2016-01-14 18:01:43',0),(5,2,'2016-01-14 18:02:46','2016-01-14 18:03:57','2016-01-14 18:03:57',0),(6,2,'2016-01-14 18:04:09','2016-01-14 19:12:40','2016-01-14 19:12:37',0),(7,1,'2016-01-14 18:05:32','2016-01-14 18:06:26','2016-01-14 18:06:22',0),(8,1,'2016-01-14 18:06:29','2016-01-14 18:28:07','2016-01-14 18:28:07',0),(9,1,'2016-01-14 18:28:39','2016-01-14 18:29:12','2016-01-14 18:29:12',0),(10,1,'2016-01-14 18:30:01','2016-01-14 18:44:17','2016-01-14 18:44:17',0),(11,1,'2016-01-14 18:55:41','2016-01-14 19:14:55','2016-01-14 19:14:55',0),(12,3,'2016-01-14 19:12:58','2016-01-14 19:17:45','2016-01-14 19:17:45',0),(13,1,'2016-01-14 19:15:12','2016-01-14 19:25:03','2016-01-14 19:25:03',0),(14,2,'2016-01-14 19:17:47','2016-01-16 08:21:09','2016-01-16 08:21:09',0),(15,1,'2016-01-16 08:20:58','2016-01-16 10:09:35','2016-01-16 10:09:33',0),(16,4,'2016-01-16 08:25:19','2016-01-16 08:27:54','2016-01-16 08:27:53',0),(17,2,'2016-01-16 08:27:57','2016-01-16 08:49:36','2016-01-16 08:49:36',0),(18,2,'2016-01-16 08:56:19','2016-01-16 08:57:01','2016-01-16 08:57:01',0),(19,2,'2016-01-16 09:05:09','2016-01-16 09:05:46','2016-01-16 09:05:46',0),(20,2,'2016-01-16 09:06:03','2016-01-16 09:06:41','2016-01-16 09:06:41',0),(21,2,'2016-01-16 09:08:56','2016-01-16 09:18:46','2016-01-16 09:18:46',0),(22,2,'2016-01-16 09:22:01','2016-01-16 09:22:51','2016-01-16 09:22:51',0),(23,2,'2016-01-16 09:22:57','2016-01-16 09:29:57','2016-01-16 09:29:57',0),(24,2,'2016-01-16 09:29:58','2016-01-16 09:36:16','2016-01-16 09:36:14',0),(25,3,'2016-01-16 09:37:15','2016-01-16 10:09:59','2016-01-16 10:09:57',0),(26,1,'2016-01-16 10:10:07','2016-01-16 10:17:36','2016-01-16 10:17:35',0),(27,2,'2016-01-16 10:17:42','2016-01-16 10:27:34','2016-01-16 10:27:31',0),(28,1,'2016-01-16 10:18:32','2016-01-16 11:14:48','2016-01-16 11:14:48',0),(29,3,'2016-01-16 10:27:53','2016-01-16 11:14:48','2016-01-16 11:14:48',0),(30,2,'2016-01-16 11:14:40','2016-01-16 13:41:32','2016-01-16 13:41:27',0),(31,1,'2016-01-16 13:36:33','2016-01-16 14:50:28','2016-01-16 14:50:26',0),(32,3,'2016-01-16 13:41:48','2016-01-16 15:19:46','2016-01-16 15:19:46',0),(33,4,'2016-01-16 14:50:40','2016-01-16 15:03:54','2016-01-16 15:03:54',0),(34,4,'2016-01-16 15:03:56','2016-01-16 15:31:50','2016-01-16 15:31:48',0),(35,3,'2016-01-16 15:24:37','2016-01-16 15:25:09','2016-01-16 15:25:09',0),(36,4,'2016-01-16 15:32:01','2016-01-16 15:41:30','2016-01-16 15:41:30',0),(37,4,'2016-01-16 15:42:38','2016-01-16 18:21:33','2016-01-16 18:21:33',0),(38,3,'2016-01-16 16:23:31','2016-01-16 16:26:50','2016-01-16 16:26:49',0),(39,3,'2016-01-16 16:26:50','2016-01-16 16:27:21','2016-01-16 16:27:21',0),(40,2,'2016-01-16 16:26:56','2016-01-16 16:28:30','2016-01-16 16:28:30',0),(41,2,'2016-01-16 16:36:01','2016-01-16 16:40:23','2016-01-16 16:40:21',0),(42,1,'2016-01-16 16:40:28','2016-01-16 16:44:49','2016-01-16 16:44:48',0),(43,2,'2016-01-16 16:44:54','2016-01-16 16:44:54','2016-01-16 16:44:54',0),(44,2,'2016-01-16 16:44:54','2016-01-16 16:50:42','2016-01-16 16:50:38',0),(45,2,'2016-01-16 16:50:47','2016-01-16 17:08:29','2016-01-16 17:08:29',0),(46,2,'2016-01-16 17:11:13','2016-01-16 17:20:58','2016-01-16 17:20:58',0),(47,2,'2016-01-16 17:21:09','2016-01-16 18:57:54','2016-01-16 18:57:54',0),(48,2,'2016-01-16 23:05:13','2016-01-17 01:45:36','2016-01-17 01:45:35',0),(49,2,'2016-01-17 01:45:55','2016-01-17 01:48:18','2016-01-17 01:48:16',0),(50,4,'2016-01-17 01:47:18','2016-01-17 02:24:48','2016-01-17 02:24:43',0),(51,2,'2016-01-17 01:54:23','2016-01-17 02:27:04','2016-01-17 02:27:01',0),(52,1,'2016-01-17 02:24:54','2016-01-17 04:44:26','2016-01-17 04:44:26',0),(53,8,'2016-01-17 02:27:18','2016-01-17 02:28:48','2016-01-17 02:28:44',0),(54,3,'2016-01-17 02:28:53','2016-01-17 04:16:45','2016-01-17 04:16:43',0),(55,3,'2016-01-17 04:16:48',NULL,'2016-01-17 13:43:57',1);
/*!40000 ALTER TABLE `Log` ENABLE KEYS */;
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
  CONSTRAINT `FK_790009E3F624B39D` FOREIGN KEY (`sender_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Message`
--

LOCK TABLES `Message` WRITE;
/*!40000 ALTER TABLE `Message` DISABLE KEYS */;
INSERT INTO `Message` VALUES (1,1,1,'<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor.</p>','2016-01-14 17:56:27'),(2,1,2,'<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis&nbsp;</p>','2016-01-14 17:56:47'),(3,2,1,'<p>test</p>','2016-01-16 10:16:45'),(4,3,1,'<p>testes la version beta stp</p>','2016-01-16 10:17:24');
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
  CONSTRAINT `FK_DA67B3AD9D1C3019` FOREIGN KEY (`participant_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MessageMetadata`
--

LOCK TABLES `MessageMetadata` WRITE;
/*!40000 ALTER TABLE `MessageMetadata` DISABLE KEYS */;
INSERT INTO `MessageMetadata` VALUES (1,1,2,1),(2,1,1,1),(3,2,2,1),(4,2,1,1),(5,3,7,0),(6,3,1,1),(7,4,2,1),(8,4,1,1);
/*!40000 ALTER TABLE `MessageMetadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Notification`
--

DROP TABLE IF EXISTS `Notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `datenotif` datetime NOT NULL,
  `objet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A765AD32A76ED395` (`user_id`),
  CONSTRAINT `FK_A765AD32A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Notification`
--

LOCK TABLES `Notification` WRITE;
/*!40000 ALTER TABLE `Notification` DISABLE KEYS */;
INSERT INTO `Notification` VALUES (1,3,'2016-01-14 18:13:48','Affectation à un supervieur','Vous avez été affecté(e) au supervieur Sulivane <span class=\"nom\">Kloé</span>',0,0),(2,2,'2016-01-14 18:13:48','Affectation d\'agents','Des agents vous ont été affectés : <br><a class=\"btn\" href=\"/projects/c3rm/web/app_dev.php/fr/les-utilisateurs-3\">Proctor <span class=\"nom\">Ky</a><hr><div class=\"text-muted\"> Réalisé par Junior <span class=\"nom\">Aby</span> <em>[Administrateur]</em></div>',0,0),(3,3,'2016-01-14 18:15:17','Affectation à un groupe','<h3>Vous avez été affecté(e) à un groupe</h3><h3>Groupe::<span class=\"nom\">Alpha<span></h3><div>Ce groupe a été crée par Sulivane Kloé le 14-01-2016 18:13<br> le groupe Alpha travaille sur 0 campagne(s)</div><hr><div class=\"text-muted\"> Réalisé par Sulivane <span class=\"nom\">Kloé</span> <em>[Superviseur]</em></div>',0,0),(4,4,'2016-01-14 18:15:17','Affectation à un groupe','<h3>Vous avez été affecté(e) à un groupe</h3><h3>Groupe::<span class=\"nom\">Alpha<span></h3><div>Ce groupe a été crée par Sulivane Kloé le 14-01-2016 18:13<br> le groupe Alpha travaille sur 0 campagne(s)</div><hr><div class=\"text-muted\"> Réalisé par Sulivane <span class=\"nom\">Kloé</span> <em>[Superviseur]</em></div>',0,0),(5,2,'2016-01-14 19:18:02','Affectation à une campagne','<div> Vous avez été affecté à une campagne</div><h2> campagne::CAM</h2><div>Cette campagne dispose actuellement 0 superviseur(s). Le proprietaire de cette campagne est <strong>Malouf Amine</strong></div><div> Il y a 0 groupes qui travaille(nt) sur la campagne</div>Elle a été créée par Junior Aby (Administrateur)<hr><div class=\"text-muted\"> Réalisé par Junior <span class=\"nom\">Aby</span> <em>[Administrateur]</em></div>',0,0),(6,1,'2016-01-14 19:19:03','Ajout de champ au formulaire de campagne','Le formulaire de votre campagne [ CAM ] a été modifié <h3>Ajout de champ</h3><ul><li>Nom</li></ul><hr><div class=\"text-muted\"> Réalisé par Sulivane <span class=\"nom\">Kloé</span> <em>[Superviseur]</em></div>',0,0),(7,1,'2016-01-14 19:19:27','Ajout de champ au formulaire de campagne','Le formulaire de votre campagne [ CAM ] a été modifié <h3>Ajout de champ</h3><ul><li>Prenom</li><li>Age</li></ul><hr><div class=\"text-muted\"> Réalisé par Sulivane <span class=\"nom\">Kloé</span> <em>[Superviseur]</em></div>',0,0),(8,3,'2016-01-16 08:28:31','Affectation de votre groupe à une campagne','<h3>Votre groupe Alpha a été affecté à une campagne</h3><h2> campagne::CAM</h2><div>Cette campagne dispose actuellement 1 superviseur(s). Le proprietaire de cette campagne est <strong>Malouf Amine</strong></div><div> Il y a 0 groupes qui travaille(nt) sur la campagne</div>Elle a été créée par Junior Aby (Administrateur)<hr><div class=\"text-muted\"> Réalisé par Sulivane <span class=\"nom\">Kloé</span> <em>[Superviseur]</em></div>',0,1),(9,4,'2016-01-16 08:28:31','Affectation de votre groupe à une campagne','<h3>Votre groupe Alpha a été affecté à une campagne</h3><h2> campagne::CAM</h2><div>Cette campagne dispose actuellement 1 superviseur(s). Le proprietaire de cette campagne est <strong>Malouf Amine</strong></div><div> Il y a 0 groupes qui travaille(nt) sur la campagne</div>Elle a été créée par Junior Aby (Administrateur)<hr><div class=\"text-muted\"> Réalisé par Sulivane <span class=\"nom\">Kloé</span> <em>[Superviseur]</em></div>',0,0),(10,3,'2016-01-16 10:26:57','Désaffectation d\'un groupe','<h3>Vous avez été désaffecté(e) d\'un groupe</h3><h3>Groupe::<span class=\"nom\">Alpha<span></h3><div>Ce groupe a été crée par Sulivane Kloé le 14-01-2016 18:13<br> le groupe Alpha travaille sur 1 campagne(s)</div><hr><div class=\"text-muted\"> Réalisé par Sulivane <span class=\"nom\">Kloé</span> <em>[Superviseur]</em></div>',0,0),(11,3,'2016-01-16 10:27:01','Affectation à un groupe','<h3>Vous avez été réaffecté(e) à un groupe</h3><h3>Groupe::<span class=\"nom\">Alpha<span></h3><div>Ce groupe a été crée par Sulivane Kloé le 14-01-2016 18:13<br> le groupe Alpha travaille sur 1 campagne(s)</div><hr><div class=\"text-muted\"> Réalisé par Sulivane <span class=\"nom\">Kloé</span> <em>[Superviseur]</em></div>',0,0),(12,4,'2016-01-16 15:44:25','Ajout de rdv','Votre rdv #00008 a été enregistré avec succès<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/%7B%24id%7D?id=8\"> Voir</a> ',0,0),(13,4,'2016-01-16 15:46:36','Ajout de rdv','Votre rdv #00009 a été enregistré avec succès<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/9\">/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/9</a> ',0,0),(14,4,'2016-01-16 16:22:50','Ajout de rdv','Votre rdv #00011 a été enregistré avec succès<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/11\">Voir</a> ',0,0),(15,1,'2016-01-16 16:22:50','Ajout de rdv','Un rdv  a été ajouté<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/11\">#00011</a> ',0,0),(16,2,'2016-01-16 16:22:50','Ajout de rdv','Un rdv  a été ajouté<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/11\">#00011</a> ',0,0),(17,3,'2016-01-16 16:22:50','Ajout de rdv','Un rdv  a été ajouté<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/11\">#00011</a> ',0,0),(18,2,'2016-01-16 16:27:51','Ajout de rdv','Votre rdv #00012 a été enregistré avec succès<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/12\">Voir</a> ',0,0),(19,1,'2016-01-16 16:27:51','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/12\">#00012</a> ',0,0),(20,3,'2016-01-16 16:27:51','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/12\">#00012</a> ',1,0),(21,4,'2016-01-16 16:27:51','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/12\">#00012</a> ',0,0),(22,4,'2016-01-16 16:35:15','Ajout de rdv','Votre rdv #00018 a été enregistré avec succès<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/18\">Voir</a> <br><hr><small>Ajouté par <em>Pablo ESCOBAR</em> #Confirmateur',0,1),(23,1,'2016-01-16 16:35:15','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/18\">#00018</a> <hr><small>Ajouté par <em>Pablo ESCOBAR</em> #Confirmateur',0,0),(24,2,'2016-01-16 16:35:15','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/18\">#00018</a> <hr><small>Ajouté par <em>Pablo ESCOBAR</em> #Confirmateur',0,0),(25,3,'2016-01-16 16:35:15','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/18\">#00018</a> <hr><small>Ajouté par <em>Pablo ESCOBAR</em> #Confirmateur',1,0),(26,2,'2016-01-16 16:37:10','Ajout de rdv','Votre rdv #00019 a été enregistré avec succès<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/19\">Voir</a> <br><hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',0,0),(27,1,'2016-01-16 16:37:10','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/19\">#00019</a> <hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',0,0),(28,3,'2016-01-16 16:37:10','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/19\">#00019</a> <hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',1,0),(29,4,'2016-01-16 16:37:10','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/19\">#00019</a> <hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',0,0),(30,1,'2016-01-16 16:39:37','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/20\">#00020</a> <hr><small>Ajouté par <em>Pablo ESCOBAR</em> #Confirmateur',0,0),(31,2,'2016-01-16 16:39:37','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/20\">#00020</a> <hr><small>Ajouté par <em>Pablo ESCOBAR</em> #Confirmateur',0,0),(32,3,'2016-01-16 16:39:37','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/20\">#00020</a> <hr><small>Ajouté par <em>Pablo ESCOBAR</em> #Confirmateur',1,0),(33,2,'2016-01-16 16:51:23','Ajout de rdv','Votre rdv #00021 a été enregistré avec succès<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/21\">Voir</a> <br><hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',0,0),(34,1,'2016-01-16 16:51:23','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/21\">#00021</a> <hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',0,0),(35,3,'2016-01-16 16:51:23','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/21\">#00021</a> <hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',0,0),(36,2,'2016-01-16 17:51:05','Ajout de rdv','Votre rdv #00022 a été enregistré avec succès<br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/22\">Voir</a> <br><hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',0,0),(37,1,'2016-01-16 17:51:05','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/22\">#00022</a> <hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',0,0),(38,3,'2016-01-16 17:51:05','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/22\">#00022</a> <hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',1,0),(39,4,'2016-01-16 17:51:05','Ajout de rdv','Un rdv  a été ajouté à la campagne <em>CAM</em><br> <a href=\"/projects/c3rm/web/app_dev.php/calendrier/voir-rdv/22\">#00022</a> <hr><small>Ajouté par <em>Sulivane Kloé</em> #Superviseur',1,0);
/*!40000 ALTER TABLE `Notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Param`
--

DROP TABLE IF EXISTS `Param`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Param` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affectUser` tinyint(1) DEFAULT NULL,
  `desaffectUser` tinyint(1) DEFAULT NULL,
  `ableAddRdv` tinyint(1) DEFAULT NULL,
  `rdvchangestatus` tinyint(1) DEFAULT NULL,
  `rdvdelete` tinyint(1) DEFAULT NULL,
  `rdvfileadd` tinyint(1) DEFAULT NULL,
  `affectCampagn` tinyint(1) DEFAULT NULL,
  `desaffectCampagn` tinyint(1) DEFAULT NULL,
  `modifmycampaign` tinyint(1) DEFAULT NULL,
  `rdvadd` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Param`
--

LOCK TABLES `Param` WRITE;
/*!40000 ALTER TABLE `Param` DISABLE KEYS */;
INSERT INTO `Param` VALUES (1,1,1,0,1,1,0,1,1,1,1),(5,1,1,1,1,1,1,1,1,1,1),(6,1,1,1,1,1,1,1,1,1,1),(7,1,1,1,1,1,1,1,1,1,1),(8,1,1,1,1,1,1,1,1,1,1),(9,1,1,1,1,1,1,1,1,1,1),(10,1,1,1,1,1,1,1,1,1,1);
/*!40000 ALTER TABLE `Param` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Profil`
--

DROP TABLE IF EXISTS `Profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datecreation` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abrv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `generique` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Profil`
--

LOCK TABLES `Profil` WRITE;
/*!40000 ALTER TABLE `Profil` DISABLE KEYS */;
INSERT INTO `Profil` VALUES (1,'Administrateur','ROLE_ADMIN','2016-01-16 16:22:03','','admin','','555'),(2,'Superviseur','ROLE_SUP','2016-01-16 16:22:03','','sup','','444'),(3,'Confirmateur','ROLE_CONF','2016-01-16 16:22:03','','conf','','333'),(4,'Agent','ROLE_AGENT','0000-00-00 00:00:00','','agt','','222');
/*!40000 ALTER TABLE `Profil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Rdv`
--

DROP TABLE IF EXISTS `Rdv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Rdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `dateajout` datetime NOT NULL,
  `daterdv` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_288E5966EA67784A` (`agenda_id`),
  KEY `IDX_288E596619EB6921` (`client_id`),
  CONSTRAINT `FK_288E596619EB6921` FOREIGN KEY (`client_id`) REFERENCES `Appel` (`id`),
  CONSTRAINT `FK_288E5966EA67784A` FOREIGN KEY (`agenda_id`) REFERENCES `Agenda` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rdv`
--

LOCK TABLES `Rdv` WRITE;
/*!40000 ALTER TABLE `Rdv` DISABLE KEYS */;
INSERT INTO `Rdv` VALUES (5,3,NULL,1,0,'2016-01-16 14:36:37','2016-01-17 09:11:00'),(6,3,NULL,1,0,'2016-01-16 14:37:48','2016-01-17 09:17:00'),(7,4,NULL,1,0,'2016-01-16 15:43:31','2016-01-16 07:17:00'),(8,4,NULL,1,0,'2016-01-16 15:44:25','2016-01-16 07:18:00'),(9,4,NULL,1,0,'2016-01-16 15:46:36','2016-01-16 07:59:00'),(10,4,NULL,1,0,'2016-01-16 16:21:21','2016-01-16 07:53:00'),(11,4,NULL,1,0,'2016-01-16 16:22:50','2016-01-16 07:08:00'),(12,2,NULL,1,0,'2016-01-16 16:27:48','2016-01-16 07:42:00'),(13,4,NULL,1,0,'2016-01-16 16:32:13','2016-01-16 13:18:00'),(14,4,NULL,1,0,'2016-01-16 16:33:41','2016-01-16 13:18:00'),(15,4,NULL,1,0,'2016-01-16 16:33:53','2016-01-16 13:18:00'),(16,4,NULL,1,0,'2016-01-16 16:33:53','2016-01-16 13:18:00'),(17,4,NULL,1,0,'2016-01-16 16:34:32','2016-01-16 13:18:00'),(18,4,NULL,1,0,'2016-01-16 16:35:15','2016-01-16 13:18:00'),(19,2,NULL,1,0,'2016-01-16 16:37:10','2016-01-16 07:54:00'),(20,4,NULL,1,0,'2016-01-16 16:39:36','2016-01-16 09:38:00'),(21,2,NULL,1,0,'2016-01-16 16:51:23','2016-01-16 07:48:00'),(22,2,NULL,1,0,'2016-01-16 17:51:04','2016-01-16 18:11:00');
/*!40000 ALTER TABLE `Rdv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RdvChamp`
--

DROP TABLE IF EXISTS `RdvChamp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RdvChamp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rdv_id` int(11) NOT NULL,
  `formulairechamp_id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `donnee` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trash` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F821954C4CCE3F86` (`rdv_id`),
  KEY `IDX_F821954CED96AFA8` (`formulairechamp_id`),
  CONSTRAINT `FK_F821954C4CCE3F86` FOREIGN KEY (`rdv_id`) REFERENCES `Rdv` (`id`),
  CONSTRAINT `FK_F821954CED96AFA8` FOREIGN KEY (`formulairechamp_id`) REFERENCES `FormulaireChamp` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RdvChamp`
--

LOCK TABLES `RdvChamp` WRITE;
/*!40000 ALTER TABLE `RdvChamp` DISABLE KEYS */;
INSERT INTO `RdvChamp` VALUES (16,5,1,'2016-01-16 14:36:38','Kolo',0,1),(17,5,2,'2016-01-16 14:36:38','Laper',0,1),(18,5,3,'2016-01-16 14:36:38','36',0,1),(19,5,4,'2016-01-16 14:36:38',' Cote d\'Ivoire',0,1),(20,6,1,'2016-01-16 14:37:48','Aby',0,1),(21,6,2,'2016-01-16 14:37:48','Junior',0,1),(22,6,3,'2016-01-16 14:37:48','48',0,1),(23,6,4,'2016-01-16 14:37:48',' France',0,1),(24,7,1,'2016-01-16 15:43:32','Camso',0,1),(25,7,2,'2016-01-16 15:43:32','Malo',0,1),(26,7,3,'2016-01-16 15:43:32','78',0,1),(27,7,4,'2016-01-16 15:43:32',' France',0,1),(28,8,1,'2016-01-16 15:44:25','QA',0,1),(29,8,2,'2016-01-16 15:44:25','POl',0,1),(30,8,3,'2016-01-16 15:44:25','45',0,1),(31,8,4,'2016-01-16 15:44:25',' Mali',0,1),(32,9,1,'2016-01-16 15:46:36','QS',0,1),(33,9,2,'2016-01-16 15:46:36','OL',0,1),(34,9,3,'2016-01-16 15:46:36','75',0,1),(35,9,4,'2016-01-16 15:46:36',' Mali',0,1),(36,10,1,'2016-01-16 16:21:21','CV',0,1),(37,10,2,'2016-01-16 16:21:21','Pol',0,1),(38,10,3,'2016-01-16 16:21:21','74',0,1),(39,10,4,'2016-01-16 16:21:21',' Cote d\'Ivoire',0,1),(40,11,1,'2016-01-16 16:22:50','Riouk',0,1),(41,11,2,'2016-01-16 16:22:50','Mallo',0,1),(42,11,3,'2016-01-16 16:22:50','102',0,1),(43,11,4,'2016-01-16 16:22:50',' Autres',0,1),(44,12,1,'2016-01-16 16:27:51','ASZ',0,1),(45,12,2,'2016-01-16 16:27:51','LOK',0,1),(46,12,3,'2016-01-16 16:27:51','12',0,1),(47,12,4,'2016-01-16 16:27:51',' Cote d\'Ivoire',0,1),(48,13,1,'2016-01-16 16:32:13','Alonso',0,1),(49,13,2,'2016-01-16 16:32:13','MAme',0,1),(50,13,3,'2016-01-16 16:32:13','10',0,1),(51,13,4,'2016-01-16 16:32:13',' Mali',0,1),(52,14,1,'2016-01-16 16:33:41','Alonso',0,1),(53,14,2,'2016-01-16 16:33:41','MAme',0,1),(54,14,3,'2016-01-16 16:33:41','10',0,1),(55,14,4,'2016-01-16 16:33:41',' Mali',0,1),(56,15,1,'2016-01-16 16:33:53','Alonso',0,1),(57,15,2,'2016-01-16 16:33:53','MAme',0,1),(58,15,3,'2016-01-16 16:33:53','10',0,1),(59,15,4,'2016-01-16 16:33:53',' Mali',0,1),(60,16,1,'2016-01-16 16:33:53','Alonso',0,1),(61,16,2,'2016-01-16 16:33:53','MAme',0,1),(62,16,3,'2016-01-16 16:33:53','10',0,1),(63,16,4,'2016-01-16 16:33:53',' Mali',0,1),(64,17,1,'2016-01-16 16:34:33','Alonso',0,1),(65,17,2,'2016-01-16 16:34:33','MAme',0,1),(66,17,3,'2016-01-16 16:34:33','10',0,1),(67,17,4,'2016-01-16 16:34:33',' Mali',0,1),(68,18,1,'2016-01-16 16:35:15','Alonso',0,1),(69,18,2,'2016-01-16 16:35:15','MAme',0,1),(70,18,3,'2016-01-16 16:35:15','10',0,1),(71,18,4,'2016-01-16 16:35:15',' Mali',0,1),(72,19,1,'2016-01-16 16:37:10','LJk',0,1),(73,19,2,'2016-01-16 16:37:10','K',0,1),(74,19,3,'2016-01-16 16:37:10','455',0,1),(75,19,4,'2016-01-16 16:37:10',' Mali',0,1),(76,20,1,'2016-01-16 16:39:37','juo',0,1),(77,20,2,'2016-01-16 16:39:37','kjhfkj',0,1),(78,20,3,'2016-01-16 16:39:37','5',0,1),(79,20,4,'2016-01-16 16:39:37',' Mali',0,1),(80,21,1,'2016-01-16 16:51:23','kjdffbkj',0,1),(81,21,2,'2016-01-16 16:51:23','lkklvcjlk',0,1),(82,21,3,'2016-01-16 16:51:23','68',0,1),(83,21,4,'2016-01-16 16:51:23',' Mali',0,1),(84,22,1,'2016-01-16 17:51:05','Romolo',0,1),(85,22,2,'2016-01-16 17:51:05','ABY',0,1),(86,22,3,'2016-01-16 17:51:05','102',0,1),(87,22,4,'2016-01-16 17:51:05',' Cote d\'Ivoire',0,1);
/*!40000 ALTER TABLE `RdvChamp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RdvStatut`
--

DROP TABLE IF EXISTS `RdvStatut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RdvStatut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RdvStatut`
--

LOCK TABLES `RdvStatut` WRITE;
/*!40000 ALTER TABLE `RdvStatut` DISABLE KEYS */;
INSERT INTO `RdvStatut` VALUES (1,'Validé','ROLE_CONF','RDVVAL',NULL),(2,'Annulé','ROLE_CONF','RDVANN',''),(3,'Rejeté','ROLE_CLI','RDVREJ',''),(4,'Accepté','ROLE_CLI','RDVACC',NULL),(5,'Enregistré','ROLE_AGENT','RDVENR',NULL);
/*!40000 ALTER TABLE `RdvStatut` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Script`
--

DROP TABLE IF EXISTS `Script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campagne_id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1B2D820C16227374` (`campagne_id`),
  CONSTRAINT `FK_1B2D820C16227374` FOREIGN KEY (`campagne_id`) REFERENCES `Campagne` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Script`
--

LOCK TABLES `Script` WRITE;
/*!40000 ALTER TABLE `Script` DISABLE KEYS */;
INSERT INTO `Script` VALUES (1,1,'2016-01-16 09:33:26','<h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>\r\n\r\n<div style=\"background:#eee;border:1px solid #ccc;padding:5px 10px;\">Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim.</div>\r\n\r\n<p>Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>',1,0,'Lorem ipsum dolor sit amet');
/*!40000 ALTER TABLE `Script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Statut`
--

DROP TABLE IF EXISTS `Statut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Statut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rdv_id` int(11) NOT NULL,
  `statut_id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `actuel` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E2C8F5894CCE3F86` (`rdv_id`),
  KEY `IDX_E2C8F589F6203804` (`statut_id`),
  KEY `IDX_E2C8F589A76ED395` (`user_id`),
  CONSTRAINT `FK_E2C8F5894CCE3F86` FOREIGN KEY (`rdv_id`) REFERENCES `Rdv` (`id`),
  CONSTRAINT `FK_E2C8F589A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`),
  CONSTRAINT `FK_E2C8F589F6203804` FOREIGN KEY (`statut_id`) REFERENCES `RdvStatut` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Statut`
--

LOCK TABLES `Statut` WRITE;
/*!40000 ALTER TABLE `Statut` DISABLE KEYS */;
INSERT INTO `Statut` VALUES (1,6,5,'2016-01-16 14:37:48',1,0,3,1),(2,7,5,'2016-01-16 15:43:32',1,0,4,1),(3,8,5,'2016-01-16 15:44:25',1,0,4,1),(4,9,5,'2016-01-16 15:46:36',1,0,4,1),(5,10,5,'2016-01-16 16:21:21',1,0,4,1),(6,11,5,'2016-01-16 16:22:50',1,0,4,1),(7,12,5,'2016-01-16 16:27:51',1,0,2,1),(8,13,5,'2016-01-16 16:32:13',1,0,4,1),(9,14,5,'2016-01-16 16:33:41',1,0,4,1),(10,15,5,'2016-01-16 16:33:53',1,0,4,1),(11,16,5,'2016-01-16 16:33:53',1,0,4,1),(12,17,5,'2016-01-16 16:34:33',1,0,4,1),(13,18,5,'2016-01-16 16:35:15',1,0,4,1),(14,19,5,'2016-01-16 16:37:10',1,0,2,1),(15,20,5,'2016-01-16 16:39:37',1,0,4,1),(16,21,5,'2016-01-16 16:51:23',1,0,2,1),(17,22,5,'2016-01-16 17:51:05',1,0,2,1);
/*!40000 ALTER TABLE `Statut` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SupCampagne`
--

DROP TABLE IF EXISTS `SupCampagne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SupCampagne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `superviseur_id` int(11) NOT NULL,
  `campagne_id` int(11) NOT NULL,
  `dateaffectation` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `datedesacffectation` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A5D767E9B7BB80FF` (`superviseur_id`),
  KEY `IDX_A5D767E916227374` (`campagne_id`),
  CONSTRAINT `FK_A5D767E916227374` FOREIGN KEY (`campagne_id`) REFERENCES `Campagne` (`id`),
  CONSTRAINT `FK_A5D767E9B7BB80FF` FOREIGN KEY (`superviseur_id`) REFERENCES `Utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SupCampagne`
--

LOCK TABLES `SupCampagne` WRITE;
/*!40000 ALTER TABLE `SupCampagne` DISABLE KEYS */;
INSERT INTO `SupCampagne` VALUES (1,2,1,'2016-01-14 19:18:02',1,0,NULL);
/*!40000 ALTER TABLE `SupCampagne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SupUtilisateur`
--

DROP TABLE IF EXISTS `SupUtilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SupUtilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `superviseur_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `profil_id` int(11) NOT NULL,
  `dateaffectation` datetime NOT NULL,
  `datedesacffectation` datetime DEFAULT NULL,
  `trash` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F947846AB7BB80FF` (`superviseur_id`),
  KEY `IDX_F947846AFB88E14F` (`utilisateur_id`),
  KEY `IDX_F947846A275ED078` (`profil_id`),
  CONSTRAINT `FK_F947846A275ED078` FOREIGN KEY (`profil_id`) REFERENCES `Profil` (`id`),
  CONSTRAINT `FK_F947846AB7BB80FF` FOREIGN KEY (`superviseur_id`) REFERENCES `Utilisateur` (`id`),
  CONSTRAINT `FK_F947846AFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `Utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SupUtilisateur`
--

LOCK TABLES `SupUtilisateur` WRITE;
/*!40000 ALTER TABLE `SupUtilisateur` DISABLE KEYS */;
INSERT INTO `SupUtilisateur` VALUES (1,2,3,4,'2016-01-14 18:13:48',NULL,0,1),(2,2,4,3,'2016-01-14 18:13:57',NULL,0,1);
/*!40000 ALTER TABLE `SupUtilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tchat`
--

DROP TABLE IF EXISTS `Tchat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tchat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `send_id` int(11) NOT NULL,
  `receive_id` int(11) NOT NULL,
  `at` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trashSender` tinyint(1) NOT NULL,
  `trashRecever` tinyint(1) NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_4F68B3A013933E7B` (`send_id`),
  KEY `IDX_4F68B3A04CB96DCC` (`receive_id`),
  CONSTRAINT `FK_4F68B3A013933E7B` FOREIGN KEY (`send_id`) REFERENCES `fos_user` (`id`),
  CONSTRAINT `FK_4F68B3A04CB96DCC` FOREIGN KEY (`receive_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tchat`
--

LOCK TABLES `Tchat` WRITE;
/*!40000 ALTER TABLE `Tchat` DISABLE KEYS */;
INSERT INTO `Tchat` VALUES (1,1,2,'2016-01-14 17:57:10',0,0,0,'slt'),(2,2,1,'2016-01-14 17:57:31',0,0,0,'slt aby'),(3,2,1,'2016-01-14 17:57:37',0,0,0,'ndk?'),(4,1,2,'2016-01-14 17:58:11',0,0,0,'ça va bien merci'),(5,1,2,'2016-01-14 17:58:18',0,0,0,'et chez toi?'),(6,2,1,'2016-01-14 17:58:32',0,0,0,'hooo mon gere ça peut aller hooo');
/*!40000 ALTER TABLE `Tchat` ENABLE KEYS */;
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
  CONSTRAINT `FK_368C49B53174800F` FOREIGN KEY (`createdBy_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Thread`
--

LOCK TABLES `Thread` WRITE;
/*!40000 ALTER TABLE `Thread` DISABLE KEYS */;
INSERT INTO `Thread` VALUES (1,'Test','2016-01-14 17:56:27',0,1),(2,'Test','2016-01-16 10:16:45',0,1),(3,'slt','2016-01-16 10:17:24',0,1);
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
  CONSTRAINT `FK_BEF427AE9D1C3019` FOREIGN KEY (`participant_id`) REFERENCES `fos_user` (`id`),
  CONSTRAINT `FK_BEF427AEE2904019` FOREIGN KEY (`thread_id`) REFERENCES `Thread` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ThreadMetadata`
--

LOCK TABLES `ThreadMetadata` WRITE;
/*!40000 ALTER TABLE `ThreadMetadata` DISABLE KEYS */;
INSERT INTO `ThreadMetadata` VALUES (1,1,2,0,'2016-01-14 17:56:47','2016-01-14 17:56:27'),(2,1,1,0,'2016-01-14 17:56:27','2016-01-14 17:56:47'),(3,2,7,0,NULL,'2016-01-16 10:16:45'),(4,2,1,0,'2016-01-16 10:16:45',NULL),(5,3,2,0,NULL,'2016-01-16 10:17:24'),(6,3,1,0,'2016-01-16 10:17:24',NULL);
/*!40000 ALTER TABLE `ThreadMetadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TypeCampagne`
--

DROP TABLE IF EXISTS `TypeCampagne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TypeCampagne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateajout` datetime NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TypeCampagne`
--

LOCK TABLES `TypeCampagne` WRITE;
/*!40000 ALTER TABLE `TypeCampagne` DISABLE KEYS */;
/*!40000 ALTER TABLE `TypeCampagne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Utilisateur`
--

DROP TABLE IF EXISTS `Utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) DEFAULT NULL,
  `compte_id` int(11) DEFAULT NULL,
  `params_id` int(11) DEFAULT NULL,
  `profil_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ddn` date NOT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `motpasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateajout` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `adresse` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9B80EC64E7927C74` (`email`),
  UNIQUE KEY `UNIQ_9B80EC64ABE530DA` (`cin`),
  UNIQUE KEY `UNIQ_9B80EC64F2C56620` (`compte_id`),
  UNIQUE KEY `UNIQ_9B80EC64339CCA0F` (`params_id`),
  KEY `IDX_9B80EC644296D31F` (`genre_id`),
  KEY `IDX_9B80EC64275ED078` (`profil_id`),
  CONSTRAINT `FK_9B80EC64275ED078` FOREIGN KEY (`profil_id`) REFERENCES `Profil` (`id`),
  CONSTRAINT `FK_9B80EC64339CCA0F` FOREIGN KEY (`params_id`) REFERENCES `Param` (`id`),
  CONSTRAINT `FK_9B80EC644296D31F` FOREIGN KEY (`genre_id`) REFERENCES `Genre` (`id`),
  CONSTRAINT `FK_9B80EC64F2C56620` FOREIGN KEY (`compte_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Utilisateur`
--

LOCK TABLES `Utilisateur` WRITE;
/*!40000 ALTER TABLE `Utilisateur` DISABLE KEYS */;
INSERT INTO `Utilisateur` VALUES (1,1,1,1,1,'Aby','Junior','','1989-02-02','','images/default.jpeg','0641746727','BE56350X','admin','2016-01-14 16:30:30',1,0,'RAS'),(2,2,2,5,2,'Kloé','Sulivane','kloe@gmail.com','1989-01-01',NULL,'images/AZ4125MP.jpeg','0687458962','AZ4125MP','sulivane2016','2016-01-14 17:41:31',1,0,NULL),(3,1,3,6,4,'Ky','Proctor','kproc@gmail.com','1969-01-05','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor','images/GT7458LO.jpeg','01457995','GT7458LO','agt0001','2016-01-14 18:09:52',1,0,'RAS'),(4,1,4,7,3,'ESCOBAR','Pablo','es.pa@houtlook.com','1980-05-06','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor','images/QSA74125K.jpeg','0658746236','QSA74125K','conf0001','2016-01-14 18:12:34',1,0,'Rue 300 casablanca Mers sultan'),(5,1,8,10,4,'Ryan','Marc','r.marc@gmail.com','1980-01-01','Lorem ipsum','images/CFQ521NH.jpeg','06 785 784','CFQ521NH','agt0002','2016-01-17 02:26:36',1,0,'Casablanca 30 rue merci');
/*!40000 ALTER TABLE `Utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'admin','admin','admin@gmail.com','admin@gmail.com',1,'iqsj4aqgruo0skgo4ow8g408w8sc040','WEEevTtIWxYASGdaWQQ9a7+pUcae8FvwSkfv0v4LuGVOGF61fDATpaekFZRQZVqg/19UGt85ab7puoaXsWFG4w==','2016-01-17 02:24:54',0,0,NULL,NULL,NULL,'a:3:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:11:\"SUPER_ADMIN\";i:2;s:16:\"ROLE_SUPER_ADMIN\";}',0,NULL),(2,'sulivane','sulivane','kloe@gmail.com','kloe@gmail.com',1,'gjhmi4f9a94o4wwgocsowogkckso00w','BX8emAcj65gyW2PhvI3nQQyn4qwSO349gt0563GiHInlN6kYwvL69swB4a2qXKm+2C4sub1NAtlFsctbIdNgkQ==','2016-01-17 01:54:23',0,0,NULL,NULL,NULL,'a:1:{i:0;s:8:\"ROLE_SUP\";}',0,NULL),(3,'agt0001','agt0001','kproc@gmail.com','kproc@gmail.com',1,'3fofoy11nagw4s00wk8cw4cgs88oskk','xXXvik9f2r01sj+zlvo62EJ4VuODODMtb/61evJdW83hdwAJ53F+OmicvSEqdZ1qcg4LRzMrvoWLf81vwv/OQw==','2016-01-17 04:16:48',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_AGENT\";}',0,NULL),(4,'conf0001','conf0001','es.pa@houtlook.com','es.pa@houtlook.com',1,'jkobgmv75jww44kkwgo84gwsos0oc0w','NgidHbP47T0sUhzUJpzdL0yq4iMqG+pqSn3j5Ajv00fLMASp2R1kbsewNzwx6YRhpodEWBxAk0lcNrqCUeFZhw==','2016-01-17 01:47:18',0,0,NULL,NULL,NULL,'a:1:{i:0;s:9:\"ROLE_CONF\";}',0,NULL),(5,'amine','amine','amine@gmail.com','amine@gmail.com',1,'9c5f5k3yzu8s4w0gc88wcko88oss8wk','+wZeZpkk/vFvUEPYsyPi0tg5WER1PY6qFVEMiQwrTlXYVY8AhC0t3Ui8xKnhft7V7i9bO4yeYrLBpCXstYBUzA==',NULL,0,0,NULL,NULL,NULL,'a:1:{i:0;s:8:\"ROLE_CLI\";}',0,NULL),(7,'cli0002','cli0002','pyao@gmail.com','pyao@gmail.com',1,'bn3xbmzs6eos08c0w8oo0oc4o0kcwgo','ONkLVjHg7ppfCacphcV1mTrqmJ6IXO7wBkCaSUY7dzxQjsRJrNQeCjEBv+ZGKo8erNma/a8C9mO9auhHyrZYNw==',NULL,0,0,NULL,NULL,NULL,'a:1:{i:0;s:8:\"ROLE_CLI\";}',0,NULL),(8,'agt0002','agt0002','r.marc@gmail.com','r.marc@gmail.com',1,'8fe4ipjav24go8s4oc0400s400sscoo','Qkyq5aLDrilhp7thyNReRzyV0bGRuSHZXgi5RWMpVN60VCLXsHehoMKOUvKiliXrKmm6coei2TkfJGxTWP/H/g==','2016-01-17 02:27:18',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_AGENT\";}',0,NULL);
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-17 12:43:58
