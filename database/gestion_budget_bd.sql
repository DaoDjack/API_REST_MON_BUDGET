-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 mars 2023 à 18:41
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_budget_bd`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`geeksquad`@`%` PROCEDURE `ps_categorie_depense` (IN `_categoriedepenseid` VARCHAR(36), IN `_libel` VARCHAR(36), IN `_descript` TEXT, IN `_createdby` VARCHAR(36), IN `_Action` VARCHAR(100))   BEGIN
    IF (_Action = 'Insert') THEN
INSERT INTO categorie_depense (categorieDepenseId, libelle, description, createdBy)
VALUES (_categoriedepenseid, _libel, _descript, _createdby);

END IF;

IF (_Action = 'UpdateById') THEN
UPDATE categorie_depense
SET categorieDepenseId   = _categoriedepenseid,
    libelle    = _libel,
    description  = _descript,
    createdBy = _createdby
WHERE categorieDepenseId   = _categoriedepenseid;
END IF;

IF (_Action = 'DeleteById') THEN
UPDATE categorie_depense
SET statuts = 0
WHERE categorieDepenseId   = _categoriedepenseid;
END IF ;


IF (_Action = 'SelectAll') THEN
SELECT * FROM categorie_depense WHERE statuts = 1;
END IF;

END$$

CREATE DEFINER=`geeksquad`@`%` PROCEDURE `ps_Depense` (IN `_depenseid` VARCHAR(36), IN `_libel` VARCHAR(36), IN `_mnt` INT(10), IN `_utilisateurid` VARCHAR(36), IN `_categoriedepenseid` VARCHAR(36), IN `_createdby` VARCHAR(36), IN `_Action` VARCHAR(100))   BEGIN
    IF (_Action = 'Insert') THEN
INSERT INTO depense (depenseId, libelle, montant, utilisateurId, categorieDepenseId, createdBy)
VALUES (_depenseid, _libel, _mnt , _utilisateurid,_categoriedepenseid, _createdby);

END IF;

IF (_Action = 'UpdateById') THEN
UPDATE depense
SET depenseId= _depenseid,
    libelle = _libel,
    montant  = _mnt,
    utilisateurId =_utilisateurid,
    categorieDepenseId =_categoriedepenseId,
    createdBy = _createdby
WHERE depenseId = _depenseid;
END IF;

IF (_Action = 'DeleteById') THEN
UPDATE depense
SET statuts = 0
WHERE depenseId = _depenseid;
END IF ;


IF (_Action = 'SelectAll') THEN
SELECT * FROM depense WHERE statuts = 1;
END IF;

END$$

CREATE DEFINER=`geeksquad`@`%` PROCEDURE `ps_Depot` (IN `_depotid` VARCHAR(36), IN `_mnt` INT(11), IN `_datedepot` DATE, IN `_objectifsid` VARCHAR(36), IN `_createdby` VARCHAR(36), IN `_Action` VARCHAR(100))   BEGIN
    IF (_Action = 'Insert') THEN
        INSERT INTO depot (depotId, montant, dateDepot, objectifsId, createdBy)
        VALUES (_depotid, _mnt, _datedepot, _objectifsid, _createdby);

    END IF;

    IF (_Action = 'UpdateById') THEN
        UPDATE depot
        SET depotId = _depotid,
            montant = _mnt,
            dateDepot=_datedepot,
            objectifsId= _objectifsid,
            createdBy = _createdby
        WHERE depotId = _depotid;
    END IF;

    IF (_Action = 'DeleteById') THEN
        UPDATE depot
        SET statuts = 0
        WHERE depotId= _depotid;
    END IF ;


    IF (_Action = 'SelectAll') THEN
        SELECT * FROM depot WHERE statuts = 1;
    END IF;

END$$

CREATE DEFINER=`geeksquad`@`%` PROCEDURE `ps_Objectif` (IN `_objectifsid` VARCHAR(36), IN `_mnt` INTEGER(11), IN `_utilisateurid` VARCHAR(36), IN `_createdby` VARCHAR(36), IN `_Action` VARCHAR(100))   BEGIN
    IF (_Action = 'Insert') THEN
        INSERT INTO objectif (objectifsId, montant, utilisateurId, createdBy)
        VALUES (_objectifsid, _mnt, _utilisateurid, _createdby);

    END IF;

    IF (_Action = 'UpdateById') THEN
        UPDATE objectif
        SET objectifsId = _objectifsid,
            montant = _mnt,
            utilisateurId= _utilisateurid,
            createdBy = _createdby
        WHERE objectifsId = _objectifsid;
    END IF;

    IF (_Action = 'DeleteById') THEN
        UPDATE objectif
        SET statuts = 0
        WHERE objectifsId= _objectifsid;
    END IF ;


    IF (_Action = 'SelectAll') THEN
        SELECT * FROM objectif WHERE statuts = 1;
    END IF;

END$$

CREATE DEFINER=`geeksquad`@`%` PROCEDURE `ps_Utilisateur` (IN `_utilisateurid` VARCHAR(36), IN `_nom` VARCHAR(36), IN `_prenom` VARCHAR(36), IN `_notel` VARCHAR(36), IN `_createdby` VARCHAR(36), IN `_Action` VARCHAR(100))   BEGIN
    IF (_Action = 'Insert') THEN
INSERT INTO utilisateur (utlisateurId, nom, prenom, noDeTelephone, createdBy)
VALUES (_utilisateurid, _nom, _prenom , _notel, _createdby);

END IF;

IF (_Action = 'UpdateById') THEN
UPDATE utilisateur
SET nom     = _nom,
    prenom     = _prenom,
    noDeTelephone  = _notel,
    createdBy = _createdby
WHERE utlisateurId = _utilisateurid;
END IF;

IF (_Action = 'DeleteById') THEN
UPDATE utilisateur
SET statuts = 0
WHERE utlisateurId = _utilisateurid;
END IF ;


    IF (_Action = 'SelectAll') THEN
        SELECT * FROM utilisateur WHERE statuts = 1;
    END IF;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_depense`
--

CREATE TABLE `categorie_depense` (
  `categorieDepenseId` varchar(36) NOT NULL,
  `libelle` varchar(36) NOT NULL,
  `description` text NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(36) NOT NULL,
  `statuts` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie_depense`
--

INSERT INTO `categorie_depense` (`categorieDepenseId`, `libelle`, `description`, `createdOn`, `createdBy`, `statuts`) VALUES
('1', 'loisirs', 'depenses pour les loisirs', '2023-03-06 09:31:55', 'USER 1', 1),
('2', 'charges fixes', 'depenses sur les charges fixes', '2023-03-06 09:31:55', 'marie', 1);

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE `depense` (
  `depenseId` varchar(36) NOT NULL,
  `libelle` varchar(36) NOT NULL,
  `montant` int(10) NOT NULL,
  `utilisateurId` varchar(36) NOT NULL,
  `categorieDepenseId` varchar(36) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(36) NOT NULL,
  `statuts` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE `depot` (
  `depotId` varchar(36) NOT NULL,
  `montant` int(11) NOT NULL,
  `dateDepot` date NOT NULL,
  `objectifsId` varchar(36) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(36) NOT NULL,
  `statuts` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `depot`
--

INSERT INTO `depot` (`depotId`, `montant`, `dateDepot`, `objectifsId`, `createdOn`, `createdBy`, `statuts`) VALUES
('1', 12000, '2023-09-01', '2', '2023-03-06 14:01:08', 'Marie', 1),
('4', 13400, '2023-09-28', '3', '2023-03-06 14:21:46', 'Marie', 1),
('7', 3000, '2023-02-27', '5', '2023-03-06 14:01:08', 'Fatou', 1),
('8', 7000, '2023-02-12', '6', '2023-03-06 14:01:09', 'Fatou', 1);

-- --------------------------------------------------------

--
-- Structure de la table `objectif`
--

CREATE TABLE `objectif` (
  `objectifsId` varchar(36) NOT NULL,
  `libelle` varchar(150) NOT NULL,
  `montant` int(11) NOT NULL,
  `utilisateurId` varchar(36) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(36) NOT NULL,
  `statuts` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `objectif`
--

INSERT INTO `objectif` (`objectifsId`, `libelle`, `montant`, `utilisateurId`, `createdOn`, `createdBy`, `statuts`) VALUES
('1', 'Acheter un terrain', 1200000, '1', '2023-03-06 11:17:02', 'Marie', 1),
('2', 'Construire une maison', 1900000, '1', '2023-03-06 11:19:42', 'Marie', 1),
('3', 'Epargner pour mes études', 10000000, '1', '2023-03-06 11:36:13', 'Marie', 1),
('4', 'Constituer un fond durgence', 1200000, '2', '2023-03-06 11:36:13', 'Fatou', 1),
('5', 'Creer un budjet mensuel', 500000, '2', '2023-03-06 11:45:23', 'Fatou', 1),
('6', 'Remboursement des dettes', 670000, '2', '2023-03-06 11:45:23', 'Fatou', 1),
('7', 'Augmenter mon revenu par mois', 50000, '3', '2023-03-06 11:45:23', 'USER 1', 1),
('8', 'Rédure mes dépenses du mois', 3000, '3', '2023-03-06 11:45:23', 'USER 1', 1),
('9', 'Epargner pour organiser un anniversaire', 1200000, '3', '2023-03-06 11:45:23', 'USER 1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `utilisateurId` varchar(36) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `noDeTelephone` varchar(10) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(36) NOT NULL,
  `statuts` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateurId`, `nom`, `prenom`, `noDeTelephone`, `createdOn`, `createdBy`, `statuts`) VALUES
('1', 'DOUOHOU', 'Marie', '0707970194', '2023-03-03 15:25:02', 'Marie', 1),
('2', 'TRAORE', 'Fatoumata', '0788685168', '2023-03-03 15:25:11', 'Fatoumata', 1),
('3', 'DIALLO', 'KADER', '076543125', '2023-03-03 15:29:08', 'USER 1', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie_depense`
--
ALTER TABLE `categorie_depense`
  ADD PRIMARY KEY (`categorieDepenseId`);

--
-- Index pour la table `depense`
--
ALTER TABLE `depense`
  ADD PRIMARY KEY (`depenseId`),
  ADD KEY `utilisateurId` (`utilisateurId`),
  ADD KEY `code_categorie_depense` (`categorieDepenseId`);

--
-- Index pour la table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`depotId`),
  ADD KEY `ref_objectif` (`objectifsId`);

--
-- Index pour la table `objectif`
--
ALTER TABLE `objectif`
  ADD PRIMARY KEY (`objectifsId`),
  ADD KEY `utilisateurId` (`utilisateurId`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`utilisateurId`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `depense`
--
ALTER TABLE `depense`
  ADD CONSTRAINT `depense_ibfk_1` FOREIGN KEY (`categorieDepenseId`) REFERENCES `categorie_depense` (`categorieDepenseId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `depot`
--
ALTER TABLE `depot`
  ADD CONSTRAINT `depot_ibfk_1` FOREIGN KEY (`objectifsId`) REFERENCES `objectif` (`objectifsId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `objectif`
--
ALTER TABLE `objectif`
  ADD CONSTRAINT `objectif_ibfk_1` FOREIGN KEY (`utilisateurId`) REFERENCES `utilisateur` (`utilisateurId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
