-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql307.byetcluster.com
-- Généré le :  jeu. 03 août 2023 à 09:53
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `if0_34692506_pharmaciegros`
--

-- --------------------------------------------------------

--
-- Structure de la table `declaration_medicament`
--

CREATE TABLE `declaration_medicament` (
  `Id_Declaration` int(11) NOT NULL,
  `Id_Medicament` int(11) NOT NULL,
  `Num_Autorisation` text DEFAULT NULL,
  `Num_lot` text DEFAULT NULL,
  `Date_fabrication` date DEFAULT NULL,
  `Date_peremption` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `declaration_medicament`
--

INSERT INTO `declaration_medicament` (`Id_Declaration`, `Id_Medicament`, `Num_Autorisation`, `Num_lot`, `Date_fabrication`, `Date_peremption`) VALUES
(4, 5, '', '', '2022-06-15', '2024-06-15'),
(5, 6, '', '', '2021-10-30', '2023-10-30'),
(6, 7, '', '', '2022-01-30', '2024-01-30'),
(7, 8, '', '', '2022-06-30', '2024-06-30'),
(8, 9, '', '', '2021-03-15', '2024-03-15');

-- --------------------------------------------------------

--
-- Structure de la table `listemedicament`
--

CREATE TABLE `listemedicament` (
  `Id_Medicament` int(11) NOT NULL,
  `Denomination` text NOT NULL,
  `Forme` text NOT NULL,
  `Dosage` text NOT NULL,
  `Categorie` text DEFAULT NULL,
  `Stock_max` int(11) DEFAULT NULL,
  `Stock_min` int(11) DEFAULT NULL,
  `Observation` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `listemedicament`
--

INSERT INTO `listemedicament` (`Id_Medicament`, `Denomination`, `Forme`, `Dosage`, `Categorie`, `Stock_max`, `Stock_min`, `Observation`) VALUES
(5, 'AcÃ©tylsalicylique acide', 'comp', '100 mg', 'voie orale', 6000, 2000, 'RAS'),
(6, 'AcÃ©tylsalicylique acide', 'comp', '500 mg', 'voie orale', 5000, 1000, 'RAS'),
(7, 'Aminophylline', 'comp', '100 mg', 'voie orale', 6000, 2000, 'RAS'),
(8, 'Amoxicilline', 'comp', '500 mg', 'voie orale', 6000, 3000, 'RAS'),
(9, 'Bisacodyl ', 'comp', '5 mg', 'voie orale', 4000, 2000, 'RAS');

-- --------------------------------------------------------

--
-- Structure de la table `registre_entrees`
--

CREATE TABLE `registre_entrees` (
  `Id_entrees` int(11) NOT NULL,
  `Date_entrees` date NOT NULL,
  `Id_medicament` int(11) NOT NULL,
  `Quantite_entrees` int(11) NOT NULL,
  `Prix_U` float NOT NULL,
  `Prix_T` float DEFAULT NULL,
  `Fournisseur` text DEFAULT NULL,
  `Observation` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `registre_entrees`
--

INSERT INTO `registre_entrees` (`Id_entrees`, `Date_entrees`, `Id_medicament`, `Quantite_entrees`, `Prix_U`, `Prix_T`, `Fournisseur`, `Observation`) VALUES
(5, '2023-07-28', 5, 3000, 100, 300000, 'PhaG', 'RAS'),
(6, '2023-07-28', 6, 4000, 150, 600000, 'PhaG', 'RAS'),
(7, '2023-07-28', 7, 3000, 150, 450000, 'PhaG', 'RAS'),
(8, '2023-07-28', 8, 4000, 300, 1200000, 'PhaG', 'RAS'),
(9, '2023-07-28', 9, 3000, 130, 390000, 'PhaG', 'RAS');

-- --------------------------------------------------------

--
-- Structure de la table `registre_sortie`
--

CREATE TABLE `registre_sortie` (
  `Id_sortie` int(11) NOT NULL,
  `Date_sortie` date NOT NULL,
  `Id_medicament` int(11) NOT NULL,
  `Quantite_sortie` int(11) NOT NULL,
  `Observation` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `registre_sortie`
--

INSERT INTO `registre_sortie` (`Id_sortie`, `Date_sortie`, `Id_medicament`, `Quantite_sortie`, `Observation`) VALUES
(3, '2023-07-28', 5, 1000, 'RAS');

-- --------------------------------------------------------

--
-- Structure de la table `registre_stock`
--

CREATE TABLE `registre_stock` (
  `Id_stock` int(11) NOT NULL,
  `Date_stock` date NOT NULL,
  `Id_medicament` int(11) NOT NULL,
  `Stock_disponible` int(11) NOT NULL,
  `Prix_U` float DEFAULT NULL,
  `Prix_T` float DEFAULT NULL,
  `Observation` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `registre_stock`
--

INSERT INTO `registre_stock` (`Id_stock`, `Date_stock`, `Id_medicament`, `Stock_disponible`, `Prix_U`, `Prix_T`, `Observation`) VALUES
(5, '2023-07-28', 5, 3000, 100, 300000, 'RAS'),
(6, '2023-07-28', 6, 4000, 150, 600000, 'RAS'),
(7, '2023-07-28', 7, 3000, 150, 450000, 'RAS'),
(8, '2023-07-28', 8, 4000, 300, 1200000, 'RAS'),
(9, '2023-07-28', 9, 3000, 130, 390000, 'RAS'),
(10, '2023-07-28', 5, 2000, 100, 200000, 'RAS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `declaration_medicament`
--
ALTER TABLE `declaration_medicament`
  ADD PRIMARY KEY (`Id_Declaration`);

--
-- Index pour la table `listemedicament`
--
ALTER TABLE `listemedicament`
  ADD PRIMARY KEY (`Id_Medicament`);

--
-- Index pour la table `registre_entrees`
--
ALTER TABLE `registre_entrees`
  ADD PRIMARY KEY (`Id_entrees`);

--
-- Index pour la table `registre_sortie`
--
ALTER TABLE `registre_sortie`
  ADD PRIMARY KEY (`Id_sortie`);

--
-- Index pour la table `registre_stock`
--
ALTER TABLE `registre_stock`
  ADD PRIMARY KEY (`Id_stock`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `declaration_medicament`
--
ALTER TABLE `declaration_medicament`
  MODIFY `Id_Declaration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `listemedicament`
--
ALTER TABLE `listemedicament`
  MODIFY `Id_Medicament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `registre_entrees`
--
ALTER TABLE `registre_entrees`
  MODIFY `Id_entrees` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `registre_sortie`
--
ALTER TABLE `registre_sortie`
  MODIFY `Id_sortie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `registre_stock`
--
ALTER TABLE `registre_stock`
  MODIFY `Id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
