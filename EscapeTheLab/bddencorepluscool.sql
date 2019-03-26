-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 26 mars 2019 à 15:30
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `games`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `id` int(3) NOT NULL,
  `Nom` varchar(60) NOT NULL,
  `Synopsis` varchar(300) NOT NULL,
  `Image1` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(3) NOT NULL,
  `Indice` varchar(300) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `Jeu` int(3) NOT NULL,
  `Synopsis` longtext NOT NULL,
  `Timer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `Indice`, `Message`, `Jeu`, `Synopsis`, `Timer`) VALUES
(0, 'Quel est le mot de passe à trouver ?', 'Vous avez échoué au premier niveau, ne parvenant jamais à prendre forme physique en vous échappant de l\'ordinateur ! C\'est...bien, les concepteurs ont prévu un message pour ceux qui échouent au premier niveau. Ils peuvent l\'utiliser.<br/>\r\nPas comme vous. Votre inutilité est troublante.', 0, '    Des monceaux d\'idées semblent s\'agréger autour de vous en un atone substitut de conscience, ce qui pour les vivants marque généralement le début d\'une longue suite d\'afflictions. \r\n            Vous n\'êtes pas encore censé le savoir, alors vous vous sentez plutôt heureux. \r\n            Autour de vous semblent transiter les données de l\'ordinateur qui vous accueille, apparemment suffisamment à contrecoeur pour n\'avoir l\'éminente décence de répondre à vos salutations.\r\n            Après l\'avoir suffisamment harcelé, il daigne enfin vous dire bonjour, probablement pour se débarrasser de vous : CQQNTAY.\r\n            Ca ne ressemble vraiment à rien, bravo le mépris de classe... \r\n            Quoi qu\'il en soit, maintenant c\'est le mot de passe qu\'il vous reste à trouver. ', 300),
(1, '', '', 0, 'Blablabla', 20);

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `ID` int(3) NOT NULL,
  `Jeu` int(3) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Niveau` int(2) NOT NULL,
  `duree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`ID`, `Jeu`, `Nom`, `Niveau`, `duree`) VALUES
(18, 0, 'Paul', 0, 822),
(19, 0, 'Paul', 0, 5),
(20, 0, 'Paul', 0, 0),
(21, 0, 'Paul', 0, 5),
(22, 0, 'Paul', 0, 97),
(23, 0, 'Paul', 0, 15),
(24, 0, 'Paul', 0, 11),
(25, 0, 'Sam', 1, 0),
(26, 0, 'Sam', 0, 1553240301),
(27, 0, 'Paul', 1, 1553244683),
(28, 0, '1', 0, 0),
(29, 0, 'Paul', 1, 1553266270),
(30, 0, 'Paul', 0, 0),
(31, 0, 'Paul', 0, 3),
(32, 0, 'Paul', 0, 3),
(33, 0, 'Paul', 0, 604),
(34, 0, 'Paul', 1, 622),
(35, 0, 'Paul', 0, 3),
(36, 0, 'Paul', 1, 11),
(37, 0, 'Paul', 1, 48),
(38, 0, 'Paul', 1, 55),
(39, 0, 'Paul', 1, 47),
(40, 0, 'Paul', 1, 2791),
(41, 0, 'Paul', 1, 56),
(42, 0, 'Paul', 1, 25),
(43, 0, 'Paul', 1, 34),
(44, 0, 'Paul', 0, 378),
(45, 0, 'Paul', 0, 1),
(46, 0, 'Paul', 0, 3),
(47, 0, 'Paul', 0, 1),
(48, 0, 'Paul', 0, 2),
(49, 0, 'Paul', 0, 3),
(50, 0, 'Paul', 0, 136),
(51, 0, 'Paul', 0, 3),
(52, 0, 'Paul', 1, 23);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` mediumint(9) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Mdp` varchar(20) NOT NULL,
  `EstMJ` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `Nom`, `Mdp`, `EstMJ`) VALUES
(1, 'Equipe 1 ', '1234', NULL),
(2, 'Paul', 'ochon', NULL),
(3, 'Logan', 'Wolverine', 1),
(4, 'Sam', 'yes', NULL),
(5, '1', '1', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
