-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 avr. 2022 à 15:58
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
-- Base de données : `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `essaie`
--

DROP TABLE IF EXISTS `essaie`;
CREATE TABLE IF NOT EXISTS `essaie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(12) NOT NULL,
  `surnom` varchar(30) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1158473284, 603541449, 'ao per'),
(2, 603541449, 1362681403, 'ao'),
(3, 1362681403, 603541449, 'yo'),
(4, 1362681403, 603541449, 'YES'),
(5, 1362681403, 603541449, 'maf'),
(6, 1362681403, 603541449, 'jhesfkghfjgrgre'),
(7, 1158473284, 603541449, 'ao'),
(8, 1362681403, 603541449, 'lolo'),
(9, 1362681403, 603541449, 'FGH'),
(10, 1362681403, 603541449, 'Yo '),
(11, 1158473284, 603541449, 'yo'),
(12, 1362681403, 603541449, 'sqsqas'),
(13, 1362681403, 603541449, 'sqsqsqs');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 603541449, 'ekani', 'gauthier', 'gauthierekani@gmail.com', '89dae41c0d705ceb55aa778e27033d7b', '1641317901IMG-20220102-WA0001.jpg', 'or connexion'),
(2, 1158473284, 'jean', 'blaise', 'gauthierekani9@gmail.com', '89dae41c0d705ceb55aa778e27033d7b', '1641327043IMG-20220101-WA0004.jpg', 'or connexion'),
(3, 1362681403, 'song', 'bipa', 'gauthierekani2@gmail.com', 'fc8baa6879e639926be3916810962e13', '1641978116IMG-20220101-WA0004.jpg', 'en ligne');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
