-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 mai 2022 à 16:14
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `id_logement` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` enum('location','vente') NOT NULL,
  `description` text,
  PRIMARY KEY (`id_logement`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(1, 'Bel appartement', '71 boulevard pourparle', 'Marseille', 20001, 1501, 2000001, './assets/img/image1.jpg', 'location', '1'),
(2, 'appart2', '78 boulevard voltaire', 'marseille', 13010, 150, 500000, './assets/img/image2.jpg', 'location', NULL),
(8, 'caravane flambam neuf ', 'bord de route et autoroute', 'N\'importe ou', 66666, 10, 10000, 'assets/img/image3.jpg', 'vente', 'Magnifique caravane pour vivre n\'importe ou'),
(9, 'magnifique tour eiffel', 'marché au puce', 'Marseille', 13009, 150, 15500000, 'assets/img/image4.jpg', 'vente', NULL),
(10, 'maison bord de falaise', 'versant de montagne', 'dans la montagne', 10000, 60, 15000000, 'assets/img/image5.jpg', 'vente', 'magnifique maison sur le versant de la montagne, prévoir une carde + harnais de sécurité, risque de chute');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
