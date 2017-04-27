-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
-- author : SpaceTeam
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Avril 2017 à 22:34
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--
CREATE DATABASE IF NOT EXISTS `bdd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdd`;

-- --------------------------------------------------------

--
-- Structure de la table `documentation`
--

CREATE TABLE `documentation` (
  `id_documentation` int(10) NOT NULL,
  `id_cat` int(1) DEFAULT NULL,
  `nom` varchar(40) NOT NULL,
  `taille` int(5) NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `documentation`
--

INSERT INTO `documentation` (`id_documentation`, `id_cat`, `nom`,`taille`, `date_enregistrement`) VALUES
(1, 2, `Exemple_doc.pdf`, 642, '1992-07-10 14:44:46');

-- --------------------------------------------------------

--
-- Structure de la table `logiciels`
--

CREATE TABLE `logiciels` (
  `id_logiciels` int(3) NOT NULL,
  `id_cat` int(1) DEFAULT NULL,
  `nom` varchar(40) NOT NULL,
  `taille` int(5) NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logiciels`
--

INSERT INTO `logiciels` (`id_logiciels`, `id_cat`, `nom`, `taille`, `date_enregistrement`) VALUES
(1, 2, `exemple_log.exe`, 1145, '1992-07-10 18:48:42');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
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
  `statut` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `tel`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(1, 'juju', 'soleil', 'Cottet', 'Julien', 'julien.cottet@gmail.com', 061122339900, 'm', 'Marseille', 13010, '300 rue de la chance', 1);

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel`(
'id_materiel' int(3) NOT NULL,
'id_membre' int(3) NOT NULL,
`id_cat`int(1) NOT NULL,
`nom` varchar(40) NOT NULL,
`number`varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel`(`id_materiel`, `id_membre`, 'id_cat', `nom`, `number`) VALUES
(3, 1, 2, '1060 6Go', 'M0148');
