-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 mars 2021 à 17:04
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_enseignement`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `ID_CLASS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ETABLISS` int(11) NOT NULL,
  `NOM_CLASS` varchar(50) DEFAULT NULL,
  `TYPE_CLASS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_CLASS`),
  KEY `FK_CONTENIR` (`ID_ETABLISS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `ID_ELEV` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_ELEV` varchar(40) DEFAULT NULL,
  `PRENOM_ELEV` varchar(50) DEFAULT NULL,
  `SEXE` char(10) DEFAULT NULL,
  `CNIB_ELEV` varchar(25) DEFAULT NULL,
  `CLASSE_ELEV` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_ELEV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `ID_ETABLISS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_VILLE` int(11) NOT NULL,
  `MATRICULE_ETABLISS` varchar(50) DEFAULT NULL,
  `NOM_ETABLISS` varchar(100) DEFAULT NULL,
  `TYPE_ETABLISSEMENT` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_ETABLISS`),
  KEY `FK_ASSOCIATION_8` (`ID_VILLE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `ID_INSCRIP` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ETABLISS` int(11) NOT NULL,
  `ID_POST` int(11) NOT NULL,
  `MATRICULE_ELEV` varchar(20) DEFAULT NULL,
  `NOM_ELEV` varchar(40) DEFAULT NULL,
  `PRENOM_ELEV` varchar(50) DEFAULT NULL,
  `SEXE` char(10) DEFAULT NULL,
  `CNIB_ELEV` varchar(25) DEFAULT NULL,
  `CLASSE_ELEV` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_INSCRIP`),
  KEY `FK_ASSOCIATION_11` (`ID_ETABLISS`),
  KEY `FK_ASSOCIATION_12` (`ID_POST`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

DROP TABLE IF EXISTS `lien`;
CREATE TABLE IF NOT EXISTS `lien` (
  `ID_LIEN` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_LIEN` text NOT NULL,
  `COMPTE` varchar(100) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `DROIT` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_LIEN`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lien`
--

INSERT INTO `lien` (`ID_LIEN`, `CODE_LIEN`, `COMPTE`, `TYPE`, `DROIT`) VALUES
(1, '7c222fb2927d828af22f592134e8932480637c0d', 'ETABLISSEMENT_PRIMAIRE', 'CONNEXION', 'PRINCIPAL'),
(2, '7c222fb2927d828af22f592134e8932480637c0d', 'ETABLISSEMENT_SECONDAIRE', 'CONNEXION', 'PRINCIPAL'),
(3, '7c222fb2927d828af22f592134e8932480637c0d', 'ETABLISSEMENT_PRIMAIRE', 'INSCRIPTION', 'PRINCIPAL'),
(4, '7c222fb2927d828af22f592134e8932480637c0d', 'ETABLISSEMENT_SECONDAIRE', 'INSCRIPTION', 'PRINCIPAL');

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

DROP TABLE IF EXISTS `payement`;
CREATE TABLE IF NOT EXISTS `payement` (
  `ID_PAY` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SCOLARITE` int(11) NOT NULL,
  `MONTANT_VERSER` int(11) DEFAULT NULL,
  `DATE_PAYEMENT` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_PAY`),
  KEY `FK_ASSOCIATION_9` (`ID_SCOLARITE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `postulation`
--

DROP TABLE IF EXISTS `postulation`;
CREATE TABLE IF NOT EXISTS `postulation` (
  `ID_POST` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLASS` int(11) NOT NULL,
  `ID_ELEV` int(11) NOT NULL,
  `JOUR_POST` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_POST`),
  KEY `FK_ASSOCIATION_7` (`ID_ELEV`),
  KEY `FK_NOMBRE_INSCRIPTION` (`ID_CLASS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `scolarite`
--

DROP TABLE IF EXISTS `scolarite`;
CREATE TABLE IF NOT EXISTS `scolarite` (
  `ID_SCOLARITE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_INSCRIP` int(11) NOT NULL,
  `MONTANT_TOTAL` varchar(100) DEFAULT NULL,
  `PAYER` int(11) DEFAULT NULL,
  `RESTANT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_SCOLARITE`),
  KEY `FK_ASSOCIATION_10` (`ID_INSCRIP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_DIREC` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ETABLISS` int(11) NOT NULL,
  `MATRICULE_DIREC` varchar(50) DEFAULT NULL,
  `NOM_DIREC` varchar(45) DEFAULT NULL,
  `PRENOM_DIREC` varchar(50) DEFAULT NULL,
  `CNIB_DIREC` varchar(100) DEFAULT NULL,
  `POSTE_OCCUP` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_DIREC`),
  KEY `FK_AVOIR` (`ID_ETABLISS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `ID_VILLE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_VILLE` varchar(100) DEFAULT NULL,
  `ADRESSE_VILLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_VILLE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
