-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 15 juin 2021 à 17:40
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
-- Base de données : `abbank`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

DROP TABLE IF EXISTS `agence`;
CREATE TABLE IF NOT EXISTS `agence` (
  `idAgence` int(100) NOT NULL AUTO_INCREMENT,
  `nomAgence` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateCreation` datetime NOT NULL,
  PRIMARY KEY (`idAgence`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `idAgent` int(11) NOT NULL AUTO_INCREMENT,
  `idAgence` int(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` text NOT NULL,
  `telephone` int(100) NOT NULL,
  `naissance` date NOT NULL,
  `dateCreation` datetime NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `grade` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAgent`),
  KEY `fk_agence_agent` (`idAgence`)
) ENGINE=MyISAM AUTO_INCREMENT=463 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `adresse` text,
  `telephone` int(100) DEFAULT NULL,
  `email` text,
  `naissance` date DEFAULT NULL,
  `dateCreation` datetime NOT NULL,
  `cni` int(100) DEFAULT NULL,
  `sexe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=266 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `naissance`, `dateCreation`, `cni`, `sexe`) VALUES
(265, 'h', 'jj', '412', 4545, 'sunnygkp10@gmail.com', '0045-05-04', '2021-06-15 13:17:17', 454, 'Homme'),
(264, 'uyuh', 'uuy', '85g', 75745, 'sunnygkp10@gmail.com', '0075-12-04', '2021-06-15 13:03:15', 5785, 'Homme'),
(263, 'vucer', 'jhjhjh', '45ghgh', 5445, '4454545@gmail.com', '2021-07-03', '2021-06-15 13:01:19', 4545, 'Homme'),
(262, 'sene', 'victor', 'kolda', 789002233, 'victor@gam.com', '1995-05-04', '2021-06-15 13:00:34', 147114712, 'Homme'),
(261, 'sene', 'victor', 'kolda', 789002233, 'victor@gam.com', '1995-05-04', '2021-06-15 13:00:24', 147114712, 'Homme'),
(260, 'sene', 'victor', 'kolda', 789002233, 'victor@gam.com', '1995-05-04', '2021-06-15 12:59:21', 147114712, 'Homme');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `idCompte` int(100) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) DEFAULT NULL,
  `numCompte` varchar(255) DEFAULT NULL,
  `solde` int(100) DEFAULT NULL,
  `typeCompte` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCompte`),
  KEY `fk_client_compte` (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `idClient`, `numCompte`, `solde`, `typeCompte`) VALUES
(40, 265, '62828989624810', 447, 'Epargne');

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

DROP TABLE IF EXISTS `operation`;
CREATE TABLE IF NOT EXISTS `operation` (
  `idOperation` int(100) NOT NULL AUTO_INCREMENT,
  `numCompte` varchar(50) NOT NULL,
  `typeOperation` text,
  `montantOperation` int(100) DEFAULT NULL,
  `soldeAvant` int(100) DEFAULT NULL,
  `soldeApres` int(100) DEFAULT NULL,
  `compteDestinataire` text,
  `dateOperation` datetime DEFAULT NULL,
  `idAgent` int(100) DEFAULT NULL,
  PRIMARY KEY (`idOperation`),
  KEY `fk_agent_operation` (`idAgent`),
  KEY `fk_compte_operation` (`numCompte`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`idOperation`, `numCompte`, `typeOperation`, `montantOperation`, `soldeAvant`, `soldeApres`, `compteDestinataire`, `dateOperation`, `idAgent`) VALUES
(7, '62828989624810', 'retrait', 1000, 251000, 1000, '123456789', '2021-06-24 17:22:54', 60);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(100) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `idAgent` int(100) DEFAULT NULL,
  `idClient` int(100) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `fk_agent_user` (`idAgent`),
  KEY `fk_client_user` (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
