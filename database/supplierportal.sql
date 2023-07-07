-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 juin 2023 à 11:56
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `supplierportal`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `IDA` int(11) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `PASSWD` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`IDA`, `NOM`, `PRENOM`, `EMAIL`, `PHONE`, `PASSWD`) VALUES
(1, 'ADMIN', 'admin', 'admin@admin', '0612345678', '$2y$10$iOaX4yQqpN310ScRGdLz1.oqMm7TwSD471SW0OJF8DjCDtjeNiRNG');

-- --------------------------------------------------------

--
-- Structure de la table `appeloffre`
--

CREATE TABLE `appeloffre` (
  `NUMOFFRE` int(11) NOT NULL,
  `LIBELLE` varchar(20) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `CATEGORIE` varchar(20) NOT NULL,
  `PROCESS` varchar(20) NOT NULL,
  `DATEFIN` date NOT NULL,
  `ACHTEUR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE `depense` (
  `NUMDEPENSE` varchar(20) NOT NULL,
  `IDFOURNISSEUR` int(11) NOT NULL,
  `LIBELLE` varchar(20) NOT NULL,
  `TYPEDEPENSE` varchar(30) NOT NULL,
  `ETATDEPENSE` varchar(30) NOT NULL,
  `DATEDEBUT` date NOT NULL,
  `DATEFIN` date DEFAULT NULL,
  `MONTANT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `IDE` int(11) NOT NULL,
  `IDFOURNISSEUR` int(11) NOT NULL,
  `TYPEE` varchar(20) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `PME` tinyint(1) NOT NULL,
  `FORMEJURIDIQUE` varchar(30) NOT NULL,
  `REGISTRECOMMERCIAL` varchar(20) NOT NULL,
  `PAYS` varchar(50) NOT NULL,
  `VILLE` varchar(50) NOT NULL,
  `CODEPOSTAL` varchar(5) NOT NULL,
  `ICE` varchar(50) NOT NULL,
  `IDENTIFIANTFISCAL` varchar(50) NOT NULL,
  `TAXEPROFESSIONNELLE` varchar(50) NOT NULL,
  `CNSS` varchar(50) NOT NULL,
  `PHONEE` varchar(10) NOT NULL,
  `FAX` varchar(10) NOT NULL,
  `ADRESSE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`IDE`, `IDFOURNISSEUR`, `TYPEE`, `NOM`, `PME`, `FORMEJURIDIQUE`, `REGISTRECOMMERCIAL`, `PAYS`, `VILLE`, `CODEPOSTAL`, `ICE`, `IDENTIFIANTFISCAL`, `TAXEPROFESSIONNELLE`, `CNSS`, `PHONEE`, `FAX`, `ADRESSE`) VALUES
(1, 1, 'EN', 'SALAMA', 0, 'SARL', 'Registre1', 'Maroc', 'RABAT', '10000', 'ICE123456789', 'IdFiscal123456789', 'Taxe123456789', 'CNSS123456789', '0601020304', '0501020304', 'Yacoub El Mansour');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `NUMFACTURE` varchar(20) NOT NULL,
  `IDFOURNISSEUR` int(11) NOT NULL,
  `NUMDEPENSE` varchar(20) NOT NULL,
  `ETATFACTURE` varchar(25) NOT NULL,
  `DEVISE` varchar(20) NOT NULL,
  `DATEFACTURE` date NOT NULL,
  `MONTANTHT` float NOT NULL,
  `MONTANTTTC` float NOT NULL,
  `DATEDEPOSE` date NOT NULL,
  `DATEVALIDE` date NOT NULL,
  `DATEREJETE` date NOT NULL,
  `DATETRAITEMENT` date NOT NULL,
  `DATEPAYE` date NOT NULL,
  `ATTACHEMENT` varchar(100) NOT NULL,
  `VALIDÉFOURNISSEUR` tinyint(1) NOT NULL,
  `VALIDÉADMIN` tinyint(1) NOT NULL,
  `MOTIF` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `IDFOURNISSEUR` int(11) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `PASSWD` varchar(1500) NOT NULL,
  `FAX` varchar(10) NOT NULL,
  `TYPEPERSONNE` varchar(20) NOT NULL,
  `TYPEFOURNISSEUR` tinyint(1) NOT NULL,
  `VALIDÉ` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`IDFOURNISSEUR`, `CIN`, `NOM`, `PRENOM`, `EMAIL`, `PHONE`, `PASSWD`, `FAX`, `TYPEPERSONNE`, `TYPEFOURNISSEUR`, `VALIDÉ`) VALUES
(1, 'A111111', 'RIAH', 'ilyas', 'ilyasriah2000@gmail.com', '0612345678', '$2y$10$iOaX4yQqpN310ScRGdLz1.oqMm7TwSD471SW0OJF8DjCDtjeNiRNG', '0512345678', 'Habilité', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `IDM` int(11) NOT NULL,
  `IDFOURNISSEUR` int(11) NOT NULL,
  `TITRE` varchar(20) NOT NULL,
  `TEXTE` text NOT NULL,
  `DATEM` date NOT NULL DEFAULT current_timestamp(),
  `NUMDEPENSE` varchar(20) NOT NULL,
  `NUMFACTURE` varchar(20) NOT NULL,
  `VALIDÉ` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDA`);

--
-- Index pour la table `appeloffre`
--
ALTER TABLE `appeloffre`
  ADD PRIMARY KEY (`NUMOFFRE`);

--
-- Index pour la table `depense`
--
ALTER TABLE `depense`
  ADD PRIMARY KEY (`NUMDEPENSE`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`IDE`),
  ADD KEY `FK_POSSEDE` (`IDFOURNISSEUR`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`NUMFACTURE`),
  ADD KEY `FK_FACTURATION` (`IDFOURNISSEUR`),
  ADD KEY `FK_DEPENSEFACTURE` (`NUMDEPENSE`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`IDFOURNISSEUR`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`IDM`),
  ADD KEY `FK_MESSAGERIETM` (`IDFOURNISSEUR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `IDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `IDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `IDFOURNISSEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `IDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `FK_POSSEDE` FOREIGN KEY (`IDFOURNISSEUR`) REFERENCES `fournisseur` (`IDFOURNISSEUR`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `FK_DEPENSEFACTURE` FOREIGN KEY (`NUMDEPENSE`) REFERENCES `depense` (`NUMDEPENSE`),
  ADD CONSTRAINT `FK_FACTURATION` FOREIGN KEY (`IDFOURNISSEUR`) REFERENCES `fournisseur` (`IDFOURNISSEUR`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_MESSAGERIETM` FOREIGN KEY (`IDFOURNISSEUR`) REFERENCES `fournisseur` (`IDFOURNISSEUR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
