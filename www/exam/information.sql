-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 31 mars 2024 à 13:37
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exam`
--

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` text NOT NULL,
  `PRENOM` text NOT NULL,
  `SEXE` varchar(100) NOT NULL,
  `LOISIRS` varchar(200) NOT NULL,
  `VILLE` varchar(100) NOT NULL,
  `CONTACT` varchar(10) NOT NULL,
  `STATUE` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`Id`, `NOM`, `PRENOM`, `SEXE`, `LOISIRS`, `VILLE`, `CONTACT`, `STATUE`) VALUES
(53, 'Mario', 'Carlos', 'Femme', 'Basketball,Handball', 'bambao', '234354', 'En couple'),
(57, 'Dania', 'mamisoa', 'Femme', 'Football,Golf', 'Nosy be', '088877', 'Marie'),
(56, 'Ando', 'Mahery', 'Homme', 'Football,Running', 'fianarantsoa', '903647', 'En couple'),
(46, 'madio', 'tsara', 'Femme', 'Football,Basketball,Running', 'Mahajanga', '765876', 'Celibataire');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
