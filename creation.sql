-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 18 jan. 2019 à 19:56
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `micro_blog`
--
CREATE DATABASE IF NOT EXISTS `micro_blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `micro_blog`;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text CHARACTER SET utf8 NOT NULL,
  `date` int(15) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `nb_vote` int(11) NOT NULL DEFAULT '0',
  `ip_vote` varchar(36) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `auteur_id`, `nb_vote`, `ip_vote`) VALUES
(61, 'qegsenkilknk', 1547836660, 2, 1, '2'),
(67, 'hoihoi', 1547825420, 2, 0, '0'),
(63, ',op^,Ã´nponponpo', 1547731281, 2, 1, '2'),
(66, 'bjbkjb', 1547825415, 2, 0, '0'),
(68, 'xfbdf', 1547825564, 2, 0, '0'),
(69, 'nklkn', 1547825673, 2, 0, '0'),
(70, 'rgher', 1547825696, 2, 0, '0'),
(71, 'rgreg', 1547825732, 2, 0, '0'),
(72, 'nibobi', 1547828799, 2, 0, '0'),
(73, 'noinon', 1547834005, 2, 0, '0');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `role` varchar(20) NOT NULL,
  `SID` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mdp`, `role`, `SID`) VALUES
(2, 'arthur', '68830aef4dbfad181162f9251a1da51b', 'admin', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
