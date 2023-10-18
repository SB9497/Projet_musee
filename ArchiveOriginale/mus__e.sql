-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 10 oct. 2023 à 18:30
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `musée`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_utilisateur` int(11) NOT NULL,
  `id_oeuvre` int(11) NOT NULL,
  `commentaire` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id_utilisateur`, `id_oeuvre`, `commentaire`) VALUES
(1, 42, 'paw'),
(1, 38, 'waw'),
(1, 43, 'paw'),
(1, 53, 'super dessin'),
(1, 37, 'swag'),
(11, 44, 'super cool'),
(10, 52, 'super dessin mec'),
(10, 50, 'super');

-- --------------------------------------------------------

--
-- Structure de la table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf32 COLLATE utf32_swedish_ci NOT NULL,
  `caracteristique` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `collections`
--

INSERT INTO `collections` (`id`, `nom`, `caracteristique`) VALUES
(22, '索引', ''),
(21, '漫画', ''),
(20, '消す', ''),
(19, '時計回り', ''),
(18, 'LMMSS', ''),
(17, 'ペイント vision', '');

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre`
--

CREATE TABLE `oeuvre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf32 COLLATE utf32_swedish_ci NOT NULL,
  `date_publication` date NOT NULL,
  `description` varchar(300) CHARACTER SET utf32 COLLATE utf32_swedish_ci DEFAULT NULL,
  `chemin_image` varchar(50) NOT NULL,
  `id_collections` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `oeuvre`
--

INSERT INTO `oeuvre` (`id`, `nom`, `date_publication`, `description`, `chemin_image`, `id_collections`) VALUES
(37, '14012021', '2022-06-07', '', '33.png', 17),
(38, 'お誕生日おめでとう', '2022-06-07', '', '34.jpg', 17),
(39, 'ゲーム', '2022-06-07', '', '35.png', 17),
(40, 'マインド', '2022-06-07', '', '36.jpg', 17),
(41, 'ミスター.黄色', '2022-06-07', '', '37.jpg', 17),
(42, 'lmmss_00', '2022-06-07', '', '7.jpeg', 18),
(43, '無題', '2022-06-07', '', '8.png', 19),
(44, '_220123_213957_212', '2022-06-07', '', '9.png', 20),
(48, '_220123_214911_199', '2022-06-07', '', '11.png', 20),
(47, '_220123_214523_026', '2022-06-07', '', '10.png', 20),
(49, 'h', '2022-06-07', '', '12.jpg', 21),
(50, 'hの薬', '2022-06-07', '', '13.jpg', 21),
(51, '0000000000000000000000000000000000000000000', '2022-06-07', '', '14.jpeg', 22),
(52, 'さまよう青い生き物', '2022-06-07', '', '15.jpg', 22),
(53, '恐れ', '2022-06-07', '', '16.jpg', 22);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mdp`) VALUES
(1, 'nasaxsupercool', 'onvatoutcasser'),
(2, 'todd', 'zizicaca'),
(10, 'test', 'yahou'),
(11, 'ele', 'ele');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_utilisateur`,`id_oeuvre`),
  ADD KEY `id_oeuvre` (`id_oeuvre`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_collections` (`id_collections`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
