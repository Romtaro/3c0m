-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8000
-- Generation Time: May 02, 2017 at 09:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdd`
--
CREATE DATABASE IF NOT EXISTS `bdd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
  USE `bdd`;

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `id_documentation` int(10) NOT NULL,
  `id_cat` int(1) DEFAULT NULL,
  `nom` varchar(40) NOT NULL,
  `taille` int(5) NOT NULL,
  `date_enregistrement` date NOT NULL,
  PRIMARY KEY (`id_documentation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`id_documentation`, `id_cat`, `nom`, `taille`, `date_enregistrement`) VALUES
(1, 2, 'Exemple-document.pdf', 642, '1992-07-10'),
(2, 2, 'Exemple-document.pdf', 355, '1992-07-10'),
(3, 2, 'Exemple-document.pdf', 585, '1992-07-10'),
(4, 1, 'Exemple-document.pdf', 157, '1992-07-10'),
(5, 1, 'Exemple-document.pdf', 963, '1992-07-10'),
(6, 3, 'Exemple-document.pdf', 453, '1992-07-10'),
(7, 4, 'Exemple-document.pdf', 256, '1992-07-10'),
(10, 1, 'Exemple-document.pdf', 19, '1992-07-10'),
(11, 1, 'Exemple-document.pdf', 486, '1992-07-10'),
(12, 1, 'Exemple-document.docx', 742, '1992-07-10'),
(13, 1, 'Exemple-document.docx', 84, '1992-07-10'),
(14, 1, 'Exemple-document.docx', 47, '1992-07-10'),
(15, 1, 'Exemple-document.docx', 2, '1992-07-10'),
(16, 1, 'Exemple-document.docx', 1865, '1992-07-10'),
(17, 1, 'Exemple-document.docx', 3548, '1992-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `logiciels`
--

CREATE TABLE `logiciels` (
  `id_logiciels` int(3) NOT NULL,
  `id_cat` int(1) DEFAULT NULL,
  `nom` varchar(40) NOT NULL,
  `taille` int(5) NOT NULL,
  `date_enregistrement` date NOT NULL,
  PRIMARY KEY (`id_logiciels`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logiciels`
--

INSERT INTO `logiciels` (`id_logiciels`, `id_cat`, `nom`, `taille`, `date_enregistrement`) VALUES
(1, 2, 'exemple-logiciel.exe', 1145, '1992-07-10'),
(2, 1, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(3, 1, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(4, 3, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(5, 1, 'exemple-logiciel.exe', 7846, '1999-05-14'),
(6, 1, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(7, 3, 'exemple-logiciel.exe', 7921, '2017-05-15'),
(8, 2, 'exemple-logiciel.exe', 1145, '1992-07-10'),
(9, 1, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(10, 1, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(11, 1, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(12, 3, 'exemple-logiciel.exe', 7846, '1999-05-14'),
(13, 3, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(14, 3, 'exemple-logiciel.exe', 7921, '2017-05-15'),
(15, 2, 'exemple-logiciel.exe', 1145, '1992-07-10'),
(16, 1, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(17, 1, 'exemple-logiciel.exe', 2897, '2017-05-14'),
(18, 1, 'exemple-logiciel.exe', 2897, '2017-05-14');


-- --------------------------------------------------------

--
-- Table structure for table `materiel`
--

CREATE TABLE `materiel` (
  `id_materiel` int(3) NOT NULL,
  `id_membre` int(3) NOT NULL,
  `id_cat` int(1) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `number` varchar(20) NOT NULL,
  PRIMARY KEY (`id_materiel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `id_membre`, `id_cat`, `nom`, `number`) VALUES
(3, 1, 2, '1060 6Go', 'M0148');

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(10) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` int(1) NOT NULL DEFAULT '0',
  `is_active` varchar(100) DEFAULT 'ROLE_USER',
  `salt` text,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `tel`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`, `is_active`, `salt`) VALUES
(1, 'juju', 'soleil', 'Cottet', 'Julien', 'julien.cottet@gmail.com', 2147483647, 'm', 'Marseille', 13010, '300 rue de la chance', 0, 'ROLE_USER', 'v1-s@lt'),
(2, 'admin', 'admin', 'ad', 'min', 'admin@gmail.com', 610672054, 'm', 'Aix', 13100, '2 rue le corbusier', 1, 'ROLE_ADMIN', 'v1-s@lt');



--
-- AUTO_INCREMENT for table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
