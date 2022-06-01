-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 01 juin 2022 à 13:37
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cms`
--

-- --------------------------------------------------------

--
-- Structure de la table `Activites_mairie`
--

CREATE TABLE `Activites_mairie` (
  `id` int(11) NOT NULL,
  `nomActivite` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Annonces_mairie`
--

CREATE TABLE `Annonces_mairie` (
  `id` int(11) NOT NULL,
  `mariage` int(11) NOT NULL,
  `decret` int(11) NOT NULL,
  `marcherPublic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Conseil_municipal`
--

CREATE TABLE `Conseil_municipal` (
  `id` int(11) NOT NULL,
  `nomDuConseiller` varchar(255) NOT NULL,
  `posteProfil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Decrets_mairie`
--

CREATE TABLE `Decrets_mairie` (
  `id` int(11) NOT NULL,
  `libeller` text NOT NULL,
  `dateDecret` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Espace_pub_mairie`
--

CREATE TABLE `Espace_pub_mairie` (
  `id` int(11) NOT NULL,
  `nombreVisiteur` int(11) NOT NULL,
  `publicite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Lieux_touristiques_mairie`
--

CREATE TABLE `Lieux_touristiques_mairie` (
  `id` int(11) NOT NULL,
  `nomLieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Login`
--

CREATE TABLE `Login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Mairie`
--

CREATE TABLE `Mairie` (
  `id` int(11) NOT NULL,
  `nom_mairie` varchar(255) NOT NULL,
  `region` varchar(20) NOT NULL,
  `presentation` int(11) NOT NULL,
  `projet` int(11) NOT NULL,
  `activite` int(11) NOT NULL,
  `annonce` int(11) NOT NULL,
  `espacePub` int(11) NOT NULL,
  `lieuTouristique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Marchers_publics`
--

CREATE TABLE `Marchers_publics` (
  `id` int(11) NOT NULL,
  `nomMarcher` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Mariage_Mairie`
--

CREATE TABLE `Mariage_Mairie` (
  `id` int(11) NOT NULL,
  `libeller` text NOT NULL,
  `dateMariage` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Missions_mairie`
--

CREATE TABLE `Missions_mairie` (
  `id` int(11) NOT NULL,
  `nomMission` int(11) NOT NULL,
  `description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Personnel_mairie`
--

CREATE TABLE `Personnel_mairie` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `cv` text NOT NULL,
  `parcourtProfessionnel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Presentation_mairie`
--

CREATE TABLE `Presentation_mairie` (
  `id` int(11) NOT NULL,
  `histoire` text NOT NULL,
  `conseil_municipal` int(11) NOT NULL,
  `personnel_mairie` int(11) NOT NULL,
  `mission_mairie` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Projets_mairie`
--

CREATE TABLE `Projets_mairie` (
  `id` int(11) NOT NULL,
  `nomProjet` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Publicite_mairie`
--

CREATE TABLE `Publicite_mairie` (
  `id` int(11) NOT NULL,
  `nomPub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Activites_mairie`
--
ALTER TABLE `Activites_mairie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Annonces_mairie`
--
ALTER TABLE `Annonces_mairie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mariage` (`mariage`,`decret`,`marcherPublic`),
  ADD KEY `marcherPublic` (`marcherPublic`),
  ADD KEY `decret` (`decret`);

--
-- Index pour la table `Conseil_municipal`
--
ALTER TABLE `Conseil_municipal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Decrets_mairie`
--
ALTER TABLE `Decrets_mairie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Espace_pub_mairie`
--
ALTER TABLE `Espace_pub_mairie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publicite` (`publicite`);

--
-- Index pour la table `Lieux_touristiques_mairie`
--
ALTER TABLE `Lieux_touristiques_mairie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`User_id`);

--
-- Index pour la table `Mairie`
--
ALTER TABLE `Mairie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `presentation` (`presentation`,`nom_mairie`),
  ADD KEY `nom_mairie` (`nom_mairie`,`presentation`),
  ADD KEY `id` (`id`,`nom_mairie`,`presentation`),
  ADD KEY `projet` (`projet`,`activite`,`annonce`,`espacePub`,`lieuTouristique`),
  ADD KEY `activite` (`activite`),
  ADD KEY `annonce` (`annonce`),
  ADD KEY `espacePub` (`espacePub`),
  ADD KEY `lieuTouristique` (`lieuTouristique`);

--
-- Index pour la table `Marchers_publics`
--
ALTER TABLE `Marchers_publics`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Mariage_Mairie`
--
ALTER TABLE `Mariage_Mairie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Missions_mairie`
--
ALTER TABLE `Missions_mairie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Personnel_mairie`
--
ALTER TABLE `Personnel_mairie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Presentation_mairie`
--
ALTER TABLE `Presentation_mairie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conseil_municipal` (`conseil_municipal`,`personnel_mairie`,`mission_mairie`),
  ADD KEY `personnel_mairie` (`personnel_mairie`),
  ADD KEY `mission_mairie` (`mission_mairie`);

--
-- Index pour la table `Projets_mairie`
--
ALTER TABLE `Projets_mairie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Publicite_mairie`
--
ALTER TABLE `Publicite_mairie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Activites_mairie`
--
ALTER TABLE `Activites_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Annonces_mairie`
--
ALTER TABLE `Annonces_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Conseil_municipal`
--
ALTER TABLE `Conseil_municipal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Decrets_mairie`
--
ALTER TABLE `Decrets_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Espace_pub_mairie`
--
ALTER TABLE `Espace_pub_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Lieux_touristiques_mairie`
--
ALTER TABLE `Lieux_touristiques_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Login`
--
ALTER TABLE `Login`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Mairie`
--
ALTER TABLE `Mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Marchers_publics`
--
ALTER TABLE `Marchers_publics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Mariage_Mairie`
--
ALTER TABLE `Mariage_Mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Missions_mairie`
--
ALTER TABLE `Missions_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Personnel_mairie`
--
ALTER TABLE `Personnel_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Presentation_mairie`
--
ALTER TABLE `Presentation_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Projets_mairie`
--
ALTER TABLE `Projets_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Publicite_mairie`
--
ALTER TABLE `Publicite_mairie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Annonces_mairie`
--
ALTER TABLE `Annonces_mairie`
  ADD CONSTRAINT `Annonces_mairie_ibfk_1` FOREIGN KEY (`marcherPublic`) REFERENCES `Marchers_publics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Annonces_mairie_ibfk_2` FOREIGN KEY (`mariage`) REFERENCES `Mariage_Mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Annonces_mairie_ibfk_3` FOREIGN KEY (`decret`) REFERENCES `Decrets_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Espace_pub_mairie`
--
ALTER TABLE `Espace_pub_mairie`
  ADD CONSTRAINT `Espace_pub_mairie_ibfk_1` FOREIGN KEY (`publicite`) REFERENCES `Publicite_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Login`
--
ALTER TABLE `Login`
  ADD CONSTRAINT `Login_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `Mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Mairie`
--
ALTER TABLE `Mairie`
  ADD CONSTRAINT `Mairie_ibfk_1` FOREIGN KEY (`projet`) REFERENCES `Projets_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Mairie_ibfk_2` FOREIGN KEY (`activite`) REFERENCES `Activites_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Mairie_ibfk_3` FOREIGN KEY (`annonce`) REFERENCES `Annonces_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Mairie_ibfk_4` FOREIGN KEY (`espacePub`) REFERENCES `Espace_pub_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Mairie_ibfk_5` FOREIGN KEY (`lieuTouristique`) REFERENCES `Lieux_touristiques_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Presentation_mairie`
--
ALTER TABLE `Presentation_mairie`
  ADD CONSTRAINT `Presentation_mairie_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Mairie` (`presentation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Presentation_mairie_ibfk_2` FOREIGN KEY (`personnel_mairie`) REFERENCES `Personnel_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Presentation_mairie_ibfk_3` FOREIGN KEY (`mission_mairie`) REFERENCES `Missions_mairie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Presentation_mairie_ibfk_4` FOREIGN KEY (`conseil_municipal`) REFERENCES `Conseil_municipal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
