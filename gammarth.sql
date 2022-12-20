-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 03 déc. 2022 à 23:14
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gammarth`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Cin` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`Cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Cin`, `username`, `email`, `password`) VALUES
(0, '', '', 'aa4'),
(11111111, '', '', '7777'),
(12121212, 'sou', 'sou@gmail.com', 'aaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `bienimm`
--

DROP TABLE IF EXISTS `bienimm`;
CREATE TABLE IF NOT EXISTS `bienimm` (
  `Matricule` int(8) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Localisation` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(100) NOT NULL,
  `superficie` float NOT NULL,
  `dateachat` date NOT NULL,
  `Etat` varchar(30) NOT NULL,
  PRIMARY KEY (`Matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bienimm`
--

INSERT INTO `bienimm` (`Matricule`, `Titre`, `Localisation`, `prix`, `description`, `superficie`, `dateachat`, `Etat`) VALUES
(12345678, 'villa jasmin', 'la marsa', 12345600, 'une superbe villa de 500m2 situÃ©e Ã  la marsa ', 500, '2022-02-05', '');

-- --------------------------------------------------------

--
-- Structure de la table `chefcomm`
--

DROP TABLE IF EXISTS `chefcomm`;
CREATE TABLE IF NOT EXISTS `chefcomm` (
  `Cin` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chefcomm`
--

INSERT INTO `chefcomm` (`Cin`, `username`, `email`, `Password`) VALUES
(12012012, 'ahmed', 'ahmed@gmail.com', 'ahmed');

-- --------------------------------------------------------

--
-- Structure de la table `commerciale`
--

DROP TABLE IF EXISTS `commerciale`;
CREATE TABLE IF NOT EXISTS `commerciale` (
  `Cin` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`Cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commerciale`
--

INSERT INTO `commerciale` (`Cin`, `username`, `email`, `password`) VALUES
(14141414, 'sou', 'sou@gmail.com', 'sou');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Cin` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  PRIMARY KEY (`Cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `Matricule` int(8) NOT NULL,
  `datevente` date NOT NULL,
  `prixvente` float NOT NULL,
  `nomproprietaire` varchar(40) NOT NULL,
  PRIMARY KEY (`Matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`Matricule`, `datevente`, `prixvente`, `nomproprietaire`) VALUES
(12345678, '2022-08-31', 2235250, 'MR. Ahmed Wesleti');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
