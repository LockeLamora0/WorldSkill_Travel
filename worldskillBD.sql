-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 19 oct. 2024 à 09:33
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `worldskill`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Nom` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `addresse` varchar(10) NOT NULL,
  `mail` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CP` int NOT NULL,
  `Age` int NOT NULL,
  `Mot_de_passe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `idReservation` int NOT NULL,
  `urlPhotoProfils` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Nom`, `addresse`, `mail`, `prenom`, `CP`, `Age`, `Mot_de_passe`, `id`, `idReservation`, `urlPhotoProfils`) VALUES
('admin', '64', 'adminWeb@g', 'web', 64, 15, '$argon2id$v=19$m=65536,t=4,p=1$SllRSEVYQUJMV3AvSWVNbQ$4gBMKssYRoc0Hfzmv7uo9VOEFauwalYUrfssKNnvAxk', 1, 1, 'https://cdn.vectorstock.com/i/500p/96/77/blank-grey-scale-profile-picture-placeholder-vector-51589677.jpg'),
('admin', '45', 'adminWeb2@gmail.com', 'web', 100, 15, '$argon2id$v=19$m=65536,t=4,p=1$dmh2amJQS3VJVmJBV3ZIbg$tRJhchLNp6OKDS686KNsgOLYK7LowTQid21ipFzX+ps', 2, 1, 'https://cdn.vectorstock.com/i/500p/96/77/blank-grey-scale-profile-picture-placeholder-vector-51589677.jpg'),
('ez', 'ze', 'adminWeb@g', 'ze', 0, 15, '$argon2id$v=19$m=65536,t=4,p=1$SllRSEVYQUJMV3AvSWVNbQ$4gBMKssYRoc0Hfzmv7uo9VOEFauwalYUrfssKNnvAxk', 15, 0, ''),
('administra', 'dfkofdkkd', 'administrator@gmail.com', 'conquistad', 545, 15, '$argon2id$v=19$m=65536,t=4,p=1$NmJudm1XWWdOYmFrWW5wZg$q1F3EiEL/+sAG3CCPDBL7Vb2p66cLymeJpBbYOrWhn8', 16, 0, ''),
('emeric', 'Pau', 'emeric@gmail.com', 'kk', 6400, 15, '$argon2id$v=19$m=65536,t=4,p=1$MWE3Y0pKdXVMWVF4ekdxRA$nviCs8R+Z6kyo189+z6OU438iUc6+DxqpOBrsFamczQ', 17, 0, 'https://cdn.vectorstock.com/i/500p/96/77/blank-grey-scale-profile-picture-placeholder-vector-51589677.jpg'),
('zertyu', 'dfkofdkkd', 'Sa@gmail.com', 'jean', 545, 15, '$argon2id$v=19$m=65536,t=4,p=1$STR4MC9VZjMvbmF4djhDcA$J/R8+pplp+ntukQo3U6ijUzaBErON6EQkhvdZbIzSAk', 18, 0, 'https://marketplace.canva.com/EAFuJ5pCLLM/1/0/1600w/canva-black-and-gold-simple-business-man-linkedin-profile-picture-BM_NPo97JwE.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `idLogement` int NOT NULL AUTO_INCREMENT,
  `typeLogement` varchar(50) NOT NULL,
  `idVoyage` int NOT NULL,
  `nbchambre` int NOT NULL,
  `urlPhotoPrincipal` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `urlPhotoSecondaire` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idLogement`),
  KEY `idVoyage` (`idVoyage`)
) ENGINE=MyISAM AUTO_INCREMENT=445 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`idLogement`, `typeLogement`, `idVoyage`, `nbchambre`, `urlPhotoPrincipal`, `urlPhotoSecondaire`) VALUES
(1, 'cabane', 1, 5, 'https://kupernic.com/wp-content/uploads/2016/11/economiser-logements.jpg', 'https://static8.depositphotos.com/1568381/1029/i/450/depositphotos_10298071-stock-photo-wharf-with-pavilion-at-maldives.jpg'),
(2, 'studio', 2, 2, 'https://voyage-en-photos.fr/wp-content/uploads/2024/06/vue-hotel-paris-by-night-choix-logement-ville-sejour-photo-1024x685.jpg', 'https://www.bons-plans-voyage-ouest-americain.com/wordpress/wp-content/uploads/2019/09/hotel-monument-valley-4.jpg'),
(3, 'loft', 3, 6, 'https://voyage-en-photos.fr/wp-content/uploads/2024/05/bivouac-conseils-choix-logement-photos-de-voyage-sejour-1200x700.jpg', 'https://www.tendancesvoyages.com/wp-content/uploads/2023/05/Oropesa-del-Mar.jpg'),
(4, 'cabane', 0, 2, 'https://www.prestige-voyages.com/sites/www.prestige-voyages.com/files/www_prestige-voyages_com/field-body-image/voyage-sur-mesure-italie.jpg', 'https://www.connaisseursvoyage.fr/media/cache/image_slider_accueil/images/slider/monde-du-voyage.jpg'),
(5, 'cabane', 0, 2, 'https://www.prestige-voyages.com/sites/www.prestige-voyages.com/files/www_prestige-voyages_com/field-body-image/voyage-sur-mesure-italie.jpg', 'https://www.connaisseursvoyage.fr/media/cache/image_slider_accueil/images/slider/monde-du-voyage.jpg'),
(9, 'maison', 0, 7, 'https://www.laconstructionlyonnaise.fr/wp-content/uploads/2022/11/belle-maison-archi-LCL.jpg', 'https://www.maisons-balency.fr/wp-content/uploads/2021/10/202112-construction-maisons-balencyb12-950x430-c-center.jpg'),
(10, 'cabane', 7, 13, 'https://www.prestige-voyages.com/sites/www.prestige-voyages.com/files/www_prestige-voyages_com/field-body-image/voyage-sur-mesure-italie.jpg', 'https://www.connaisseursvoyage.fr/media/cache/image_slider_accueil/images/slider/monde-du-voyage.jpg'),
(11, 'cabane', 0, 10, 'https://www.prestige-voyages.com/sites/www.prestige-voyages.com/files/www_prestige-voyages_com/field-body-image/voyage-sur-mesure-italie.jpg', 'https://www.connaisseursvoyage.fr/media/cache/image_slider_accueil/images/slider/monde-du-voyage.jpg'),
(55, '[value-2]', 0, 0, '[value-5]', '[value-6]'),
(443, 'cabane', 144, 30, 'https://www.prestige-voyages.com/sites/www.prestige-voyages.com/files/www_prestige-voyages_com/field-body-image/voyage-sur-mesure-italie.jpg', 'https://www.connaisseursvoyage.fr/media/cache/image_slider_accueil/images/slider/monde-du-voyage.jpg'),
(444, 'cabane', 0, 30, 'https://www.prestige-voyages.com/sites/www.prestige-voyages.com/files/www_prestige-voyages_com/field-body-image/voyage-sur-mesure-italie.jpg', 'https://www.connaisseursvoyage.fr/media/cache/image_slider_accueil/images/slider/monde-du-voyage.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `nomReservation` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenomReservation` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mailReservation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TéléphoneReservation` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` varchar(50) NOT NULL,
  `heure` varchar(10) NOT NULL,
  `nbVisiteur` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `idClient` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idClient` (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`nomReservation`, `prenomReservation`, `mailReservation`, `TéléphoneReservation`, `date`, `heure`, `nbVisiteur`, `id`, `idClient`) VALUES
('jean ', 'micheal ', 'dfjkfds@gmail.com', ' 0754121', '2025-07-19', ' 05:38', 3, 1, 1),
('ssjean', 'micheal', 'dfjkfds@gmail.com', '0754121', '2025-07-19', '05:38', 3, 2, 2),
('charles', 'bernard', 'bernardcharles@gmail.com', '565465435', '2024-10-03', '13:46', 3, 3, 0),
('charles', 'bernard', 'bernardcharles@gmail.com', '565465435', '2024-10-03', '13:46', 3, 4, 0),
('charles', 'bernard', 'bernardcharles@gmail.com', '545545', '2024-10-23', '12:45', 3, 5, 0),
('charles', 'bernard', 'bernardcharles@gmail.com', '545545', '', '', 3, 6, 0),
('charles', 'bernard', 'bernardcharles@gmail.com', '545545', '', '', 3, 7, 0),
('charles', 'bernard', 'bernardcharles@gmail.com', '545545', '', '', 3, 8, 0),
('conte', 'jean', 'adminWeb2@gmail.com', '45454', '2024-10-12', '15:29', 3, 16, 2);

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

DROP TABLE IF EXISTS `voyage`;
CREATE TABLE IF NOT EXISTS `voyage` (
  `Nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Pays` varchar(10) NOT NULL,
  `Description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` int NOT NULL,
  `idVoyage` int NOT NULL AUTO_INCREMENT,
  `idLogement` int NOT NULL,
  `urlPreview` varchar(150) NOT NULL,
  PRIMARY KEY (`idVoyage`),
  KEY `idLogement` (`idLogement`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`Nom`, `Pays`, `Description`, `prix`, `idVoyage`, `idLogement`, `urlPreview`) VALUES
('Temples d’Angkor', 'Cambodge', 'Plus grand temple du monde dédié au dieu hindou Vishnou, datant du XIIe siècle, Angkor Vat détonne un peu dans un Cambodge majoritairement bouddhiste. Immense représentation du mont Meru, le séjour des dieux hindous, c’est l’incontestable pièce maîtresse du site. Il est composé de milliers de blocs de grès ornés de bas-reliefs si délicats et gracieux qu’ils semblent sculptés par les dieux ; ils illustrent les légendes du Ramayana, du Mahabharata et des Puranas. Ce magnifique monument est le plus', 450, 1, 0, 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Templo_de_Angkor_Wat_en_Camboya.JPG/1200px-Templo_de_Angkor_Wat_en_Camboya.JPG'),
('Grande Barrière de corail', 'Australie', 'Le récif risque de disparaître ou du moins de perdre de sa splendeur. Le réchauffement des océans est responsable du blanchiment et de la mort des coraux et rien ne laisse supposer que le phénomène puisse être enrayé.', 800, 2, 0, 'https://odysseedelaterre.fr/wp-content/uploads/2021/09/grande-barriere-corail-australie.jpg'),
('Machu Picchu', 'Pérou', ' La cité, datant du XVe siècle, est entourée d’un spectaculaire paysage andin et suspendue au-dessus du vide, mais son principal attrait réside dans le mystère qui l’entoure. C’est une véritable énigme.', 1000, 3, 0, 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Before_Machu_Picchu.jpg/800px-Before_Machu_Picchu.jpg'),
('Paris', 'france', 'Array', 21, 12, 0, 'https://routeautourdumonde.com/assets/uploads/2021/03/exoticvoyage_agence_de_voyage_specialiste_sejour_auour_du_monde.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
