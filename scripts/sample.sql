-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 12 mars 2019 à 10:34
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sample`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `LOGIN` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `LOGIN`, `PASSWORD`) VALUES
(1, 'letueuradri@gmail.com', 'password'),
(2, 'dhalsey1@wikipedia.org', 'xt7ILv80'),
(3, 'reastmead2@yale.edu', 'wBrVnMhKGkkr'),
(4, 'epoplee3@hugedomains.com', 'obAxJ0imIJf1'),
(5, 'ndebney4@cloudflare.com', 'OxhY7H'),
(6, 'arobecon5@cisco.com', 'J2QTpFMkmf'),
(7, 'jcockett6@cnbc.com', 'KW4t3tmQH'),
(8, 'hradclyffe7@last.fm', 'EnyF2Oi2TO'),
(9, 'gdadley8@mashable.com', 'fYWbFFQgSkg'),
(10, 'msmiley9@squarespace.com', 'dvsDxfS');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `DDN` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LAST_CONNEXION` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `PRENOM`, `NOM`, `EMAIL`, `PASSWORD`, `DDN`, `LAST_CONNEXION`) VALUES
(1, 'Filberto', 'Corstan', 'fcorstan0@who.int', 'bPNQjzMxw', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Danita', 'Savill', 'dsavill1@ehow.com', 'u0ur571I', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Beniamino', 'Beak', 'bbeak2@last.fm', 'BXcQGYHP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Shanna', 'MacTrustie', 'smactrustie3@oaic.gov.au', '0Uwhyr8rLYj', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Mirabel', 'Eades', 'meades4@wikimedia.org', 'BjB8BQilo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Leslie', 'Devonshire', 'ldevonshire5@opensource.org', 'B0uA7ZaNF1T', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Moselle', 'Erskin', 'merskin6@psu.edu', 'sGsEDsbp', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Tresa', 'Lurriman', 'tlurriman7@huffingtonpost.com', 'mRUoxHkbP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Daniel', 'Dorkins', 'ddorkins8@nymag.com', 'SsbdSYhMUyp', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Worth', 'Leades', 'wleades9@businesswire.com', 'isSAmC0ofdPR', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
