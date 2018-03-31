-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 31 Mars 2018 à 15:10
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_ad` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_ad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id_ad`, `nom`, `prenom`, `login`, `password`) VALUES
(1, 'kelfat', 'mouhamed', '', ''),
(2, 'benziane ', 'amine', '', ''),
(3, 'larbi', 'fatima', '', ''),
(4, 'taleb ', 'walid', '', ''),
(5, 'benamar', 'abk', 'larbifatima94@gmail.com', '456');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE IF NOT EXISTS `enseignant` (
  `id_ens` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Grade` varchar(20) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_ens`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`id_ens`, `Nom`, `Prenom`, `Grade`, `login`, `password`) VALUES
(1, 'messabibhi', 'mouhamed', '', '', ''),
(2, 'benziane', 'mouhamed', '', '', ''),
(3, 'khitri ', 'souad', '', '', ''),
(4, 'tedlaoui', 'mouhamed', '', '', ''),
(5, 'benamar', 'abdelkrim', 'chef departement', '', ''),
(6, 'benmammar', 'badr', '', '', ''),
(7, 'messabihi', 'mohamed', 'MAA', 'larbifatima94@gmail.com', '125');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `NumeroEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `DateNaissance` date NOT NULL,
  `specialite` varchar(5) NOT NULL,
  `Moyenne` double NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`NumeroEtudiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`NumeroEtudiant`, `Nom`, `Prenom`, `DateNaissance`, `specialite`, `Moyenne`, `login`, `password`) VALUES
(1, 'larbi', 'fatima zohra', '1994-04-01', 'GL', 12, 'larbifatima94@gmail.com', '123'),
(7, 'taleb', 'chahrazed', '1995-06-26', 'RSD', 15, 'rim.malak@gmail.com', '456');

-- --------------------------------------------------------

--
-- Structure de la table `fichevoeux`
--

CREATE TABLE IF NOT EXISTS `fichevoeux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `moyenne` double NOT NULL,
  `etudiant` varchar(40) NOT NULL,
  `specialite` varchar(5) NOT NULL,
  `choix5` varchar(50) NOT NULL,
  `choix1` varchar(50) NOT NULL,
  `choix2` varchar(50) NOT NULL,
  `choix3` varchar(50) NOT NULL,
  `choix4` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `fichevoeux`
--

INSERT INTO `fichevoeux` (`id`, `moyenne`, `etudiant`, `specialite`, `choix5`, `choix1`, `choix2`, `choix3`, `choix4`) VALUES
(3, 12, 'larbi fatima zohra', 'GL', 'routage avec QoS dans les rÃ©seaux ad hoc ', 'routage avec QoS dans les rÃ©seaux ad hoc ', 'Gestion de lâ€™Ã©volution des ontologies dans les ', 'MAINTENANCE d un logiciel generateur de site Web', 'Gestion de lâ€™Ã©volution des ontologies dans les '),
(4, 13.5, 'larbi fatima zohra,taleb chahrazed', 'GL', 'routage avec QoS dans les rÃ©seaux ad hoc ', 'routage avec QoS dans les rÃ©seaux ad hoc ', 'routage avec QoS dans les rÃ©seaux ad hoc ', 'routage avec QoS dans les rÃ©seaux ad hoc ', 'routage avec QoS dans les rÃ©seaux ad hoc ');

-- --------------------------------------------------------

--
-- Structure de la table `nbrsujet`
--

CREATE TABLE IF NOT EXISTS `nbrsujet` (
  `nbr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `nbrsujet`
--

INSERT INTO `nbrsujet` (`nbr`) VALUES
(3);

-- --------------------------------------------------------

--
-- Structure de la table `soutenance`
--

CREATE TABLE IF NOT EXISTS `soutenance` (
  `id_sout` int(11) NOT NULL AUTO_INCREMENT,
  `HeureDebut` datetime NOT NULL,
  `HeureFin` datetime NOT NULL,
  `Lieu` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sout`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `soutenance`
--

INSERT INTO `soutenance` (`id_sout`, `HeureDebut`, `HeureFin`, `Lieu`) VALUES
(1, '2018-06-08 10:30:00', '2018-06-08 12:00:00', 'salle 105'),
(2, '2018-07-01 13:00:00', '2018-07-01 14:30:00', 'salle soutenance');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `id_theme` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(50) NOT NULL,
  `id_ens` int(11) NOT NULL,
  `specialite` varchar(20) NOT NULL,
  `statut` int(11) NOT NULL,
  PRIMARY KEY (`id_theme`),
  UNIQUE KEY `id_theme` (`id_theme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`id_theme`, `intitule`, `id_ens`, `specialite`, `statut`) VALUES
(8, 'routage avec QoS dans les rÃ©seaux ad hoc ', 0, 'GL, RSD, MID', 0),
(9, 'Cryptanalyse par usage des algorithmes genetique', 0, 'MID', 0),
(10, 'Gestion de lâ€™Ã©volution des ontologies dans les ', 0, 'GL, SIC', 0),
(11, 'MAINTENANCE d un logiciel generateur de site Web', 7, 'GL, MID', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
