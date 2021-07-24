-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2021 at 11:59 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_enseignement`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `ID_CLASS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ETABLISS` int(11) NOT NULL,
  `NOM_CLASS` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID_CLASS`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`ID_CLASS`, `ID_ETABLISS`, `NOM_CLASS`) VALUES
(1, 1, 'CSJM'),
(2, 1, '4ème'),
(3, 1, '5ème'),
(4, 2, 'Tle D'),
(5, 2, '6ème'),
(6, 2, '1ère'),
(7, 2, '6ème'),
(8, 3, 'Tle A'),
(9, 3, '6ème'),
(10, 4, '1ère A'),
(11, 4, '3ème'),
(12, 5, '3ème'),
(13, 5, '2nd C'),
(14, 6, '4ème'),
(15, 6, '2nd A'),
(16, 7, 'Tle A'),
(17, 7, '1ère C'),
(18, 8, 'Tle D'),
(19, 8, '1ère D'),
(20, 8, '4ème'),
(21, 8, '6ème'),
(22, 9, '3ème'),
(23, 9, '6ème');

-- --------------------------------------------------------

--
-- Table structure for table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `Id_eleve` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Classe` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(75) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_eleve`),
  UNIQUE KEY `Id_Classe` (`Id_Classe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `ID_ETABLISS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_VILLE` int(11) NOT NULL,
  `Address_Etablissement` varchar(100) NOT NULL,
  `Type_Etablissement` varchar(100) NOT NULL,
  `NOM_ETABLISS` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_ETABLISS`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etablissement`
--

INSERT INTO `etablissement` (`ID_ETABLISS`, `ID_VILLE`, `Address_Etablissement`, `Type_Etablissement`, `NOM_ETABLISS`) VALUES
(1, 1, 'mouk002', 'Privee', 'College Saint Joseph Moukassa'),
(2, 1, 'procial002', 'Publique', 'Lycee Provincial'),
(3, 1, 'shorgel002', 'Privee', 'Lycee Shorgel'),
(4, 2, 'venegre003', 'Publique', 'Venegre'),
(5, 2, 'philippe003', 'Publique', 'Lycee Philippe Zinda'),
(6, 3, 'lumiere003', 'prive', 'COLLEGE PRIVE LUMIERE'),
(7, 3, 'savane003', 'prive', 'LYCEE PRIVE DE LA SAVANE'),
(8, 3, 'basame003', 'prive', 'SCOLLEGE PRIVE BASNERE'),
(9, 3, 'conviction003', 'prive', 'COLLEGE PRIVE LA CONVICTION ');

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `Id_Inscription` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Postulation` int(11) NOT NULL,
  `Id_Classe` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Date_Inscription` datetime NOT NULL,
  PRIMARY KEY (`Id_Inscription`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `Nom_eleve` varchar(120) NOT NULL,
  `Classe` varchar(10) NOT NULL,
  `Transe` varchar(50) NOT NULL,
  `Moyen` varchar(25) NOT NULL,
  `Montant` varchar(100) NOT NULL,
  `Numero` varchar(50) NOT NULL,
  `Code` varchar(150) NOT NULL,
  `Statusp` varchar(20) NOT NULL,
  `Details` varchar(150) NOT NULL,
  `Datep` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `postulation`
--

DROP TABLE IF EXISTS `postulation`;
CREATE TABLE IF NOT EXISTS `postulation` (
  `ID_POST` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLASS` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Date_de_naissance` date NOT NULL,
  `genre` varchar(20) NOT NULL,
  `CNIB` varchar(100) NOT NULL,
  `Date_validite` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `Parent` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `JOUR_POST` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_POST`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postulation`
--

INSERT INTO `postulation` (`ID_POST`, `ID_CLASS`, `Nom`, `Prenom`, `Date_de_naissance`, `genre`, `CNIB`, `Date_validite`, `email`, `telephone`, `Parent`, `Phone`, `JOUR_POST`) VALUES
(1, 11, 'ZORMA', 'Muriellle', '2021-06-29', 'M', 'B1208562336', '2021-07-28', 'mzorma@gmail.com', '75414241', 'ZORMA David', '70120230', NULL),
(2, 10, 'ZORMA', 'Muriellle', '2021-07-14', 'F', 'B1208562330', '2021-07-28', 'mzo0rma@gmail.com', '75414241', 'ZORMA Paul', '70120230', '2021-07-19 00:00:00'),
(3, 10, 'ZORMA', 'Muriellle', '2021-07-14', 'F', 'B1208562330', '2021-07-28', 'mzo0rma@gmail.com', '75414241', 'ZORMA Paul', '70120230', '2021-07-19 00:00:00'),
(4, 10, 'ZORMA', 'Simeon', '2021-07-14', 'M', 'B120856233012', '2021-07-28', 'mzoohrma@gmail.com', '75414241', 'ZORMA Paul', '70120230', '2021-07-19 00:00:00'),
(5, 23, 'ZOUNGRANA ', 'Simeon', '2021-06-30', 'M', 'B1208562330', '2021-07-24', 'mzoohrma@gmail.com', '52454225', 'ZOUNGRANA  Paul', '70124120', '2021-07-19 00:00:00'),
(6, 4, 'ZONGO', 'Wendyam ALICE', '2020-11-12', 'F', '', '2022-06-08', 'aliorma@gmail.com', '55414241', 'ZORMA Paul', '02120230', '2021-07-19 00:00:00'),
(7, 4, 'ZONGO', 'Wendyam ALICE', '2020-11-12', 'F', '', '2022-06-08', 'aliorma@gmail.com', '55414241', 'ZORMA Paul', '02120230', '2021-07-19 00:00:00'),
(8, 4, 'ZONGO', 'Wendyam ALICE', '2020-11-12', 'F', '', '2022-06-08', 'aliorma@gmail.com', '55414241', 'ZORMA Paul', '02120230', '2021-07-19 00:00:00'),
(9, 4, 'ZONGO', 'Wendyam ALICE', '2020-11-12', 'F', '', '2022-06-08', 'aliorma@gmail.com', '55414241', 'ZORMA Paul', '02120230', '2021-07-19 00:00:00'),
(10, 4, 'ZONGO', 'Wendyam ALICE', '2020-11-12', 'F', '', '2022-06-08', 'aliorma@gmail.com', '55414241', 'ZORMA Paul', '02120230', '2021-07-19 00:00:00'),
(11, 21, 'NANA', 'Maria', '1958-11-11', 'M', 'B12085600', '2020-11-11', 'sam@gmail.com', '75414241', 'ZONGO Salif', '70120230', '2021-07-21 15:06:54'),
(12, 21, 'NANA', 'Maria', '1958-11-11', 'M', 'B12085600', '2020-11-11', 'sam@gmail.com', '75414241', 'ZONGO Salif', '70120230', '2021-07-21 15:45:29'),
(13, 15, 'SANOU', 'Biba', '2010-12-27', 'F', 'B0006233', '2022-09-22', 'bib@gmail.com', '75414241', 'SANOU  Pauline', '70120230', '2021-07-21 15:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_etabliss`
--

DROP TABLE IF EXISTS `user_etabliss`;
CREATE TABLE IF NOT EXISTS `user_etabliss` (
  `Identifiant` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Numero` varchar(100) NOT NULL,
  `CNIB` varchar(100) NOT NULL,
  `Passwords` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_etabliss`
--

INSERT INTO `user_etabliss` (`Identifiant`, `Email`, `Numero`, `CNIB`, `Passwords`) VALUES
('LPK002', 'lpk@gmail.com', '77575076', 'B20002155', 'lpk'),
('Sorgel102', 'wsorgel@gmail.com', '75874576', 'B202155', 'fe2d010308a6b3799a3d9c728ee74244');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Nom_dutilisateur` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`Nom_dutilisateur`, `email`, `Password`) VALUES
('nana', 'nana@gmail.com', '2e80446e191da0adddf6dbe255d7479f'),
('Zongo', 'wzongo@gmail.com', '42e898cc713dc3b4404910f8afbd108b'),
('Sanou', 'sanou@gmail.com', '3a77510ae87677daf8682ecb8be4f04d'),
('ZOMA', 'wrodrigue@gmail.com', 'a9f788c22872de14b278aa0b903ec5df'),
('ZONGO', 'wszongo@gmail.com', '42e898cc713dc3b4404910f8afbd108b'),
('UOEDRAOGO', 'assamigo@gmail.com', '99f16d388736f651ac198bf317974481'),
('admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `ID_VILLE` int(11) NOT NULL AUTO_INCREMENT,
  `Address_VILLE` varchar(50) NOT NULL,
  `NOM_VILLE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_VILLE`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`ID_VILLE`, `Address_VILLE`, `NOM_VILLE`) VALUES
(1, 'kdg00001', 'KOUDOUGOU'),
(2, 'ouaga00001', 'Ouagadougou'),
(3, 'bobo00001', 'BOBO_DIOULASSO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
