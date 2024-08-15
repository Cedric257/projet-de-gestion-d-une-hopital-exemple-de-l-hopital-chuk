-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 nov. 2022 à 10:14
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionchuc`
--

-- --------------------------------------------------------

--
-- Structure de la table `malade`
--

CREATE TABLE `malade` (
  `Matricule` varchar(20) NOT NULL,
  `NomM` varchar(20) NOT NULL,
  `PrenomM` varchar(20) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `Commune` varchar(20) NOT NULL,
  `Colline` varchar(20) NOT NULL,
  `DatedeNaissance` date NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `Maladie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `malade`
--

INSERT INTO `malade` (`Matricule`, `NomM`, `PrenomM`, `Province`, `Commune`, `Colline`, `DatedeNaissance`, `Telephone`, `Maladie`) VALUES
('1', 'NDUWUMUKIZA', 'Yvonne', 'Bubanza', 'Bubanza', 'Buhororo', '1998-06-10', '72456123', 'Malaria'),
('2', 'NKUNZIMANA', 'Nerva', 'Bubanza', '', 'Kayanza', '2000-02-01', '61321657', 'Corona'),
('3', 'BAREKAYO', 'Hilaire', 'Kayanza', '', 'Matongo', '1995-01-01', '75423658', 'Grippe'),
('4', 'BAREKAYO', 'Hilaire', 'Kayanza', '', 'Matongo', '1995-01-01', '75423658', 'Grippe');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `NomME` varchar(20) NOT NULL,
  `PrenomME` varchar(20) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Niveau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`UserName`, `Password`, `NomME`, `PrenomME`, `DateNaissance`, `Niveau`) VALUES
('admin@gmail.com', 'admin', 'AKIMANA', 'Ceedric', '1999-07-14', 'Doctorat'),
('ced@gmail.com', '12', 'AKIMANA', 'Cedric', '1999-06-14', 'Doctorat'),
('claudio@gmail.com', '1234', 'M', 'Claude', '2000-01-01', 'Master'),
('ged@gmail.com', '123', 'BARUTWANAYO', 'Gedeon', '1996-06-01', 'Master'),
('Ninette@gmail.com', '1234', 'ITEKA', 'Ninette', '2000-01-01', 'A2'),
('seg@gmail.com', '123', 'BIGIRIMANA', 'Serges', '1993-01-01', 'Baccalaureat');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `malade`
--
ALTER TABLE `malade`
  ADD PRIMARY KEY (`Matricule`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
