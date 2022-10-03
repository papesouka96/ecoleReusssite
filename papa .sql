-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 03 oct. 2022 à 13:13
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `papa`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `idEleve` int(15) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `daten` date NOT NULL,
  `lieun` varchar(10) CHARACTER SET utf16 NOT NULL,
  `classe` varchar(15) NOT NULL,
  `cycle` varchar(15) NOT NULL,
  `login` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`idEleve`, `date`, `nom`, `prenom`, `daten`, `lieun`, `classe`, `cycle`, `login`) VALUES
(1, '2022-10-03', 'pape', 'souka', '2022-10-05', 'dagana', 'cea', 'szec', 'dfggg'),
(2, '2022-10-03', 'Diop', 'josephine', '2022-10-13', 'dagana', '3e', 'secondaire', 'soso'),
(3, '2022-10-03', 'Diop', 'josephine', '2022-10-13', 'dagana', '3e', 'secondaire', 'soso'),
(4, '2022-10-03', 'Diop', 'josephine', '2022-10-13', 'dagana', '3e', 'secondaire', 'soso'),
(5, '2022-10-03', 'diouf', 'cheikh', '2022-10-06', 'niakhar', 'fgrg', 'rr', '12'),
(6, '2022-10-03', 'diouf', 'cheikh', '2022-10-06', 'niakhar', 'fgrg', 'rr', '12');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `enseignant` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `login` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `daten` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `date`, `nom`, `prenom`, `login`, `pass`, `daten`) VALUES
(8, '2022-10-02 15:24:49', 'Diouf', 'pape', 'papes', '1234', '2022-01-13'),
(9, '2022-10-02 20:42:07', 'rete', 'ndiaye', 'clodio', '147', '2022-10-13'),
(10, '2022-10-03 11:54:52', 'rete', 'ndiaye', 'dfgbn', '123', '2022-10-21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`idEleve`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `idEleve` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
