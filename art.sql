-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 21 oct. 2023 à 19:33
-- Version du serveur : 8.0.34
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `art`
--

-- --------------------------------------------------------

--
-- Structure de la table `aime`
--

DROP TABLE IF EXISTS `aime`;
CREATE TABLE IF NOT EXISTS `aime` (
  `idl` int NOT NULL AUTO_INCREMENT,
  `ido` int NOT NULL,
  `idu` int NOT NULL,
  PRIMARY KEY (`idl`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `aime`
--

INSERT INTO `aime` (`idl`, `ido`, `idu`) VALUES
(1, 6, 16),
(2, 1, 16),
(3, 3, 16),
(4, 11, 16),
(5, 12, 16);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `idm` int NOT NULL AUTO_INCREMENT,
  `sujet` int NOT NULL,
  `message` int NOT NULL,
  PRIMARY KEY (`idm`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `notation`
--

DROP TABLE IF EXISTS `notation`;
CREATE TABLE IF NOT EXISTS `notation` (
  `idn` int NOT NULL AUTO_INCREMENT,
  `idu` int NOT NULL,
  `note` int NOT NULL,
  PRIMARY KEY (`idn`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `notation`
--

INSERT INTO `notation` (`idn`, `idu`, `note`) VALUES
(1, 16, 10);

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre`
--

DROP TABLE IF EXISTS `oeuvre`;
CREATE TABLE IF NOT EXISTS `oeuvre` (
  `ido` int NOT NULL AUTO_INCREMENT,
  `categorie` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `nb_like` int NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`ido`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `oeuvre`
--

INSERT INTO `oeuvre` (`ido`, `categorie`, `description`, `nb_like`, `photo`) VALUES
(1, 'Sculpture', 'La statue de Poséidon (dieu grec de la mer) Plage de Melenara, Gran Canaria.', 6, 'oeuvre/status.jpeg'),
(2, 'Sculpture', 'le baiser de Cupidon est une sculpture de l\'artiste italien Antonio Canova en 1787.', 16, 'oeuvre/cupid.jpeg'),
(3, 'Sculpture', 'La Grèce antique joue un rôle important dans la manière dont la société considère les femmes', 2, 'oeuvre/female.jpeg'),
(4, 'Sculpture', 'Méduse a perdu un combat contre son adversaire, ce qui a causé sa mort.', 6, 'oeuvre/medusa.jpeg'),
(6, 'Bijoux', 'Lisbone,René Jules Lalique le maître du nouveau art', 1, 'oeuvre/Bijoux1'),
(7, 'Bijoux', 'Bague de la Reine Elizabeth I c Trouvée dans la collection du Chequers Estate', 15, 'oeuvre/elizabeth.jpeg'),
(8, 'Bijoux', 'bague de fiançailles juive européen de east ou italien le Metropolitan Museum of art', 7, 'oeuvre/jewish.jpeg'),
(9, 'Bijoux', 'Pendentif Gondole, Europe (19e s. ; or émaillé, diamants, émeraudes, rubis, perles, perles en pendentif).', 0, 'oeuvre/gandola.jpeg'),
(10, 'Peinture', 'Vincent van Gogh - Self Portrait, 1887 at Art Institute of Chicago IL', 0, 'oeuvre/self.jpeg'),
(11, 'Peinture', 'Displate est un poster métallique unique en son genre, conçu pour capturer vos passions uniques.', 0, 'oeuvre/scream.jpeg'),
(12, 'Peinture', 'TERRASSE DE CAFÉ LE SOIR de VICENT VAN GOGH', 0, 'oeuvre/noche.jpeg'),
(13, 'Peinture', 'Gaetano de Martini : La jeune fille au tambourin (1899) Toile Giclée ', 0, 'oeuvre/wore.jpeg'),
(14, 'Poesie', 'LES ORIENTALES / FEUILLES by Victor Hugo Paperback | Indigo Chapters ', 0, 'oeuvre/victor.jpeg'),
(15, 'Poesie', 'Louis Aragon: Les Yeux de Elsa (1942)  ', 2, 'oeuvre/elsa.jpeg'),
(16, 'Poesie', 'Le portrait vif et précis d\'un lieu et d\'un temps Saint-Germain-des-Prés juste après la guerre ', 1, 'oeuvre/germain.jpeg'),
(17, 'Poesie', ' cette œuvre parue au 20ème siècle, illustrant les courants du Surréalisme et du Symbolisme', 1, 'oeuvre/alcool.jpeg'),
(18, 'Meuble', 'Vintage - Meuble de Métier - Cabinet Dentiste - Chêne - Harvard Dental Center - vers 1900', 0, 'oeuvre/vintage.jpeg'),
(19, 'Meuble', 'paire de fauteuils cabriolets Louis XVI estampillés XVIIIe siècle ', 0, 'oeuvre/chateau.jpeg'),
(20, 'Meuble', 'Une ferme décrépite a été interprétée à la mode victorienne.', 0, 'oeuvre/home.jpeg'),
(21, 'Meuble', 'Type de bois Buffet, buffet Antiquité Période de fabrication 1780', 0, 'oeuvre/french.png'),
(22, 'Costume', 'Giorgio a commencé sa carrière dans la mode en des années 1960', 3, 'oeuvre/60.jpeg'),
(23, 'Costume', 'Ensemble | European, Eastern | The Metropolitan Museum of Art', 18, 'oeuvre/europe.jpeg'),
(24, 'Costume', 'Alexandra Khudyakov -Russie-- voyage à travers l\'art du monde', 5, 'oeuvre/russe.jpeg'),
(25, 'Costume', 'Donated by Spoleto Festival USA', 4, 'oeuvre/usa.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idu` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `ad_postale` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL DEFAULT 'default.jfif',
  `etat` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idu`, `nom`, `prenom`, `mail`, `mdp`, `ad_postale`, `avatar`, `etat`) VALUES
(1, 'Admin', 'Admin', 'root@gmail.com', '0ab28ffd0d66b68c8264b5031f3058fc', '37, Quai de grennelle', 'Admin', 1),
(16, 'Dup', 'Mathieu', 'mat.dup@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '8, rue Robert Spark', 'Dup.jfif', 0),
(6, 'William', 'Jack', 'jack@edu.fr', '30a4e38230885e27d1bb3fd0713dfa7d', '1 dubai', 'William.jfif', 1),
(17, 'Dupont', 'Celine', 'Celine@edu.ece.fr', '0f7e44a922df352c05c5f73cb40ba115', '8, boulvard de paris', 'default.jfif', 0),
(14, 'Robert', 'Chris', 'chris.rob@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '9, Rue du pont', 'default.jfif', 0),
(18, 'Celine', 'mouhoubi', 'celine@gmail.com', '6b52b3e86feff8c53b1cb99087e6a651', '37 rue de grenelle', 'Celine.jfif', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
