-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Janvier 2017 à 06:06
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `builders`
--

-- --------------------------------------------------------

--
-- Structure de la table `a_la_une`
--

CREATE TABLE IF NOT EXISTS `a_la_une` (
  `id_a_la_une` int(11) NOT NULL AUTO_INCREMENT COMMENT 'clé primaire',
  `sujet_a_la_une` varchar(255) NOT NULL COMMENT 'sujet de debat',
  `date_publication` date NOT NULL COMMENT 'date a laquelle est publié l''information',
  PRIMARY KEY (`id_a_la_une`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `a_la_une`
--

INSERT INTO `a_la_une` (`id_a_la_une`, `sujet_a_la_une`, `date_publication`) VALUES
(1, 'Inscriptions ouvertes A partir du 09 Janvier 2017', '2017-01-02');

-- --------------------------------------------------------

--
-- Structure de la table `comptes_utilisateurs`
--

CREATE TABLE IF NOT EXISTS `comptes_utilisateurs` (
  `ID_Utilisateur` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Clé Primaire qui s''incrémente automatiquement',
  `Nom_Propre` varchar(100) NOT NULL COMMENT 'Stockage des noms des utilisateurs',
  `Prenom` varchar(100) NOT NULL COMMENT 'Stockage des Prenoms des Utilisateurs',
  `Nom_Utilisateur` varchar(255) NOT NULL COMMENT 'Stockage des noms et Prenoms des Utilisateurs',
  `sexe` varchar(10) NOT NULL COMMENT 'Stockage du Sexe des Utilisateurs',
  `pays` varchar(100) NOT NULL COMMENT 'Stockage du pays des Utilisateurs',
  `Mot_De_Passe` varchar(100) NOT NULL COMMENT 'Stockage des Mots de Passes des Utilisateurs',
  `Adresse_Email` varchar(50) NOT NULL COMMENT 'Stockage des Adresses_Emails des Utilisateurs',
  `Date_Inscription` int(10) unsigned NOT NULL COMMENT 'Stockage date d''inscription des Utilisateurs',
  `Compte_Active` enum('0','1') CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL COMMENT 'Stockage du statut des Utilisateurs',
  `clef_Activation` varchar(10) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL COMMENT 'gestionnaire des clés d''activations des Utilisateurs',
  `ip` varchar(20) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL COMMENT 'Enregistrement des Adresses IP des Utilisateurs',
  `Date_Connexion` int(11) NOT NULL COMMENT 'Date de connexion des Utilisateurs',
  `Clef_Suppression` varchar(10) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL COMMENT 'clé de Supressions des Utilisateurs',
  PRIMARY KEY (`ID_Utilisateur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `comptes_utilisateurs`
--

INSERT INTO `comptes_utilisateurs` (`ID_Utilisateur`, `Nom_Propre`, `Prenom`, `Nom_Utilisateur`, `sexe`, `pays`, `Mot_De_Passe`, `Adresse_Email`, `Date_Inscription`, `Compte_Active`, `clef_Activation`, `ip`, `Date_Connexion`, `Clef_Suppression`) VALUES
(1, 'Nganduuhuihiu', 'Bertinuyuyiubiu', 'Bertin Mounok', 'M', 'Etats-Unies', '25f9e794323b453885f5181f1b624d0b', 'bertmoun@yahoo.fr', 1483098759, '0', 'abce6789', '127.0.0.1', 0, ''),
(2, 'Tchimwa', 'Cyrille', 'cyrille tchimwa', 'M', 'Cameroun', '25f9e794323b453885f5181f1b624d0b', 'cyrilletchimwa@yahoo.fr', 1483425826, '0', 'abcf0168', '127.0.0.1', 0, ''),
(3, 'Tchimwajhvj', 'Cyrillehgc', 'cyrille tchimwav', 'M', 'France', '25f9e794323b453885f5181f1b624d0b', 'jhvv@yahoo.fr', 1483427471, '0', 'bcd01456', '127.0.0.1', 0, ''),
(4, 'Tchimwajhvj', 'Cyrillehgc', 'cyrille tchimwav', 'M', 'Cameroun', '25f9e794323b453885f5181f1b624d0b', 'bertmojhvhjun@yahoo.fr', 1483428160, '0', 'bcef3459', '127.0.0.1', 0, ''),
(5, 'obounteke', 'william', 'ntsobe willy', 'M', 'France', '25f9e794323b453885f5181f1b624d0b', 'thyhtyhth@yahoo.fr', 1483439974, '0', 'def03579', '127.0.0.1', 0, ''),
(6, 'obounteke', 'william', 'ntsobe willy', 'M', 'France', '827ccb0eea8a706c4c34a16891f84e7b', 'bertmougggn@yahoo.fr', 1483441797, '0', 'abdef246', '127.0.0.1', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `connectes`
--

CREATE TABLE IF NOT EXISTS `connectes` (
  `IP` varchar(15) NOT NULL COMMENT 'Adresse IP du visiteur qui navigue sur notre site',
  `timestamp` int(11) NOT NULL COMMENT 'heure à laquelle il charge la premiere page du site'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Statut global des visteurs actuellement en ligne ds le site';

--
-- Contenu de la table `connectes`
--

INSERT INTO `connectes` (`IP`, `timestamp`) VALUES
('127.0.0.1', 1483355281);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_newsletter` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Clé Primaire qui s''incrélente automatiquement',
  `email_newsletter` varchar(30) NOT NULL COMMENT 'Bulletin d''information sur the builders',
  `date_souscription` date NOT NULL COMMENT 'date de souscription',
  PRIMARY KEY (`id_newsletter`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

CREATE TABLE IF NOT EXISTS `visiteurs` (
  `ID_visiteur` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Incrémentation de la clé primaire',
  `nom` varchar(50) NOT NULL COMMENT 'Enregistrement du nom des visiteurs',
  `email` varchar(50) NOT NULL COMMENT 'Stockage des Adresses Email des Visiteurs',
  `sujet` varchar(255) NOT NULL COMMENT 'Stockage du sujets que le visiteur enregistrera',
  `Message` text NOT NULL COMMENT 'Enregistrement du message du visteur',
  `ip` varchar(20) NOT NULL COMMENT 'Stockage des adresses IP des visiteurs',
  `Date_Envoi_Message` int(11) NOT NULL COMMENT 'Stockage Date d''envoi du message à un responsable',
  PRIMARY KEY (`ID_visiteur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Il s''agit d''un espace mémoire reservé aux visteurs ' AUTO_INCREMENT=4 ;

--
-- Contenu de la table `visiteurs`
--

INSERT INTO `visiteurs` (`ID_visiteur`, `nom`, `email`, `sujet`, `Message`, `ip`, `Date_Envoi_Message`) VALUES
(1, 'Ngando Mounok', 'BERTIN_MOUNOK@LIVE.FR', 'demande de stage', 'je viens respectieusement', '127.0.0.1', 1483099417),
(2, 'Mounok', 'cyrillebansoa@yahoo.fr', 'saint sylvestre', 'je vous souhaite &agrave; tous bonne et heureuse ann&eacute;e 2017.', '127.0.0.1', 1483437527),
(3, 'Mounok', 'cyrillebansoa@yahoo.fr', 'saint sylvestre', 'je vous souhaite &agrave; tous bonne et heureuse ann&eacute;e 2017.', '127.0.0.1', 1483437825);

-- --------------------------------------------------------

--
-- Structure de la table `vues`
--

CREATE TABLE IF NOT EXISTS `vues` (
  `IP` varchar(15) NOT NULL COMMENT 'charge adresse IP a chaque connexion d''utilisateur',
  `timestamp` int(11) NOT NULL COMMENT 'concerce la date et l''heur du connecté'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vues`
--

INSERT INTO `vues` (`IP`, `timestamp`) VALUES
('127.0.0.1', 1483587174);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
