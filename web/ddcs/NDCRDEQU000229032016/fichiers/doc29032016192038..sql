CREATE DATABASE  IF NOT EXISTS `rsw` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rsw`;
-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: rsw
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
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_32EB52E812B2DC9C` (`matricule`),
  UNIQUE KEY `UNIQ_32EB52E8E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrateur`
--

LOCK TABLES `administrateur` WRITE;
/*!40000 ALTER TABLE `administrateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alerte`
--

DROP TABLE IF EXISTS `alerte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alerte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destinataire_id` int(11) NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cree` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3AE753AA4F84F6E` (`destinataire_id`),
  CONSTRAINT `FK_3AE753AA4F84F6E` FOREIGN KEY (`destinataire_id`) REFERENCES `personne` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alerte`
--

LOCK TABLES `alerte` WRITE;
/*!40000 ALTER TABLE `alerte` DISABLE KEYS */;
/*!40000 ALTER TABLE `alerte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rubrique_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `publier` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_23A0E66989D9B62` (`slug`),
  KEY `IDX_23A0E663BD38833` (`rubrique_id`),
  CONSTRAINT `FK_23A0E663BD38833` FOREIGN KEY (`rubrique_id`) REFERENCES `rubrique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,1,'Compte courant','COMCOU','RAS for the moment','compte-courant',1),(2,1,'Compte d\'épargne','COMEPAR','RAS','compte-d-epargne',1),(3,1,'Dépôt à termes','DEPTER','Nothing for the moment','depot-a-termes',1),(4,4,'mot du directeur','md','mllfl','mot-du-directeur',0);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banniere`
--

DROP TABLE IF EXISTS `banniere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banniere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL,
  `publier` tinyint(1) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hauteur` int(11) NOT NULL,
  `largeur` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texte` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banniere`
--

LOCK TABLES `banniere` WRITE;
/*!40000 ALTER TABLE `banniere` DISABLE KEYS */;
/*!40000 ALTER TABLE `banniere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compteur_visite`
--

DROP TABLE IF EXISTS `compteur_visite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compteur_visite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datevisit` datetime NOT NULL,
  `addr_ip_src` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compteur_visite`
--

LOCK TABLES `compteur_visite` WRITE;
/*!40000 ALTER TABLE `compteur_visite` DISABLE KEYS */;
/*!40000 ALTER TABLE `compteur_visite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenu`
--

DROP TABLE IF EXISTS `contenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personne_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL,
  `publier` tinyint(1) NOT NULL,
  `texte` longtext COLLATE utf8_unicode_ci NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_89C2003FA21BD112` (`personne_id`),
  KEY `IDX_89C2003F7294869C` (`article_id`),
  CONSTRAINT `FK_89C2003F7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  CONSTRAINT `FK_89C2003FA21BD112` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenu`
--

LOCK TABLES `contenu` WRITE;
/*!40000 ALTER TABLE `contenu` DISABLE KEYS */;
INSERT INTO `contenu` VALUES (1,7,1,'2016-03-19 02:24:58','2016-03-19 02:24:58',1,'<p>D&eacute;p&ocirc;t &agrave; Terme C&#39;est un moyen de placement &agrave; court terme qui rapporte des int&eacute;r&ecirc;ts de 2.5 &agrave; 6% en fonction de la dur&eacute;e de souscription et du montant.</p>\r\n\r\n<p>Vous choisissez librement la dur&eacute;e qui vous convient:</p>\r\n\r\n<ul>\r\n	<li>1 mois</li>\r\n	<li>3 mois</li>\r\n	<li>6 mois</li>\r\n	<li>12 mois et plus</li>\r\n</ul>',3),(2,7,1,'2016-03-19 02:29:53','2016-03-19 02:29:53',1,'<ul>\r\n	<li>2 photos</li>\r\n	<li>Photocopie d&#39;une pi&egrave;ce d&#39;identit&eacute; (Merci de venir avec l&#39;original pour des fins d&#39;authentification)</li>\r\n	<li>Un versement initial d&#39;au moins 100.000 FCFA &agrave; l&#39;ouverture du compte</li>\r\n</ul>\r\n\r\n<h3>Observations</h3>\r\n\r\n<p>Avec cette option nous vous donnons un ch&eacute;quier (le premier &eacute;tant disponible environ une semaine apr&egrave;s l&#39;ouverture) Vous pourrez effectuer une demande de cartes Cauris pour vos retraits rapides aux guichets automatiques et &eacute;viter l&#39;attente dans les caisses.</p>\r\n\r\n<ul>\r\n</ul>',1),(3,7,2,'2016-03-19 14:19:41','2016-03-19 14:19:41',1,'<h2>Remarques</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci.</p>',1),(4,7,0,'2016-03-19 14:20:54','2016-03-19 14:20:54',1,'<h3>RAS</h3>\r\n\r\n<p>&quot;id&quot;=&gt;&quot;desc&quot;</p>',1);
/*!40000 ALTER TABLE `contenu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `editeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5A747EF12B2DC9C` (`matricule`),
  UNIQUE KEY `UNIQ_5A747EFE7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editeur`
--

LOCK TABLES `editeur` WRITE;
/*!40000 ALTER TABLE `editeur` DISABLE KEYS */;
/*!40000 ALTER TABLE `editeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groupe`
--

LOCK TABLES `groupe` WRITE;
/*!40000 ALTER TABLE `groupe` DISABLE KEYS */;
INSERT INTO `groupe` VALUES (1,'Editeur','ROLE_EDITEUR',NULL,1),(2,'Administrateur','ROLE_ADMIN',NULL,1);
/*!40000 ALTER TABLE `groupe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_letter`
--

DROP TABLE IF EXISTS `news_letter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `editeur_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_envoi` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2AB2D7E3375BD21` (`editeur_id`),
  CONSTRAINT `FK_2AB2D7E3375BD21` FOREIGN KEY (`editeur_id`) REFERENCES `editeur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_letter`
--

LOCK TABLES `news_letter` WRITE;
/*!40000 ALTER TABLE `news_letter` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_letter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupe_id` int(11) DEFAULT NULL,
  `compte_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FCEC9EF12B2DC9C` (`matricule`),
  UNIQUE KEY `UNIQ_FCEC9EFE7927C74` (`email`),
  UNIQUE KEY `UNIQ_FCEC9EFF2C56620` (`compte_id`),
  KEY `IDX_FCEC9EF7A45358C` (`groupe_id`),
  CONSTRAINT `FK_FCEC9EF7A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`),
  CONSTRAINT `FK_FCEC9EFF2C56620` FOREIGN KEY (`compte_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` VALUES (2,1,2,'Administrateur','Admin','002236524132','Bamako - Mali','admin@bdm-sa.com','Responsable Developpement','img/178120.jpeg',1,'178120'),(5,1,5,'Jack','Bauer','0641789532','ras','jack.b@gmail.com','Agent','img/default.png',1,'742568'),(6,1,3,'ALLA','Jean','00212 687 854 753','Rue de la joie casa','a.jean@gmail.com','Editeur','img/0012785.jpeg',1,'0012785'),(7,2,4,'Camara','Doho','00212784569321','BASE','c.doh@gmail.com','Admin','img/451789.jpeg',1,'451789'),(8,1,6,'Kokou','Meriano','00212  6687 459','casablanca','k.m@gmail.com','Editeur','img/125478.jpeg',1,'125478'),(9,1,7,'Riouk','Mallock','00212 698 458','Rue de la paix casa','rmalloack@gmail.com','Editeur','img/014785.jpeg',1,'014785');
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubrique`
--

DROP TABLE IF EXISTS `rubrique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubrique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `segment_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `publier` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8FA4097C989D9B62` (`slug`),
  KEY `IDX_8FA4097CDB296AAD` (`segment_id`),
  CONSTRAINT `FK_8FA4097CDB296AAD` FOREIGN KEY (`segment_id`) REFERENCES `segment` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubrique`
--

LOCK TABLES `rubrique` WRITE;
/*!40000 ALTER TABLE `rubrique` DISABLE KEYS */;
INSERT INTO `rubrique` VALUES (1,1,'Comptes','COM','RAS pour le moment','comptes',1),(2,2,'Cartes','CAR','RAS','cartes',0),(3,3,'Banniere','ban','RAS','banniere',1),(4,3,'Groupe BDM SA','GBDM','ras','groupe-bdm-sa',1);
/*!40000 ALTER TABLE `rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `segment`
--

DROP TABLE IF EXISTS `segment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `segment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `publier` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1881F565989D9B62` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `segment`
--

LOCK TABLES `segment` WRITE;
/*!40000 ALTER TABLE `segment` DISABLE KEYS */;
INSERT INTO `segment` VALUES (1,'Les particuliers','PAR','SUM','les-particuliers-04',1),(2,'Maliens Résidant à l\'Etranger','MRE','Ras','maliens-residant-a-l-etranger',1),(3,'General','GNL','RAS','general',1);
/*!40000 ALTER TABLE `segment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texte`
--

DROP TABLE IF EXISTS `texte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `texte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL,
  `publier` tinyint(1) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `texte` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texte`
--

LOCK TABLES `texte` WRITE;
/*!40000 ALTER TABLE `texte` DISABLE KEYS */;
/*!40000 ALTER TABLE `texte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
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
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'admin','admin','admin@bdm-sa.com','admin@bdm-sa.com',1,'455pfw1sf3swks0wk4co8k8kw0kwoso','sC4T4wTS0TgEZHe0HRlilt1l6/G3vGp0V0odRb6ZgsU6XSw/LUHJ16OuFDBrTkohadG4SDIjj9PqkTxS08U9Ow==','2016-03-10 22:39:44',0,0,NULL,NULL,NULL,'a:1:{i:0;s:12:\"ROLE_EDITEUR\";}',0,NULL),(3,'0012785','0012785','a.jean@gmail.com','a.jean@gmail.com',0,'kdoy81q0udc4gks4ggw88cscc40cwgc','3GHDRPiT5KU2C7vuPij3VaMY3zQpc77X2K890KlESYIKa9uJ1JsrAbyShjNolrDPKe7IKl2i6lScMhYXKRU2ow==',NULL,0,0,NULL,NULL,NULL,'a:1:{i:0;s:12:\"ROLE_EDITEUR\";}',0,NULL),(4,'451789','451789','c.doh@gmail.com','c.doh@gmail.com',1,'gqnbsoaishkw4k0wog4840kwg4g4kc4','D1YQ1j1cSLyUGevpKTVM0AY4VG/aWYTDHhpWejaax1SHsEKtnCe8ncm7WCrWmw6nMDA1RdsdJMNdoZb+sjsSog==','2016-03-19 16:50:45',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',0,NULL),(5,'742568','742568','jack.b@gmail.com','jack.b@gmail.com',1,'odz38i8fez48gk88gwcg0gcsss0c48w','ZEVVDE5QHis+EC4KgwPbo9wYAnZsptMVM3HfN5b6j7ujDREJGJP6jEcg3xKOxkxVmSqz3qUct8Q2yOQ3DL1OTg==',NULL,0,0,NULL,NULL,NULL,'a:1:{i:0;s:12:\"ROLE_EDITEUR\";}',0,NULL),(6,'u125478','u125478','k.m@gmail.com','k.m@gmail.com',1,'ge3ogoey7xw8swo08k08s8wks44wks0','087QOcwcKyYYvy32JxPFldRxFA1bEMXFUYVdJ2VYsVu3fLCUMqf3R7KMZ2BAtd2OGKH/Ute+28PXvOk21iVWeg==',NULL,0,0,NULL,NULL,NULL,'a:1:{i:0;s:12:\"ROLE_EDITEUR\";}',0,NULL),(7,'u014785','u014785','rmalloack@gmail.com','rmalloack@gmail.com',1,'t0g9jjqgeqogcco44kccwos80kwocgo','3FlK5VoO3cYYXA92z8SDMENubQhynyzPWixxQGXknepBUGk8pKqWTU0UYxs3X3EE9YTDeKrsEdAGt2PWqVHMkA==',NULL,0,0,NULL,NULL,NULL,'a:1:{i:0;s:12:\"ROLE_EDITEUR\";}',0,NULL);
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

-- Dump completed on 2016-03-28 14:13:27
