-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 24 Mars 2017 à 11:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `demande_bourse` enum('oui','non') NOT NULL,
  `demande_bourse_accordee` enum('oui','non') NOT NULL,
  `derniere_ecole_frequentee_enseignement_superieure` varchar(255) NOT NULL,
  `filiere_suivie` varchar(255) NOT NULL,
  `diplome_obtenu_annee_validees` varchar(255) NOT NULL,
  `demande_autre_iut_autre_departement` enum('oui','non') NOT NULL,
  `specialite_etablissement_1` varchar(255) NOT NULL,
  `specialite_etablissement_2` varchar(255) NOT NULL,
  `specialite_etablissement_3` varchar(255) NOT NULL,
  `connaissance_formation` set('lycee','salon','ancien_etudiant_iut','press','internet','autre(s)') NOT NULL,
  `etat_dossier` enum('En liste complementaire','Accepte','Refuse','En attente de reponse','Non confirme') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `numero_securite_sociale`, `situation_familiale`, `nombre_enfants`, `date_naissance`, `lieu_naissance`, `departement`, `pays`, `nationalite`, `adresse_famille`, `adresse_annee_en_cours`, `telephone_personnel`, `telephone_portable`, `email`, `annee_bac`, `serie_bac`, `dernier_etablissement_secondaire_frequente`, `demande_bourse`, `demande_bourse_accordee`, `derniere_ecole_frequentee_enseignement_superieure`, `filiere_suivie`, `diplome_obtenu_annee_validees`, `demande_autre_iut_autre_departement`, `specialite_etablissement_1`, `specialite_etablissement_2`, `specialite_etablissement_3`, `connaissance_formation`, `etat_dossier`) VALUES
(1, 'Dias', 'Yann', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'En liste complementaire'),
(2, 'Dias', 'Yann', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@club-internet.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'Non confirme'),
(3, 'Dias', 'Loic', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'En liste complementaire'),
(4, 'Nagel', 'Emile', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'Refuse'),
(5, 'Dias', 'Yann', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'Non confirme'),
(6, 'Dias', 'Yann', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'Accepte'),
(7, 'Dias', 'Yann', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'Refuse'),
(8, 'Dias', 'Yann', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'En liste complementaire'),
(9, 'Nagel', 'Emile', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'Refuse'),
(10, 'Dias', 'Yann', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'En liste complementaire'),
(11, 'Dias', 'Loic', 12356487, 'celibataire', '3', '1991-07-05', 'montmorency', 'idf', 'france', 'francais', '4 allée de provence 95600 eaubonne', '4 allée de provence 95600 eaubonne..', 123456789, 987654321, 'yanndias@live.fr', 2012, 'S', 'JJR montmorency', 'oui', 'oui', 'IUT paris 13', 'dut informatique', 'dut informatique', 'oui', '', '', '', '', 'En liste complementaire');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
