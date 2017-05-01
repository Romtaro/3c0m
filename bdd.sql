-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 01 Mai 2017 à 18:00
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

-- --------------------------------------------------------

--
-- Structure de la table `documentation`
--

CREATE TABLE `documentation` (
  `id_documentation` int(10) NOT NULL,
  `id_cat` int(1) DEFAULT NULL,
  `nom` varchar(40) NOT NULL,
  `taille` int(5) NOT NULL,
  `date_enregistrement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `documentation`
--

INSERT INTO `documentation` (`id_documentation`, `id_cat`, `nom`, `taille`, `date_enregistrement`) VALUES
(1, 2, 'Exemple_doc.pdf', 642, '1992-07-10'),
(2, 2, 'Exemple_doc02.pdf', 355, '1992-07-10'),
(3, 2, 'Exemple_doc03.pdf', 585, '1992-07-10'),
(4, 1, 'Exemple_doc2525.pdf', 157, '1992-07-10'),
(5, 1, 'Exemple_doc2555525.pdf', 963, '1992-07-10'),
(6, 3, 'Exemple_doc445525.pdf', 453, '1992-07-10'),
(7, 4, 'Exemple_doc455525.pdf', 256, '1992-07-10');

-- --------------------------------------------------------

--
-- Structure de la table `logiciels`
--

CREATE TABLE `logiciels` (
  `id_logiciels` int(3) NOT NULL,
  `id_cat` int(1) DEFAULT NULL,
  `nom` varchar(40) NOT NULL,
  `taille` int(5) NOT NULL,
  `date_enregistrement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logiciels`
--

INSERT INTO `logiciels` (`id_logiciels`, `id_cat`, `nom`, `taille`, `date_enregistrement`) VALUES
(1, 2, 'exemple_log.exe', 1145, '1992-07-10');

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `id_materiel` int(3) NOT NULL,
  `id_membre` int(3) NOT NULL,
  `id_cat` int(1) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `id_membre`, `id_cat`, `nom`, `number`) VALUES
(3, 1, 2, '1060 6Go', 'M0148');

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
  `statut` int(1) NOT NULL DEFAULT '0',
  `is_active` varchar(100) DEFAULT 'ROLE_USER',
  `salt` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `tel`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`, `is_active`, `salt`) VALUES
(1, 'juju', 'soleil', 'Cottet', 'Julien', 'julien.cottet@gmail.com', 2147483647, 'm', 'Marseille', 13010, '300 rue de la chance', 0, 'ROLE_USER', 'v1-s@lt'),
(2, 'admin', 'admin', 'ad', 'min', 'admin@gmail.com', 610672054, 'm', 'Aix', 13100, '2 rue le corbusier', 1, 'ROLE_ADMIN', 'v1-s@lt');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`id_documentation`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`id_materiel`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
