-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 10:15 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annee_speciale`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` char(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `numero_securite_sociale` int(11) NOT NULL,
  `situation_familiale` enum('marie','celibataire') NOT NULL,
  `nombre_enfants` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `departement` varchar(2552) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `adresse_famille` varchar(255) NOT NULL,
  `adresse_annee_en_cours` varchar(255) NOT NULL,
  `telephone_personnel` int(11) NOT NULL,
  `telephone_portable` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `annee_bac` int(11) NOT NULL,
  `serie_bac` varchar(255) NOT NULL,
  `dernier_etablissement_secondaire_frequente` varchar(255) NOT NULL,
  `demande_bourse` tinyint(4) NOT NULL,
  `demande_bourse_accordee` tinyint(4) NOT NULL,
  `derniere_ecole_frequentee_enseignement_superieure` varchar(255) NOT NULL,
  `filiere_suivie` varchar(255) NOT NULL,
  `diplome_obtenu_annee_validees` varchar(255) NOT NULL,
  `demande_autre_iut_autre_departement` tinyint(4) NOT NULL,
  `specialite_etablissement_1` varchar(255) NOT NULL,
  `specialite_etablissement_2` varchar(255) NOT NULL,
  `specialite_etablissement_3` int(255) NOT NULL,
  `connaissance_formation` set('lycee','salon','ancien_etudiant_iut','press','internet','autre(s)') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant_enregistre`
--

CREATE TABLE `etudiant_enregistre` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` char(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `nom_admin` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `nom_etudiant` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiant_enregistre`
--
ALTER TABLE `etudiant_enregistre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `etudiant_enregistre`
--
ALTER TABLE `etudiant_enregistre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
