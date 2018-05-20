-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 20 Mai 2018 à 16:19
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
  `specialite` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_ens`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`id_ens`, `Nom`, `Prenom`, `Grade`, `specialite`, `login`, `password`) VALUES
(0, 'messabihi', 'mohamed', 'MAA', 'GL', 'larbifatima94@gmail.com', '125'),
(8, 'hadjila', 'mohamed', 'MAA', '', 'hadjila.mohamed@gmail.com', '159'),
(9, 'tadlaoui', 'mohammed', 'MCB', 'GL, SIC', 'mtadlaoui@yahoo.com', '894');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`NumeroEtudiant`, `Nom`, `Prenom`, `DateNaissance`, `specialite`, `Moyenne`, `login`, `password`) VALUES
(8, 'larbi', 'fatima zohra', '1994-04-10', 'GL', 13, 'larbifatima94@gmail.com', '123'),
(12, 'moussaoui', 'sara ferdaous', '1992-12-02', 'GL', 0, 'sarfir@gmail.com', '458'),
(13, 'zennaki', 'sara', '1994-12-10', 'GL', 0, 'zennaki@gmail.com', '789');

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
  `voeux` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `fichevoeux`
--

INSERT INTO `fichevoeux` (`id`, `moyenne`, `etudiant`, `specialite`, `choix5`, `choix1`, `choix2`, `choix3`, `choix4`, `voeux`) VALUES
(8, 10.5, 'taleb chahrazed abir,mahdjoub fatiha', 'RSD', 'routage avec QoS dans les rÃ©seaux ad hoc', 'routage avec QoS dans les rÃ©seaux ad hoc', 'Cryptanalyse par usage des algorithmes genetique', 'Gestion de l', 'routage avec QoS dans les rÃ©seaux ad hoc', ''),
(9, 10, 'moussaoui sara ferdaous', 'SIC', 'Gestion d', 'Cryptanalyse par usage des algorithmes genetique', 'Gestion d', 'MAINTENANCE d un logiciel generateur de site Web.', 'Gestion d', ''),
(11, 12.05, 'larbi fatima zohra', 'GL', '', '', 'MAINTENANCE d un logiciel generateur de site Web.', 'oiugfd', 'lkkfjo', 'Gestion de PFE'),
(12, 13, 'larbi fatima zohra,larbi fatima zohra', 'GL', 'jfudtuf', '', 'jgjgj', 'jgjgj', 'hggf', 'Gestion de PFE');

-- --------------------------------------------------------

--
-- Structure de la table `nbrsujet`
--

CREATE TABLE IF NOT EXISTS `nbrsujet` (
  `nbr` int(11) NOT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `nbrsujet`
--

INSERT INTO `nbrsujet` (`nbr`, `date_d`, `date_f`) VALUES
(3, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `soutenance`
--

CREATE TABLE IF NOT EXISTS `soutenance` (
  `id_sout` int(11) NOT NULL AUTO_INCREMENT,
  `HeureDebut` datetime NOT NULL,
  `HeureFin` datetime NOT NULL,
  `Lieu` varchar(20) NOT NULL,
  `etudiant` varchar(30) NOT NULL,
  `encadreur` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sout`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `soutenance`
--

INSERT INTO `soutenance` (`id_sout`, `HeureDebut`, `HeureFin`, `Lieu`, `etudiant`, `encadreur`) VALUES
(1, '2018-06-08 10:30:00', '2018-06-08 12:00:00', 'salle 105', '', ''),
(2, '2018-07-01 13:00:00', '2018-07-01 14:30:00', 'salle soutenance', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `specialite` varchar(10) NOT NULL,
  `id_spec` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_spec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`specialite`, `id_spec`) VALUES
('GL', 1),
('RSD', 2),
('MID', 3),
('SIC', 4),
('probabilit', 5),
('EDP', 6);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `id_theme` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_ens` int(11) NOT NULL,
  `specialite` varchar(20) CHARACTER SET utf8 NOT NULL,
  `statut` int(11) NOT NULL,
  PRIMARY KEY (`id_theme`),
  UNIQUE KEY `id_theme` (`id_theme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=43 ;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`id_theme`, `intitule`, `id_ens`, `specialite`, `statut`) VALUES
(12, 'Gestion de PFE', 8, 'GL, RSD', 1),
(13, 'Gestion d''emploi du temps', 8, 'GL, SIC', 1),
(14, 'routage avec QoS dans les réseaux ad hoc', 8, 'RSD, MID', 1),
(36, 'Cryptanalyse par usage des algorithmes genetique', 0, 'RSD, SIC', 1),
(37, 'Gestion de l''evolution des ontologies dans les', 0, 'RSD, MID', 1),
(38, 'MAINTENANCE d un logiciel generateur de site Web.', 0, 'GL, SIC', 1),
(39, 'gESTION SERVICE OPITALE', 0, 'GL, RSD', 0),
(41, 'Gestion de lâ€™Ã©volution des ontologies dans les', 0, 'RSD, MID', 1),
(42, 'je sais pas ', 9, 'GL,  SIC', 1);

-- --------------------------------------------------------

--
-- Structure de la table `voeux`
--

CREATE TABLE IF NOT EXISTS `voeux` (
  `id_voeux` int(11) NOT NULL AUTO_INCREMENT,
  `etudiant` varchar(35) NOT NULL,
  `encadreur` varchar(30) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `specialite` varchar(4) NOT NULL,
  `avancement` int(11) NOT NULL,
  `id_ens` int(11) NOT NULL,
  PRIMARY KEY (`id_voeux`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `voeux`
--

INSERT INTO `voeux` (`id_voeux`, `etudiant`, `encadreur`, `theme`, `specialite`, `avancement`, `id_ens`) VALUES
(19, 'larbi fatima zohra,larbi fatima zoh', 'hadjila mohamed', 'Gestion de PFE', 'GL', 100, 8),
(20, 'larbi fatima zohra', 'hadjila mohamed', 'Gestion de PFE', 'GL', 0, 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
