-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 25 mai 2021 à 16:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

DROP TABLE IF EXISTS `administrateurs`;
CREATE TABLE IF NOT EXISTS `administrateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'administrateur',
  `icode` int(11) NOT NULL,
  `banish` varchar(5) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `icode` (`icode`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `firstName`, `name`, `mail`, `password`, `status`, `icode`, `banish`) VALUES
(3, 'admin', 'xxx', 'admin2@gmail.com', '$2y$12$W14m2iBErJlZRANIK8mh5.qnQ2q9xro8LFnvOWTWOt1T80iBKWecG', 'administrateur', 111, 'false');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `kind` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'client',
  `icode` int(11) NOT NULL,
  `banish` varchar(5) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `icode` (`icode`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=5002 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `firstName`, `name`, `birthDate`, `kind`, `company`, `mail`, `password`, `doctor`, `status`, `icode`, `banish`) VALUES
(7, 'Charlotte', 'Milard', '1999-12-14', 'Femme', 'air', 'charlotte@gymilard.fr', 'test', '787', 'client', 1231, '0'),
(253, 'TOMY', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom@hootlck.fr', '1534', 'andre', 'pilote', 165548, 'false'),
(257, 'thÃ©ophile', 'wallez', '2000-12-08', 'Homme', 'AireFRace', 'tom55@hootlck.fr', '1534', 'andre', 'pilote', 15548, 'false'),
(2656, 'TOMY', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tomFF55@hootlck.fr', '1534', 'andre', 'pilote', 1555548, 'false'),
(500, 'valentin', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom1@hootlck.fr', '1534', 'smith', 'pilote', 5578, 'false'),
(600, 'TOMY', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom2@hootlck.fr', '1534', 'andre', 'pilote', 86765, 'false'),
(700, 'val', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom3@hootlck.fr', '1534', 'smith', 'pilote', 25454, 'false'),
(800, 'TOMY', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom4@hootlck.fr', '1534', 'andre', 'pilote', 89965, 'false'),
(900, 'val', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom5@hootlck.fr', '1534', 'smith', 'pilote', 548744, 'false'),
(1000, 'TOMY', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom6@hootlck.fr', '1534', 'andre', 'pilote', 532215, 'false'),
(1100, 'val', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom7@hootlck.fr', '1534', 'smith', 'pilote', 54664, 'false'),
(2000, 'val', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom9@hootlck.fr', '1534', 'smith', 'pilote', 68775, 'false'),
(5001, 'ggg', 'milo', '2021-05-12', 'dqzdzq', 'dqdqz', 'lalala@gmail.com', 'fesfs', 'fsefs', 'client', 3575, 'false'),
(4000, 'TOMY', 'VENTRI', '2000-12-08', 'Homme', 'AireFRace', 'tom23@hootlck.fr', '1534', 'andre', 'pilote', 45378, 'false');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `idFaq` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `reponse` varchar(255) NOT NULL,
  `partie` int(11) NOT NULL,
  PRIMARY KEY (`idFaq`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`idFaq`, `question`, `reponse`, `partie`) VALUES
(1, 'Où puis-je trouver le code I-C demandé lors de l\'inscription ?', 'Le code I-C vous est fourni par votre entreprise lorsque celle-ci décide d\'adhérer au programme Aeronic Solutions.', 1),
(2, 'Je n\'arrive pas à me connecter', 'Si vous avez oublié votre mot de passe ou que vous avez des problèmes de connexion, vous pouvez nous contacter à l\'adresse mail : solutionsaeronic@gmail.com.', 2),
(3, 'Que représente l\'identifiant lors de la connexion ?', 'L\'identifiant vous est donné par votre adresse e-mail.', 2),
(4, 'Puis-je changer mon mot de passe ?', 'Vous pouvez changer votre mot de passe, nom, prénom et date de naissance depuis la page gestion du profil.', 3),
(5, 'Je n\'arrive pas à modifier mon adresse e-mail', 'Vous ne pouvez pas modifier votre adresse e-mail vous-même. Nous vous invitons à prendre contact avec un administrateur de Aeronic Solutions pour le faire.', 3),
(6, 'Je souhaite supprimer mon compte', 'Si vous n\'êtes pas satisfait des prestations offertes par Aeronic Solutions, il vous est possible d\'adresser un e-mail à solutionsaeronic@gmail.com afin que votre compte et vos données associées soient supprimées.', 3),
(9, 'Je suis un pilote, puis-je consulter les résultats de mes tests psychotechniques ?', 'Vous pouvez consulter vos tests à tout moment depuis la page Résultat test.', 4),
(10, 'Est-il possible de connaître le déroulement d\'un test Aeronic Solutions?', 'Afin que vous ne soyez pas déstabilisé la première fois que vous passez une série de tests, nous avons mis à votre disposition un résumé des tests ainsi que l\'ordre de ces derniers depuis la page information sur les tests.', 4);

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaires`
--

DROP TABLE IF EXISTS `gestionnaires`;
CREATE TABLE IF NOT EXISTS `gestionnaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `center` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'gestionnaire',
  `icode` int(11) NOT NULL,
  `banish` varchar(5) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `icode` (`icode`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gestionnaires`
--

INSERT INTO `gestionnaires` (`id`, `firstName`, `name`, `center`, `mail`, `password`, `status`, `icode`, `banish`) VALUES
(1, 'gabriel', 'curie', 'pariss', 'marie.curie@gmail.com', 'test', 'gestionnaire', 787, 'false'),
(2, 'leo', 'kaoua', 'geaorge pompidou', 'leokaoua@yahoo.fr', '$2y$12$VMwvZKKT/rIKNPLtx78RROnA.xSWiu.GSL4N/6NudOT.NquUmFaBG', 'gestionnaire', 0, 'false');

-- --------------------------------------------------------

--
-- Structure de la table `icodes`
--

DROP TABLE IF EXISTS `icodes`;
CREATE TABLE IF NOT EXISTS `icodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `icode` (`icode`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `icodes`
--

INSERT INTO `icodes` (`id`, `icode`, `status`) VALUES
(1, 123, 'client'),
(2, 787, 'gestionnaire'),
(3, 1234, 'administrateur'),
(4, 11, 'client'),
(5, 111, 'administrateur'),
(6, 0, 'gestionnaire');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `icode` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `tone` int(11) NOT NULL,
  `reflex` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `date`, `icode`, `frequency`, `temperature`, `tone`, `reflex`) VALUES
(1, '2021-05-11', 12312, 43, 65, 3, 4),
(2, '2021-05-21', 1231, 43, 65, 3, 4),
(3, '2021-05-22', 1231, 43, 65, 3, 4),
(4, '2021-05-23', 12631, 43, 65, 3, 4),
(5, '2021-05-24', 12731, 43, 65, 3, 4),
(6, '2021-05-25', 18231, 43, 65, 3, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
