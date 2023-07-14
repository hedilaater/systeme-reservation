-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 juil. 2021 à 16:06
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfa`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_clinet` int(11) NOT NULL,
  `cin` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_clinet`, `cin`, `username`, `mail`, `password`) VALUES
(1, 9639620, 'laater-gaming', 'hedi.laater@gmail.com', '22/01/2000'),
(14, 12345678, 'hedi', 'hedi.laater@gmail.com', '12345678'),
(23, 9639620, 'hedilaater', 'hedi.laater@gmail.com', '22/01/2000');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `numero` int(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `auteure_livre` varchar(100) NOT NULL,
  `date_sortie` date NOT NULL,
  `nb_livre` int(3) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `numero`, `nom`, `auteure_livre`, `date_sortie`, `nb_livre`, `photo`) VALUES
(1, 0, 'hedi', 'laater', '2021-07-21', 2, ''),
(3, 852, '512', 'hedi', '2021-07-07', 0, '3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `r_id` int(11) NOT NULL,
  `id_clinet` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `r_dstntn` varchar(35) NOT NULL,
  `r_date` varchar(35) NOT NULL,
  `r_hr` varchar(35) NOT NULL,
  `r_ampm` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_clinet` int(11) NOT NULL,
  `id_livre` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `id_clinet`, `id_livre`, `username`, `email`, `type`, `password`) VALUES
(1, 0, 0, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 0, 0, 'user', 'user@gmail.com', 'user', 'user'),
(4, 0, 0, 'laater', 'samargaiche82@gmail.com', 'admin', 'laater123'),
(5, 0, 0, 'laater1', 'laater007@gm.com', 'user', 'laater1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_clinet`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `b_id` (`id_livre`),
  ADD KEY `id_clinet` (`id_clinet`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_livre` (`id_livre`),
  ADD KEY `id_clinet` (`id_clinet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_clinet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`) on delete cascade on update cascade,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_clinet`) REFERENCES `client` (`id_clinet`) on delete cascade on update cascade;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
