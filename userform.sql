-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 avr. 2022 à 16:00
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `userform`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `com` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `prenom`, `email`, `com`) VALUES
(1, 'gauthier', 'ekani', 'gauthierekani@gmail.com', 'je vi'),
(3, 'loic', 'gauthier', 'fopa@gmail.com', 'je revahwasdsajdsadjsdnsdsadas');

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lundi` text NOT NULL,
  `mardi` text NOT NULL,
  `mercredi` text NOT NULL,
  `jeudi` text NOT NULL,
  `vendredi` text NOT NULL,
  `samedi` text NOT NULL,
  `heure` text NOT NULL,
  `filiere` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `heure`, `filiere`, `nom`) VALUES
(7, 'plan ispa', 'plan bertoua', 'plan cote d ivore', 'plan marche central', 'plan bista', 'plan bertoua', '5:03 PM', 'Economie', 'ivan bouba'),
(8, 'plan ispa', 'plan bertoua', 'plan cote d ivore', 'plan marche central', 'plan bista', 'plan bertoua', '5:03 PM', 'Economie', 'ivan bouba'),
(9, '', '', '', '', '', '', '', 'Igl', ''),
(10, '', '', '', '', '', '', '', 'Igl', ''),
(11, '', '', '', '', '', '', '', 'Igl', '');

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` text NOT NULL,
  `taille` text NOT NULL,
  `numero` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `info`
--

INSERT INTO `info` (`id`, `nom`, `prenom`, `sexe`, `taille`, `numero`, `photo`) VALUES
(1, '', 'ekani', 'Feminin', '', '', '1.PNG'),
(8, 'roger', 'ivan', 'masculin', '20 ans', '(237) 674-843-333', '1.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `meco`
--

DROP TABLE IF EXISTS `meco`;
CREATE TABLE IF NOT EXISTS `meco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `matiere` text NOT NULL,
  `absent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `meco`
--

INSERT INTO `meco` (`id`, `nom`, `prenom`, `matiere`, `absent`) VALUES
(5, 'gauthier', 'ekani', 'igl', 'present'),
(6, 'bouba', 'ivan', 'economie', 'absent'),
(7, '', '', '', ''),
(8, 'bouba', 'ivan', 'economie', 'present'),
(9, 'bouba', 'ivan', 'economie', 'present'),
(10, 'gauthier', 'ivan', 'economie', 'present');

-- --------------------------------------------------------

--
-- Structure de la table `registre`
--

DROP TABLE IF EXISTS `registre`;
CREATE TABLE IF NOT EXISTS `registre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `date` text,
  `note` text NOT NULL,
  `matiere` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `registre`
--

INSERT INTO `registre` (`id`, `nom`, `date`, `note`, `matiere`) VALUES
(1, 'ivan bouba', '04/06/2022 1:22 AM', ' 12/20', 'economie'),
(3, 'hacker x', '04/06/2022 1:22 AM', ' 18/20', 'piratage informatique'),
(4, 'hacker x rouge', '04/01/2022 1:47 AM', ' 20/20', 'reseau'),
(5, 'ekani gauthier', '04/15/2022 12:53 PM', ' 18/20', 'economie');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `telephone` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `sexe` text NOT NULL,
  `document` text NOT NULL,
  `comi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `nom`, `prenom`, `telephone`, `date`, `sexe`, `document`, `comi`) VALUES
(15, 'damaris', 'fopa', '+237 0652489842', '2022-04-06 00:00:00', 'Homme', 'Captu15.PNG', 'Comissariat YD1');

-- --------------------------------------------------------

--
-- Structure de la table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(6, 'inspecteur', 'inspecteur@gmail.com', '$2y$10$eilHXPg/wK4ur/4fkxEXFOxCsnipEYAspPepG2Nlj69wDhNOjTnIS', '0', 'verified'),
(5, 'administrateur', 'admin@gmail.com', '$2y$10$F9rFERdPUNGd1ZzHZ/t6QeAubRMdx5uTH4idg.DjymhXWj2VT5ODe', '0', 'verified'),
(4, 'visit the contry', 'gauthierekani@gmail.com', '$2y$10$0P36lzVdELSQxVbgvSXoY.HR2T.51KCgDzZLPvLnxyXZt03vqwudm', '522052', 'notverified');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
