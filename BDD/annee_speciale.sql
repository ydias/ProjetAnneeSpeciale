-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mer 29 Mars 2017 à 14:58
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `annee_speciale`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` char(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` char(60) NOT NULL,
  `actif` enum('identifie','non identifie') NOT NULL,
  `numero_securite_sociale` char(13) NOT NULL,
  `situation_familiale` enum('marie','celibataire') NOT NULL,
  `nombre_enfants` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `adresse_famille` varchar(255) NOT NULL,
  `adresse_annee_en_cours` varchar(255) NOT NULL,
  `telephone_personnel` varchar(20) NOT NULL,
  `telephone_portable` varchar(20) NOT NULL,
  `annee_bac` year(4) NOT NULL,
  `serie_bac` varchar(255) NOT NULL,
  `dernier_etablissement_secondaire_frequente_nom` varchar(255) NOT NULL,
  `dernier_etablissement_secondaire_frequente_ville` varchar(255) NOT NULL,
  `demande_bourse` enum('oui','non') NOT NULL,
  `demande_bourse_accordee` enum('oui','non') NOT NULL,
  `derniere_ecole_frequentee_ens_sup_nom` varchar(255) NOT NULL,
  `derniere_ecole_frequentee_ens_sup_ville` varchar(255) NOT NULL,
  `filiere_suivie` varchar(255) NOT NULL,
  `diplome_obtenu_annee_validees` varchar(255) NOT NULL,
  `demande_autre_iut_autre_departement` enum('oui','non') NOT NULL,
  `nom_etablissement_1` varchar(255) NOT NULL,
  `specialite_etablissement_1` varchar(255) NOT NULL,
  `nom_etablissement_2` varchar(255) NOT NULL,
  `specialite_etablissement_2` varchar(255) NOT NULL,
  `nom_etablissement_3` varchar(255) NOT NULL,
  `specialite_etablissement_3` varchar(255) NOT NULL,
  `connaissance_formation` enum('lycee','salon','ancien_etudiant_iut','presse','internet','autre') NOT NULL,
  `connaissance_formation_autre` varchar(1000) NOT NULL,
  `etat_dossier` enum('En liste complementaire','Accepte','Refuse','En attente de reponse','Non confirme') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique`
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
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nom`,`prenom`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`nom`,`prenom`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
