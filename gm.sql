-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 15 nov. 2022 à 17:06
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gm`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int NOT NULL,
  `nom` varchar(20) NOT NULL
) ;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(8, 'ss'),
(9, 'smartphone');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `cin` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `etat` int NOT NULL
) ;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`cin`, `nom`, `prenom`, `username`, `password`, `email`, `etat`) VALUES
('HH0606', 'El Oula', 'Alaa', 'admin', 'admin', 'alaa@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE `operation` (
  `id` int NOT NULL,
  `prixTotale` int NOT NULL,
  `qte` int NOT NULL,
  `id_cl` int NOT NULL,
  `id_p` int NOT NULL
) ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int NOT NULL,
  `nom` varchar(20) NOT NULL,
  `qte` int NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(80) NOT NULL,
  `description` varchar(200) ,
  `id_cat` int NOT NULL
) ;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `qte`, `prix`, `image`, `description`, `id_cat`) VALUES
(22, 'pd 1', 111, 33, 'uploads/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png', 'gcfdxcfgcfcvjghcgfdfxdsfxcfvghvbhjjhnjbnjk', 8),
(23, 'PD55555', 33, 55, 'uploads/hesam-link-cK4r-RSz-RQ-unsplash-removebg-preview.png', 'gcfdxcfgcfcvjghcgfdfxdsfxcfvghvbhjjhnjbnjk', 8),
(24, 'phone', 9, 33, 'uploads/jedel_GH-227_01.jpg', 'gcfdxcfgcfcvjghcgfdfxdsfxcfvghvbhjjhnjbnjk', 9);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
