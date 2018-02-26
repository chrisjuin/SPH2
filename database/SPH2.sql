-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 23 Février 2018 à 13:27
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `SPH2`
--

-- --------------------------------------------------------

--
-- Structure de la table `cli_client`
--

CREATE TABLE `cli_client` (
  `cli_id` int(11) NOT NULL,
  `cli_nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cli_prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cli_provenance` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cli_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cli_adresse` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_code_postal` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `cli_ville` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cli_note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cli_telephone` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `com_commentaire`
--

CREATE TABLE `com_commentaire` (
  `com_id` int(11) NOT NULL,
  `com_commentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  `uti_id` int(11) DEFAULT NULL,
  `tra_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `fos_id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `fos_identifiant` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fos_mot_de_passe` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pho_photo`
--

CREATE TABLE `pho_photo` (
  `pho_id` int(11) NOT NULL,
  `pho_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tra_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tra_travail`
--

CREATE TABLE `tra_travail` (
  `tra_id` int(11) NOT NULL,
  `tra_titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tra_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tra_prix` double NOT NULL,
  `tra_date_debut` datetime NOT NULL,
  `tra_date_rappel` datetime NOT NULL,
  `tra_mode_paiment` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tra_lieux` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tra_garantie` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tra_devis` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tra_process_verbal` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tra_facture` longtext COLLATE utf8_unicode_ci NOT NULL,
  `uti_id` int(11) DEFAULT NULL,
  `cli_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `uti_utilisateur`
--

CREATE TABLE `uti_utilisateur` (
  `uti_id` int(11) NOT NULL,
  `uti_nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uti_prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cli_client`
--
ALTER TABLE `cli_client`
  ADD PRIMARY KEY (`cli_id`);

--
-- Index pour la table `com_commentaire`
--
ALTER TABLE `com_commentaire`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `IDX_559EB1AF3951DF75` (`uti_id`),
  ADD KEY `IDX_559EB1AFB8F9D19F` (`tra_id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`fos_id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `pho_photo`
--
ALTER TABLE `pho_photo`
  ADD PRIMARY KEY (`pho_id`),
  ADD KEY `IDX_4717995EB8F9D19F` (`tra_id`);

--
-- Index pour la table `tra_travail`
--
ALTER TABLE `tra_travail`
  ADD PRIMARY KEY (`tra_id`),
  ADD KEY `IDX_1D3B14703951DF75` (`uti_id`),
  ADD KEY `IDX_1D3B1470BC4EE2B0` (`cli_id`);

--
-- Index pour la table `uti_utilisateur`
--
ALTER TABLE `uti_utilisateur`
  ADD PRIMARY KEY (`uti_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cli_client`
--
ALTER TABLE `cli_client`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `com_commentaire`
--
ALTER TABLE `com_commentaire`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `fos_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pho_photo`
--
ALTER TABLE `pho_photo`
  MODIFY `pho_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tra_travail`
--
ALTER TABLE `tra_travail`
  MODIFY `tra_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `uti_utilisateur`
--
ALTER TABLE `uti_utilisateur`
  MODIFY `uti_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `com_commentaire`
--
ALTER TABLE `com_commentaire`
  ADD CONSTRAINT `FK_559EB1AF3951DF75` FOREIGN KEY (`uti_id`) REFERENCES `uti_utilisateur` (`uti_id`),
  ADD CONSTRAINT `FK_559EB1AFB8F9D19F` FOREIGN KEY (`tra_id`) REFERENCES `tra_travail` (`tra_id`);

--
-- Contraintes pour la table `pho_photo`
--
ALTER TABLE `pho_photo`
  ADD CONSTRAINT `FK_4717995EB8F9D19F` FOREIGN KEY (`tra_id`) REFERENCES `tra_travail` (`tra_id`);

--
-- Contraintes pour la table `tra_travail`
--
ALTER TABLE `tra_travail`
  ADD CONSTRAINT `FK_1D3B14703951DF75` FOREIGN KEY (`uti_id`) REFERENCES `uti_utilisateur` (`uti_id`),
  ADD CONSTRAINT `FK_1D3B1470BC4EE2B0` FOREIGN KEY (`cli_id`) REFERENCES `cli_client` (`cli_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
