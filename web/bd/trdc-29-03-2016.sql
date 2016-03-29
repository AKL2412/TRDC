-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2016 at 09:13 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `Acteur`
--

CREATE TABLE `Acteur` (
  `id` int(11) NOT NULL,
  `classe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Acteur`
--

INSERT INTO `Acteur` (`id`, `classe`, `dateajout`) VALUES
(1, 'Utilisateur', '2016-02-27 11:45:35'),
(2, 'Utilisateur', '2016-02-27 11:45:35'),
(3, 'Utilisateur', '2016-02-27 11:45:35'),
(4, 'Systeme', '2016-02-27 14:56:16'),
(5, 'Utilisateur', '2016-02-27 11:45:35'),
(6, 'Utilissateur', '2016-02-27 11:45:35'),
(7, 'Utilisateur', '2016-03-29 16:02:34'),
(8, 'Utilisateur', '2016-03-29 16:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `agence`
--

CREATE TABLE `agence` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `dateajout` datetime NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entite_id` int(11) DEFAULT NULL,
  `zone_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agence`
--

INSERT INTO `agence` (`id`, `nom`, `description`, `dateajout`, `code`, `matricule`, `entite_id`, `zone_id`) VALUES
(7, 'AZE', 'aze', '2016-02-27 11:23:40', '102856', 'AGE000527022016', 3, 1),
(8, 'Home 001', 'RAS', '2016-02-29 18:39:42', '01254800', 'AGE000629022016', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `b_o_c`
--

CREATE TABLE `b_o_c` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `dateajout` datetime NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entite_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `b_o_c`
--

INSERT INTO `b_o_c` (`id`, `nom`, `description`, `dateajout`, `code`, `matricule`, `entite_id`) VALUES
(1, 'CTN crédits', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2016-02-13 12:46:47', '123458', 'BOC000113022016', 8);

-- --------------------------------------------------------

--
-- Table structure for table `civilite`
--

CREATE TABLE `civilite` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `civilite`
--

INSERT INTO `civilite` (`id`, `nom`, `code`) VALUES
(1, 'Homme', 'HOMME'),
(2, 'Femme', 'FEMME');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `radical` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `identite_id` int(11) DEFAULT NULL,
  `revenu_id` int(11) DEFAULT NULL,
  `logement_id` int(11) DEFAULT NULL,
  `pac_id` int(11) DEFAULT NULL,
  `coordonnee_id` int(11) DEFAULT NULL,
  `profession_id` int(11) DEFAULT NULL,
  `employeur_id` int(11) DEFAULT NULL,
  `intitule` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agence_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `radical`, `identite_id`, `revenu_id`, `logement_id`, `pac_id`, `coordonnee_id`, `profession_id`, `employeur_id`, `intitule`, `agence_id`) VALUES
(1, '0455598', 1, 1, 1, 1, 1, 1, 1, 'Quadra ABY', 8),
(2, '1110123', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Jeanne Martine KARL', 8),
(3, '0123789', 3, NULL, NULL, NULL, NULL, 2, NULL, 'Jay Homer SIMPSON', 8);

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `id` int(11) NOT NULL,
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
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(6, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 'dvzi1spsd88wowoocgs0ss404og4cgs', 'N5nINyBvFfAK+GleQlt/Q1hlZXYq/qyVCr5waTD18THK+1Ygz4a/cll/UIwcLB8K7raBtlTU1XH2xWTWW/tExg==', '2016-03-27 20:42:22', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:9:"ROLE_ABOC";}', 0, NULL),
(7, 'junior', 'junior', 'junior@gmail.com', 'junior@gmail.com', 1, '2brakvm8jxnogog480kco884wgkwo0o', 'Aj010zrVReRRzy8C41HZU7LbHWg8k5plH3Z86gQnItTv01gxVk9c3mP5W3/liCODT39eUCfD9aTdPNzFE+u5vw==', '2016-03-29 15:46:30', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(8, 'toto', 'toto', 'toto@gmail.com', 'toto@gmail.com', 1, '9lkyb7h9xdkw00804s4ksw488000k8k', 'Fy3O3oh39c4nyGblakcBj3gcaMPOTlEQuN6v0OVYg6UrCTr72A9VxvAliL4MW+JVtVVcUhSlT9IUrhSh/m8qQw==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(9, 'u118152', 'u118152', 'k.leon.aby@gmail.com', 'k.leon.aby@gmail.com', 1, '1n1msubzmgsgs8gkwsgcogcgkgw4ogs', 'kvdkNTItTR14Ll3SeYhUlpXyPXGgzX6q3XHaACDgNe2DuH9nqjsuCaAl/2S7audMVtHiOduQ2VCNk/wjMzXFiw==', '2016-03-29 10:12:35', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:9:"ROLE_RBOC";}', 0, NULL),
(10, 'u118153', 'u118153', 'kp@gmail.com', 'kp@gmail.com', 1, 'qkolii3lg2880okgsgskkwsooskc4go', 'OnhzYTrZaniVAPql24dDrFbyiJxrXEHJTIdmnXTz0cLrgPng0HwiBWLwADnyMgvfKQduIQhoAUgbVI0p4eQZgQ==', '2016-03-29 18:47:36', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:7:"ROLE_CC";}', 0, NULL),
(12, 'u000478', 'u000478', 'mf@gmail.com', 'mf@gmail.com', 1, '3ckbxedlifuo48kw4oc0wogoos8ss0k', 'DBlN8Gz2uXDYctuWqEGhKfvQwuvNXvmYLV5/vztILVTnm2ZuSb78mpxhRjLnUfYv9fS6Si+VYPfoE/GxeBtJVg==', '2016-03-29 17:36:19', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:7:"ROLE_CA";}', 0, NULL),
(13, 'uAQZ7854', 'uaqz7854', 'm.jean@gmail.com', 'm.jean@gmail.com', 1, 'soubxq9feggswckw00wk0cskkw0csk8', 'fKcYimWTtbN6IIPMyCGoV4Jj8a7Z7kytpcZOB5IHjFnNYAUU1EajYUEj71/iNjouw9fcO9AABti5tFGO2S0BzA==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:7:"ROLE_RZ";}', 0, NULL),
(14, 'u000001', 'u000001', 'rpam@yahoo.fr', 'rpam@yahoo.fr', 1, '1u2mgim9pwlcww0ks80w00s4kgokoo0', '8a93fZm6Kh+jbXMkxWHQfADgIOpInZuu5eszWqzNMFQXPgysawi0mOXscFVkbvSOi3sW0pTwiuHGHzWHEsHqhg==', '2016-03-29 19:14:19', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:7:"ROLE_CC";}', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coordonnee`
--

CREATE TABLE `coordonnee` (
  `id` int(11) NOT NULL,
  `adresse` longtext COLLATE utf8_unicode_ci,
  `boitePostale` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephoneProfessionnel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephoneDomicile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gsm` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coordonnee`
--

INSERT INTO `coordonnee` (`id`, `adresse`, `boitePostale`, `ville`, `telephoneProfessionnel`, `telephoneDomicile`, `gsm`, `email`) VALUES
(1, '10 rue Hajja', '10000', 'Casablanca', '002125478965', '002125284820', '00212 641 746 727', 'junioraby@ymail.com'),
(3, '201 784 roma', '2000', 'Divo', '00338745892', '00335412569', '00336547891', 'abyromolo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_c_d`
--

CREATE TABLE `c_d_c_d` (
  `id` int(11) NOT NULL,
  `montant` double NOT NULL,
  `duree` int(11) NOT NULL,
  `quotite` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_d_c_d`
--

INSERT INTO `c_d_c_d` (`id`, `montant`, `duree`, `quotite`) VALUES
(10, 1000000, 2000, 3000),
(11, 2500000, 30, 5000),
(12, 2500000, 20, 10000),
(13, 50000, 5, 5000),
(14, 5000000, 83, 20000),
(15, 4400000, 10, 4500),
(16, 2500000, 30, 10000),
(17, 5000000, 20, 875000),
(18, 60000, 30, 20300),
(19, 60000, 30, 20300);

-- --------------------------------------------------------

--
-- Table structure for table `c_e_c`
--

CREATE TABLE `c_e_c` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `montant` double NOT NULL,
  `datedeblocage` datetime NOT NULL,
  `duree` int(11) NOT NULL,
  `mensualite` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_i_c`
--

CREATE TABLE `c_i_c` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `dateajout` datetime NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entite_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_i_c`
--

INSERT INTO `c_i_c` (`id`, `nom`, `description`, `dateajout`, `code`, `matricule`, `entite_id`) VALUES
(4, '5C', 'ras', '2016-02-27 11:20:24', '000124', 'CIC000327022016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ddp_tdc`
--

CREATE TABLE `ddp_tdc` (
  `ddp_id` int(11) NOT NULL,
  `tdc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ddp_tdc`
--

INSERT INTO `ddp_tdc` (`ddp_id`, `tdc_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 3),
(4, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `decision`
--

CREATE TABLE `decision` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci,
  `etats` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `decision`
--

INSERT INTO `decision` (`id`, `nom`, `details`, `etats`) VALUES
(1, 'Validé', NULL, 'ETDOS VCA VRZ'),
(2, 'Rejeté', NULL, 'ETDOS VCA VRZ ANABOC CIC MEP'),
(3, 'Ajourné', NULL, 'CIC '),
(4, 'Risqué', NULL, 'ETDOS ANABOC '),
(5, 'Accordé', NULL, 'CIC '),
(6, 'A soumettre', NULL, 'CIC MEP ETDOS VCA VRZ ANABOC '),
(7, 'Débloqué', NULL, 'MEP');

-- --------------------------------------------------------

--
-- Table structure for table `d_d_c`
--

CREATE TABLE `d_d_c` (
  `id` int(11) NOT NULL,
  `rs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `edp_id` int(11) NOT NULL,
  `cdcd_id` int(11) DEFAULT NULL,
  `dossier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tddc_id` int(11) NOT NULL,
  `tdc_id` int(11) NOT NULL,
  `fonction_id` int(11) NOT NULL,
  `ordre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `at` datetime DEFAULT NULL,
  `phaseActuelle_id` int(11) DEFAULT NULL,
  `etatActuel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `d_d_c`
--

INSERT INTO `d_d_c` (`id`, `rs`, `rc`, `client_id`, `edp_id`, `cdcd_id`, `dossier`, `tddc_id`, `tdc_id`, `fonction_id`, `ordre`, `at`, `phaseActuelle_id`, `etatActuel_id`) VALUES
(13, 'NDCRDCONSO000121032016', '0123789CRDCONSO000121032016', 1, 15, 10, 'ddcs/NDCRDCONSO000121032016/', 1, 4, 11, NULL, NULL, NULL, NULL),
(14, 'NDCRDEQU000122032016', '1110123CRDEQU000122032016', 1, 16, 11, 'ddcs/NDCRDEQU000122032016/', 1, 3, 11, NULL, NULL, NULL, NULL),
(15, 'AUCRDEQU000122032016', '1110123CRDEQU000222032016', 2, 17, 12, 'ddcs/AUCRDEQU000122032016/', 4, 3, 12, NULL, NULL, NULL, NULL),
(16, 'NDCRDAU000124032016', '0123789CRDAU000124032016', 3, 18, 13, 'ddcs/NDCRDAU000124032016/', 1, 2, 11, '0001', '2016-03-24 19:55:39', NULL, NULL),
(17, 'NDCRDPP000127032016', '0123789CRDPP000127032016', 3, 19, 14, 'ddcs/NDCRDPP000127032016/', 1, 1, 11, '0001', '2016-03-27 14:31:34', NULL, NULL),
(18, 'NDCRDPP000227032016', '1110123CRDPP000127032016', 2, 20, 15, 'ddcs/NDCRDPP000227032016/', 1, 1, 11, '0002', '2016-03-27 19:56:32', NULL, NULL),
(19, 'NDCRDPP000327032016', '0455598CRDPP000127032016', 1, 21, 16, 'ddcs/NDCRDPP000327032016/', 1, 1, 11, '0003', '2016-03-27 19:58:54', NULL, NULL),
(20, 'NDCRDCONSO000227032016', '0123789CRDCONSO000127032016', 3, 22, 17, 'ddcs/NDCRDCONSO000227032016/', 1, 4, 11, '0002', '2016-03-27 19:59:23', NULL, NULL),
(21, 'NDCRDEQU000229032016', '1110123CRDEQU000229032016', 2, 23, 18, 'ddcs/NDCRDEQU000229032016/', 1, 3, 19, '0002', '2016-03-29 19:14:29', 103, 189),
(22, 'NDCRDAU000229032016', '0455598CRDAU000129032016', 1, 24, 19, 'ddcs/NDCRDAU000229032016/', 1, 2, 19, '0002', '2016-03-29 19:20:51', 110, 205);

-- --------------------------------------------------------

--
-- Table structure for table `d_d_p`
--

CREATE TABLE `d_d_p` (
  `id` int(11) NOT NULL,
  `min` double NOT NULL,
  `max` double NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `fonction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `d_d_p`
--

INSERT INTO `d_d_p` (`id`, `min`, `max`, `description`, `fonction_id`) VALUES
(1, 0, 300000, 'ras', 10),
(2, 0, 1000000, 'Soyez prudent', 11),
(3, 0, 100000000, 'Soyez prudent', 12),
(4, 20000, 5000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 11);

-- --------------------------------------------------------

--
-- Table structure for table `d_o_c_d_d_c`
--

CREATE TABLE `d_o_c_d_d_c` (
  `id` int(11) NOT NULL,
  `ddc_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `charge` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `d_o_c_d_d_c`
--

INSERT INTO `d_o_c_d_d_c` (`id`, `ddc_id`, `nom`, `charge`) VALUES
(10, 13, 'Bulletin de paie', 1),
(11, 14, 'Carte d''Identité Nationale', 1),
(12, 14, 'Régistre de Commerce', 1),
(13, 15, 'Carte d''Identité Nationale', 1),
(14, 15, 'Régistre de Commerce', 1),
(15, 17, 'Demande crédit', 1),
(16, 17, 'Photocopie CNI', 0),
(17, 17, 'Attestation travail', 0),
(18, 17, 'Certificat Présence au Corps', 0),
(19, 17, 'Bulletins de paie (2 au moins)', 0),
(20, 17, 'Ordre virement', 0),
(21, 18, 'Demande crédit', 0),
(22, 18, 'Photocopie CNI', 0),
(23, 18, 'Attestation travail', 0),
(24, 18, 'Certificat Présence au Corps', 0),
(25, 18, 'Bulletins de paie (2 au moins)', 0),
(26, 18, 'Ordre virement', 0),
(27, 19, 'Demande crédit', 0),
(28, 19, 'Photocopie CNI', 1),
(29, 19, 'Attestation travail', 0),
(30, 19, 'Certificat Présence au Corps', 0),
(31, 19, 'Bulletins de paie (2 au moins)', 0),
(32, 19, 'Ordre virement', 0),
(33, 20, 'Bulletin de paie', 1),
(34, 21, 'Carte d''Identité Nationale', 1),
(35, 21, 'Régistre de Commerce', 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_o_c_t_d_c`
--

CREATE TABLE `d_o_c_t_d_c` (
  `id` int(11) NOT NULL,
  `tdc_id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `d_o_c_t_d_c`
--

INSERT INTO `d_o_c_t_d_c` (`id`, `tdc_id`, `dateajout`, `nom`) VALUES
(1, 3, '2016-03-18 14:08:59', 'Carte d''Identité Nationale'),
(2, 3, '2016-03-18 14:15:38', 'Régistre de Commerce'),
(3, 4, '2016-03-18 14:19:02', 'Bulletin de paie'),
(4, 1, '2016-03-22 23:40:53', 'Demande crédit'),
(5, 1, '2016-03-22 23:41:11', 'Photocopie CNI'),
(6, 1, '2016-03-22 23:41:35', 'Attestation travail'),
(7, 1, '2016-03-22 23:42:02', 'Certificat Présence au Corps'),
(8, 1, '2016-03-22 23:42:51', 'Bulletins de paie (2 au moins)'),
(9, 1, '2016-03-22 23:43:39', 'Ordre virement');

-- --------------------------------------------------------

--
-- Table structure for table `employeur`
--

CREATE TABLE `employeur` (
  `id` int(11) NOT NULL,
  `denomination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresseSociale` longtext COLLATE utf8_unicode_ci,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estclient` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employeur`
--

INSERT INTO `employeur` (`id`, `denomination`, `adresseSociale`, `telephone`, `fax`, `ville`, `estclient`) VALUES
(1, 'Banque Populaire', '101 Zektoni mohamed', '00212 589 654 125', '00212 587 456 900', 'Casablanca', 1);

-- --------------------------------------------------------

--
-- Table structure for table `entite`
--

CREATE TABLE `entite` (
  `id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `classe` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entite`
--

INSERT INTO `entite` (`id`, `dateajout`, `classe`) VALUES
(1, '2016-02-27 11:20:24', 'CIC'),
(2, '2016-02-27 11:23:40', 'Zone'),
(3, '2016-02-27 11:23:40', 'Agence'),
(4, '2016-02-27 11:23:40', 'Zone'),
(5, '2016-02-28 20:23:15', 'Zone'),
(6, '2016-02-29 18:39:42', 'Agence'),
(8, '2016-02-29 18:39:42', 'BOC');

-- --------------------------------------------------------

--
-- Table structure for table `etape`
--

CREATE TABLE `etape` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `etape`
--

INSERT INTO `etape` (`id`, `nom`) VALUES
(5, 'Validé'),
(6, 'Rejeté'),
(7, 'Ajourné'),
(8, 'Risqué'),
(9, 'Accepté'),
(10, 'A soumettre'),
(11, 'Refusé'),
(12, 'Débloqué');

-- --------------------------------------------------------

--
-- Table structure for table `etat`
--

CREATE TABLE `etat` (
  `id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phase_id` int(11) NOT NULL,
  `nom` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `decision` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `etat`
--

INSERT INTO `etat` (`id`, `description`, `code`, `phase_id`, `nom`, `decision`) VALUES
(8, NULL, 'INIT', 4, 'Initialisation', 0),
(9, NULL, 'IDEN', 4, 'Identification', 0),
(10, NULL, 'COLDOC', 4, 'Collecte de documents', 0),
(11, NULL, 'ETDOS', 4, 'Etude de dossier (Analyse de Risques)', 1),
(12, NULL, 'VCA', 5, 'La validation du chef de l''agence', 1),
(13, NULL, 'VRZ', 6, 'La validation du responsable de zone', 1),
(14, NULL, 'ANABOC', 7, 'L''analyse de risques au niveau du back office', 1),
(15, NULL, 'CIC', 8, 'Soumis au comité de crédit', 1),
(16, NULL, 'MEP', 9, 'Mise en place du crédit; Le deblocage', 1),
(17, NULL, 'SAIN', 10, 'Sain', 0),
(18, NULL, 'PREDO', 10, 'Pré-douteux', 0),
(19, NULL, 'DTX', 10, 'Douteux', 0),
(20, NULL, 'CPM', 10, 'Compromis', 0),
(21, NULL, 'CTT', 10, 'Contentieux', 0);

-- --------------------------------------------------------

--
-- Table structure for table `e_d_c_c`
--

CREATE TABLE `e_d_c_c` (
  `id` int(11) NOT NULL,
  `numeroCompte` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `solde` double NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `e_d_c_c`
--

INSERT INTO `e_d_c_c` (`id`, `numeroCompte`, `solde`, `client_id`, `type`) VALUES
(1, '2111104555980004', 15000, 1, 'Compte Courant'),
(2, '2113001237890018', 1000000, 3, 'Compte Courant');

-- --------------------------------------------------------

--
-- Table structure for table `e_d_d_c`
--

CREATE TABLE `e_d_d_c` (
  `id` int(11) NOT NULL,
  `dateajout` datetime DEFAULT NULL,
  `etat_id` int(11) NOT NULL,
  `pddc_id` int(11) NOT NULL,
  `fonction_id` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `decision_id` int(11) DEFAULT NULL,
  `verdict` tinyint(1) NOT NULL,
  `commentaire` longtext COLLATE utf8_unicode_ci,
  `systemeText` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `e_d_d_c`
--

INSERT INTO `e_d_d_c` (`id`, `dateajout`, `etat_id`, `pddc_id`, `fonction_id`, `active`, `decision_id`, `verdict`, `commentaire`, `systemeText`) VALUES
(76, '2016-03-21 23:29:54', 8, 47, 11, 0, NULL, 0, NULL, NULL),
(77, '2016-03-22 00:12:01', 9, 47, 11, 0, NULL, 0, NULL, NULL),
(78, '2016-03-29 15:35:08', 10, 47, 11, 0, NULL, 0, NULL, NULL),
(79, '2016-03-29 15:36:11', 11, 47, 11, 1, NULL, 1, NULL, NULL),
(80, NULL, 12, 48, NULL, 0, NULL, 1, NULL, NULL),
(81, NULL, 13, 49, NULL, 0, NULL, 1, NULL, NULL),
(82, NULL, 14, 50, NULL, 0, NULL, 1, NULL, NULL),
(83, NULL, 15, 51, NULL, 0, NULL, 1, NULL, NULL),
(84, NULL, 16, 52, NULL, 0, NULL, 1, NULL, NULL),
(85, NULL, 17, 53, NULL, 0, NULL, 0, NULL, NULL),
(86, NULL, 18, 53, NULL, 0, NULL, 0, NULL, NULL),
(87, NULL, 19, 53, NULL, 0, NULL, 0, NULL, NULL),
(88, NULL, 20, 53, NULL, 0, NULL, 0, NULL, NULL),
(89, NULL, 21, 53, NULL, 0, NULL, 0, NULL, NULL),
(90, '2016-03-22 00:18:23', 8, 54, 11, 0, NULL, 0, NULL, NULL),
(91, '2016-03-22 00:28:15', 9, 54, 11, 0, NULL, 0, NULL, NULL),
(92, '2016-03-29 10:42:48', 10, 54, 11, 1, NULL, 0, NULL, NULL),
(93, NULL, 11, 54, NULL, 0, NULL, 1, NULL, NULL),
(94, NULL, 12, 55, NULL, 0, NULL, 1, NULL, NULL),
(95, NULL, 13, 56, NULL, 0, NULL, 1, NULL, NULL),
(96, NULL, 14, 57, NULL, 0, NULL, 1, NULL, NULL),
(97, NULL, 15, 58, NULL, 0, NULL, 1, NULL, NULL),
(98, NULL, 16, 59, NULL, 0, NULL, 1, NULL, NULL),
(99, NULL, 17, 60, NULL, 0, NULL, 0, NULL, NULL),
(100, NULL, 18, 60, NULL, 0, NULL, 0, NULL, NULL),
(101, NULL, 19, 60, NULL, 0, NULL, 0, NULL, NULL),
(102, NULL, 20, 60, NULL, 0, NULL, 0, NULL, NULL),
(103, NULL, 21, 60, NULL, 0, NULL, 0, NULL, NULL),
(104, '2016-03-22 23:29:52', 8, 61, 12, 0, NULL, 0, NULL, NULL),
(105, '2016-03-22 23:30:59', 9, 61, 12, 0, NULL, 0, NULL, NULL),
(106, '2016-03-29 17:30:06', 10, 61, 12, 0, NULL, 0, NULL, NULL),
(107, '2016-03-29 16:46:57', 11, 61, 12, 1, NULL, 1, NULL, NULL),
(108, NULL, 12, 62, NULL, 0, NULL, 1, NULL, NULL),
(109, NULL, 13, 63, NULL, 0, NULL, 1, NULL, NULL),
(110, NULL, 14, 64, NULL, 0, NULL, 1, NULL, NULL),
(111, NULL, 15, 65, NULL, 0, NULL, 1, NULL, NULL),
(112, NULL, 16, 66, NULL, 0, NULL, 1, NULL, NULL),
(113, NULL, 17, 67, NULL, 0, NULL, 0, NULL, NULL),
(114, NULL, 18, 67, NULL, 0, NULL, 0, NULL, NULL),
(115, NULL, 19, 67, NULL, 0, NULL, 0, NULL, NULL),
(116, NULL, 20, 67, NULL, 0, NULL, 0, NULL, NULL),
(117, NULL, 21, 67, NULL, 0, NULL, 0, NULL, NULL),
(118, '2016-03-24 19:55:40', 8, 68, 11, 0, NULL, 0, NULL, NULL),
(119, '2016-03-24 19:56:20', 9, 68, 11, 0, NULL, 0, NULL, NULL),
(120, '2016-03-29 13:01:56', 10, 68, 11, 0, NULL, 0, NULL, NULL),
(121, '2016-03-29 18:48:22', 11, 68, 11, 1, NULL, 1, NULL, 'Ce dossier est  de vôtre compétence'),
(122, NULL, 12, 69, NULL, 0, NULL, 1, NULL, NULL),
(123, NULL, 13, 70, NULL, 0, NULL, 1, NULL, NULL),
(124, NULL, 14, 71, NULL, 0, NULL, 1, NULL, NULL),
(125, NULL, 15, 72, NULL, 0, NULL, 1, NULL, NULL),
(126, NULL, 16, 73, NULL, 0, NULL, 1, NULL, NULL),
(127, NULL, 17, 74, NULL, 0, NULL, 0, NULL, NULL),
(128, NULL, 18, 74, NULL, 0, NULL, 0, NULL, NULL),
(129, NULL, 19, 74, NULL, 0, NULL, 0, NULL, NULL),
(130, NULL, 20, 74, NULL, 0, NULL, 0, NULL, NULL),
(131, NULL, 21, 74, NULL, 0, NULL, 0, NULL, NULL),
(132, '2016-03-27 14:31:35', 8, 75, 11, 0, NULL, 0, NULL, NULL),
(133, '2016-03-27 14:32:27', 9, 75, 11, 0, NULL, 0, NULL, NULL),
(134, '2016-03-29 11:30:03', 10, 75, 11, 1, NULL, 0, NULL, 'Ce dossier est  de vôtre compétence'),
(135, NULL, 11, 75, NULL, 0, NULL, 1, NULL, NULL),
(136, NULL, 12, 76, NULL, 0, NULL, 1, NULL, NULL),
(137, NULL, 13, 77, NULL, 0, NULL, 1, NULL, NULL),
(138, NULL, 14, 78, NULL, 0, NULL, 1, NULL, NULL),
(139, NULL, 15, 79, NULL, 0, NULL, 1, NULL, NULL),
(140, NULL, 16, 80, NULL, 0, NULL, 1, NULL, NULL),
(141, NULL, 17, 81, NULL, 0, NULL, 0, NULL, NULL),
(142, NULL, 18, 81, NULL, 0, NULL, 0, NULL, NULL),
(143, NULL, 19, 81, NULL, 0, NULL, 0, NULL, NULL),
(144, NULL, 20, 81, NULL, 0, NULL, 0, NULL, NULL),
(145, NULL, 21, 81, NULL, 0, NULL, 0, NULL, NULL),
(146, NULL, 8, 82, NULL, 0, NULL, 0, NULL, NULL),
(147, NULL, 9, 82, NULL, 0, NULL, 0, NULL, NULL),
(148, NULL, 10, 82, NULL, 0, NULL, 0, NULL, NULL),
(149, NULL, 11, 82, NULL, 0, NULL, 1, NULL, NULL),
(150, NULL, 12, 83, NULL, 0, NULL, 1, NULL, NULL),
(151, NULL, 13, 84, NULL, 0, NULL, 1, NULL, NULL),
(152, NULL, 14, 85, NULL, 0, NULL, 1, NULL, NULL),
(153, NULL, 15, 86, NULL, 0, NULL, 1, NULL, NULL),
(154, NULL, 16, 87, NULL, 0, NULL, 1, NULL, NULL),
(155, NULL, 17, 88, NULL, 0, NULL, 0, NULL, NULL),
(156, NULL, 18, 88, NULL, 0, NULL, 0, NULL, NULL),
(157, NULL, 19, 88, NULL, 0, NULL, 0, NULL, NULL),
(158, NULL, 20, 88, NULL, 0, NULL, 0, NULL, NULL),
(159, NULL, 21, 88, NULL, 0, NULL, 0, NULL, NULL),
(160, NULL, 8, 89, NULL, 0, NULL, 0, NULL, NULL),
(161, NULL, 9, 89, NULL, 0, NULL, 0, NULL, NULL),
(162, '2016-03-29 11:11:13', 10, 89, 11, 1, NULL, 0, NULL, NULL),
(163, NULL, 11, 89, NULL, 0, NULL, 1, NULL, NULL),
(164, NULL, 12, 90, NULL, 0, NULL, 1, NULL, NULL),
(165, NULL, 13, 91, NULL, 0, NULL, 1, NULL, NULL),
(166, NULL, 14, 92, NULL, 0, NULL, 1, NULL, NULL),
(167, NULL, 15, 93, NULL, 0, NULL, 1, NULL, NULL),
(168, NULL, 16, 94, NULL, 0, NULL, 1, NULL, NULL),
(169, NULL, 17, 95, NULL, 0, NULL, 0, NULL, NULL),
(170, NULL, 18, 95, NULL, 0, NULL, 0, NULL, NULL),
(171, NULL, 19, 95, NULL, 0, NULL, 0, NULL, NULL),
(172, NULL, 20, 95, NULL, 0, NULL, 0, NULL, NULL),
(173, NULL, 21, 95, NULL, 0, NULL, 0, NULL, NULL),
(174, '2016-03-29 15:12:06', 8, 96, 11, 0, NULL, 0, NULL, NULL),
(175, '2016-03-29 15:12:06', 9, 96, 11, 0, NULL, 0, NULL, NULL),
(176, '2016-03-29 15:34:16', 10, 96, 11, 0, NULL, 0, NULL, NULL),
(177, '2016-03-29 15:31:43', 11, 96, 11, 1, NULL, 1, NULL, 'Ce dossier n''est pas de vôtre compétence'),
(178, NULL, 12, 97, NULL, 0, NULL, 1, NULL, NULL),
(179, NULL, 13, 98, NULL, 0, NULL, 1, NULL, NULL),
(180, NULL, 14, 99, NULL, 0, NULL, 1, NULL, NULL),
(181, NULL, 15, 100, NULL, 0, NULL, 1, NULL, NULL),
(182, NULL, 16, 101, NULL, 0, NULL, 1, NULL, NULL),
(183, NULL, 17, 102, NULL, 0, NULL, 0, NULL, NULL),
(184, NULL, 18, 102, NULL, 0, NULL, 0, NULL, NULL),
(185, NULL, 19, 102, NULL, 0, NULL, 0, NULL, NULL),
(186, NULL, 20, 102, NULL, 0, NULL, 0, NULL, NULL),
(187, NULL, 21, 102, NULL, 0, NULL, 0, NULL, NULL),
(188, '2016-03-29 19:14:30', 8, 103, 19, 0, NULL, 0, NULL, NULL),
(189, '2016-03-29 19:18:09', 9, 103, 19, 1, NULL, 0, NULL, NULL),
(190, NULL, 10, 103, NULL, 0, NULL, 0, NULL, NULL),
(191, NULL, 11, 103, NULL, 0, NULL, 1, NULL, NULL),
(192, NULL, 12, 104, NULL, 0, NULL, 1, NULL, NULL),
(193, NULL, 13, 105, NULL, 0, NULL, 1, NULL, NULL),
(194, NULL, 14, 106, NULL, 0, NULL, 1, NULL, NULL),
(195, NULL, 15, 107, NULL, 0, NULL, 1, NULL, NULL),
(196, NULL, 16, 108, NULL, 0, NULL, 1, NULL, NULL),
(197, NULL, 17, 109, NULL, 0, NULL, 0, NULL, NULL),
(198, NULL, 18, 109, NULL, 0, NULL, 0, NULL, NULL),
(199, NULL, 19, 109, NULL, 0, NULL, 0, NULL, NULL),
(200, NULL, 20, 109, NULL, 0, NULL, 0, NULL, NULL),
(201, NULL, 21, 109, NULL, 0, NULL, 0, NULL, NULL),
(202, '2016-03-29 19:20:51', 8, 110, 19, 0, NULL, 0, NULL, NULL),
(203, '2016-03-29 19:21:08', 9, 110, 19, 0, NULL, 0, NULL, NULL),
(204, '2016-03-29 19:21:08', 10, 110, 19, 0, NULL, 0, NULL, NULL),
(205, '2016-03-29 19:21:24', 11, 110, 19, 1, NULL, 1, NULL, 'Ce dossier n''est pas de vôtre compétence'),
(206, NULL, 12, 111, NULL, 0, NULL, 1, NULL, NULL),
(207, NULL, 13, 112, NULL, 0, NULL, 1, NULL, NULL),
(208, NULL, 14, 113, NULL, 0, NULL, 1, NULL, NULL),
(209, NULL, 15, 114, NULL, 0, NULL, 1, NULL, NULL),
(210, NULL, 16, 115, NULL, 0, NULL, 1, NULL, NULL),
(211, NULL, 17, 116, NULL, 0, NULL, 0, NULL, NULL),
(212, NULL, 18, 116, NULL, 0, NULL, 0, NULL, NULL),
(213, NULL, 19, 116, NULL, 0, NULL, 0, NULL, NULL),
(214, NULL, 20, 116, NULL, 0, NULL, 0, NULL, NULL),
(215, NULL, 21, 116, NULL, 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e_d_p`
--

CREATE TABLE `e_d_p` (
  `id` int(11) NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `e_d_p`
--

INSERT INTO `e_d_p` (`id`, `matricule`) VALUES
(3, NULL),
(4, NULL),
(5, NULL),
(6, NULL),
(7, NULL),
(8, NULL),
(9, NULL),
(10, NULL),
(11, NULL),
(12, NULL),
(13, NULL),
(14, NULL),
(15, NULL),
(16, NULL),
(17, NULL),
(18, 'EDP001624032016'),
(19, 'EDP001727032016'),
(20, 'EDP001827032016'),
(21, 'EDP001927032016'),
(22, 'EDP002027032016'),
(23, 'EDP002129032016'),
(24, 'EDP002229032016');

-- --------------------------------------------------------

--
-- Table structure for table `fichier`
--

CREATE TABLE `fichier` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chemin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomoriginal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fichier`
--

INSERT INTO `fichier` (`id`, `nom`, `chemin`, `type`, `nomoriginal`, `rs`) VALUES
(1, 'edp26032016135826.jpeg', 'ddcs/NDCRDCONSO000121032016/epd/edp26032016135826.jpeg', 'image/jpeg', 'GT7458LO.jpeg', 'edp26032016135826.jpeg'),
(2, 'edp26032016140258.jpeg', 'ddcs/NDCRDCONSO000121032016/epd/edp26032016140258.jpeg', 'image/jpeg', 'CIN3126.jpeg', NULL),
(3, 'edp26032016140344.jpeg', 'ddcs/NDCRDCONSO000121032016/epd/edp26032016140344.jpeg', 'image/jpeg', 'CIN1472.jpeg', NULL),
(4, 'edp27032016110009.pdf', 'ddcs/NDCRDCONSO000121032016/epd/edp27032016110009.pdf', 'application/pdf', 'xml_cours_exercices-[www.worldmediafiles.com].pdf', NULL),
(5, 'edp27032016111122.jpeg', 'ddcs/NDCRDCONSO000121032016/epd/edp27032016111122.jpeg', 'image/jpeg', 'QSA74125K.jpeg', NULL),
(6, 'edp27032016111326.docx', 'ddcs/NDCRDCONSO000121032016/epd/edp27032016111326.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'presentationSPPINR.docx', NULL),
(7, 'DSG_41055.jpg', 'ddcs/NDCRDEQU000122032016/fichiers/doc27032016132956.jpg', 'image/jpeg', 'DSG_41055.jpg', 'doc27032016132956.jpg'),
(13, 'Carte d''Identité Nationale', 'ddcs/NDCRDEQU000122032016/fichiers/doc27032016142836.mp3', 'audio/mp3', 'Zouglou-GBAGBO,libere en Zouglou.c''est comment comment.mp3', 'doc27032016142836.mp3'),
(14, 'Demande crédit', 'ddcs/NDCRDPP000127032016/fichiers/doc27032016143257.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'presentationSPPINR.docx', 'doc27032016143257.docx'),
(15, 'Bulletin de paie 01', 'ddcs/NDCRDCONSO000227032016/fichiers/doc27032016200010.Recherche', 'application/octet-stream', 'Recherche', 'doc27032016200010.Recherche'),
(16, 'Son préfére', 'ddcs/NDCRDCONSO000227032016/fichiers/doc27032016200135.mp3', 'audio/mp3', 'SIDIKI DIABATE -  N''DIARABI MAGNI  (feat) KANDIA KORA.mp3', 'doc27032016200135.mp3'),
(17, 'Bulletin de paie 02', 'ddcs/NDCRDCONSO000227032016/fichiers/doc27032016200243.torrent', 'application/x-bittorrent', 'rihanna-anti-deluxe-edition-2016.torrent', 'doc27032016200243.torrent'),
(18, 'kako', 'ddcs/NDCRDCONSO000227032016/fichiers/doc27032016200305.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'convertcsv.xlsx', 'doc27032016200305.xlsx'),
(19, 'Bulletin de paie 04', 'ddcs/NDCRDCONSO000227032016/fichiers/doc27032016201347.jpeg', 'image/jpeg', 'GT7458LO.jpeg', 'doc27032016201347.jpeg'),
(20, 'Un pdf', 'ddcs/NDCRDCONSO000227032016/fichiers/doc27032016202204.pdf', 'application/pdf', 'RetraitPasseport.pdf', 'doc27032016202204.pdf'),
(21, 'Un autre pdf', 'ddcs/NDCRDCONSO000227032016/fichiers/doc27032016202451.pdf', 'application/pdf', 'linux_securiser_reseau-[www.worldmediafiles.com].pdf', 'doc27032016202451.pdf'),
(22, 'doc word', 'ddcs/NDCRDCONSO000227032016/fichiers/doc27032016203239.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'NOTE DE RESEAUX.docx', 'doc27032016203239.docx'),
(23, 'rsw', 'ddcs/NDCRDEQU000122032016/epd/edp29032016102919..sql', 'application/sql', 'rsw.sql', 'edp29032016102919..sql'),
(24, 'lisalisi', 'ddcs/NDCRDEQU000122032016/epd/edp29032016103827..sql', 'application/sql', 'lisalisi.sql', 'edp29032016103827..sql'),
(25, 'Carte d''Identité Nationale', 'ddcs/NDCRDEQU000122032016/fichiers/doc29032016104351..sql', 'application/sql', 'Dump20160117-1.sql', 'doc29032016104351..sql'),
(26, 'Régistre de Commerce', 'ddcs/NDCRDEQU000122032016/fichiers/doc29032016104444..docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'doc27032016143257.docx', 'doc29032016104444..docx'),
(27, 'iam', 'ddcs/NDCRDPP000327032016/epd/edp29032016110350..sql', 'application/sql', 'iam.sql', 'edp29032016110350..sql'),
(28, 'Photocopie CNI', 'ddcs/NDCRDPP000327032016/fichiers/doc29032016111200..png', 'image/png', 'ficheamorce.png', 'doc29032016111200..png'),
(29, 'Bulletin de paie', 'ddcs/NDCRDCONSO000121032016/fichiers/doc29032016153606..png', 'image/png', 'fichearchivee.png', 'doc29032016153606..png'),
(30, 'Carte d''Identité Nationale', 'ddcs/AUCRDEQU000122032016/fichiers/doc29032016164540..jpg', 'image/jpeg', 'bg-1.jpg', 'doc29032016164540..jpg'),
(31, 'Régistre de Commerce', 'ddcs/AUCRDEQU000122032016/fichiers/doc29032016164652..sql', 'application/sql', 'lisalisi.sql', 'doc29032016164652..sql'),
(32, 'naom', 'ddcs/AUCRDEQU000122032016/fichiers/doc29032016173458..sql', 'application/sql', 'Dump20160117-1.sql', 'doc29032016173458..sql'),
(33, 'ASGTY', 'ddcs/AUCRDEQU000122032016/fichiers/doc29032016173604..sql', 'application/sql', 'Dump20160117.sql', 'doc29032016173604..sql'),
(34, 'Carte d''Identité Nationale', 'ddcs/NDCRDEQU000229032016/fichiers/doc29032016192038..sql', 'application/sql', 'rsw.sql', 'doc29032016192038..sql');

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `acteur_id` int(11) NOT NULL,
  `entite_id` int(11) NOT NULL,
  `dateaffectation` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `dateretrait` datetime DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`id`, `acteur_id`, `entite_id`, `dateaffectation`, `active`, `dateretrait`, `profil_id`, `matricule`, `archive`) VALUES
(1, 2, 6, '2016-03-05 10:57:07', 0, '2016-03-10 23:08:53', 4, 'FON000105032016', 1),
(2, 2, 5, '2016-03-05 11:11:16', 0, '2016-03-10 23:08:53', NULL, 'FON000205032016', 1),
(3, 2, 5, '2016-03-05 11:32:42', 0, '2016-03-10 23:08:53', 7, 'FON000305032016', 1),
(4, 1, 6, '2016-03-05 11:34:12', 0, '2016-03-05 11:36:29', 5, 'FON000405032016', 0),
(5, 1, 8, '2016-03-05 11:36:29', 0, '2016-03-10 23:12:46', 6, 'FON000505032016', 0),
(6, 2, 8, '2016-03-10 23:08:53', 0, '2016-03-17 23:43:25', 6, 'FON000610032016', 0),
(7, 3, 6, '2016-03-10 23:12:02', 0, '2016-03-13 13:41:33', 5, 'FON000710032016', 0),
(8, 1, 5, '2016-03-10 23:12:46', 0, '2016-03-19 23:29:58', 7, 'FON000810032016', 0),
(9, 3, 1, '2016-03-13 13:41:33', 0, '2016-03-17 19:38:56', NULL, 'FON000913032016', 0),
(10, 3, 8, '2016-03-17 19:38:56', 1, NULL, 8, 'FON001017032016', 0),
(11, 2, 6, '2016-03-17 23:43:25', 1, NULL, 4, 'FON001117032016', 0),
(12, 1, 6, '2016-03-19 23:29:58', 1, NULL, 5, 'FON001219032016', 0),
(13, 5, 8, '2016-03-19 23:38:29', 1, NULL, 6, 'FON001319032016', 0),
(14, 7, 5, '2016-03-29 16:03:41', 1, NULL, 7, 'FON001429032016', 0),
(15, 8, 5, '2016-03-29 16:22:54', 0, '2016-03-29 16:24:07', 7, 'FON001529032016', 0),
(16, 8, 2, '2016-03-29 16:24:07', 0, '2016-03-29 16:24:27', 7, 'FON001629032016', 0),
(17, 8, 6, '2016-03-29 16:24:27', 0, '2016-03-29 16:26:08', 5, 'FON001729032016', 0),
(18, 8, 6, '2016-03-29 16:26:08', 0, '2016-03-29 16:32:18', NULL, 'FON001829032016', 0),
(19, 8, 6, '2016-03-29 16:32:18', 1, NULL, 4, 'FON001929032016', 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_d_d_c`
--

CREATE TABLE `f_d_d_c` (
  `id` int(11) NOT NULL,
  `ddc_id` int(11) NOT NULL,
  `fichier_id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `docddc_id` int(11) DEFAULT NULL,
  `fonction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_d_d_c`
--

INSERT INTO `f_d_d_c` (`id`, `ddc_id`, `fichier_id`, `dateajout`, `docddc_id`, `fonction_id`) VALUES
(7, 14, 13, '2016-03-27 14:28:36', 11, 11),
(8, 17, 14, '2016-03-27 14:32:57', 15, 11),
(9, 20, 15, '2016-03-27 20:00:10', 33, 11),
(10, 20, 16, '2016-03-27 20:01:35', NULL, 11),
(11, 20, 17, '2016-03-27 20:02:43', 33, 11),
(12, 20, 18, '2016-03-27 20:03:05', NULL, 11),
(13, 20, 19, '2016-03-27 20:13:47', 33, 11),
(14, 20, 20, '2016-03-27 20:22:04', NULL, 11),
(15, 20, 21, '2016-03-27 20:24:51', NULL, 11),
(16, 20, 22, '2016-03-27 20:32:39', NULL, 11),
(17, 14, 25, '2016-03-29 10:43:51', 11, 11),
(18, 14, 26, '2016-03-29 10:44:44', 12, 11),
(19, 19, 28, '2016-03-29 11:12:00', 28, 11),
(20, 13, 29, '2016-03-29 15:36:06', 10, 11),
(21, 15, 30, '2016-03-29 16:45:40', 13, 12),
(22, 15, 31, '2016-03-29 16:46:52', 14, 12),
(23, 15, 32, '2016-03-29 17:34:58', NULL, 12),
(24, 15, 33, '2016-03-29 17:36:04', NULL, 19),
(25, 21, 34, '2016-03-29 19:20:38', 34, 19);

-- --------------------------------------------------------

--
-- Table structure for table `identite`
--

CREATE TABLE `identite` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroPiece` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `piece_id` int(11) NOT NULL,
  `civilite_id` int(11) NOT NULL,
  `pays_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `identite`
--

INSERT INTO `identite` (`id`, `nom`, `prenom`, `numeroPiece`, `piece_id`, `civilite_id`, `pays_id`) VALUES
(1, 'ABY', 'Quadra', 'BE56350X', 3, 1, 1),
(2, 'Karl', 'Jeanne Martine', '14AB785693', 1, 2, 1),
(3, 'Simpson', 'Jay Homer', 'GB457896CD', 3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `dateajout` datetime NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `user_id`, `dateajout`, `contenu`, `type_id`) VALUES
(1, 6, '2016-02-13 12:27:30', '<h5>AGENCE:102784</h5>nom:<strong>Hassan II</strong><p>Détails:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    	consequat.</p>', 1),
(2, 6, '2016-02-13 12:56:05', '<h5>CIC:001487963</h5>nom:<strong>Comité Surccusale</strong><p>Détails:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3),
(3, 6, '2016-02-13 12:58:45', '<h5>AGENCE:001236789</h5>nom:<strong>Mustabale</strong><p>Détails:RAS</p>', 1),
(4, 6, '2016-02-13 13:19:20', '<h5>AGENCE:7845001</h5>nom:<strong>Al Yousr</strong><p>Détails:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 4),
(5, 6, '2016-02-13 13:20:22', '<h5>BOC:123458</h5>nom:<strong>CTN crédits</strong><p>Détails:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 8),
(6, 6, '2016-02-21 13:25:50', '<h5>CIC:003254</h5>nom:<strong>5C</strong><p>Détails:Après</p>', 3),
(7, 6, '2016-02-24 14:16:58', 'Creation du dossier : Utilisateurs/118155/', 10),
(8, 6, '2016-02-24 14:33:18', 'Creation du dossier : Utilisateurs/118152/', 10),
(9, 6, '2016-02-24 14:37:24', 'Creation du dossier : Utilisateurs/118153/', 10),
(10, 6, '2016-02-24 14:41:24', 'Creation du dossier : Utilisateurs/118153/', 10),
(11, 6, '2016-02-24 14:42:47', 'Creation du dossier : Utilisateurs/118152/', 10),
(12, 6, '2016-02-24 14:47:42', 'Creation du dossier : Utilisateurs/118152/', 10),
(13, 6, '2016-02-24 14:48:39', 'Creation du dossier : Utilisateurs/118152/', 10),
(14, 6, '2016-02-24 14:50:09', 'Creation du dossier : Utilisateurs/118152/', 10),
(15, 6, '2016-02-24 14:50:57', 'Creation du dossier : Utilisateurs/118152/', 10),
(16, 6, '2016-02-24 14:52:22', 'Creation du dossier : Utilisateurs/118152/', 10),
(17, 6, '2016-02-24 14:52:40', 'Creation du dossier : Utilisateurs/118153/', 10),
(18, 6, '2016-02-24 14:53:16', 'Creation du dossier : Utilisateurs/118154/', 10),
(19, 6, '2016-02-24 14:53:42', 'Creation du dossier : Utilisateurs/118155/', 10),
(20, 6, '2016-02-24 14:54:31', 'Creation du dossier : Utilisateurs/118155/', 10),
(21, 6, '2016-02-24 14:54:58', 'Creation du dossier : Utilisateurs/118152/', 10),
(22, 6, '2016-02-24 15:03:56', 'Creation du dossier : Utilisateurs/118152/', 10),
(23, 6, '2016-02-24 18:43:45', 'Creation du dossier : Utilisateurs/118153/', 10),
(24, 6, '2016-02-27 11:15:09', '<h5>AGENCE:410563</h5>nom:<strong>Emile zola</strong><p>Détails:ras</p>', 1),
(25, 6, '2016-02-27 11:20:24', '<h5>CIC:000124</h5>nom:<strong>5C</strong><p>Détails:ras</p>', 3),
(26, 6, '2016-02-27 11:23:40', '<h5>AGENCE:102856</h5>nom:<strong>AZE</strong><p>Détails:aze</p>', 1),
(27, 6, '2016-02-27 11:37:06', 'Creation du dossier : Utilisateurs/000478/', 10),
(28, 6, '2016-02-27 11:45:34', 'Creation du dossier : Utilisateurs/000478/', 10),
(29, 6, '2016-02-27 11:53:28', '<h5>AGENCE:102856</h5>nom:<strong>AZE</strong><p>Détails:aze</p>', 4),
(30, 6, '2016-02-27 11:53:54', '<h5>CIC:003254</h5>nom:<strong>CICR</strong><p>Détails:Après</p>', 6),
(31, 6, '2016-02-28 20:28:06', '<h5>ZONE:123145</h5>nom:<strong>Hassan 2</strong><p>Détails:ras bien</p>', 12),
(32, 6, '2016-02-29 18:39:42', '<h5>AGENCE:01254800</h5>nom:<strong>Home 001</strong><p>Détails:RAS</p>', 1),
(33, 6, '2016-02-29 19:29:45', 'affectation de 118153 à Home 001', NULL),
(34, 6, '2016-02-29 20:05:40', 'affectation de 118152 à Home 001', NULL),
(35, 6, '2016-02-29 20:19:16', 'affectation de 118152 à 5C', NULL),
(36, 6, '2016-02-29 20:48:44', 'affectation de 000478 à CTN crédits', NULL),
(37, 6, '2016-03-05 10:57:08', 'affectation de 118153 à Home 001', NULL),
(38, 6, '2016-03-05 11:11:16', 'affectation de 118153 à Hassan 2', NULL),
(39, 6, '2016-03-05 11:32:42', 'affectation de 118153 à Hassan 2', NULL),
(40, 6, '2016-03-05 11:34:12', 'affectation de 000478 à Home 001', NULL),
(41, 6, '2016-03-05 11:36:29', 'affectation de 000478 à CTN crédits', NULL),
(42, 6, '2016-03-10 23:08:53', 'affectation de 118153 à CTN crédits', NULL),
(43, 6, '2016-03-10 23:12:02', 'affectation de 118152 à Home 001', NULL),
(44, 6, '2016-03-10 23:12:46', 'affectation de 000478 à Hassan 2', NULL),
(45, 6, '2016-03-13 13:41:33', 'affectation de 118152 à 5C', NULL),
(46, 6, '2016-03-17 11:39:39', 'Ajout du client 0455598', NULL),
(47, 6, '2016-03-17 14:15:59', 'Ajout de l''identité du 0455598', NULL),
(48, 6, '2016-03-17 14:29:33', 'Ajout de l''identité du 0455598', NULL),
(49, 6, '2016-03-17 14:39:33', 'Ajout de Coordonnee du client 0455598', NULL),
(50, 6, '2016-03-17 17:37:25', 'Ajout de l''employeur du client 0455598', NULL),
(51, 6, '2016-03-17 17:49:57', 'Modification de l''identité du client 0455598', NULL),
(52, 6, '2016-03-17 19:38:56', 'affectation de 118152 à CTN crédits', NULL),
(53, 6, '2016-03-17 23:43:25', 'affectation de 118153 à Home 001', NULL),
(54, 6, '2016-03-18 11:30:34', 'Modification de l''employeur du client 0455598', NULL),
(55, 6, '2016-03-18 11:35:40', 'Modification de l''identité du client 0455598', NULL),
(56, 6, '2016-03-18 11:40:15', 'Modification de coorconnées du client 0455598', NULL),
(57, 6, '2016-03-18 11:54:59', 'Modification de la profession du client 0455598', NULL),
(58, 6, '2016-03-18 12:10:19', 'Modification du revenu du client 0455598', NULL),
(59, 6, '2016-03-18 12:11:27', 'Modification du revenu du client 0455598', NULL),
(60, 6, '2016-03-18 12:21:45', 'Modification du Logement du client 0455598', NULL),
(61, 6, '2016-03-18 12:23:17', 'Modification du Logement du client 0455598', NULL),
(62, 6, '2016-03-18 12:39:54', 'Modification du PAC du client 0455598', NULL),
(63, 6, '2016-03-18 12:43:05', 'Modification du PAC du client 0455598', NULL),
(64, 7, '2016-03-18 17:24:23', 'Creation du dossier : ddcs/NDCRDAU000118032016/', 10),
(65, 10, '2016-03-18 17:30:39', 'Creation du dossier : ddcs/NDCRDCONSO000118032016/', 10),
(66, 10, '2016-03-18 17:50:06', 'Creation du dossier : ddcs/NDCRDCONSO000118032016/', 10),
(67, 10, '2016-03-18 18:24:18', 'Ajout du client 1110123', NULL),
(68, 10, '2016-03-18 18:25:13', 'Modification de l''identité du client 1110123', NULL),
(69, 10, '2016-03-18 18:27:34', 'Ajout du client 0123789', NULL),
(70, 10, '2016-03-18 18:28:23', 'Modification de l''identité du client 0123789', NULL),
(71, 10, '2016-03-18 19:06:44', 'Creation du dossier : ddcs/RECRDPP000118032016/', 10),
(72, 10, '2016-03-18 19:18:28', 'Creation du dossier : ddcs/NDCRDEQU000118032016/', 10),
(73, 6, '2016-03-19 22:50:11', 'Creation du dossier : ddcs/NDCRDEQU000219032016/', 10),
(74, 6, '2016-03-19 23:29:58', 'affectation de 000478 à Home 001', NULL),
(75, 6, '2016-03-19 23:38:29', 'affectation de 00011 à CTN crédits', NULL),
(76, 10, '2016-03-20 01:22:53', 'Creation du dossier : ddcs/RECRDAU000120032016/', 10),
(77, 10, '2016-03-20 02:22:06', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(78, 10, '2016-03-20 02:24:46', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(79, 10, '2016-03-20 02:25:00', 'Consultation du résumé du dossier 0123789CRDCONSO000118032016', NULL),
(80, 10, '2016-03-20 02:26:27', 'Consultation du résumé du dossier 0123789CRDCONSO000118032016', NULL),
(81, 10, '2016-03-20 02:27:36', 'Consultation du résumé du dossier 0123789CRDCONSO000118032016', NULL),
(82, 10, '2016-03-20 02:28:33', 'Consultation du résumé du dossier 0123789CRDCONSO000118032016', NULL),
(83, 10, '2016-03-20 02:29:04', 'Consultation du résumé du dossier 0123789CRDCONSO000118032016', NULL),
(84, 10, '2016-03-20 02:29:13', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(85, 10, '2016-03-20 02:29:39', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(86, 10, '2016-03-20 02:30:26', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(87, 10, '2016-03-20 02:30:55', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(88, 10, '2016-03-20 03:06:16', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(89, 10, '2016-03-20 03:06:47', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(90, 10, '2016-03-20 03:32:21', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(91, 10, '2016-03-20 03:35:36', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(92, 10, '2016-03-20 03:40:06', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(93, 10, '2016-03-20 03:40:50', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(94, 10, '2016-03-20 03:41:38', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(95, 10, '2016-03-20 03:41:53', 'Consultation du résumé du dossier 0123789CRDEQU000118032016', NULL),
(96, 10, '2016-03-20 03:59:26', 'Consultation du résumé du dossier 0455598CRDAU000120032016', NULL),
(97, 10, '2016-03-20 04:00:01', 'Consultation du résumé du dossier 0455598CRDAU000120032016', NULL),
(98, 10, '2016-03-20 04:00:25', 'Consultation du résumé du dossier 0455598CRDAU000120032016', NULL),
(99, 10, '2016-03-20 04:02:38', 'Consultation du résumé du dossier 0455598CRDAU000120032016', NULL),
(100, 10, '2016-03-21 22:04:52', 'Creation du dossier : ddcs/NDCRDCONSO000121032016/', 10),
(101, 10, '2016-03-21 22:06:20', 'Creation du dossier : ddcs/NDCRDCONSO000221032016/', 10),
(102, 10, '2016-03-21 22:10:32', 'Creation du dossier : ddcs/NDCRDCONSO000321032016/', 10),
(103, 10, '2016-03-21 22:11:51', 'Creation du dossier : ddcs/NDCRDEQU000121032016/', 10),
(104, 10, '2016-03-21 22:58:12', 'Consultation du résumé du dossier 0123789CRDEQU000121032016', NULL),
(105, 10, '2016-03-21 22:59:02', 'Consultation du résumé du dossier 0123789CRDEQU000121032016', NULL),
(106, 10, '2016-03-21 23:30:10', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(107, 10, '2016-03-21 23:59:25', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(108, 10, '2016-03-22 00:05:06', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(109, 10, '2016-03-22 00:05:38', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(110, 10, '2016-03-22 00:05:59', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(111, 10, '2016-03-22 00:06:28', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(112, 10, '2016-03-22 00:06:53', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(113, 10, '2016-03-22 00:07:10', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(114, 10, '2016-03-22 00:12:05', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(115, 10, '2016-03-22 00:12:52', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(116, 10, '2016-03-22 00:14:45', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(117, 10, '2016-03-22 00:16:11', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(118, 10, '2016-03-22 00:17:08', 'Creation du dossier : ddcs/NDCRDEQU000122032016/', 10),
(119, 10, '2016-03-22 00:18:48', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(120, 10, '2016-03-22 00:23:41', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(121, 10, '2016-03-22 00:24:27', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(122, 10, '2016-03-22 00:24:47', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(123, 10, '2016-03-22 00:26:08', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(124, 10, '2016-03-22 00:27:26', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(125, 10, '2016-03-22 00:27:54', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(126, 10, '2016-03-22 00:28:18', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(127, 10, '2016-03-22 18:49:52', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(128, 10, '2016-03-22 19:13:25', 'Modification de l''employeur du client 0455598', NULL),
(129, 10, '2016-03-22 19:24:24', 'Modification de l''employeur du client 0455598', NULL),
(130, 10, '2016-03-22 19:37:13', 'Modification de l''employeur du client 0455598', NULL),
(131, 10, '2016-03-22 23:03:32', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(132, 10, '2016-03-22 23:06:20', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(133, 10, '2016-03-22 23:06:33', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(134, 10, '2016-03-22 23:07:55', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(135, 12, '2016-03-22 23:29:43', 'Creation du dossier : ddcs/AUCRDEQU000122032016/', 10),
(136, 12, '2016-03-22 23:32:20', 'Consultation du résumé du dossier 1110123CRDEQU000222032016', NULL),
(137, 7, '2016-03-23 23:48:00', 'Modification d''un compte  du client 0455598 numero de compte : 2111104555980004', NULL),
(138, 7, '2016-03-24 00:39:10', 'Modification d''un compte  du client 0455598 numero de compte : 2111104555980004', NULL),
(139, 10, '2016-03-24 19:17:33', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(140, 10, '2016-03-24 19:35:33', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(141, 10, '2016-03-24 19:49:21', 'Creation du dossier : ddcs/NDCRDAU000124032016/', 10),
(142, 10, '2016-03-24 19:56:28', 'Consultation du résumé du dossier 0123789CRDAU000124032016', NULL),
(143, 10, '2016-03-24 20:11:54', 'Consultation du résumé du dossier 0123789CRDAU000124032016', NULL),
(144, 10, '2016-03-24 20:13:34', 'Modification d''un compte  du client 0123789 numero de compte : 2113001237890018', NULL),
(145, 10, '2016-03-24 20:36:11', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(146, 10, '2016-03-26 02:14:29', 'Consultation du résumé du dossier 0123789CRDAU000124032016', NULL),
(147, 10, '2016-03-26 12:11:00', 'Consultation du résumé du dossier 0123789CRDAU000124032016', NULL),
(148, 10, '2016-03-26 14:41:04', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(149, 10, '2016-03-27 14:31:30', 'Creation du dossier : ddcs/NDCRDPP000127032016/', 10),
(150, 10, '2016-03-27 19:54:03', 'Creation du dossier : ddcs/NDCRDPP000227032016/', 10),
(151, 10, '2016-03-27 19:57:19', 'Creation du dossier : ddcs/RECRDAU000127032016/', 10),
(152, 10, '2016-03-27 19:58:07', 'Creation du dossier : ddcs/NDCRDPP000327032016/', 10),
(153, 10, '2016-03-27 19:59:23', 'Creation du dossier : ddcs/NDCRDCONSO000227032016/', 10),
(154, 10, '2016-03-27 20:49:53', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(155, 10, '2016-03-27 20:50:45', 'Consultation du résumé du dossier 0123789CRDCONSO000121032016', NULL),
(156, 10, '2016-03-29 10:40:08', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(157, 10, '2016-03-29 10:42:57', 'Consultation du résumé du dossier 1110123CRDEQU000122032016', NULL),
(158, 10, '2016-03-29 10:52:23', 'Consultation du résumé du dossier 0455598CRDPP000127032016', NULL),
(159, 10, '2016-03-29 15:26:58', 'Consultation du résumé du dossier 0123789CRDCONSO000127032016', NULL),
(160, 10, '2016-03-29 15:30:19', 'Consultation du résumé du dossier 0123789CRDCONSO000127032016', NULL),
(161, 7, '2016-03-29 16:02:34', 'Creation du dossier : Utilisateurs/AQZ7854/', 10),
(163, 7, '2016-03-29 16:03:41', 'affectation de AQZ7854 à Hassan 2', NULL),
(164, 7, '2016-03-29 16:22:43', 'Creation du dossier : Utilisateurs/000001/', 10),
(165, 7, '2016-03-29 16:22:54', 'affectation de 000001 à Hassan 2', NULL),
(166, 7, '2016-03-29 16:24:07', 'affectation de 000001 à Ain Sebaa', NULL),
(167, 7, '2016-03-29 16:24:27', 'affectation de 000001 à Home 001', NULL),
(168, 7, '2016-03-29 16:26:08', 'affectation de 000001 à Home 001', NULL),
(169, 7, '2016-03-29 16:32:18', 'affectation de 000001 à Home 001', NULL),
(170, 10, '2016-03-29 18:59:46', 'Modification de la profession du client 0123789', NULL),
(171, 14, '2016-03-29 19:14:29', 'Creation du dossier : ddcs/NDCRDEQU000229032016/', 10),
(172, 14, '2016-03-29 19:20:51', 'Creation du dossier : ddcs/NDCRDAU000229032016/', 10);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `logInAt` datetime NOT NULL,
  `logOutAt` datetime DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `useragent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_id`, `logInAt`, `logOutAt`, `ip`, `useragent`, `login`, `password`, `etat`) VALUES
(48, 6, '2016-03-01 19:32:40', '2016-03-01 19:32:51', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(49, 6, '2016-03-01 19:33:53', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(50, 6, '2016-03-02 21:55:39', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(51, 6, '2016-03-05 00:28:30', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(52, 6, '2016-03-05 10:56:26', '2016-03-05 11:38:41', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(53, 6, '2016-03-05 15:06:22', '2016-03-06 12:18:36', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(54, 9, '2016-03-06 12:19:07', '2016-03-06 12:22:17', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(55, 10, '2016-03-06 12:22:30', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(56, 10, '2016-03-07 23:01:44', '2016-03-07 23:09:32', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(57, 6, '2016-03-07 23:09:38', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(58, 6, '2016-03-10 22:44:28', '2016-03-10 23:18:17', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(59, 6, '2016-03-13 12:38:23', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(60, 6, '2016-03-14 19:28:30', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(61, 6, '2016-03-14 19:56:48', '2016-03-14 19:58:47', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(62, 10, '2016-03-14 19:58:55', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(63, 10, '2016-03-16 10:03:51', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(64, 6, '2016-03-17 10:23:55', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(65, 6, '2016-03-17 16:33:58', '2016-03-17 17:53:00', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(66, 7, '2016-03-17 17:53:05', '2016-03-17 17:59:41', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(67, 10, '2016-03-17 17:59:46', '2016-03-17 18:16:06', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(68, 6, '2016-03-17 18:16:23', '2016-03-17 23:53:30', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(69, 7, '2016-03-18 10:49:38', '2016-03-18 10:56:24', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(70, 6, '2016-03-18 10:56:39', '2016-03-18 14:47:13', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(71, 7, '2016-03-18 14:47:19', '2016-03-18 17:30:13', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(72, 10, '2016-03-18 17:30:24', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(73, 10, '2016-03-18 18:39:56', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(74, 10, '2016-03-18 18:41:23', '2016-03-18 20:27:15', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(75, 10, '2016-03-19 22:48:52', '2016-03-19 22:49:38', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(76, 6, '2016-03-19 22:49:43', '2016-03-20 00:40:08', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(77, 10, '2016-03-20 00:40:13', '2016-03-20 04:09:49', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(78, 10, '2016-03-21 20:21:10', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(79, 10, '2016-03-22 18:49:12', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/48.0.2564.116 Chrome/48.0.2564.116 Safari/537.36', NULL, NULL, 1),
(80, 10, '2016-03-22 22:39:10', '2016-03-22 23:12:45', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(81, 6, '2016-03-22 23:12:51', '2016-03-22 23:27:03', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(82, 10, '2016-03-22 23:27:08', '2016-03-22 23:27:21', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(83, 7, '2016-03-22 23:27:28', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(84, 12, '2016-03-22 23:29:15', '2016-03-22 23:39:28', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(85, 12, '2016-03-22 23:39:31', '2016-03-22 23:39:33', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(86, 7, '2016-03-22 23:39:38', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(87, 7, '2016-03-23 21:38:40', '2016-03-24 01:15:54', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(88, 10, '2016-03-24 01:16:02', '2016-03-24 01:17:55', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(89, 10, '2016-03-24 18:11:52', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(90, 10, '2016-03-26 01:21:28', '2016-03-26 14:02:32', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(91, 6, '2016-03-26 14:02:38', '2016-03-26 14:03:21', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(92, 12, '2016-03-26 14:03:25', '2016-03-26 14:04:05', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(93, 10, '2016-03-26 14:04:09', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(94, 10, '2016-03-27 10:09:42', '2016-03-27 11:26:27', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(95, 7, '2016-03-27 11:26:35', '2016-03-27 11:27:52', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(96, 10, '2016-03-27 11:27:57', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(97, 10, '2016-03-27 19:53:28', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/49.0.2623.87 Chrome/49.0.2623.87 Safari/537.36', NULL, NULL, 1),
(98, 6, '2016-03-27 20:42:22', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0', NULL, NULL, 1),
(99, 10, '2016-03-28 17:56:07', '2016-03-28 17:57:57', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.1', NULL, NULL, 1),
(100, 7, '2016-03-28 17:58:05', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.1', NULL, NULL, 1),
(101, 7, '2016-03-28 18:51:10', '2016-03-28 19:01:54', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.1', NULL, NULL, 1),
(102, 10, '2016-03-28 19:02:10', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.1', NULL, NULL, 1),
(103, 10, '2016-03-29 09:18:38', '2016-03-29 10:12:15', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.1', NULL, NULL, 1),
(104, 9, '2016-03-29 10:12:35', '2016-03-29 10:23:03', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(105, 10, '2016-03-29 10:23:08', '2016-03-29 11:09:29', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(106, 10, '2016-03-29 11:09:35', '2016-03-29 13:31:27', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(107, 10, '2016-03-29 14:40:13', '2016-03-29 16:35:52', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(108, 7, '2016-03-29 15:46:29', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.1', NULL, NULL, 1),
(109, 14, '2016-03-29 16:36:19', '2016-03-29 16:41:22', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(110, 12, '2016-03-29 16:41:38', '2016-03-29 17:35:14', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(111, 14, '2016-03-29 17:35:22', '2016-03-29 17:36:14', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(112, 12, '2016-03-29 17:36:19', '2016-03-29 18:47:30', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(113, 10, '2016-03-29 18:47:36', '2016-03-29 19:14:13', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1),
(114, 14, '2016-03-29 19:14:19', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.108 Safari/537.36', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logement`
--

CREATE TABLE `logement` (
  `id` int(11) NOT NULL,
  `flm` double DEFAULT NULL,
  `statut_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logement`
--

INSERT INTO `logement` (`id`, `flm`, `statut_id`) VALUES
(1, 1550, 2);

-- --------------------------------------------------------

--
-- Table structure for table `l_d_p`
--

CREATE TABLE `l_d_p` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `l_d_p`
--

INSERT INTO `l_d_p` (`id`, `nom`, `code`) VALUES
(1, 'Frère', 'FR'),
(2, 'Mère', 'ME'),
(3, 'Père', 'PE'),
(4, 'Cousin', 'CO'),
(5, 'Cousine', 'COE'),
(6, 'Autre', 'AU');

-- --------------------------------------------------------

--
-- Table structure for table `m_e_d_p`
--

CREATE TABLE `m_e_d_p` (
  `id` int(11) NOT NULL,
  `edp_id` int(11) NOT NULL,
  `fonction_id` int(11) NOT NULL,
  `dateposte` datetime NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fichier_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `m_e_d_p`
--

INSERT INTO `m_e_d_p` (`id`, `edp_id`, `fonction_id`, `dateposte`, `message`, `fichier_id`) VALUES
(1, 15, 11, '2016-03-27 11:00:09', 'Un fichier pdf', 4),
(2, 15, 11, '2016-03-27 11:11:22', 'lom', 5),
(3, 15, 11, '2016-03-27 11:13:26', 'cahier de charge', 6),
(4, 22, 10, '2016-03-29 10:19:37', 'salut', NULL),
(5, 22, 10, '2016-03-29 10:22:46', 'kel', NULL),
(6, 21, 11, '2016-03-29 10:23:37', 'test cool', NULL),
(7, 16, 11, '2016-03-29 10:29:19', 'hjdhfgfhjgdfh', 23),
(8, 16, 11, '2016-03-29 10:38:27', 'la base de données ', 24),
(9, 21, 11, '2016-03-29 11:03:50', 'iam db', 27);

-- --------------------------------------------------------

--
-- Table structure for table `nature_compte`
--

CREATE TABLE `nature_compte` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `acteur_id` int(11) DEFAULT NULL,
  `entite_id` int(11) DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `datenoti` datetime NOT NULL,
  `lu` tinyint(1) NOT NULL,
  `alerte` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `acteur_id`, `entite_id`, `titre`, `contenu`, `datenoti`, `lu`, `alerte`) VALUES
(1, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : NDCRDCONSO000118032016', '2016-03-18 17:50:06', 1, 0),
(2, 2, NULL, 'Affection du RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDCONSO000118032016', '2016-03-18 18:52:58', 1, 0),
(3, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : RECRDPP000118032016', '2016-03-18 19:06:44', 1, 1),
(4, 2, NULL, 'Affection du RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : RECRDPP000118032016', '2016-03-18 19:06:54', 1, 0),
(5, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : NDCRDEQU000118032016', '2016-03-18 19:18:28', 1, 1),
(6, 2, NULL, 'Affection du RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDEQU000118032016', '2016-03-18 19:18:38', 1, 0),
(7, 2, NULL, 'Affection du RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDCONSO000118032016', '2016-03-18 20:19:50', 1, 0),
(8, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : NDCRDEQU000219032016', '2016-03-19 22:50:12', 1, 0),
(9, 2, NULL, 'Affection du RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDEQU000219032016', '2016-03-19 22:50:23', 1, 0),
(10, 2, NULL, 'Ajout de Délégation de Pouvoir', ' une Délégation de Pouvoir a été associée à votre profil', '2016-03-20 00:32:18', 1, 0),
(11, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>RECRDAU000120032016</strong>', '2016-03-20 01:22:54', 1, 0),
(12, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : RECRDAU000120032016', '2016-03-20 03:59:20', 1, 0),
(13, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDEQU000121032016</strong>', '2016-03-21 22:16:18', 1, 0),
(14, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDEQU000121032016', '2016-03-21 22:44:59', 1, 0),
(15, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDCONSO000121032016</strong>', '2016-03-21 23:29:54', 1, 0),
(16, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDCONSO000121032016', '2016-03-21 23:30:03', 1, 0),
(17, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDEQU000122032016</strong>', '2016-03-22 00:18:23', 1, 0),
(18, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDEQU000122032016', '2016-03-22 00:18:44', 1, 0),
(19, 1, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>AUCRDEQU000122032016</strong>', '2016-03-22 23:29:52', 1, 0),
(20, 1, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : AUCRDEQU000122032016', '2016-03-22 23:30:28', 1, 0),
(21, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDAU000124032016</strong>', '2016-03-24 19:55:40', 1, 0),
(22, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDAU000124032016', '2016-03-24 19:55:56', 1, 0),
(23, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', 'PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em><p>Je dois aller chez JC</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 13:56:49', 1, 0),
(24, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', 'PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 13:58:26', 1, 0),
(25, 2, NULL, 'Bauer a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>Bauer a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>http://localhost/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:02:58', 1, 0),
(26, 2, NULL, 'Fesse a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>Fesse a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>http://localhost/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016http://localhost/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:03:44', 1, 0),
(27, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>je viens</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:18:08', 1, 0),
(28, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>cvkjhkjv</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:19:12', 1, 0),
(29, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>dfjdjfdjf</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:21:09', 1, 0),
(30, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>lklkclklkfg</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:25:05', 1, 0),
(31, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>kjkj</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:29:43', 1, 0),
(32, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>aiuiudjkhiohvkjhn jdhoiuhdf</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:30:34', 1, 0),
(33, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>djfjdhfiudhudfiugdfigiudf</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:31:34', 1, 0),
(34, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>joifjgofijgpfg\r\n</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:32:38', 1, 0),
(35, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>lkjdflkjdfkdf</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:33:45', 1, 0),
(36, 2, NULL, 'PING a posté sur l''EDP #0123789CRDCONSO000121032016', '<strong>PING a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000121032016</em> </strong><p>kjhfdjkhdkfj\r\n</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000121032016">Espace De Partage</a>', '2016-03-26 14:38:31', 1, 0),
(37, 2, NULL, 'PING a uploadé un fichier #1110123CRDEQU000122032016', '<strong>PING a uploadé un fichier dans le dossier <em> 1110123CRDEQU000122032016</em> </strong><p>RetraitPasseport.pdf</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/NDCRDEQU000122032016/documents-joints-au-dossier">Voir les documents</a>', '2016-03-27 13:35:31', 1, 0),
(38, 2, NULL, 'PING a uploadé un fichier #1110123CRDEQU000122032016', '<strong>PING a uploadé un fichier dans le dossier <em> 1110123CRDEQU000122032016</em> </strong><p>Folder.jpg</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/NDCRDEQU000122032016/documents-joints-au-dossier">Voir les documents</a>', '2016-03-27 13:39:49', 1, 0),
(39, 2, NULL, 'PING a uploadé un fichier #1110123CRDEQU000122032016', '<strong>PING a uploadé un fichier dans le dossier <em> 1110123CRDEQU000122032016</em> </strong><p>RetraitPasseport.pdf</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/NDCRDEQU000122032016/documents-joints-au-dossier">Voir les documents</a>', '2016-03-27 13:40:38', 1, 0),
(40, 2, NULL, 'PING a uploadé un fichier #1110123CRDEQU000122032016', '<strong>PING a uploadé un fichier dans le dossier <em> 1110123CRDEQU000122032016</em> </strong><p>Carte d''Identité Nationale.jpg</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/NDCRDEQU000122032016/documents-joints-au-dossier">Voir les documents</a>', '2016-03-27 13:44:44', 1, 0),
(41, 2, NULL, 'PING a uploadé un fichier #1110123CRDEQU000122032016', '<strong>PING a uploadé un fichier dans le dossier <em> 1110123CRDEQU000122032016</em> </strong><p>Régistre de Commerce.docx</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/NDCRDEQU000122032016/documents-joints-au-dossier">Voir les documents</a>', '2016-03-27 14:16:49', 1, 0),
(42, 2, NULL, 'PING a uploadé un fichier #1110123CRDEQU000122032016', '<strong>PING a uploadé un fichier dans le dossier <em> 1110123CRDEQU000122032016</em> </strong><p>Carte d''Identité Nationale</p> <br> <a href="/projects/TRDC/web/app_dev.php/ddc/NDCRDEQU000122032016/documents-joints-au-dossier">Voir les documents</a>', '2016-03-27 14:28:36', 1, 0),
(43, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDPP000127032016</strong>', '2016-03-27 14:31:35', 1, 0),
(44, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDPP000127032016', '2016-03-27 14:31:56', 1, 0),
(45, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDPP000227032016</strong>', '2016-03-27 19:56:32', 1, 0),
(46, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDPP000227032016', '2016-03-27 19:56:41', 1, 0),
(47, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDPP000327032016</strong>', '2016-03-27 19:58:54', 1, 0),
(48, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDPP000327032016', '2016-03-27 19:59:05', 1, 0),
(49, 2, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDCONSO000227032016</strong>', '2016-03-27 19:59:23', 1, 0),
(50, 2, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDCONSO000227032016', '2016-03-27 19:59:33', 1, 0),
(51, 2, NULL, 'Kouassi Léon a posté sur l''EDP #0123789CRDCONSO000127032016', '<strong>Kouassi Léon a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000127032016</em> </strong><p>salut</p> <br> <a href="/projets/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000127032016">Espace De Partage</a>', '2016-03-29 10:19:37', 1, 0),
(52, 2, NULL, 'Kouassi Léon a posté sur l''EDP #0123789CRDCONSO000127032016', '<strong>Kouassi Léon a posté dans l''espace de partage du dossier <em> 0123789CRDCONSO000127032016</em> </strong><p>kel</p> <br> <a href="/projets/TRDC/web/app_dev.php/ddc/edp/0123789CRDCONSO000127032016">Espace De Partage</a>', '2016-03-29 10:22:46', 1, 0),
(53, 1, NULL, 'Paum a uploadé un fichier #1110123CRDEQU000222032016', '<strong>Paum a uploadé un fichier dans le dossier <em> 1110123CRDEQU000222032016</em> </strong><p>ASGTY</p> <br> <a href="/projets/TRDC/web/app_dev.php/ddc/AUCRDEQU000122032016/documents-joints-au-dossier">Voir les documents</a>', '2016-03-29 17:36:04', 1, 0),
(54, 1, NULL, 'Ajout de Délégation de Pouvoir', ' une Délégation de Pouvoir a été associée à votre profil', '2016-03-29 18:38:54', 1, 0),
(55, 2, NULL, 'Ajout de Délégation de Pouvoir', ' un niveau de compétence a été associé à votre profil <br><p><b>Crédit(s) :</b><p> Prêt Personnel<br> Crédit Auto<br> </p><p><b>Montant(s) :</b><p> 20000 - 5000000</p><hr>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2016-03-29 18:47:13', 1, 0),
(56, 8, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDEQU000229032016</strong>', '2016-03-29 19:14:30', 0, 0),
(57, 8, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDEQU000229032016', '2016-03-29 19:17:47', 0, 0),
(58, 8, NULL, 'Enregistrement de DDC', ' Vous avez crée avec succes un DDC RS : <strong>NDCRDAU000229032016</strong>', '2016-03-29 19:20:52', 0, 0),
(59, 8, NULL, 'Affection de RC à un DDC ', ' une RC a été affectée avec succes à votre DDC RS : NDCRDAU000229032016', '2016-03-29 19:20:57', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationalité` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `nom`, `nationalité`, `code`) VALUES
(1, 'Côte d''Ivoire', 'Ivoirienne', 'CIV'),
(2, 'Sénégal', 'Sénégalaise', 'SEN'),
(3, 'Autres', 'Autres', 'AUTRE');

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE `phase` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`id`, `nom`, `description`, `code`) VALUES
(4, 'Etude de dossier', 'Un DDC est dans cette phase de sa création jusqu''à la validation dudit DDC par le Chef d''Agence (CA) ou le Responsable de Zone.', 'ETDOS'),
(5, 'Validation Chef d''Agence', 'Un DDC est dans cette phase du partage jusqu''à la validation ou rejet dudit DDC par un analyste.', 'VCA'),
(6, 'Validation Responsable Zone', 'En attente de la validation du responsable de zone', 'VRZ'),
(7, 'Analyse des risques', 'Au niveau du BOC', 'AR'),
(8, 'Décision Comité', 'Soumis à la décision d''un comité', 'DCIC'),
(9, 'Déblocage', 'Pour le déblocage au niveau de la direction des opérations', 'DBC'),
(10, 'Suivi et Archivage', 'DDC débloqué, pour le suivi des traites', 'SA');

-- --------------------------------------------------------

--
-- Table structure for table `piece`
--

CREATE TABLE `piece` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `piece`
--

INSERT INTO `piece` (`id`, `nom`, `code`) VALUES
(1, 'Passeport', 'PP'),
(2, 'Carte nationale d''Identité', 'CNI'),
(3, 'Carte de Séjour', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE `profession` (
  `id` int(11) NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `typefonction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`id`, `fonction`, `typefonction_id`) VALUES
(1, 'Ingénieur Informaticien', 1),
(2, 'Medecin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateajout` datetime NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ddp` tinyint(1) NOT NULL,
  `responsable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nom`, `description`, `dateajout`, `code`, `matricule`, `entite`, `role`, `ddp`, `responsable`) VALUES
(4, 'Chargé Clientèle', 'Il est le contact du client dans la banque. Il reçoit les demandes du client et assure le denouement de ces derniers', '2016-02-27 13:30:22', 'CC', 'PRO000227022016', 'Agence', 'ROLE_CC', 1, 0),
(5, 'Chef d''Agence', 'Il supervise les réalisations du CC. Il peut étre appélé à effectuer les taches du CC', '2016-02-27 14:13:57', 'CA', 'PRO000327022016', 'Agence', 'ROLE_CA', 1, 1),
(6, 'Analyste Back Office Crédits', 'Il est chargé de la contre étude des dossiers de crédit montés par le CC ou CA', '2016-02-28 19:14:59', 'ABOC', 'PRO000428022016', 'BOC', 'ROLE_ABOC', 0, 0),
(7, 'Responsable de Zone', 'Il valide tous les dossiers de crédits montés dans les agences rattachées à sa zone', '2016-03-05 11:32:06', 'RZ', 'PRO000505032016', 'Zone', 'ROLE_RZ', 1, 1),
(8, 'Responsable de Back Office Crédits', 'Donne ACCORD pour les dossiers de crédit validés par le boc et qui sont inféreiur  30 Millions de crédit. (ces dossiers ne remontent pas au cic.', '2016-03-17 19:38:01', 'RBOC', 'PRO000617032016', 'BOC', 'ROLE_RBOC', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_a_c`
--

CREATE TABLE `p_a_c` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coordonnee_id` int(11) NOT NULL,
  `lpd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `p_a_c`
--

INSERT INTO `p_a_c` (`id`, `nom`, `prenom`, `coordonnee_id`, `lpd_id`) VALUES
(1, 'ABY', 'Romolo', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_d_d_c`
--

CREATE TABLE `p_d_d_c` (
  `id` int(11) NOT NULL,
  `datedebut` datetime DEFAULT NULL,
  `datefin` datetime DEFAULT NULL,
  `phase_id` int(11) NOT NULL,
  `ddc_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `p_d_d_c`
--

INSERT INTO `p_d_d_c` (`id`, `datedebut`, `datefin`, `phase_id`, `ddc_id`, `active`) VALUES
(47, '2016-03-21 23:29:54', NULL, 4, 13, 1),
(48, NULL, NULL, 5, 13, 0),
(49, NULL, NULL, 6, 13, 0),
(50, NULL, NULL, 7, 13, 0),
(51, NULL, NULL, 8, 13, 0),
(52, NULL, NULL, 9, 13, 0),
(53, NULL, NULL, 10, 13, 0),
(54, '2016-03-22 00:18:23', NULL, 4, 14, 1),
(55, NULL, NULL, 5, 14, 0),
(56, NULL, NULL, 6, 14, 0),
(57, NULL, NULL, 7, 14, 0),
(58, NULL, NULL, 8, 14, 0),
(59, NULL, NULL, 9, 14, 0),
(60, NULL, NULL, 10, 14, 0),
(61, '2016-03-22 23:29:52', NULL, 4, 15, 1),
(62, NULL, NULL, 5, 15, 0),
(63, NULL, NULL, 6, 15, 0),
(64, NULL, NULL, 7, 15, 0),
(65, NULL, NULL, 8, 15, 0),
(66, NULL, NULL, 9, 15, 0),
(67, NULL, NULL, 10, 15, 0),
(68, '2016-03-24 19:55:40', NULL, 4, 16, 1),
(69, NULL, NULL, 5, 16, 0),
(70, NULL, NULL, 6, 16, 0),
(71, NULL, NULL, 7, 16, 0),
(72, NULL, NULL, 8, 16, 0),
(73, NULL, NULL, 9, 16, 0),
(74, NULL, NULL, 10, 16, 0),
(75, '2016-03-27 14:31:34', NULL, 4, 17, 1),
(76, NULL, NULL, 5, 17, 0),
(77, NULL, NULL, 6, 17, 0),
(78, NULL, NULL, 7, 17, 0),
(79, NULL, NULL, 8, 17, 0),
(80, NULL, NULL, 9, 17, 0),
(81, NULL, NULL, 10, 17, 0),
(82, '2016-03-27 19:56:32', NULL, 4, 18, 1),
(83, NULL, NULL, 5, 18, 0),
(84, NULL, NULL, 6, 18, 0),
(85, NULL, NULL, 7, 18, 0),
(86, NULL, NULL, 8, 18, 0),
(87, NULL, NULL, 9, 18, 0),
(88, NULL, NULL, 10, 18, 0),
(89, '2016-03-27 19:58:54', NULL, 4, 19, 1),
(90, NULL, NULL, 5, 19, 0),
(91, NULL, NULL, 6, 19, 0),
(92, NULL, NULL, 7, 19, 0),
(93, NULL, NULL, 8, 19, 0),
(94, NULL, NULL, 9, 19, 0),
(95, NULL, NULL, 10, 19, 0),
(96, '2016-03-27 19:59:23', NULL, 4, 20, 1),
(97, NULL, NULL, 5, 20, 0),
(98, NULL, NULL, 6, 20, 0),
(99, NULL, NULL, 7, 20, 0),
(100, NULL, NULL, 8, 20, 0),
(101, NULL, NULL, 9, 20, 0),
(102, NULL, NULL, 10, 20, 0),
(103, '2016-03-29 19:14:30', NULL, 4, 21, 1),
(104, NULL, NULL, 5, 21, 0),
(105, NULL, NULL, 6, 21, 0),
(106, NULL, NULL, 7, 21, 0),
(107, NULL, NULL, 8, 21, 0),
(108, NULL, NULL, 9, 21, 0),
(109, NULL, NULL, 10, 21, 0),
(110, '2016-03-29 19:20:51', NULL, 4, 22, 1),
(111, NULL, NULL, 5, 22, 0),
(112, NULL, NULL, 6, 22, 0),
(113, NULL, NULL, 7, 22, 0),
(114, NULL, NULL, 8, 22, 0),
(115, NULL, NULL, 9, 22, 0),
(116, NULL, NULL, 10, 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `revenu`
--

CREATE TABLE `revenu` (
  `id` int(11) NOT NULL,
  `rsmn` double NOT NULL,
  `natureAutresRevenus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `montant` double DEFAULT NULL,
  `periodicite` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `revenu`
--

INSERT INTO `revenu` (`id`, `rsmn`, `natureAutresRevenus`, `montant`, `periodicite`) VALUES
(1, 12000, 'Rien', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `statut_logement`
--

CREATE TABLE `statut_logement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statut_logement`
--

INSERT INTO `statut_logement` (`id`, `nom`, `code`) VALUES
(1, 'Propriétaire', 'PRO'),
(2, 'Locataire', 'LOC'),
(3, 'Hébergé', 'HEB');

-- --------------------------------------------------------

--
-- Table structure for table `systeme`
--

CREATE TABLE `systeme` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateajout` datetime DEFAULT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acteur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `systeme`
--

INSERT INTO `systeme` (`id`, `nom`, `code`, `description`, `dateajout`, `matricule`, `acteur_id`) VALUES
(1, 'Système de Gestion de Fichier', 'SGF', 'Pour la gestion de fichiers', '2016-02-27 14:56:16', 'SYS000127022016', 4);

-- --------------------------------------------------------

--
-- Table structure for table `type_fonction`
--

CREATE TABLE `type_fonction` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_fonction`
--

INSERT INTO `type_fonction` (`id`, `nom`, `code`, `description`) VALUES
(1, 'Salarié Privé', 'SAPR', ''),
(2, 'Agents de l''administration', 'AGAD', ''),
(3, 'Retraité', 'RET', '');

-- --------------------------------------------------------

--
-- Table structure for table `type_journal`
--

CREATE TABLE `type_journal` (
  `id` int(11) NOT NULL,
  `dateajout` datetime NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_journal`
--

INSERT INTO `type_journal` (`id`, `dateajout`, `code`, `nom`, `description`) VALUES
(1, '2016-02-13 02:33:18', 'AJ_EN_AGE', 'Ajout d''une nouvelle entité de type agence', 'Lorsqu''une nouvelle agence est ajoutée'),
(2, '2016-02-13 02:33:18', 'AJ_EN_BOC', 'Ajout d''une nouvelle entité de type Back Office Crédit', NULL),
(3, '2016-02-13 02:33:18', 'AJ_EN_CIC', 'Ajout d''une nouvelle entité de type Back Office Crédit', NULL),
(4, '2016-02-13 02:33:18', 'MOD_EN_AGE', 'Modification d''une entité de type Agence', NULL),
(5, '2016-02-13 02:33:18', 'SUP_EN_AGE', 'Sppression d''une entité de type Agence', NULL),
(6, '2016-02-13 02:33:18', 'MOD_EN_CIC', 'Modification d''une entité de type Comité Interne de Crédit', NULL),
(7, '2016-02-13 02:33:18', 'SUP_EN_CIC', 'Sppression d''une entité de type Comité Interne de Crédit', NULL),
(8, '2016-02-13 02:33:18', 'MOD_EN_BOC', 'Modification d''une entité de type Back Office Crédit', NULL),
(9, '2016-02-13 02:33:18', 'SUP_EN_BOC', 'Sppression d''une entité de type Back Office Crédit', NULL),
(10, '2016-02-13 02:33:18', 'CRE_DOS', 'Création de dossier', NULL),
(11, '2016-02-13 02:33:18', 'AJ_EN_ZON', 'Ajout d''une nouvelle entité de type zone', NULL),
(12, '2016-02-13 02:33:18', 'MOD_EN_ZON', 'Modification d''une nouvelle entité de type zone', NULL),
(13, '2016-02-13 02:33:18', 'SUP_EN_ZON', 'Suppression d''une nouvelle entité de type zone', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_d_c`
--

CREATE TABLE `t_d_c` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_d_c`
--

INSERT INTO `t_d_c` (`id`, `nom`, `code`, `description`) VALUES
(1, 'Prêt Personnel', 'CRDPP', ''),
(2, 'Crédit Auto', 'CRDAU', ''),
(3, 'Crédit Equipement', 'CRDEQU', ''),
(4, 'Crédit Consommation', 'CRDCONSO', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_d_d_c`
--

CREATE TABLE `t_d_d_c` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_d_d_c`
--

INSERT INTO `t_d_d_c` (`id`, `nom`, `code`, `description`) VALUES
(1, 'Nouvelle Demande', 'ND', ''),
(2, 'Renouvellement', 'RE', ''),
(3, 'Rachat', 'RA', ''),
(4, 'Autres', 'AU', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `compte_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` longtext COLLATE utf8_unicode_ci,
  `dateajout` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `matricule` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `acteur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `compte_id`, `nom`, `cin`, `prenom`, `email`, `image`, `adresse`, `dateajout`, `active`, `matricule`, `acteur_id`) VALUES
(4, 6, 'Jack', 'AS7845OL', 'Bauer', 'admin@admin.com', 'img/default.png', 'Adresse de l''administrateur', '2016-02-04 20:02:33', 1, '00011', 5),
(5, 9, 'Aby', 'BE56350X', 'Kouassi Léon', 'k.leon.aby@gmail.com', 'Utilisateurs/118152/images//default.png', '33 Rue brahim Annakhai', '2016-02-24 15:03:55', 1, '118152', 3),
(6, 10, 'KARL', 'AQ74589L', 'PING', 'kp@gmail.com', 'Utilisateurs/118153/images//00.jpeg', NULL, '2016-02-24 18:43:45', 1, '118153', 2),
(8, 12, 'MOL', 'NB7894521N', 'Fesse', 'mf@gmail.com', 'Utilisateurs/000478/images//00.jpeg', 'ras', '2016-02-27 11:45:34', 1, '000478', 1),
(9, 7, 'Tom', 'LO745M', 'Jerry', 'tom.jerry@gmail.com', 'img/default.png', 'ras', '2016-02-27 11:45:35', 1, '004750', 6),
(10, 13, 'Malo', 'BV7458JUI', 'Jean de la route', 'm.jean@gmail.com', 'Utilisateurs/AQZ7854/images//00.png', 'RAS', '2016-03-29 16:02:34', 1, 'AQZ7854', 7),
(11, 14, 'Rom', 'QS784569', 'Paum', 'rpam@yahoo.fr', 'Utilisateurs/000001/images//00.jpeg', 'TG', '2016-03-29 16:22:43', 1, '000001', 8);

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(11) NOT NULL,
  `entite_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `dateajout` datetime NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `entite_id`, `nom`, `matricule`, `description`, `dateajout`, `code`) VALUES
(1, 2, 'Ain Sebaa', 'ZON0012015478900024', 'ras', '2016-02-27 11:23:40', '741587'),
(2, 5, 'Hassan 2', 'ZON000228022016', 'ras bien', '2016-02-28 20:23:15', '123145');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Acteur`
--
ALTER TABLE `Acteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_64C19AA912B2DC9C` (`matricule`),
  ADD UNIQUE KEY `UNIQ_64C19AA977153098` (`code`),
  ADD UNIQUE KEY `UNIQ_64C19AA99BEA957A` (`entite_id`),
  ADD KEY `IDX_64C19AA99F2C3FAB` (`zone_id`);

--
-- Indexes for table `b_o_c`
--
ALTER TABLE `b_o_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1CAD31A012B2DC9C` (`matricule`),
  ADD UNIQUE KEY `UNIQ_1CAD31A077153098` (`code`),
  ADD UNIQUE KEY `UNIQ_1CAD31A09BEA957A` (`entite_id`);

--
-- Indexes for table `civilite`
--
ALTER TABLE `civilite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C74404557DDCA96B` (`radical`),
  ADD UNIQUE KEY `UNIQ_C7440455E5F13C8F` (`identite_id`),
  ADD UNIQUE KEY `UNIQ_C74404559435AF7A` (`revenu_id`),
  ADD UNIQUE KEY `UNIQ_C744045558ABF955` (`logement_id`),
  ADD UNIQUE KEY `UNIQ_C7440455AE21B650` (`pac_id`),
  ADD UNIQUE KEY `UNIQ_C7440455F202EC33` (`coordonnee_id`),
  ADD UNIQUE KEY `UNIQ_C7440455FDEF8996` (`profession_id`),
  ADD UNIQUE KEY `UNIQ_C74404555D7C53EC` (`employeur_id`),
  ADD KEY `IDX_C7440455D725330D` (`agence_id`);

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_CFF6526092FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_CFF65260A0D96FBF` (`email_canonical`);

--
-- Indexes for table `coordonnee`
--
ALTER TABLE `coordonnee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1C592B9A85C83367` (`gsm`),
  ADD UNIQUE KEY `UNIQ_1C592B9AE7927C74` (`email`);

--
-- Indexes for table `c_d_c_d`
--
ALTER TABLE `c_d_c_d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_e_c`
--
ALTER TABLE `c_e_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2C5A9DC619EB6921` (`client_id`);

--
-- Indexes for table `c_i_c`
--
ALTER TABLE `c_i_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_254064A212B2DC9C` (`matricule`),
  ADD UNIQUE KEY `UNIQ_254064A277153098` (`code`),
  ADD UNIQUE KEY `UNIQ_254064A29BEA957A` (`entite_id`);

--
-- Indexes for table `ddp_tdc`
--
ALTER TABLE `ddp_tdc`
  ADD PRIMARY KEY (`ddp_id`,`tdc_id`),
  ADD KEY `IDX_9D9E5B32BC2A81DC` (`ddp_id`),
  ADD KEY `IDX_9D9E5B32FD507B36` (`tdc_id`);

--
-- Indexes for table `decision`
--
ALTER TABLE `decision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_d_c`
--
ALTER TABLE `d_d_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_9FB82BE177765279` (`edp_id`),
  ADD UNIQUE KEY `UNIQ_9FB82BE14781B5A1` (`cdcd_id`),
  ADD KEY `IDX_9FB82BE119EB6921` (`client_id`),
  ADD KEY `IDX_9FB82BE1CA0FF348` (`tddc_id`),
  ADD KEY `IDX_9FB82BE1FD507B36` (`tdc_id`),
  ADD KEY `IDX_9FB82BE157889920` (`fonction_id`),
  ADD KEY `IDX_9FB82BE1131C4D68` (`phaseActuelle_id`),
  ADD KEY `IDX_9FB82BE1387B8DAC` (`etatActuel_id`);

--
-- Indexes for table `d_d_p`
--
ALTER TABLE `d_d_p`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1B066A3F57889920` (`fonction_id`);

--
-- Indexes for table `d_o_c_d_d_c`
--
ALTER TABLE `d_o_c_d_d_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D255162AFE8679AD` (`ddc_id`);

--
-- Indexes for table `d_o_c_t_d_c`
--
ALTER TABLE `d_o_c_t_d_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B2B581A8FD507B36` (`tdc_id`);

--
-- Indexes for table `employeur`
--
ALTER TABLE `employeur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entite`
--
ALTER TABLE `entite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_55CAF76299091188` (`phase_id`);

--
-- Indexes for table `e_d_c_c`
--
ALTER TABLE `e_d_c_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E5EFCC67ED3D90F7` (`numeroCompte`),
  ADD KEY `IDX_E5EFCC6719EB6921` (`client_id`);

--
-- Indexes for table `e_d_d_c`
--
ALTER TABLE `e_d_d_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E0A0DAE2D5E86FF` (`etat_id`),
  ADD KEY `IDX_E0A0DAE23E40D75B` (`pddc_id`),
  ADD KEY `IDX_E0A0DAE257889920` (`fonction_id`),
  ADD KEY `IDX_E0A0DAE2BDEE7539` (`decision_id`);

--
-- Indexes for table `e_d_p`
--
ALTER TABLE `e_d_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_900D5BD12B2DC9C` (`matricule`),
  ADD KEY `IDX_900D5BDDA6F574A` (`acteur_id`),
  ADD KEY `IDX_900D5BD9BEA957A` (`entite_id`),
  ADD KEY `IDX_900D5BD275ED078` (`profil_id`);

--
-- Indexes for table `f_d_d_c`
--
ALTER TABLE `f_d_d_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D148C07FF915CFE` (`fichier_id`),
  ADD KEY `IDX_D148C07FFE8679AD` (`ddc_id`),
  ADD KEY `IDX_D148C07F1B57F867` (`docddc_id`),
  ADD KEY `IDX_D148C07F57889920` (`fonction_id`);

--
-- Indexes for table `identite`
--
ALTER TABLE `identite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7E94B58BC40FCFA8` (`piece_id`),
  ADD KEY `IDX_7E94B58B39194ABF` (`civilite_id`),
  ADD KEY `IDX_7E94B58BA6E44244` (`pays_id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C1A7E74DA76ED395` (`user_id`),
  ADD KEY `IDX_C1A7E74DC54C8C93` (`type_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F3F68C5A76ED395` (`user_id`);

--
-- Indexes for table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F0FD4457F6203804` (`statut_id`);

--
-- Indexes for table `l_d_p`
--
ALTER TABLE `l_d_p`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2B7621FE6C6E55B5` (`nom`),
  ADD UNIQUE KEY `UNIQ_2B7621FE77153098` (`code`);

--
-- Indexes for table `m_e_d_p`
--
ALTER TABLE `m_e_d_p`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6A91FCEBF915CFE` (`fichier_id`),
  ADD KEY `IDX_6A91FCEB77765279` (`edp_id`),
  ADD KEY `IDX_6A91FCEB57889920` (`fonction_id`);

--
-- Indexes for table `nature_compte`
--
ALTER TABLE `nature_compte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BF5476CADA6F574A` (`acteur_id`),
  ADD KEY `IDX_BF5476CA9BEA957A` (`entite_id`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BA930D6929C0BF7D` (`typefonction_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_a_c`
--
ALTER TABLE `p_a_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C13D848F202EC33` (`coordonnee_id`),
  ADD KEY `IDX_C13D8481A62F23B` (`lpd_id`);

--
-- Indexes for table `p_d_d_c`
--
ALTER TABLE `p_d_d_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D546698B99091188` (`phase_id`),
  ADD KEY `IDX_D546698BFE8679AD` (`ddc_id`);

--
-- Indexes for table `revenu`
--
ALTER TABLE `revenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statut_logement`
--
ALTER TABLE `statut_logement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systeme`
--
ALTER TABLE `systeme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_95796DE377153098` (`code`),
  ADD UNIQUE KEY `UNIQ_95796DE3DA6F574A` (`acteur_id`);

--
-- Indexes for table `type_fonction`
--
ALTER TABLE `type_fonction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_journal`
--
ALTER TABLE `type_journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_d_c`
--
ALTER TABLE `t_d_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_FF58BC636C6E55B5` (`nom`),
  ADD UNIQUE KEY `UNIQ_FF58BC6377153098` (`code`);

--
-- Indexes for table `t_d_d_c`
--
ALTER TABLE `t_d_d_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3ABE530DA` (`cin`),
  ADD UNIQUE KEY `UNIQ_1D1C63B312B2DC9C` (`matricule`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3F2C56620` (`compte_id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3DA6F574A` (`acteur_id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A0EBC00712B2DC9C` (`matricule`),
  ADD UNIQUE KEY `UNIQ_A0EBC00777153098` (`code`),
  ADD UNIQUE KEY `UNIQ_A0EBC0079BEA957A` (`entite_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Acteur`
--
ALTER TABLE `Acteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `agence`
--
ALTER TABLE `agence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `b_o_c`
--
ALTER TABLE `b_o_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `civilite`
--
ALTER TABLE `civilite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `coordonnee`
--
ALTER TABLE `coordonnee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `c_d_c_d`
--
ALTER TABLE `c_d_c_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `c_e_c`
--
ALTER TABLE `c_e_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `c_i_c`
--
ALTER TABLE `c_i_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `decision`
--
ALTER TABLE `decision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `d_d_c`
--
ALTER TABLE `d_d_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `d_d_p`
--
ALTER TABLE `d_d_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `d_o_c_d_d_c`
--
ALTER TABLE `d_o_c_d_d_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `d_o_c_t_d_c`
--
ALTER TABLE `d_o_c_t_d_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `employeur`
--
ALTER TABLE `employeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `entite`
--
ALTER TABLE `entite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `etape`
--
ALTER TABLE `etape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `e_d_c_c`
--
ALTER TABLE `e_d_c_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `e_d_d_c`
--
ALTER TABLE `e_d_d_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `e_d_p`
--
ALTER TABLE `e_d_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `f_d_d_c`
--
ALTER TABLE `f_d_d_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `identite`
--
ALTER TABLE `identite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `logement`
--
ALTER TABLE `logement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `l_d_p`
--
ALTER TABLE `l_d_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_e_d_p`
--
ALTER TABLE `m_e_d_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nature_compte`
--
ALTER TABLE `nature_compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `piece`
--
ALTER TABLE `piece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profession`
--
ALTER TABLE `profession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `p_a_c`
--
ALTER TABLE `p_a_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `p_d_d_c`
--
ALTER TABLE `p_d_d_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `revenu`
--
ALTER TABLE `revenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `statut_logement`
--
ALTER TABLE `statut_logement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `systeme`
--
ALTER TABLE `systeme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `type_fonction`
--
ALTER TABLE `type_fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `type_journal`
--
ALTER TABLE `type_journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `t_d_c`
--
ALTER TABLE `t_d_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_d_d_c`
--
ALTER TABLE `t_d_d_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agence`
--
ALTER TABLE `agence`
  ADD CONSTRAINT `FK_64C19AA99BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`),
  ADD CONSTRAINT `FK_64C19AA99F2C3FAB` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`id`);

--
-- Constraints for table `b_o_c`
--
ALTER TABLE `b_o_c`
  ADD CONSTRAINT `FK_1CAD31A09BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C744045558ABF955` FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`),
  ADD CONSTRAINT `FK_C74404555D7C53EC` FOREIGN KEY (`employeur_id`) REFERENCES `employeur` (`id`),
  ADD CONSTRAINT `FK_C74404559435AF7A` FOREIGN KEY (`revenu_id`) REFERENCES `revenu` (`id`),
  ADD CONSTRAINT `FK_C7440455AE21B650` FOREIGN KEY (`pac_id`) REFERENCES `p_a_c` (`id`),
  ADD CONSTRAINT `FK_C7440455D725330D` FOREIGN KEY (`agence_id`) REFERENCES `agence` (`id`),
  ADD CONSTRAINT `FK_C7440455E5F13C8F` FOREIGN KEY (`identite_id`) REFERENCES `identite` (`id`),
  ADD CONSTRAINT `FK_C7440455F202EC33` FOREIGN KEY (`coordonnee_id`) REFERENCES `coordonnee` (`id`),
  ADD CONSTRAINT `FK_C7440455FDEF8996` FOREIGN KEY (`profession_id`) REFERENCES `profession` (`id`);

--
-- Constraints for table `c_e_c`
--
ALTER TABLE `c_e_c`
  ADD CONSTRAINT `FK_2C5A9DC619EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Constraints for table `c_i_c`
--
ALTER TABLE `c_i_c`
  ADD CONSTRAINT `FK_254064A29BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`);

--
-- Constraints for table `ddp_tdc`
--
ALTER TABLE `ddp_tdc`
  ADD CONSTRAINT `FK_9D9E5B32BC2A81DC` FOREIGN KEY (`ddp_id`) REFERENCES `d_d_p` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9D9E5B32FD507B36` FOREIGN KEY (`tdc_id`) REFERENCES `t_d_c` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `d_d_c`
--
ALTER TABLE `d_d_c`
  ADD CONSTRAINT `FK_9FB82BE1131C4D68` FOREIGN KEY (`phaseActuelle_id`) REFERENCES `p_d_d_c` (`id`),
  ADD CONSTRAINT `FK_9FB82BE119EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_9FB82BE1387B8DAC` FOREIGN KEY (`etatActuel_id`) REFERENCES `e_d_d_c` (`id`),
  ADD CONSTRAINT `FK_9FB82BE14781B5A1` FOREIGN KEY (`cdcd_id`) REFERENCES `c_d_c_d` (`id`),
  ADD CONSTRAINT `FK_9FB82BE157889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`),
  ADD CONSTRAINT `FK_9FB82BE177765279` FOREIGN KEY (`edp_id`) REFERENCES `e_d_p` (`id`),
  ADD CONSTRAINT `FK_9FB82BE1CA0FF348` FOREIGN KEY (`tddc_id`) REFERENCES `t_d_d_c` (`id`),
  ADD CONSTRAINT `FK_9FB82BE1FD507B36` FOREIGN KEY (`tdc_id`) REFERENCES `t_d_c` (`id`);

--
-- Constraints for table `d_d_p`
--
ALTER TABLE `d_d_p`
  ADD CONSTRAINT `FK_1B066A3F57889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`);

--
-- Constraints for table `d_o_c_d_d_c`
--
ALTER TABLE `d_o_c_d_d_c`
  ADD CONSTRAINT `FK_D255162AFE8679AD` FOREIGN KEY (`ddc_id`) REFERENCES `d_d_c` (`id`);

--
-- Constraints for table `d_o_c_t_d_c`
--
ALTER TABLE `d_o_c_t_d_c`
  ADD CONSTRAINT `FK_B2B581A8FD507B36` FOREIGN KEY (`tdc_id`) REFERENCES `t_d_c` (`id`);

--
-- Constraints for table `etat`
--
ALTER TABLE `etat`
  ADD CONSTRAINT `FK_55CAF76299091188` FOREIGN KEY (`phase_id`) REFERENCES `phase` (`id`);

--
-- Constraints for table `e_d_c_c`
--
ALTER TABLE `e_d_c_c`
  ADD CONSTRAINT `FK_E5EFCC6719EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Constraints for table `e_d_d_c`
--
ALTER TABLE `e_d_d_c`
  ADD CONSTRAINT `FK_E0A0DAE23E40D75B` FOREIGN KEY (`pddc_id`) REFERENCES `p_d_d_c` (`id`),
  ADD CONSTRAINT `FK_E0A0DAE257889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`),
  ADD CONSTRAINT `FK_E0A0DAE2BDEE7539` FOREIGN KEY (`decision_id`) REFERENCES `decision` (`id`),
  ADD CONSTRAINT `FK_E0A0DAE2D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`);

--
-- Constraints for table `fonction`
--
ALTER TABLE `fonction`
  ADD CONSTRAINT `FK_900D5BD275ED078` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`),
  ADD CONSTRAINT `FK_900D5BD9BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`),
  ADD CONSTRAINT `FK_900D5BDDA6F574A` FOREIGN KEY (`acteur_id`) REFERENCES `Acteur` (`id`);

--
-- Constraints for table `f_d_d_c`
--
ALTER TABLE `f_d_d_c`
  ADD CONSTRAINT `FK_D148C07F1B57F867` FOREIGN KEY (`docddc_id`) REFERENCES `d_o_c_d_d_c` (`id`),
  ADD CONSTRAINT `FK_D148C07F57889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`),
  ADD CONSTRAINT `FK_D148C07FF915CFE` FOREIGN KEY (`fichier_id`) REFERENCES `fichier` (`id`),
  ADD CONSTRAINT `FK_D148C07FFE8679AD` FOREIGN KEY (`ddc_id`) REFERENCES `d_d_c` (`id`);

--
-- Constraints for table `identite`
--
ALTER TABLE `identite`
  ADD CONSTRAINT `FK_7E94B58B39194ABF` FOREIGN KEY (`civilite_id`) REFERENCES `civilite` (`id`),
  ADD CONSTRAINT `FK_7E94B58BA6E44244` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`),
  ADD CONSTRAINT `FK_7E94B58BC40FCFA8` FOREIGN KEY (`piece_id`) REFERENCES `piece` (`id`);

--
-- Constraints for table `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `FK_C1A7E74DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `compte` (`id`),
  ADD CONSTRAINT `FK_C1A7E74DC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type_journal` (`id`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `FK_8F3F68C5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `compte` (`id`);

--
-- Constraints for table `logement`
--
ALTER TABLE `logement`
  ADD CONSTRAINT `FK_F0FD4457F6203804` FOREIGN KEY (`statut_id`) REFERENCES `statut_logement` (`id`);

--
-- Constraints for table `m_e_d_p`
--
ALTER TABLE `m_e_d_p`
  ADD CONSTRAINT `FK_6A91FCEB57889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`),
  ADD CONSTRAINT `FK_6A91FCEB77765279` FOREIGN KEY (`edp_id`) REFERENCES `e_d_p` (`id`),
  ADD CONSTRAINT `FK_6A91FCEBF915CFE` FOREIGN KEY (`fichier_id`) REFERENCES `fichier` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `FK_BF5476CA9BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`),
  ADD CONSTRAINT `FK_BF5476CADA6F574A` FOREIGN KEY (`acteur_id`) REFERENCES `Acteur` (`id`);

--
-- Constraints for table `profession`
--
ALTER TABLE `profession`
  ADD CONSTRAINT `FK_BA930D6929C0BF7D` FOREIGN KEY (`typefonction_id`) REFERENCES `type_fonction` (`id`);

--
-- Constraints for table `p_a_c`
--
ALTER TABLE `p_a_c`
  ADD CONSTRAINT `FK_C13D8481A62F23B` FOREIGN KEY (`lpd_id`) REFERENCES `l_d_p` (`id`),
  ADD CONSTRAINT `FK_C13D848F202EC33` FOREIGN KEY (`coordonnee_id`) REFERENCES `coordonnee` (`id`);

--
-- Constraints for table `p_d_d_c`
--
ALTER TABLE `p_d_d_c`
  ADD CONSTRAINT `FK_D546698B99091188` FOREIGN KEY (`phase_id`) REFERENCES `phase` (`id`),
  ADD CONSTRAINT `FK_D546698BFE8679AD` FOREIGN KEY (`ddc_id`) REFERENCES `d_d_c` (`id`);

--
-- Constraints for table `systeme`
--
ALTER TABLE `systeme`
  ADD CONSTRAINT `FK_95796DE3DA6F574A` FOREIGN KEY (`acteur_id`) REFERENCES `Acteur` (`id`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_1D1C63B3DA6F574A` FOREIGN KEY (`acteur_id`) REFERENCES `Acteur` (`id`),
  ADD CONSTRAINT `FK_1D1C63B3F2C56620` FOREIGN KEY (`compte_id`) REFERENCES `compte` (`id`);

--
-- Constraints for table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `FK_A0EBC0079BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
