-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 31 mai 2021 à 19:01
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
-- Base de données : `aeronicsolutions`
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `firstName`, `name`, `mail`, `password`, `status`, `icode`, `banish`) VALUES
(5, 'LÃ©o', 'Kaoua', 'leo.kaoua@isep.fr', '$2y$12$Zy8wY8VgpvX0r62YlKNPu.ZQZHN6WxIgzhkaORG6jvWjjK2dMcbwq', 'administrateur', 1000, 'false'),
(6, 'Tom', 'Jerry', 'tom.jerry@gmail.com', '$2y$12$uQr5nwD4Pb2yC9tidugoxubXQh5drT3PKJkZV0LVLwKYgo8LZamhm', 'administrateur', 1001, 'false'),
(7, 'Candice', 'Bocquet', 'candice.bocquet@gmail.com', '$2y$12$CmLOBjaoXdAqn0Ejhizt8.icxfoh5HZyopjnuKPm9oIgcaAeom0Vy', 'administrateur', 1002, 'false');

-- --------------------------------------------------------

--
-- Structure de la table `cartes`
--

DROP TABLE IF EXISTS `cartes`;
CREATE TABLE IF NOT EXISTS `cartes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cartes`
--

INSERT INTO `cartes` (`id`, `cardName`) VALUES
(1, 'AeronicSolutions01'),
(2, 'AeronicSolutions02'),
(3, 'AeronicSolutions03');

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
) ENGINE=MyISAM AUTO_INCREMENT=5022 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `firstName`, `name`, `birthDate`, `kind`, `company`, `mail`, `password`, `doctor`, `status`, `icode`, `banish`) VALUES
(5012, 'Gabriel', 'Blanchet', '2000-12-28', 'Homme', 'AirIsep', 'thibchan@outlook.fr', '$2y$12$SjmyNGu2GaaX4n5I038RBek1fRAZVe.MPsRW336hiQ3J2dmFFLsEa', 'Milard', 'client', 1100, 'false'),
(5013, 'Harry', 'Potter', '1998-06-17', 'Homme', 'AirIsep', 'harry.potter@eleve.poudlard.fr', '$2y$12$SY2Ig1WPeEJGUHph0HpXO.PY6lnRH8z0/A/qjzTRKkI8xGkxhwk/O', 'Milard', 'client', 1101, 'false'),
(5014, 'Camille', 'Lapeyre', '2001-07-31', 'Femme', 'AirIsep', 'camille.lapeyre@outlook.fr', '$2y$12$lrL5mTpImGEgFh0gAggQuOmDXtDT6Mt73zRrVO390C7GWKKhDiHbu', 'Milard', 'client', 1102, 'false'),
(5015, 'Mathilde', 'Vallee', '1993-07-15', 'Femme', 'AirIsep', 'mathilde.vallee@gmail.com', '$2y$12$kMkgMx4QEC8XIArCzNEnYeCSDC7k5mB7qP8e1kzyFHrmHbLIZP.pa', 'Milard', 'client', 1103, 'false'),
(5016, 'Marie', 'Chauveau', '1999-02-12', 'Femme', 'AirIsep', 'marie.chauveau@outlook.fr', '$2y$12$anFMVRrvnmKTYvL2O.P0IufBxQ7JrP6GKZJXQQQb9ef9PMx2igBZK', 'Milard', 'client', 1104, 'false'),
(5017, 'Diego', 'Leberre', '1994-03-09', 'Homme', 'AirIsep', 'diego.lb@yahoo.fr', '$2y$12$k.anFBojisiH5HdptBh5M.Umbjr7YVCPxgMY41qF1SrTUGmV5OPL2', 'Milard', 'client', 1105, 'false'),
(5018, 'Bob', 'Lennon', '1962-06-17', 'Homme', 'AirIsep', 'bob.lennon@gmail.com', '$2y$12$mCirIEDrAxLq1QLtruGct.rV8yKt.GL37GzoK7Fv4cO603O2n398q', 'Milard', 'client', 1106, 'false'),
(5019, 'Albert', 'Einstein', '1922-02-16', 'Homme', 'AirIsep', 'AlbertEinstein@decouvreur.dot', '$2y$12$COa1PyPfmnnEQwLiNTl9gORfz99MYGalMpajVSIcyhNCFI1F5rtv6', 'Milard', 'client', 1107, 'false'),
(5020, 'FranÃ§ois', 'Petit', '1988-02-25', 'Homme', 'AirIsep', 'francois.petit@airisep.fr', '$2y$12$ow985yl3NBx3PWqFQrp.u.1z6LFa59yJuGhcr1r2BbC2.LuEnGoYq', 'Chaplin', 'client', 1108, 'false'),
(5021, 'David', 'Boulanger', '1975-06-19', 'Homme', 'AirIsep', 'david.boulanger@airisep.fr', '$2y$12$8vHegwRmUD6VSCiY76Gae.FZTrU5/eKbRn5s2M8hTq63rN2fu8qee', 'Chaplin', 'client', 1109, 'false');

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
(1, 'Ou puis-je trouver le code I-C demande lors de l\'inscription ?', 'Le code I-C vous est fourni par votre entreprise lorsque celle-ci decide d\'adherer au programme Aeronic Solutions', 1),
(2, 'Je n\'arrive pas a me connecter', 'Si vous avez oublie votre mot de passe ou que vous avez des problemes de connexion, vous pouvez nous contacter a l\'adresse mail : solutionsaeronic@gmail.com.', 2),
(3, 'Que represente l\'identifiant lors de la connexion ?', 'L\'identifiant vous est donne par votre adresse e-mail.', 2),
(4, 'Puis-je changer mon mot de passe ?', 'Vous pouvez changer votre mot de passe, nom, prenom et date de naissance depuis la page gestion du profil.', 3),
(5, 'Je n\'arrive pas a modifier mon adresse e-mail', 'Vous ne pouvez pas modifier votre adresse e-mail vous-meme. Nous vous invitons a prendre contact avec un administrateur de Aeronic Solutions pour le faire.', 3),
(6, 'Je souhaite supprimer mon compte', 'Si vous n\'etes pas satisfait des prestations offertes par Aeronic Solutions, il vous est possible d\'adresser un e-mail à solutionsaeronic@gmail.com afin que votre compte et vos donnees associees soient supprimees.', 3),
(7, 'Je suis un pilote, puis je consulter les resultats de mes tests psychotechniques ?', 'Vous pouvez consulter vos tests a tout moment depuis la page Resultat test', 4),
(8, 'Est-il possible de connaitre le deroulement d\'un test Aeronic Solutions?', 'Afin que vous ne soyez pas destabilise la premiere fois que vous passe une serie de tests, nous vous avons mis a disposition un resume des tests ainsi que l\'ordre de ces derniers depuis la page information sur les tests', 4),
(9, 'Je suis un pilote, puis-je consulter les resultats de mes tests psychotechniques ?', 'Vous pouvez consulter vos tests a tout moment depuis la page Resultat test.', 4),
(10, 'Est-il possible de connaitre le deroulement d\'un test Aeronic Solutions?', 'Afin que vous ne soyez pas destabilise la premiere fois que vous passez une serie de tests, nous avons mis a votre disposition un resume des tests ainsi que l\'ordre de ces derniers depuis la page information sur les tests.', 4);

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gestionnaires`
--

INSERT INTO `gestionnaires` (`id`, `firstName`, `name`, `center`, `mail`, `password`, `status`, `icode`, `banish`) VALUES
(7, 'Charlotte ', 'Milard', 'Isep', 'charlotte.milard@isep.fr', '$2y$12$QDB64doUs0L0P7fY2ZYR5eTr/tUEUUoZsHNRhtNCEzIjRVTZWOo6O', 'gestionnaire', 1010, 'false'),
(8, 'Charlie', 'Chaplin', 'Isep', 'charlie.chaplin@outlook.fr', '$2y$12$Ctx7hXeQaiF.QZzo0DiZfO7Xjoqb9TnDy2T4N4ERjWItT6zbj1Kwa', 'gestionnaire', 1011, 'false'),
(9, 'Lana', 'Maurin', 'Isep', 'lana.maurin@gmail.com', '$2y$12$R1SlOwMudEbYr9X8.O1tK.FKYGx84/0HGOKtCpno1zRE3iMH6VRDe', 'gestionnaire', 1012, 'false'),
(10, 'Isaac', 'Jan', 'Isep', 'isaac.jan@outlook.fr', '$2y$12$2A0QHRp0waUSITMhDBoLcekT.phC6pT0aA.VbHTmbyEQ7Xn.bnmOO', 'gestionnaire', 1013, 'false'),
(11, 'Victor', 'Dupont', 'Isep', 'victor.dupont@gmail.com', '$2y$12$09XjDyIo2ebGL.0ruDG4.OG7J5PHPA4SdmbEIDR8kgzBJWUsr0Csy', 'gestionnaire', 1014, 'false');

-- --------------------------------------------------------

--
-- Structure de la table `icodes`
--

DROP TABLE IF EXISTS `icodes`;
CREATE TABLE IF NOT EXISTS `icodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `icode` (`icode`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `icodes`
--

INSERT INTO `icodes` (`id`, `icode`, `status`, `used`) VALUES
(12, 1004, 'administrateur', 0),
(11, 1003, 'administrateur', 0),
(10, 1002, 'administrateur', 1),
(9, 1001, 'administrateur', 1),
(8, 1000, 'administrateur', 1),
(13, 1010, 'gestionnaire', 1),
(14, 1011, 'gestionnaire', 1),
(15, 1012, 'gestionnaire', 1),
(16, 1013, 'gestionnaire', 1),
(17, 1014, 'gestionnaire', 1),
(18, 1015, 'gestionnaire', 0),
(19, 1016, 'gestionnaire', 0),
(20, 1100, 'client', 1),
(21, 1101, 'client', 1),
(22, 1102, 'client', 1),
(23, 1103, 'client', 1),
(24, 1104, 'client', 1),
(25, 1105, 'client', 1),
(26, 1106, 'client', 1),
(27, 1107, 'client', 1),
(28, 1108, 'client', 1),
(29, 1109, 'client', 1),
(30, 1110, 'client', 0),
(31, 1111, 'client', 0);

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
  `temperature` float NOT NULL,
  `tone` int(11) NOT NULL,
  `reflex` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `date`, `icode`, `frequency`, `temperature`, `tone`, `reflex`) VALUES
(1, '2021-01-02', 1100, 79, 37.5, 3, 2),
(2, '2021-01-04', 1100, 75, 37.8, 4, 4),
(3, '2021-01-05', 1100, 77, 37.7, 5, 5),
(4, '2021-01-06', 1100, 80, 37.5, 2, 2),
(5, '2021-01-08', 1100, 110, 37.6, 3, 4),
(6, '2021-01-09', 1100, 85, 37.7, 2, 2),
(7, '2021-01-10', 1102, 79, 37.4, 4, 4),
(8, '2021-01-13', 1102, 88, 37.9, 4, 1),
(9, '2021-01-16', 1102, 99, 38.5, 4, 0),
(10, '2021-01-16', 1106, 110, 37.5, 4, 3),
(11, '2021-01-17', 1106, 78, 37.5, 3, 2),
(12, '2021-01-18', 1106, 75, 37.8, 4, 4),
(13, '2021-01-22', 1107, 81, 37.7, 5, 5),
(14, '2021-01-22', 1107, 55, 37.5, 2, 2),
(15, '2021-01-29', 1107, 112, 37.6, 3, 4),
(16, '2021-01-31', 1100, 76, 37.7, 2, 2),
(17, '2021-02-02', 1100, 79, 37.4, 4, 4),
(18, '2021-02-06', 1100, 98, 37.9, 4, 1),
(19, '2021-02-07', 1100, 65, 38.5, 4, 0),
(20, '2021-02-15', 1109, 76, 37.5, 4, 3),
(21, '2021-02-18', 1109, 76, 37.5, 3, 2),
(22, '2021-02-20', 1109, 87, 37.8, 4, 4),
(23, '2021-02-22', 1108, 64, 37.7, 5, 5),
(24, '2021-02-26', 1108, 106, 37.5, 2, 2),
(25, '2021-02-27', 1108, 120, 37.6, 3, 4),
(26, '2021-02-28', 5017, 86, 37.7, 2, 2),
(27, '2021-02-28', 5017, 77, 37.4, 4, 4),
(28, '2021-03-02', 5017, 88, 37.9, 4, 1),
(29, '2021-03-06', 5016, 99, 38.5, 4, 0),
(30, '2021-03-15', 5016, 69, 37.5, 4, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
