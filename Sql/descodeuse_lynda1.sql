-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 04 août 2020 à 08:23
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `descodeuse_lynda`
--

-- --------------------------------------------------------

--
-- Structure de la table `general`
--

DROP TABLE IF EXISTS `general`;
CREATE TABLE IF NOT EXISTS `general` (
  `id_general` int(11) NOT NULL AUTO_INCREMENT,
  `iduu` varchar(150) NOT NULL,
  `valeur` text NOT NULL,
  PRIMARY KEY (`id_general`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `general`
--

INSERT INTO `general` (`id_general`, `iduu`, `valeur`) VALUES
(1, 'TEXTE_ACCUEIL', 'je vous présente mon book de tous mes projets que j\'ai réaliser durant ma formation chez les Descodeuses\r\nje suis trop contente de réaliser ses projets\r\nj’adore l\'informatique j\'aimerai partir loin dans mon chemin et approfondir tout ça.\r\n'),
(2, 'TITRE_ACCUEIL', 'Mon portofolio'),
(3, 'TITRE_CONTACT', 'Contact'),
(4, 'TEXTE_CONTACT', 'lynda FERRI, 15 rue Martin Garat Paris 75020, 07 67 88 83 99, lyndaferri@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `url_image` varchar(150) NOT NULL,
  `annee` year(4) NOT NULL,
  `client` varchar(150) NOT NULL,
  `lien` varchar(150) NOT NULL,
  `online` tinyint(1) DEFAULT NULL,
  `ordre` int(11) NOT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `nom_projet`, `description`, `url_image`, `annee`, `client`, `lien`, `online`, `ordre`) VALUES
(1, 'Bar de Syl', 'site d\'une ouverture d\'un bar à cocktail de SYL', 'templates/images/syl.jpg', 2020, 'Descodeuses', 'https://github.com/ferri1/bar-cocktail-syle', 0, 4),
(2, 'HOPITAL', 'Le site pour un hôpital en ligne', 'templates/images/hopital.jpg', 2020, 'Descodeuses', 'https://github.com/ferri1/projet-hopital', 0, 3),
(3, 'ADA Hôtel', 'Le site d\'un hôtel chic a Paris', 'templates/images/ada-hotel.jpg', 2020, 'Descodeuses', 'https://github.com/ferri1/adahotel', 0, 2),
(4, 'Codevores', 'Site de vente de service de développement informatique', 'templates/images/codevore.jpg', 2020, 'Descodeuses', 'https://github.com/ferri1/codevores-projet', 0, 1),
(5, 'Mon musée', 'Site d\'un beau musée ', 'templates/images/musee.jpg', 2020, 'Descodeuses', 'https://github.com/ferri1/mini-mus-', 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `projet_techno`
--

DROP TABLE IF EXISTS `projet_techno`;
CREATE TABLE IF NOT EXISTS `projet_techno` (
  `projet_id` int(11) NOT NULL,
  `techno_id` int(11) NOT NULL,
  KEY `projet_id` (`projet_id`),
  KEY `techno_id` (`techno_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet_techno`
--

INSERT INTO `projet_techno` (`projet_id`, `techno_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(2, 5),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(5, 2),
(5, 3),
(5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `techno`
--

DROP TABLE IF EXISTS `techno`;
CREATE TABLE IF NOT EXISTS `techno` (
  `id_techno` int(11) NOT NULL AUTO_INCREMENT,
  `nom_techno` varchar(150) NOT NULL,
  PRIMARY KEY (`id_techno`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
-- Erreur de lecture des données pour la table descodeuse_lynda.techno : #1064 - Erreur de syntaxe près de 'FROM `descodeuse_lynda`.`techno`' à la ligne 1

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `identifiant` varchar(100) NOT NULL,
  `motdepasse` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `identifiant`, `motdepasse`) VALUES
(1, 'lynda', 'admin', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projet_techno`
--
ALTER TABLE `projet_techno`
  ADD CONSTRAINT `projet_techno_ibfk_1` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id_projet`),
  ADD CONSTRAINT `projet_techno_ibfk_2` FOREIGN KEY (`techno_id`) REFERENCES `techno` (`id_techno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
